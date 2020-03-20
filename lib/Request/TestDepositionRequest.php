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

namespace YandexCheckoutPayout\Request;


use YandexCheckoutPayout\Request\Builders\TestDepositionRequestBuilder;

/**
 * Класс для создания запроса на проверку возможности выплаты
 *
 * @example
 * <code>
 *  <?php
 *      //Выплата на кошелек
 *      $depositionRequest = new TestDepositionRequest();
 *      $depositionRequest->setDstAccount('41001614575714')
 *                        ->setAmount(100)
 *                        ->setCurrency(CurrencyCode::RUB)
 *                        ->setContract('test');
 *      $client->createDeposition($depositionRequest);
 *
 *      //Выплата на карту
 *      $recipient = new BankCardRecipient();
 *      $recipient->setPdrLastName('Иванов')
 *                ->setPdrFirstName('Иван')
 *                ->setPdrMiddleName('Иванович')
 *                ->setDocNumber('1234567890')
 *                ->setPofOfferAccepted(true)
 *                ->setPdrDocIssueDate('01.02.2018')
 *                ->setSmsPhoneNumber('79999999999')
 *                ->setSkrDestinationCardSynonym('R8zigwjuuzlxmfOfJ8SPDzLU.SC.000.202002');
 *
 *      $depositionRequest = new TestDepositionRequest();
 *      $depositionRequest->setDstAccount(DstAccount::BANK_CARD)
 *                        ->setAmount(100)
 *                        ->setCurrency(CurrencyCode::RUB)
 *                        ->setContract('test')
 *                        ->setPaymentParams($recipient);
 *      $client->createDeposition($depositionRequest);
 * </code>
 *
 * @package YandexCheckoutPayout\Request
 */
class TestDepositionRequest extends AbstractDepositionRequest
{
    /**
     * @var string
     */
    protected $requestName = 'testDeposition';

    /**
     * @param null|string|int $clientOrderId
     * @return TestDepositionRequestBuilder
     */
    public static function getBuilder($clientOrderId = null)
    {
        return new TestDepositionRequestBuilder($clientOrderId);
    }
}