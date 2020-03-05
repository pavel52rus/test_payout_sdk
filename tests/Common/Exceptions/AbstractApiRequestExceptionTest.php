<?php

namespace Tests\YandexCheckoutPayout\Common\Exceptions;

abstract class AbstractApiRequestExceptionTest extends ApiExceptionTest
{
    /**
     * @dataProvider descriptionDataProvider
     * @param string $body
     */
    public function testDescription($body)
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['description'])) {
            self::assertEquals('', $instance->getMessage());
        } else {
            self::assertEquals($tmp['description'] . '.', $instance->getMessage());
        }
    }

    public function descriptionDataProvider()
    {
        return [
            ['{}'],
            ['{"description":"test"}'],
            ['{"description":"У попа была собака"}'],
        ];
    }

    /**
     * @dataProvider codeDataProvider
     * @param string $body
     */
    public function testCode($body)
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['code'])) {
            self::assertEquals('', $instance->getMessage());
        } else {
            self::assertEquals('Error code: ' . $tmp['code'] . '.', $instance->getMessage());
        }
    }

    public function codeDataProvider()
    {
        return [
            ['{}'],
            ['{"code":"123"}'],
            ['{"code":"server_error"}'],
        ];
    }

    /**
     * @dataProvider parameterDataProvider
     * @param string $body
     */
    public function testParameter($body)
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['parameter'])) {
            self::assertEquals('', $instance->getMessage());
        } else {
            self::assertEquals('Parameter name: ' . $tmp['parameter'] . '.', $instance->getMessage());
        }
    }

    public function parameterDataProvider()
    {
        return [
            ['{}'],
            ['{"parameter":"parameter_name"}'],
            ['{"parameter":null}'],
        ];
    }

    /**
     * @dataProvider retryAfterDataProvider
     * @param string $body
     */
    public function testRetryAfter($body)
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['retry_after'])) {
            self::assertNull($instance->retryAfter);
        } else {
            self::assertEquals($tmp['retry_after'], $instance->retryAfter);
        }
    }

    public function retryAfterDataProvider()
    {
        return [
            ['{}'],
            ['{"retry_after":-20}'],
            ['{"retry_after":123}'],
        ];
    }

    /**
     * @dataProvider typeDataProvider
     * @param string $body
     */
    public function testType($body)
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        $tmp = json_decode($body, true);
        if (empty($tmp['type'])) {
            self::assertNull($instance->type);
        } else {
            self::assertEquals($tmp['type'], $instance->type);
        }
    }

    public function typeDataProvider()
    {
        return [
            ['{}'],
            ['{"type":"server_error"}'],
            ['{"type":"error"}'],
        ];
    }

    /**
     * @dataProvider messageDataProvider
     * @param $body
     */
    public function testMessage($body)
    {
        $instance = $this->getTestInstance('', 0, [], $body);

        $tmp = json_decode($body, true);
        $message = '';
        if (!empty($tmp['description'])) {
            $message = $tmp['description'] . '. ';
        }
        if (!empty($tmp['code'])) {
            $message .= 'Error code: ' . $tmp['code'] . '. ';
        }
        if (!empty($tmp['parameter'])) {
            $message .= 'Parameter name: ' . $tmp['parameter'] . '. ';
        }
        self::assertEquals(trim($message), $instance->getMessage());

        if (empty($tmp['retry_after'])) {
            self::assertNull($instance->retryAfter);
        } else {
            self::assertEquals($tmp['retry_after'], $instance->retryAfter);
        }
        if (empty($tmp['type'])) {
            self::assertNull($instance->type);
        } else {
            self::assertEquals($tmp['type'], $instance->type);
        }
    }

    public function messageDataProvider()
    {
        return [
            ['{}'],
            ['{"code":"server_error","description":"Internal server error"}'],
            ['{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id"}'],
            ['{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id","type":"test"}'],
            ['{"code":"server_error","description":"Invalid parameter value","parameter":"shop_id","retry_after":333}'],
        ];
    }

    abstract public function expectedHttpCode();

    public function testExceptionCode()
    {
        $instance = $this->getTestInstance();
        self::assertEquals($this->expectedHttpCode(), $instance->getCode());
    }
}
