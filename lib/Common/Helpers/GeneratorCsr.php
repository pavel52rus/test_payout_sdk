<?php

/**
 * The MIT License
 *
 * Copyright (c) 2017 NBCO Yandex.Money LLC
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

namespace YandexCheckoutPayout\Common\Helpers;


use YandexCheckoutPayout\Common\Exceptions\EmptyPropertyValueException;
use YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YandexCheckoutPayout\Common\Exceptions\OpenSSLException;
use YandexCheckoutPayout\Model\Organization;

class GeneratorCsr
{
    /**
     * @var string
     */
    protected $privateKeyPassword;

    /**
     * @var Organization
     */
    protected $organizationInfo;

    /**
     * @var string
     */
    protected $output;

    /**
     * @var string
     */
    protected $privateKey;

    /**
     * @var string
     */
    protected $csrRequest;

    /**
     * @var string
     */
    protected $signature;

    public function __construct($organizationInfo, $output = __DIR__, $privateKeyPassword = '')
    {
        if (!TypeCast::canCastToString($privateKeyPassword)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid privateKeyPassword type',
                0,
                'privateKeyPassword',
                $privateKeyPassword
            );
        }

        if (!TypeCast::canCastToString($output)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid output type',
                0,
                'output',
                $output
            );
        }


        if (is_array($organizationInfo)) {
            $organizationInfo = new Organization($organizationInfo);
        }

        $this->validateOrganization($organizationInfo);

        $this->privateKeyPassword = (string)$privateKeyPassword;
        $this->organizationInfo   = $organizationInfo;
        $this->output             = (string)$output;
    }

    /**
     * @param Organization $organizationInfo
     * @throws EmptyPropertyValueException
     * @return bool
     */
    public function validateOrganization($organizationInfo)
    {
        if (!$organizationInfo->getCountryName()) {
            $missingProperty = 'countryName';
        } elseif (!$organizationInfo->getStateOrProvinceName()) {
            $missingProperty = 'stateORProvinceName';
        } elseif (!$organizationInfo->getOrganizationName()) {
            $missingProperty = 'organizationName';
        } elseif (!$organizationInfo->getCommonName()) {
            $missingProperty = 'commonName';
        } elseif (!$organizationInfo->getEmailAddress()) {
            $missingProperty = 'emailAddress';
        }

        if (!empty($missingProperty)) {
            throw new EmptyPropertyValueException('Missing required value ' . $missingProperty, 0, $missingProperty);
        }

        return true;
    }

    /**
     * @return string|string[]
     * @throws OpenSSLException
     */
    public function generate()
    {
        $config = [
            'encrypt_key'      => true,
            "digest_alg"       => 'SHA1',
            "private_key_bits" => 2048,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        ];

        $this->privateKey = openssl_pkey_new($config);

        if ($this->privateKey === false) {
            throw new OpenSSLException(openssl_error_string());
        }

        openssl_pkey_export($this->privateKey, $privateKey, $this->privateKeyPassword);
        $this->saveFile('privateKey.pem', $privateKey);

        $dn = $this->organizationInfo->toArray();

        $config = [
            'encrypt_key' => true,
            "digest_alg"  => 'SHA1',
        ];

        $this->csrRequest = openssl_csr_new($dn, $this->privateKey, $config);

        openssl_csr_export($this->csrRequest, $requestOut);
        $this->saveFile('request.csr', $requestOut);

        openssl_csr_export($this->csrRequest, $requestOut, false);

        $requestOut = str_replace("\t", "", $requestOut);
        preg_match('"Signature Algorithm\: (.*)-----BEGIN"ims', $requestOut, $sign);
        if ($sign) {
            $sign = $sign[1];
            $a    = explode("\n", $sign);
            unset($a[0]);
            $this->signature = str_replace("         ", "", trim(join("\n", $a)));
        }

        $this->saveFile('signature.txt', $this->signature);

        return $this->signature;
    }

    protected function saveFile($fileName, $content)
    {
        file_put_contents($this->output . '/' . $fileName, $content);
    }
}