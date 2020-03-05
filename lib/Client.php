<?php

/**
 * The MIT License
 *
 * Copyright (c) 2020 NBCO Yandex.Money LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace YandexCheckoutPayout;

use YandexCheckoutPayout\Client\CurlClient;
use YandexCheckoutPayout\Common\Exceptions\AuthorizeException;
use YandexCheckoutPayout\Common\Exceptions\OpenSSLException;
use YandexCheckoutPayout\Common\Helpers\GeneratorCsr;
use YandexCheckoutPayout\Common\HttpVerb;
use YandexCheckoutPayout\Common\ResponseObject;
use YandexCheckoutPayout\Model\FormatType;
use YandexCheckoutPayout\Request\AbstractDepositionRequest;
use YandexCheckoutPayout\Request\AbstractRequest;
use YandexCheckoutPayout\Request\BalanceRequest;
use YandexCheckoutPayout\Request\Keychain;
use YandexCheckoutPayout\Request\MakeDepositionRequest;
use YandexCheckoutPayout\Request\Serializers\SynonymCardRequestSerializer;
use YandexCheckoutPayout\Request\SynonymCardRequest;
use YandexCheckoutPayout\Request\TestDepositionRequest;

class Client extends CurlClient
{
    const SDK_VERSION = '0.0.1';

    const PAYOUT_REQUEST_ENDPOINT  = "https://calypso.yamoney.ru:9094/";
    const SYNONYM_REQUEST_ENDPOINT = "https://paymentcard.yamoney.ru/";

    const DEPOSITION_REQUEST   = "webservice/deposition/api/%s";
    const BALANCE_REQUEST      = "webservice/deposition/api/balance";
    const SYNONYM_CARD_REQUEST = "gates/card/storeCard";

    /**
     * Client constructor.
     * @param string $agentId
     * @param Keychain $keychain
     * @param null $curlConfiguration
     * @throws Common\Exceptions\ExtensionNotFoundException
     */
    public function __construct($agentId = '', Keychain $keychain = null, $curlConfiguration = null)
    {
        $this->setAgentId($agentId);
        $this->keychain = $keychain;
        parent::__construct($curlConfiguration);
    }

    /**
     * @param AbstractDepositionRequest|array $request
     * @param null $clientOrderId
     * @return ResponseObject
     * @throws Common\Exceptions\ApiConnectionException
     * @throws Common\Exceptions\ApiException
     * @throws Common\Exceptions\ExtensionNotFoundException
     * @throws Common\Exceptions\OpenSSLException
     */
    public function createDeposition($request, $clientOrderId = null)
    {
        if (is_array($request)) {
            if (isset($request['name']) && $request['name'] === 'makeDeposition') {
                $request = MakeDepositionRequest::getBuilder($clientOrderId)->build($request);
            }
            $request = TestDepositionRequest::getBuilder($clientOrderId)->build($request);
        }

        $requestEndpoint = str_replace('Request', '', $request->getRequestName());
        $request = $this->prepareRequest($request);

        $this->setRequestUrl(self::PAYOUT_REQUEST_ENDPOINT);
        return $this->execute(sprintf(self::DEPOSITION_REQUEST, $requestEndpoint), HttpVerb::POST, '', $request);
    }

    /**
     * @return mixed|ResponseObject
     * @throws Common\Exceptions\ApiConnectionException
     * @throws Common\Exceptions\ApiException
     * @throws Common\Exceptions\ExtensionNotFoundException
     * @throws Common\Exceptions\OpenSSLException
     */
    public function getBalance()
    {
        $request = new BalanceRequest();
        $request = $this->prepareRequest($request);

        $this->setRequestUrl(self::PAYOUT_REQUEST_ENDPOINT);
        return $this->execute(self::BALANCE_REQUEST, HttpVerb::POST, '', $request);
    }

    /**
     * Создает приватный ключ и запрос на сертификат для Яндекс.Денег.
     * Возвращает подпись
     * @param $organizationInfo
     * @param $outputDir
     * @param string $privateKeyPassword
     * @return string|string[]
     * @throws Common\Exceptions\OpenSSLException
     */
    public function createCsr($organizationInfo, $outputDir = __DIR__, $privateKeyPassword = '')
    {
        $generator = new GeneratorCsr($organizationInfo, $outputDir, $privateKeyPassword);
        return $generator->generate();
    }

    /**
     * @param SynonymCardRequest|array $request
     * @return mixed|ResponseObject
     * @throws Common\Exceptions\ApiConnectionException
     * @throws Common\Exceptions\ApiException
     * @throws Common\Exceptions\ExtensionNotFoundException
     * @throws Common\Exceptions\OpenSSLException
     */
    public function getSynonymCard($request)
    {
        if (is_array($request)) {
            $request = SynonymCardRequest::getBuilder()->build($request);
        }

        $serializer = new SynonymCardRequestSerializer();
        $requestBody = $serializer->serialize($request);

        $this->setRequestUrl(self::SYNONYM_REQUEST_ENDPOINT);
        return $this->execute(self::SYNONYM_CARD_REQUEST, HttpVerb::POST, $requestBody, '', ['Content-Type: application/x-www-form-urlencoded']);
    }

    /**
     * @param AbstractRequest $request
     * @return bool|false|string
     * @throws AuthorizeException
     * @throws OpenSSLException
     * @throws Common\Exceptions\ExtensionNotFoundException
     */
    protected function prepareRequest($request)
    {
        if (empty($this->getAgentId())) {
            throw new AuthorizeException('Missing required property agentId');
        } elseif (empty($this->getKeychain())) {
            throw new AuthorizeException('Missing required property keychain');
        }

        $this->initCurl();

        $this->setCurlOption(CURLOPT_SSLCERT, $this->getKeychain()->getPublicCert());

        $this->setCurlOption(CURLOPT_SSLKEY, $this->getKeychain()->getPrivateKey());

        $this->setCurlOption(CURLOPT_SSLCERTPASSWD, $this->getKeychain()->getKeyPassword());

        if ($request->getFormatType() === FormatType::XML) {
            $result = $this->prepareXml($request);
        } else {
            $result = $this->prepareJson($request);
        }

        return $result;
    }
}