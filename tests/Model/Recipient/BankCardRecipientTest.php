<?php


namespace Tests\YandexCheckoutPayout\Model\Recipient;


use PHPUnit\Framework\TestCase;
use YandexCheckoutPayout\Common\Helpers\Random;
use YandexCheckoutPayout\Model\Recipient\BankCardRecipient;

class BankCardRecipientTest extends TestCase
{
    /**
     * @dataProvider validStringValues
     * @param $city
     */
    public function testSetPdrCity($city)
    {
        $instance = new BankCardRecipient();
        $instance->setPdrCity($city);
        $this->assertEquals((string)$city, $instance->getPdrCity());
    }

    /**
     * @dataProvider validStringValues
     * @param $code
     */
    public function testSetPdrPostcode($code)
    {
        $instance = new BankCardRecipient();
        $instance->setPdrPostcode($code);
        $this->assertEquals((string)$code, $instance->getPdrPostcode());
    }

    /**
     * @dataProvider validStringValues
     * @param $synonym
     */
    public function testSetSkrDestinationCardSynonym($synonym)
    {
        $instance = new BankCardRecipient();
        $instance->setSkrDestinationCardSynonym($synonym);
        $this->assertEquals((string)$synonym, $instance->getSkrDestinationCardSynonym());
    }

    /**
     * @dataProvider validStringValues
     * @param $cpsYmAccount
     */
    public function testSetCpsYmAccount($cpsYmAccount)
    {
        $instance = new BankCardRecipient();
        $instance->setCpsYmAccount($cpsYmAccount);
        $this->assertEquals((string)$cpsYmAccount, $instance->getCpsYmAccount());
    }

    public function testHasCpsYmAccount()
    {
        $instance = new BankCardRecipient();
        $instance->setCpsYmAccount('214');
        $this->assertTrue($instance->hasCpsYmAccount());

        $instance = new BankCardRecipient();
        $this->assertFalse($instance->hasCpsYmAccount());
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validStringValues()
    {
        return [
            [Random::str(10, 50)],
            [Random::int(10, 1000)],
        ];
    }
}