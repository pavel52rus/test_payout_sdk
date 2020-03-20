<?php

namespace Tests\YandexCheckoutPayout\Common\Exceptions;

use PHPUnit\Framework\TestCase;
use YandexCheckoutPayout\Common\Exceptions\InvalidPropertyException;
use YandexCheckoutPayout\Common\Helpers\StringObject;

class InvalidPropertyExceptionTest extends TestCase
{
    /**
     * @param string $message
     * @param string $property
     * @return InvalidPropertyException
     */
    protected function getTestInstance($message, $property)
    {
        return new InvalidPropertyException($message, 0, $property);
    }

    /**
     * @dataProvider validPropertyDataProvider
     * @param $property
     */
    public function testGetProperty($property)
    {
        $instance = $this->getTestInstance('', $property);
        self::assertEquals((string)$property, $instance->getProperty());
    }

    public function validPropertyDataProvider()
    {
        return [
            [''],
            ['property'],
            [new StringObject('124gfdgd')],
        ];
    }
}
