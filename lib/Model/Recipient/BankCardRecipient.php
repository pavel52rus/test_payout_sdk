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

namespace YandexCheckoutPayout\Model\Recipient;


use YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YandexCheckoutPayout\Common\Helpers\TypeCast;

class BankCardRecipient extends AbstractRecipient
{
    protected $pdrCity;
    protected $pdrAddress;
    protected $pdrPostcode;
    protected $skrDestinationCardSynonym;
    protected $cpsYmAccount;

    public function setPdrCity($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_city type', 0, 'pdr_city', $value);
        }

        $this->pdrCity = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrCity()
    {
        return $this->pdrCity;
    }

    public function setPdrPostcode($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_postcode type', 0, 'pdr_postcode', $value);
        }

        $this->pdrPostcode = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrPostcode()
    {
        return $this->pdrPostcode;
    }

    public function setSkrDestinationCardSynonym($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid skr_destinationCardSynonim type', 0, 'skr_destinationCardSynonim', $value);
        }

        $this->skrDestinationCardSynonym = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSkrDestinationCardSynonym()
    {
        return $this->skrDestinationCardSynonym;
    }

    public function setCpsYmAccount($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid cps_ymAccount type', 0, 'cps_ymAccount', $value);
        }

        $this->cpsYmAccount = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpsYmAccount()
    {
        return $this->cpsYmAccount;
    }

    public function hasCpsYmAccount()
    {
        return !empty($this->getCpsYmAccount());
    }

    public function toArray()
    {
        $baseRecipient = [];
        $cardRecipient = [
            'skr_destinationCardSynonim' => $this->getSkrDestinationCardSynonym(),
            'pdr_city' => $this->getPdrCity(),
            'pdr_postcode' => $this->getPdrPostcode(),
            'pdr_docIssueDate' => $this->getPdrDocIssueDate(),
        ];

        if ($this->hasCpsYmAccount()) {
            $cardRecipient['cps_ymAccount'] = $this->getCpsYmAccount();
            $cardRecipient['smsPhoneNumber'] = $this->getSmsPhoneNumber();
            $cardRecipient['pof_offerAccepted'] = $this->getPofOfferAccepted();
        } else {
            $baseRecipient = parent::toArray();
        }

        return array_merge($cardRecipient, $baseRecipient);
    }
}