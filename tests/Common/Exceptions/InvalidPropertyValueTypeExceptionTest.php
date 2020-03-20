<?php

namespace Tests\YandexCheckoutPayout\Common\Exceptions;

use DateTime;
use stdClass;
use YandexCheckoutPayout\Common\Exceptions\InvalidPropertyException;
use YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueTypeException;

class InvalidPropertyValueTypeExceptionTest extends InvalidPropertyExceptionTest
{
    /**
     * @param string $message
     * @param string $property
     * @param null $value
     * @return InvalidPropertyValueTypeException
     */
    protected function getTestInstance($message, $property, $value = null)
    {
        return new InvalidPropertyValueTypeException($message, 0, $property, $value);
    }

    /**
     * @dataProvider validTypeDataProvider
     * @param mixed $value
     * @param string $type
     */
    public function testGetType($value, $type)
    {
        $instance = $this->getTestInstance('', '', $value);
        self::assertEquals($type, $instance->getType());
    }

    public function validTypeDataProvider()
    {
        return [
            [null, 'null'],
            ['', 'string'],
            ['value', 'string'],
            [['test'], 'array'],
            [new stdClass(), 'stdClass'],
            [new DateTime(), 'DateTime'],
            [new InvalidPropertyException(), 'YandexCheckoutPayout\\Common\\Exceptions\\InvalidPropertyException'],
            [fopen(__FILE__, 'r'), 'resource'],
            [true, 'boolean'],
            [false, 'boolean'],
            [0, 'integer'],
            [0.01, 'double'],
        ];
    }
}
