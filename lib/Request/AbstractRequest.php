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

use YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YandexCheckoutPayout\Common\Helpers\TypeCast;
use YandexCheckoutPayout\Model\FormatType;
use YandexCheckoutPayout\Model\RequestDateTime;

abstract class AbstractRequest
{
    /**
     * @var string
     */
    protected $requestName;

    /**
     * @var AbstractRequest Инстанс собираемого запроса
     */
    protected $currentObject;

    /**
     * @var string Последняя ошибка валидации текущего запроса
     */
    private $_validationError;

    /**
     * @var FormatType
     */
    protected $formatType = FormatType::XML;

    /**
     * @var string
     */
    protected $clientOrderId;

    /**
     * @var \DateTime
     */
    protected $requestDT;

    public function __construct($clientOrderId = null)
    {
        $this->clientOrderId = $clientOrderId ? $clientOrderId : $this->getRandomId();
        $this->requestDT     = RequestDateTime::getDateTime();
    }

    /**
     * Валидирует текущий запрос, проверяет все ли нужные свойства установлены
     * @return bool True если запрос валиден, false если нет
     */
    abstract public function validate();

    abstract public function getSerializer();

    /**
     * Очищает статус валидации текущего запроса
     */
    public function clearValidationError()
    {
        $this->_validationError = null;
    }

    /**
     * Устанавливает ошибку валидации
     * @param string $value Ошибка, произошедшая при валидации объекта
     */
    protected function setValidationError($value)
    {
        $this->_validationError = $value;
    }

    /**
     * Возвращает последнюю ошибку валидации
     * @return string Последняя произошедшая ошибка валидации
     */
    public function getLastValidationError()
    {
        return $this->_validationError;
    }

    public function setRequestName($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid requestName type', 0, 'requestName', $value);
        }

        $this->requestName = $value;
    }

    /**
     * @return string
     */
    public function getRequestName()
    {
        return $this->requestName . 'Request';
    }

    /**
     * Устанавливает время запроса
     * @param string $requestDT
     */
    public function setRequestDT($requestDT)
    {
        $this->requestDT = $requestDT;
    }

    /**
     * Возвращает установленое время запроса
     * @return \DateTime|string
     */
    public function getRequestDT()
    {
        return $this->requestDT;
    }

    /**
     * @param string $clientOrderId
     */
    public function setClientOrderId($clientOrderId)
    {
        $this->clientOrderId = $clientOrderId;
    }

    /**
     * @return string
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * Устанавливает формат запроса xml|json
     * @param FormatType $type
     */
    public function setFormatType(FormatType $type)
    {
        $this->formatType = $type;
    }

    /**
     * Возвращает формат запроса xml|json
     * @return FormatType
     */
    public function getFormatType()
    {
        return $this->formatType;
    }

    /**
     * Рандомное значение (используется для clientOrderId)
     * @return string
     */
    private function getRandomId()
    {
        return time() . mt_rand(0, 100);
    }
}