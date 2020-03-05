<?php


namespace Tests\YandexCheckoutPayout\Request\Serializers;


use PHPUnit\Framework\TestCase;
use YandexCheckoutPayout\Request\BalanceRequest;

class BalanceRequestSerializerTest extends TestCase
{
    public function testSerialize()
    {
        $serializer = new \YandexCheckoutPayout\Request\Serializers\BalanceRequestSerializer();
        $instance = new BalanceRequest();
        $instance->setClientOrderId('test32');
        $expected = [
            'clientOrderId' => 'test32',
            'requestDT'     => $instance->getRequestDT(),
        ];

        $serializedData = $serializer->serialize($instance);

        $this->assertEquals($expected, $serializedData);
    }
}