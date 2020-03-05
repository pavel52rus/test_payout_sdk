<?php


namespace Tests\YandexCheckoutPayout\Common\Helpers;


use PHPUnit\Framework\TestCase;

class OpenSSLTest extends TestCase
{
    /**
     * @dataProvider validDataEncrypt
     * @param $data
     * @return bool
     */
    public function testEncryptPCKS7($data)
    {
        return true;
    }

    /**
     * @dataProvider validDataEncrypt
     * @param $data
     * @return bool
     */
    public function testDecryptPKCS7($data)
    {
        return true;
    }

    public function validDataEncrypt()
    {
        return [
            ['1243', '5355'],
            ['142', '43535'],
        ];
    }
}