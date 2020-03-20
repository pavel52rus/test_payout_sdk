## Table of contents

- [\YandexCheckoutPayout\Client](#class-yandexcheckoutpayoutclient)
- [\YandexCheckoutPayout\Common\ResponseObject](#class-yandexcheckoutpayoutcommonresponseobject)
- [\YandexCheckoutPayout\Common\ResponseXmlObject](#class-yandexcheckoutpayoutcommonresponsexmlobject)
- [\YandexCheckoutPayout\Common\ResponseSynonymCard](#class-yandexcheckoutpayoutcommonresponsesynonymcard)
- [\YandexCheckoutPayout\Common\Helpers\ErrorConverter (abstract)](#class-yandexcheckoutpayoutcommonhelperserrorconverter-abstract)
- [\YandexCheckoutPayout\Common\Helpers\GeneratorCsr](#class-yandexcheckoutpayoutcommonhelpersgeneratorcsr)
- [\YandexCheckoutPayout\Common\Helpers\OpenSSL](#class-yandexcheckoutpayoutcommonhelpersopenssl)
- [\YandexCheckoutPayout\Model\CurrencyCode](#class-yandexcheckoutpayoutmodelcurrencycode)
- [\YandexCheckoutPayout\Model\DstAccount](#class-yandexcheckoutpayoutmodeldstaccount)
- [\YandexCheckoutPayout\Model\FormatType](#class-yandexcheckoutpayoutmodelformattype)
- [\YandexCheckoutPayout\Model\IssueDate](#class-yandexcheckoutpayoutmodelissuedate)
- [\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)
- [\YandexCheckoutPayout\Model\RequestDateTime](#class-yandexcheckoutpayoutmodelrequestdatetime)
- [\YandexCheckoutPayout\Model\Recipient\BankAccountRecipient](#class-yandexcheckoutpayoutmodelrecipientbankaccountrecipient)
- [\YandexCheckoutPayout\Model\Recipient\BankCardRecipient](#class-yandexcheckoutpayoutmodelrecipientbankcardrecipient)
- [\YandexCheckoutPayout\Model\Recipient\BaseRecipient](#class-yandexcheckoutpayoutmodelrecipientbaserecipient)
- [\YandexCheckoutPayout\Notification\ErrorDepositionNotification](#class-yandexcheckoutpayoutnotificationerrordepositionnotification)
- [\YandexCheckoutPayout\Notification\ErrorDepositionNotificationResponse](#class-yandexcheckoutpayoutnotificationerrordepositionnotificationresponse)
- [\YandexCheckoutPayout\Request\AbstractDepositionRequest (abstract)](#class-yandexcheckoutpayoutrequestabstractdepositionrequest-abstract)
- [\YandexCheckoutPayout\Request\AbstractRequest (abstract)](#class-yandexcheckoutpayoutrequestabstractrequest-abstract)
- [\YandexCheckoutPayout\Request\BalanceRequest](#class-yandexcheckoutpayoutrequestbalancerequest)
- [\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)
- [\YandexCheckoutPayout\Request\MakeDepositionRequest](#class-yandexcheckoutpayoutrequestmakedepositionrequest)
- [\YandexCheckoutPayout\Request\SynonymCardRequest](#class-yandexcheckoutpayoutrequestsynonymcardrequest)
- [\YandexCheckoutPayout\Request\TestDepositionRequest](#class-yandexcheckoutpayoutrequesttestdepositionrequest)
- [\YandexCheckoutPayout\Request\Builders\AbstractRequestBuilder (abstract)](#class-yandexcheckoutpayoutrequestbuildersabstractrequestbuilder-abstract)
- [\YandexCheckoutPayout\Request\Builders\MakeDepositionRequestBuilder](#class-yandexcheckoutpayoutrequestbuildersmakedepositionrequestbuilder)
- [\YandexCheckoutPayout\Request\Builders\SynonymCardRequestBuilder](#class-yandexcheckoutpayoutrequestbuilderssynonymcardrequestbuilder)
- [\YandexCheckoutPayout\Request\Builders\TestDepositionRequestBuilder](#class-yandexcheckoutpayoutrequestbuilderstestdepositionrequestbuilder)
- [\YandexCheckoutPayout\Request\Serializers\AbstractRequestSerializer (abstract)](#class-yandexcheckoutpayoutrequestserializersabstractrequestserializer-abstract)
- [\YandexCheckoutPayout\Request\Serializers\BalanceRequestSerializer](#class-yandexcheckoutpayoutrequestserializersbalancerequestserializer)
- [\YandexCheckoutPayout\Request\Serializers\DepositionRequestSerializer](#class-yandexcheckoutpayoutrequestserializersdepositionrequestserializer)
- [\YandexCheckoutPayout\Request\Serializers\SynonymCardRequestSerializer](#class-yandexcheckoutpayoutrequestserializerssynonymcardrequestserializer)

<hr />

### Class: \YandexCheckoutPayout\Client

> Класс клиента API

###### Example
```php
<?php
    $keychain = new Keychain('publicCert.cer', 'privateCert.pem', 'password');
    $client = new Client('000000', $keychain);
    $response = $client->createDeposition($request);
    $response->getXmlResponse()->getStatus();
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$agentId=`''`</strong>, <em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> <strong>$keychain=null</strong>, <em>null</em> <strong>$curlConfiguration=null</strong>)</strong> : <em>void</em><br /><em>Client constructor.</em> |
| public | <strong>createCsr(</strong><em>mixed</em> <strong>$organizationInfo</strong>, <em>string/mixed</em> <strong>$outputDir=`'C:\Intel\OSPanel\domains\payout-sdk-test.local\lib'`</strong>, <em>string</em> <strong>$privateKeyPassword=`''`</strong>)</strong> : <em>string/string[]</em><br /><em>Создает приватный ключ и запрос на сертификат для Яндекс.Денег. Возвращает подпись</em> |
| public | <strong>createDeposition(</strong><em>\YandexCheckoutPayout\AbstractDepositionRequest/array</em> <strong>$request</strong>, <em>string/int</em> <strong>$clientOrderId=null</strong>)</strong> : <em>[\YandexCheckoutPayout\Common\ResponseObject](#class-yandexcheckoutpayoutcommonresponseobject)</em><br /><em>Создание выплаты. Метод принимает объект запроса Make|Test DepositionRequest</em> |
| public | <strong>getBalance()</strong> : <em>[\YandexCheckoutPayout\Common\ResponseObject](#class-yandexcheckoutpayoutcommonresponseobject)</em><br /><em>Возвращает баланс</em> |
| public | <strong>getSynonymCard(</strong><em>\YandexCheckoutPayout\SynonymCardRequest/array</em> <strong>$request</strong>)</strong> : <em>[\YandexCheckoutPayout\Common\ResponseSynonymCard](#class-yandexcheckoutpayoutcommonresponsesynonymcard)</em><br /><em>Возвращает синоним карты Принимает объект запроса SynonymCardRequest</em> |

*This class extends \YandexCheckoutPayout\Client\CurlClient*

<hr />

### Class: \YandexCheckoutPayout\Common\ResponseObject

> Класс объекта ответа, возвращаемого API при запросе выплаты, баланса

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>null</em> <strong>$config=null</strong>)</strong> : <em>void</em><br /><em>ResponseObject constructor.</em> |
| public | <strong>getBody()</strong> : <em>mixed</em> |
| public | <strong>getCode()</strong> : <em>mixed</em> |
| public | <strong>getHeaders()</strong> : <em>mixed</em> |
| public | <strong>getXmlResponse()</strong> : <em>[\YandexCheckoutPayout\Common\ResponseXmlObject](#class-yandexcheckoutpayoutcommonresponsexmlobject)</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\ResponseXmlObject

> Класс объекта ответа, возвращаемого API, для работы с xml

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$xml</strong>)</strong> : <em>void</em><br /><em>ResponseXmlObject constructor.</em> |
| public | <strong>getBalance()</strong> : <em>string</em> |
| public | <strong>getClientOrderId()</strong> : <em>string</em> |
| public | <strong>getFullXmlResponse()</strong> : <em>string</em> |
| public | <strong>getIdentification()</strong> : <em>string</em> |
| public | <strong>getProcessedDT()</strong> : <em>string</em> |
| public | <strong>getStatus()</strong> : <em>int</em> |
| public | <strong>getTechMessage()</strong> : <em>string</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\ResponseSynonymCard

> Класс объекта ответа, возвращаемого API при запросе синонима карты

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$body</strong>)</strong> : <em>void</em> |
| public | <strong>getReason()</strong> : <em>string</em> |
| public | <strong>getSkrCardBin()</strong> : <em>string</em> |
| public | <strong>getSkrCardLast4()</strong> : <em>string</em> |
| public | <strong>getSkrDestinationCardCountryCode()</strong> : <em>string</em> |
| public | <strong>getSkrDestinationCardPanmask()</strong> : <em>string</em> |
| public | <strong>getSkrDestinationCardProductCode()</strong> : <em>string</em> |
| public | <strong>getSkrDestinationCardSynonim()</strong> : <em>string</em> |
| public | <strong>getSkrDestinationCardType()</strong> : <em>string</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\ErrorConverter (abstract)

> Класс для конвертации ошибок в человекопонятный вид

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getErrorMessageByCode(</strong><em>mixed</em> <strong>$code</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\GeneratorCsr

> Класс для генерации csr запроса и ключей

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$organizationInfo</strong>, <em>string</em> <strong>$output=`'C:\Intel\OSPanel\domains\payout-sdk-test.local\lib\Common\Helpers'`</strong>, <em>string</em> <strong>$privateKeyPassword=`''`</strong>)</strong> : <em>void</em> |
| public | <strong>generate()</strong> : <em>string/string[]</em> |
| public | <strong>getConfig()</strong> : <em>array</em> |
| public | <strong>setConfig(</strong><em>mixed</em> <strong>$config</strong>)</strong> : <em>void</em> |
| public | <strong>validateOrganization(</strong><em>\YandexCheckoutPayout\Common\Helpers\Organization</em> <strong>$organizationInfo</strong>)</strong> : <em>bool</em> |
<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\OpenSSL

> Класс используется для упаковки данных в PKCS#7 и их распаковки.

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>decryptPKCS7(</strong><em>mixed</em> <strong>$data</strong>, <em>mixed</em> <strong>$CAcert=null</strong>)</strong> : <em>string</em><br /><em>Проверяет подпись и возвращает содержимое пакета</em> |
| public static | <strong>encryptPKCS7(</strong><em>mixed</em> <strong>$data</strong>, <em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> <strong>$keychain</strong>)</strong> : <em>string</em><br /><em>Подписывает и возвращает данные запакованные в PKCS#7</em> |

<hr />

### Class: \YandexCheckoutPayout\Model\CurrencyCode

> CurrencyCode - Код валюты перевода

| Visibility | Function |
|:-----------|:---------|

*This class extends \YandexCheckoutPayout\Common\AbstractEnum*

<hr />

### Class: \YandexCheckoutPayout\Model\DstAccount

> DstAccount - Идентификатор получателя перевода. Зависит от того, куда вы отправляете перевод.

|Код|Описание| 
--- | --- 
|BANK_CARD   |перевод на банковскую карту| 
|BANK_ACCOUNT|перевод на банковский счет|

| Visibility | Function |
|:-----------|:---------|

*This class extends \YandexCheckoutPayout\Common\AbstractEnum*

<hr />

### Class: \YandexCheckoutPayout\Model\FormatType

> FormatType - формат запроса

|Значения|
|-----|
|JSON | 
|XML  |

| Visibility | Function |
|:-----------|:---------|

*This class extends \YandexCheckoutPayout\Common\AbstractEnum*

<hr />

### Class: \YandexCheckoutPayout\Model\IssueDate

> Класс для работы с датой

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$fullDate</strong>, <em>mixed</em> <strong>$year</strong>, <em>mixed</em> <strong>$month</strong>, <em>mixed</em> <strong>$day</strong>)</strong> : <em>void</em> |
| public | <strong>getDay()</strong> : <em>mixed</em> |
| public | <strong>getFullDate()</strong> : <em>mixed</em> |
| public | <strong>getMonth()</strong> : <em>mixed</em> |
| public | <strong>getYear()</strong> : <em>mixed</em> |
| public | <strong>setDay(</strong><em>mixed</em> <strong>$day</strong>)</strong> : <em>void</em> |
| public | <strong>setFullDate(</strong><em>mixed</em> <strong>$fullDate</strong>)</strong> : <em>void</em> |
| public | <strong>setMonth(</strong><em>mixed</em> <strong>$month</strong>)</strong> : <em>void</em> |
| public | <strong>setYear(</strong><em>mixed</em> <strong>$year</strong>)</strong> : <em>void</em> |

<hr />

### Class: \YandexCheckoutPayout\Model\Organization

> Класс для построения данных организации при генерации запроса на сертификат

###### Example
```php
<?php
    $organization = new Organization();
    $organization->setEmailAddress('predpriyatie@yandex.ru')
                 ->setOrganizationName('OOO Predpriyatie')
                 ->setCommonName('/business/predpriyatie');
    $signature = $client->createCsr($organization, 'path/to/output/dir', 'password_for_private_key');
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$organizationInfo=null</strong>)</strong> : <em>void</em> |
| public | <strong>buildByArray(</strong><em>mixed</em> <strong>$options</strong>)</strong> : <em>void</em> |
| public | <strong>getCommonName()</strong> : <em>string</em> |
| public | <strong>getCountryName()</strong> : <em>string</em> |
| public | <strong>getEmailAddress()</strong> : <em>string</em> |
| public | <strong>getLocalityName()</strong> : <em>string</em> |
| public | <strong>getOrganizationName()</strong> : <em>string</em> |
| public | <strong>getOrganizationalUnitName()</strong> : <em>string</em> |
| public | <strong>getStateOrProvinceName()</strong> : <em>string</em> |
| public | <strong>setCommonName(</strong><em>mixed</em> <strong>$commonName</strong>)</strong> : <em>[\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)</em> |
| public | <strong>setCountryName(</strong><em>string</em> <strong>$countryName=`'RU'`</strong>)</strong> : <em>[\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)</em> |
| public | <strong>setEmailAddress(</strong><em>mixed</em> <strong>$emailAddress</strong>)</strong> : <em>[\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)</em> |
| public | <strong>setLocalityName(</strong><em>string</em> <strong>$localityName</strong>)</strong> : <em>[\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)</em> |
| public | <strong>setOrganizationName(</strong><em>mixed</em> <strong>$organizationName</strong>)</strong> : <em>[\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)</em> |
| public | <strong>setOrganizationalUnitName(</strong><em>string</em> <strong>$organizationalUnitName</strong>)</strong> : <em>[\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)</em> |
| public | <strong>setStateOrProvinceName(</strong><em>string</em> <strong>$stateOrProvinceName=`'Russia'`</strong>)</strong> : <em>[\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)</em> |
| public | <strong>toArray()</strong> : <em>void</em> |

<hr />

### Class: \YandexCheckoutPayout\Model\RequestDateTime

> Класс позволяет получить дату в необходимом для выплаты формате

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getDateTime()</strong> : <em>mixed</em> |

<hr />

### Class: \YandexCheckoutPayout\Model\Recipient\BankAccountRecipient

> Класс для построения параметров получателя при выплате на банковский счет, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest

###### Example
```php
<?php
    $recipient = new BankAccountRecipient();
    $recipient->setBankCity('bank city')
              ->setBankName('bank name')
              ->setBankBIK('999999999')
              ->setPaymentPurpose('payment purpose 74')
              ->setBankCorAccount('11111111111111111111')
              ->setPofOfferAccepted(true)
              ->setPdrDocIssueDate('05.05.2019')
              ->setCustAccount('11111111111111111111')
              ->setPdrMiddleName('Владимирович')
              ->setPdrLastName('Владимиров')
              ->setPdrFirstName('Владимир')
              ->setPdrBirthDate('05.05.1990')
              ->setPdrAddress('пос. Большие Васюки, ул. Комиссара Козявкина, д. 4')
              ->setDocNumber('4002109067')
              ->setSmsPhoneNumber('79653457676');
    
    $depositionRequest = new MakeDepositionRequest();
    $depositionRequest->setPaymentParams($recipient);
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBankBIK()</strong> : <em>mixed</em> |
| public | <strong>getBankCity()</strong> : <em>mixed</em> |
| public | <strong>getBankCorAccount()</strong> : <em>mixed</em> |
| public | <strong>getBankName()</strong> : <em>mixed</em> |
| public | <strong>getCustAccount()</strong> : <em>mixed</em> |
| public | <strong>getPaymentPurpose()</strong> : <em>mixed</em> |
| public | <strong>setBankBIK(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setBankCity(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setBankCorAccount(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setBankName(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setCustAccount(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setPaymentPurpose(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>toArray()</strong> : <em>array</em> |

*This class extends [\YandexCheckoutPayout\Model\Recipient\BaseRecipient](#class-yandexcheckoutpayoutmodelrecipientbaserecipient)*

<hr />

### Class: \YandexCheckoutPayout\Model\Recipient\BankCardRecipient

> Класс для построения параметров получателя при выплате на банковскую карту, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest

###### Example
```php
<?php
     $recipient = new BankCardRecipient();
     $recipient->setPdrLastName('Иванов')
               ->setPdrFirstName('Иван')
               ->setPdrMiddleName('Иванович')
               ->setDocNumber('1234567890')
               ->setPofOfferAccepted(true)
               ->setPdrDocIssueDate('01.02.2018')
               ->setSmsPhoneNumber('79999999999')
               ->setSkrDestinationCardSynonym('R8zigwjuuzlxmfOfJ8SPDzLU.SC.000.202002');

     $depositionRequest = new MakeDepositionRequest();
     $depositionRequest->setPaymentParams($recipient);
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getCpsYmAccount()</strong> : <em>mixed</em> |
| public | <strong>getPdrCity()</strong> : <em>mixed</em> |
| public | <strong>getPdrPostcode()</strong> : <em>mixed</em> |
| public | <strong>getSkrDestinationCardSynonym()</strong> : <em>mixed</em> |
| public | <strong>hasCpsYmAccount()</strong> : <em>bool</em> |
| public | <strong>setCpsYmAccount(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setPdrCity(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setPdrPostcode(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setSkrDestinationCardSynonym(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>toArray()</strong> : <em>void</em> |

*This class extends [\YandexCheckoutPayout\Model\Recipient\BaseRecipient](#class-yandexcheckoutpayoutmodelrecipientbaserecipient)*

<hr />

### Class: \YandexCheckoutPayout\Model\Recipient\BaseRecipient

> Класс для построения параметров получателя при выплате на моб.телефон, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest

###### Example
```php
<?php
 $recipient = new BaseRecipient();
 $recipient->setPofOfferAccepted(true);

 $depositionRequest = new MakeDepositionRequest();
 $depositionRequest->setPaymentParams($recipient);
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getPdrAddress()</strong> : <em>mixed</em> |
| public | <strong>getPdrBirthDate()</strong> : <em>mixed</em> |
| public | <strong>getPdrDocIssueDate()</strong> : <em>mixed</em> |
| public | <strong>getPdrDocNumber()</strong> : <em>mixed</em> |
| public | <strong>getPdrFirstName()</strong> : <em>mixed</em> |
| public | <strong>getPdrLastName()</strong> : <em>mixed</em> |
| public | <strong>getPdrMiddleName()</strong> : <em>mixed</em> |
| public | <strong>getPofOfferAccepted()</strong> : <em>mixed</em> |
| public | <strong>getSmsPhoneNumber()</strong> : <em>mixed</em> |
| public | <strong>setDocNumber(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>setPdrAddress(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>setPdrBirthDate(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>setPdrDocIssueDate(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>setPdrFirstName(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>setPdrLastName(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>setPdrMiddleName(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>setPofOfferAccepted(</strong><em>bool</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>setSmsPhoneNumber(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Model\Recipient\$this</em> |
| public | <strong>toArray()</strong> : <em>void</em> |

<hr />

### Class: \YandexCheckoutPayout\Notification\ErrorDepositionNotification

> Класс для обработки входящих уведомлений

###### Example
```php
<?php
 $notification = new ErrorDepositionNotification($notificationBody);
 $error = $notification->getError();
 $response = $notification->createResponse(0, $keychain);
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$body</strong>)</strong> : <em>void</em><br /><em>ErrorDepositionNotification constructor.</em> |
| public | <strong>createResponse(</strong><em>mixed</em> <strong>$status</strong>, <em>mixed</em> <strong>$keychain</strong>)</strong> : <em>string</em> |
| public | <strong>getAmount()</strong> : <em>string</em> |
| public | <strong>getClientOrderId()</strong> : <em>string</em> |
| public | <strong>getCurrency()</strong> : <em>string</em> |
| public | <strong>getDstAccount()</strong> : <em>string</em> |
| public | <strong>getError()</strong> : <em>string</em> |
| public | <strong>getRequestDT()</strong> : <em>string</em> |

<hr />

### Class: \YandexCheckoutPayout\Notification\ErrorDepositionNotificationResponse

> Класс для создания ответа на errorDepositionNotification

###### Example
```php
<?php
    $response = new ErrorDepositionNotificationResponse($clientOrderId, $status);
    return $response->build($keychain);
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$clientOrderId</strong>, <em>mixed</em> <strong>$status</strong>, <em>string</em> <strong>$processedDT=`''`</strong>)</strong> : <em>void</em> |
| public | <strong>build(</strong><em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> <strong>$keychain</strong>)</strong> : <em>string</em><br /><em>Строит ответ на запрос, упаковывает его в PKCS#7 пакет.</em> |
| public | <strong>getClientOrderId()</strong> : <em>string</em> |
| public | <strong>getProcessedDT()</strong> : <em>string</em> |
| public | <strong>getStatus()</strong> : <em>string</em> |
| public | <strong>setClientOrderId(</strong><em>string</em> <strong>$clientOrderId</strong>)</strong> : <em>\YandexCheckoutPayout\Notification\$this</em> |
| public | <strong>setProcessedDT(</strong><em>string</em> <strong>$processedDT</strong>)</strong> : <em>\YandexCheckoutPayout\Notification\$this</em> |
| public | <strong>setStatus(</strong><em>string</em> <strong>$status</strong>)</strong> : <em>\YandexCheckoutPayout\Notification\$this</em> |

<hr />

### Class: \YandexCheckoutPayout\Request\AbstractDepositionRequest (abstract)

> Class AbstractDepositionRequest

###### Example
```php
<?php
    $depositionRequest = new MakeDepositionRequest();
    $depositionRequest->setDstAccount('41001614575714')
                      ->setAmount(100)
                      ->setCurrency(CurrencyCode::RUB)
                      ->setContract('test')
                      ->setPaymentParams($params);
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAmount()</strong> : <em>mixed</em> |
| public | <strong>getContract()</strong> : <em>mixed</em> |
| public | <strong>getCurrency()</strong> : <em>mixed</em> |
| public | <strong>getDstAccount()</strong> : <em>mixed</em> |
| public | <strong>getPaymentParams()</strong> : <em>\YandexCheckoutPayout\Request\BankAccountRecipient/\YandexCheckoutPayout\Request\BankCardRecipient/array</em> |
| public | <strong>getSerializer()</strong> : <em>[\YandexCheckoutPayout\Request\Serializers\DepositionRequestSerializer](#class-yandexcheckoutpayoutrequestserializersdepositionrequestserializer)</em> |
| public | <strong>hasPaymentParams()</strong> : <em>bool</em> |
| public | <strong>setAmount(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Request\$this</em> |
| public | <strong>setContract(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\AbstractDepositionRequest](#class-yandexcheckoutpayoutrequestabstractdepositionrequest-abstract)</em> |
| public | <strong>setCurrency(</strong><em>mixed</em> <strong>$value=643</strong>)</strong> : <em>\YandexCheckoutPayout\Request\$this</em> |
| public | <strong>setDstAccount(</strong><em>string/int</em> <strong>$value</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\AbstractDepositionRequest](#class-yandexcheckoutpayoutrequestabstractdepositionrequest-abstract)</em> |
| public | <strong>setPaymentParams(</strong><em>\YandexCheckoutPayout\Request\BaseRecipient/\YandexCheckoutPayout\Request\BankCardRecipient/\YandexCheckoutPayout\Request\BankAccountRecipient/array</em> <strong>$params</strong>)</strong> : <em>\YandexCheckoutPayout\Request\$this</em> |
| public | <strong>abstract validate()</strong> : <em>bool True если запрос валиден, false если нет</em><br /><em>Валидирует текущий запрос, проверяет все ли нужные свойства установлены</em> |

*This class extends [\YandexCheckoutPayout\Request\AbstractRequest](#class-yandexcheckoutpayoutrequestabstractrequest-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\AbstractRequest (abstract)

> Class AbstractRequest

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$clientOrderId=null</strong>)</strong> : <em>void</em> |
| public | <strong>clearValidationError()</strong> : <em>void</em><br /><em>Очищает статус валидации текущего запроса</em> |
| public | <strong>getClientOrderId()</strong> : <em>string</em> |
| public | <strong>getFormatType()</strong> : <em>[\YandexCheckoutPayout\Model\FormatType](#class-yandexcheckoutpayoutmodelformattype)</em><br /><em>Возвращает формат запроса xml|json</em> |
| public | <strong>getLastValidationError()</strong> : <em>string Последняя произошедшая ошибка валидации</em><br /><em>Возвращает последнюю ошибку валидации</em> |
| public | <strong>getRequestDT()</strong> : <em>\YandexCheckoutPayout\Request\DateTime/string</em><br /><em>Возвращает установленое время запроса</em> |
| public | <strong>getRequestName()</strong> : <em>string</em> |
| public | <strong>abstract getSerializer()</strong> : <em>[\YandexCheckoutPayout\Request\Serializers\AbstractRequestSerializer](#class-yandexcheckoutpayoutrequestserializersabstractrequestserializer-abstract)</em> |
| public | <strong>setClientOrderId(</strong><em>string</em> <strong>$clientOrderId</strong>)</strong> : <em>\YandexCheckoutPayout\Request\$this</em> |
| public | <strong>setFormatType(</strong><em>[\YandexCheckoutPayout\Model\FormatType](#class-yandexcheckoutpayoutmodelformattype)</em> <strong>$type</strong>)</strong> : <em>\YandexCheckoutPayout\Request\$this</em><br /><em>Устанавливает формат запроса xml|json</em> |
| public | <strong>setRequestDT(</strong><em>string</em> <strong>$requestDT</strong>)</strong> : <em>\YandexCheckoutPayout\Request\$this</em><br /><em>Устанавливает время запроса</em> |
| public | <strong>setRequestName(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Request\$this</em> |
| public | <strong>abstract validate()</strong> : <em>bool True если запрос валиден, false если нет</em><br /><em>Валидирует текущий запрос, проверяет все ли нужные свойства установлены</em> |

<hr />

### Class: \YandexCheckoutPayout\Request\BalanceRequest

> Класс для создания запроса баланса

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getSerializer()</strong> : <em>[\YandexCheckoutPayout\Request\Serializers\AbstractRequestSerializer](#class-yandexcheckoutpayoutrequestserializersabstractrequestserializer-abstract)/[\YandexCheckoutPayout\Request\BalanceRequest](#class-yandexcheckoutpayoutrequestbalancerequest)Serializer</em> |
| public | <strong>validate()</strong> : <em>bool True если запрос валиден, false если нет</em><br /><em>Валидирует текущий запрос, проверяет все ли нужные свойства установлены</em> |

*This class extends [\YandexCheckoutPayout\Request\AbstractRequest](#class-yandexcheckoutpayoutrequestabstractrequest-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\Keychain

> Класс ключница

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$publicCert</strong>, <em>mixed</em> <strong>$privateKey</strong>, <em>string</em> <strong>$keyPassword=`''`</strong>)</strong> : <em>void</em> |
| public | <strong>getKeyPassword()</strong> : <em>string</em> |
| public | <strong>getPrivateKey()</strong> : <em>string</em> |
| public | <strong>getPublicCert()</strong> : <em>string</em> |
| public | <strong>setKeyPassword(</strong><em>string</em> <strong>$keyPassword</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> |
| public | <strong>setPrivateKey(</strong><em>string</em> <strong>$privateKey</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> |
| public | <strong>setPublicCert(</strong><em>string</em> <strong>$publicCert</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> |

<hr />

### Class: \YandexCheckoutPayout\Request\MakeDepositionRequest

> Класс для создания запроса на выплату

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getBuilder(</strong><em>null/string/int</em> <strong>$clientOrderId=null</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\Builders\MakeDepositionRequestBuilder](#class-yandexcheckoutpayoutrequestbuildersmakedepositionrequestbuilder)</em> |
| public | <strong>validate()</strong> : <em>bool True если запрос валиден, false если нет</em><br /><em>Валидирует текущий запрос, проверяет все ли нужные свойства установлены</em> |

*This class extends [\YandexCheckoutPayout\Request\AbstractDepositionRequest](#class-yandexcheckoutpayoutrequestabstractdepositionrequest-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\SynonymCardRequest

> Класс для создания запроса на получение синонима карты

###### Example
```php
<?php
     $synonymRequest = new SynonymCardRequest();
     $synonymRequest->setSkrDestinationCardNumber('5555555555554444')
                    ->setSkrErrorUrl('http://money.yandex.ru')
                    ->setSkrSuccessUrl('http://money.yandex.ru');
     $client->getSynonymCard($synonymRequest);
```

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em><br /><em>SynonymCardRequest constructor.</em> |
| public static | <strong>getBuilder()</strong> : <em>[\YandexCheckoutPayout\Request\Builders\SynonymCardRequestBuilder](#class-yandexcheckoutpayoutrequestbuilderssynonymcardrequestbuilder)</em> |
| public | <strong>getSerializer()</strong> : <em>[\YandexCheckoutPayout\Request\Serializers\SynonymCardRequestSerializer](#class-yandexcheckoutpayoutrequestserializerssynonymcardrequestserializer)</em> |
| public | <strong>getSkrDestinationCardNumber()</strong> : <em>string</em> |
| public | <strong>getSkrErrorUrl()</strong> : <em>string</em> |
| public | <strong>getSkrResponseFormat()</strong> : <em>string</em> |
| public | <strong>getSkrSuccessUrl()</strong> : <em>string</em> |
| public | <strong>setSkrDestinationCardNumber(</strong><em>string</em> <strong>$skrDestinationCardNumber</strong>)</strong> : <em>\YandexCheckoutPayout\Request\$this</em> |
| public | <strong>setSkrErrorUrl(</strong><em>string</em> <strong>$skrErrorUrl</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\SynonymCardRequest](#class-yandexcheckoutpayoutrequestsynonymcardrequest)</em> |
| public | <strong>setSkrResponseFormat(</strong><em>string</em> <strong>$skrResponseFormat=`'json'`</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\SynonymCardRequest](#class-yandexcheckoutpayoutrequestsynonymcardrequest)</em> |
| public | <strong>setSkrSuccessUrl(</strong><em>string</em> <strong>$skrSuccessUrl</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\SynonymCardRequest](#class-yandexcheckoutpayoutrequestsynonymcardrequest)</em> |

<hr />

### Class: \YandexCheckoutPayout\Request\TestDepositionRequest

> Класс для создания запроса на проверку возможности выплаты

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getBuilder(</strong><em>null/string/int</em> <strong>$clientOrderId=null</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\Builders\TestDepositionRequestBuilder](#class-yandexcheckoutpayoutrequestbuilderstestdepositionrequestbuilder)</em> |
| public | <strong>validate()</strong> : <em>bool True если запрос валиден, false если нет</em><br /><em>Валидирует текущий запрос, проверяет все ли нужные свойства установлены</em> |

*This class extends [\YandexCheckoutPayout\Request\AbstractDepositionRequest](#class-yandexcheckoutpayoutrequestabstractdepositionrequest-abstract)*

<hr />