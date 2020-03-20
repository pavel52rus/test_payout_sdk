## Table of contents

- [\YandexCheckoutPayout\Client](#class-yandexcheckoutpayoutclient)
- [\YandexCheckoutPayout\Client\BaseClient](#class-yandexcheckoutpayoutclientbaseclient)
- [\YandexCheckoutPayout\Client\CurlClient](#class-yandexcheckoutpayoutclientcurlclient)
- [\YandexCheckoutPayout\Client\CurlConfiguration](#class-yandexcheckoutpayoutclientcurlconfiguration)
- [\YandexCheckoutPayout\Common\AbstractEnum (abstract)](#class-yandexcheckoutpayoutcommonabstractenum-abstract)
- [\YandexCheckoutPayout\Common\HttpVerb](#class-yandexcheckoutpayoutcommonhttpverb)
- [\YandexCheckoutPayout\Common\ResponseObject](#class-yandexcheckoutpayoutcommonresponseobject)
- [\YandexCheckoutPayout\Common\ResponseSynonymCard](#class-yandexcheckoutpayoutcommonresponsesynonymcard)
- [\YandexCheckoutPayout\Common\ResponseXmlObject](#class-yandexcheckoutpayoutcommonresponsexmlobject)
- [\YandexCheckoutPayout\Common\Exceptions\ApiConnectionException](#class-yandexcheckoutpayoutcommonexceptionsapiconnectionexception)
- [\YandexCheckoutPayout\Common\Exceptions\ApiException](#class-yandexcheckoutpayoutcommonexceptionsapiexception)
- [\YandexCheckoutPayout\Common\Exceptions\AuthorizeException](#class-yandexcheckoutpayoutcommonexceptionsauthorizeexception)
- [\YandexCheckoutPayout\Common\Exceptions\EmptyPropertyValueException](#class-yandexcheckoutpayoutcommonexceptionsemptypropertyvalueexception)
- [\YandexCheckoutPayout\Common\Exceptions\ExtensionNotFoundException](#class-yandexcheckoutpayoutcommonexceptionsextensionnotfoundexception)
- [\YandexCheckoutPayout\Common\Exceptions\InvalidPropertyException](#class-yandexcheckoutpayoutcommonexceptionsinvalidpropertyexception)
- [\YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueException](#class-yandexcheckoutpayoutcommonexceptionsinvalidpropertyvalueexception)
- [\YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueTypeException](#class-yandexcheckoutpayoutcommonexceptionsinvalidpropertyvaluetypeexception)
- [\YandexCheckoutPayout\Common\Exceptions\InvalidRequestException](#class-yandexcheckoutpayoutcommonexceptionsinvalidrequestexception)
- [\YandexCheckoutPayout\Common\Exceptions\JsonException](#class-yandexcheckoutpayoutcommonexceptionsjsonexception)
- [\YandexCheckoutPayout\Common\Exceptions\NotFoundException](#class-yandexcheckoutpayoutcommonexceptionsnotfoundexception)
- [\YandexCheckoutPayout\Common\Exceptions\OpenSSLException](#class-yandexcheckoutpayoutcommonexceptionsopensslexception)
- [\YandexCheckoutPayout\Common\Exceptions\TooManyRequestsException](#class-yandexcheckoutpayoutcommonexceptionstoomanyrequestsexception)
- [\YandexCheckoutPayout\Common\Exceptions\XmlException](#class-yandexcheckoutpayoutcommonexceptionsxmlexception)
- [\YandexCheckoutPayout\Common\Helpers\ErrorConverter (abstract)](#class-yandexcheckoutpayoutcommonhelperserrorconverter-abstract)
- [\YandexCheckoutPayout\Common\Helpers\GeneratorCsr](#class-yandexcheckoutpayoutcommonhelpersgeneratorcsr)
- [\YandexCheckoutPayout\Common\Helpers\OpenSSL](#class-yandexcheckoutpayoutcommonhelpersopenssl)
- [\YandexCheckoutPayout\Common\Helpers\Parser](#class-yandexcheckoutpayoutcommonhelpersparser)
- [\YandexCheckoutPayout\Common\Helpers\Random](#class-yandexcheckoutpayoutcommonhelpersrandom)
- [\YandexCheckoutPayout\Common\Helpers\RawHeadersParser](#class-yandexcheckoutpayoutcommonhelpersrawheadersparser)
- [\YandexCheckoutPayout\Common\Helpers\StringObject](#class-yandexcheckoutpayoutcommonhelpersstringobject)
- [\YandexCheckoutPayout\Common\Helpers\TypeCast](#class-yandexcheckoutpayoutcommonhelperstypecast)
- [\YandexCheckoutPayout\Model\CurrencyCode](#class-yandexcheckoutpayoutmodelcurrencycode)
- [\YandexCheckoutPayout\Model\DstAccount](#class-yandexcheckoutpayoutmodeldstaccount)
- [\YandexCheckoutPayout\Model\FormatType](#class-yandexcheckoutpayoutmodelformattype)
- [\YandexCheckoutPayout\Model\IssueDate](#class-yandexcheckoutpayoutmodelissuedate)
- [\YandexCheckoutPayout\Model\Organization](#class-yandexcheckoutpayoutmodelorganization)
- [\YandexCheckoutPayout\Model\RequestDateTime](#class-yandexcheckoutpayoutmodelrequestdatetime)
- [\YandexCheckoutPayout\Model\RequestMode](#class-yandexcheckoutpayoutmodelrequestmode)
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

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$agentId=`''`</strong>, <em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> <strong>$keychain=null</strong>, <em>null</em> <strong>$curlConfiguration=null</strong>)</strong> : <em>void</em><br /><em>Client constructor.</em> |
| public | <strong>createCsr(</strong><em>mixed</em> <strong>$organizationInfo</strong>, <em>string/mixed</em> <strong>$outputDir=`'C:\Users\pamolodovskii\Desktop\Новая папка\payout\lib'`</strong>, <em>string</em> <strong>$privateKeyPassword=`''`</strong>)</strong> : <em>string/string[]</em><br /><em>Создает приватный ключ и запрос на сертификат для Яндекс.Денег. Возвращает подпись</em> |
| public | <strong>createDeposition(</strong><em>\YandexCheckoutPayout\AbstractDepositionRequest/array</em> <strong>$request</strong>, <em>null</em> <strong>$clientOrderId=null</strong>)</strong> : <em>[\YandexCheckoutPayout\Common\ResponseObject](#class-yandexcheckoutpayoutcommonresponseobject)</em><br /><em>Создание выплаты. Метод принимает объект запроса Make|Test DepositionRequest</em> |
| public | <strong>getBalance()</strong> : <em>mixed/\YandexCheckoutPayout\ResponseObject</em><br /><em>Возвращает баланс</em> |
| public | <strong>getSynonymCard(</strong><em>\YandexCheckoutPayout\SynonymCardRequest/array</em> <strong>$request</strong>)</strong> : <em>[\YandexCheckoutPayout\Common\ResponseSynonymCard](#class-yandexcheckoutpayoutcommonresponsesynonymcard)</em><br /><em>Возвращает синоним карты Принимает объект запроса SynonymCardRequest</em> |
| protected | <strong>prepareRequest(</strong><em>\YandexCheckoutPayout\AbstractRequest</em> <strong>$request</strong>)</strong> : <em>bool/false/string</em> |

*This class extends [\YandexCheckoutPayout\Client\CurlClient](#class-yandexcheckoutpayoutclientcurlclient)*

<hr />

### Class: \YandexCheckoutPayout\Client\BaseClient

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAgentId()</strong> : <em>string</em> |
| public | <strong>getKeychain()</strong> : <em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> |
| public | <strong>getLogger()</strong> : <em>[\YandexCheckoutPayout\Client](#class-yandexcheckoutpayoutclient)\LoggerInterface/null</em> |
| public | <strong>setAgentId(</strong><em>string</em> <strong>$id</strong>)</strong> : <em>[\YandexCheckoutPayout\Client\BaseClient](#class-yandexcheckoutpayoutclientbaseclient)</em> |
| public | <strong>setLogger(</strong><em>[\YandexCheckoutPayout\Client](#class-yandexcheckoutpayoutclient)\LoggerInterface/null</em> <strong>$logger</strong>)</strong> : <em>void</em> |
| protected | <strong>prepareJson(</strong><em>mixed</em> <strong>$request</strong>)</strong> : <em>void</em> |
| protected | <strong>prepareXml(</strong><em>[\YandexCheckoutPayout\Client](#class-yandexcheckoutpayoutclient)\AbstractRequest</em> <strong>$request</strong>)</strong> : <em>bool/false/string</em> |

<hr />

### Class: \YandexCheckoutPayout\Client\CurlClient

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>null</em> <strong>$curlConfiguration=null</strong>)</strong> : <em>void</em><br /><em>CurlClient constructor.</em> |
| public | <strong>getCurlConfiguration()</strong> : <em>[\YandexCheckoutPayout\Client\CurlConfiguration](#class-yandexcheckoutpayoutclientcurlconfiguration)</em> |
| protected | <strong>execute(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$method</strong>, <em>mixed</em> <strong>$queryParams</strong>, <em>null</em> <strong>$httpBody=null</strong>, <em>array</em> <strong>$headers=array()</strong>)</strong> : <em>mixed/[\YandexCheckoutPayout\Client](#class-yandexcheckoutpayoutclient)\ResponseObject</em><br /><em>Выполнение запроса</em> |
| protected | <strong>call(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$method</strong>, <em>mixed</em> <strong>$queryParams</strong>, <em>null</em> <strong>$httpBody=null</strong>, <em>array</em> <strong>$headers=array()</strong>)</strong> : <em>mixed/[\YandexCheckoutPayout\Client](#class-yandexcheckoutpayoutclient)\ResponseObject</em><br /> |
| protected | <strong>getRequestUrl()</strong> : <em>string</em> |
| protected | <strong>initCurl()</strong> : <em>[\YandexCheckoutPayout\Client](#class-yandexcheckoutpayoutclient)\resource</em> |
| protected | <strong>sendRequest()</strong> : <em>array</em> |
| protected | <strong>setBody(</strong><em>mixed</em> <strong>$method</strong>, <em>mixed</em> <strong>$httpBody</strong>)</strong> : <em>void</em> |
| protected | <strong>setCurlOption(</strong><em>mixed</em> <strong>$optionName</strong>, <em>mixed</em> <strong>$optionValue</strong>)</strong> : <em>bool</em> |
| protected | <strong>setRequestUrl(</strong><em>string</em> <strong>$requestUrl</strong>)</strong> : <em>void</em> |

*This class extends [\YandexCheckoutPayout\Client\BaseClient](#class-yandexcheckoutpayoutclientbaseclient)*

<hr />

### Class: \YandexCheckoutPayout\Client\CurlConfiguration

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAttempts()</strong> : <em>int</em> |
| public | <strong>getConnectionTimeout()</strong> : <em>int</em> |
| public | <strong>getProxy()</strong> : <em>string</em> |
| public | <strong>getTimeout()</strong> : <em>int</em> |
| public | <strong>setAttempts(</strong><em>int</em> <strong>$attempts</strong>)</strong> : <em>void</em> |
| public | <strong>setConnectionTimeout(</strong><em>int</em> <strong>$connectionTimeout</strong>)</strong> : <em>void</em> |
| public | <strong>setProxy(</strong><em>string</em> <strong>$proxy</strong>)</strong> : <em>void</em> |
| public | <strong>setTimeout(</strong><em>int</em> <strong>$timeout</strong>)</strong> : <em>void</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\AbstractEnum (abstract)

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getEnabledValues()</strong> : <em>string[] Массив разрешённых значений</em><br /><em>Возвращает значения в enum'е значения которых разрешены</em> |
| public static | <strong>getValidValues()</strong> : <em>array Массив значений в перечислении</em><br /><em>Возвращает все значения в enum'e</em> |
| public static | <strong>valueExists(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>bool True если значение имеется, false если нет</em><br /><em>Проверяет наличие значения в enum'e</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\HttpVerb

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Common\AbstractEnum](#class-yandexcheckoutpayoutcommonabstractenum-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Common\ResponseObject

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>null</em> <strong>$config=null</strong>)</strong> : <em>void</em><br /><em>ResponseObject constructor.</em> |
| public | <strong>getBody()</strong> : <em>mixed</em> |
| public | <strong>getCode()</strong> : <em>mixed</em> |
| public | <strong>getHeaders()</strong> : <em>mixed</em> |
| public | <strong>getXmlResponse()</strong> : <em>[\YandexCheckoutPayout\Common\ResponseXmlObject](#class-yandexcheckoutpayoutcommonresponsexmlobject)</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\ResponseSynonymCard

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$body</strong>)</strong> : <em>void</em> |
| public | <strong>getReason()</strong> : <em>mixed</em> |
| public | <strong>getSkrCardBin()</strong> : <em>mixed</em> |
| public | <strong>getSkrCardLast4()</strong> : <em>mixed</em> |
| public | <strong>getSkrDestinationCardCountryCode()</strong> : <em>mixed</em> |
| public | <strong>getSkrDestinationCardPanmask()</strong> : <em>mixed</em> |
| public | <strong>getSkrDestinationCardProductCode()</strong> : <em>mixed</em> |
| public | <strong>getSkrDestinationCardSynonim()</strong> : <em>mixed</em> |
| public | <strong>getSkrDestinationCardType()</strong> : <em>mixed</em> |
| protected | <strong>buildByPropertiesArray(</strong><em>mixed</em> <strong>$properties</strong>)</strong> : <em>void</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\ResponseXmlObject

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

### Class: \YandexCheckoutPayout\Common\Exceptions\ApiConnectionException

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Common\Exceptions\ApiException](#class-yandexcheckoutpayoutcommonexceptionsapiexception)*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\ApiException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$message=`''`</strong>, <em>int</em> <strong>$code</strong>, <em>array/string[]</em> <strong>$responseHeaders=array()</strong>, <em>mixed</em> <strong>$responseBody=null</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getResponseBody()</strong> : <em>mixed</em> |
| public | <strong>getResponseHeaders()</strong> : <em>string[]</em> |

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\AuthorizeException

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Common\Exceptions\ApiException](#class-yandexcheckoutpayoutcommonexceptionsapiexception)*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\EmptyPropertyValueException

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Common\Exceptions\InvalidPropertyException](#class-yandexcheckoutpayoutcommonexceptionsinvalidpropertyexception)*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\ExtensionNotFoundException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$name</strong>, <em>int</em> <strong>$code</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\InvalidPropertyException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$message=`''`</strong>, <em>int</em> <strong>$code</strong>, <em>string</em> <strong>$property=`''`</strong>)</strong> : <em>void</em><br /><em>InvalidValueException constructor.</em> |
| public | <strong>getProperty()</strong> : <em>string</em> |

*This class extends \InvalidArgumentException*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$message=`''`</strong>, <em>int</em> <strong>$code</strong>, <em>string</em> <strong>$property=`''`</strong>, <em>mixed</em> <strong>$value=null</strong>)</strong> : <em>void</em><br /><em>InvalidPropertyValueTypeException constructor.</em> |
| public | <strong>getValue()</strong> : <em>mixed</em> |

*This class extends [\YandexCheckoutPayout\Common\Exceptions\InvalidPropertyException](#class-yandexcheckoutpayoutcommonexceptionsinvalidpropertyexception)*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueTypeException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$message=`''`</strong>, <em>int</em> <strong>$code</strong>, <em>string</em> <strong>$property=`''`</strong>, <em>mixed</em> <strong>$value=null</strong>)</strong> : <em>void</em><br /><em>InvalidPropertyValueTypeException constructor.</em> |
| public | <strong>getType()</strong> : <em>string</em> |

*This class extends [\YandexCheckoutPayout\Common\Exceptions\InvalidPropertyException](#class-yandexcheckoutpayoutcommonexceptionsinvalidpropertyexception)*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\InvalidRequestException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\YandexCheckoutPayout\Common\Exceptions\AbstractRequest/string</em> <strong>$error</strong>, <em>int</em> <strong>$code</strong>, <em>null</em> <strong>$previous=null</strong>)</strong> : <em>void</em><br /><em>InvalidRequestException constructor.</em> |
| public | <strong>getRequestObject()</strong> : <em>\YandexCheckoutPayout\Common\Exceptions\AbstractRequest/null</em> |

*This class extends \RuntimeException*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\JsonException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$message=`''`</strong>, <em>mixed</em> <strong>$code</strong>, <em>mixed</em> <strong>$previous=null</strong>)</strong> : <em>void</em> |

*This class extends \UnexpectedValueException*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\NotFoundException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$responseHeaders=array()</strong>, <em>mixed</em> <strong>$responseBody=null</strong>)</strong> : <em>void</em> |

*This class extends [\YandexCheckoutPayout\Common\Exceptions\ApiException](#class-yandexcheckoutpayoutcommonexceptionsapiexception)*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\OpenSSLException

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\TooManyRequestsException

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$responseHeaders=array()</strong>, <em>mixed</em> <strong>$responseBody=null</strong>)</strong> : <em>void</em> |

*This class extends [\YandexCheckoutPayout\Common\Exceptions\ApiException](#class-yandexcheckoutpayoutcommonexceptionsapiexception)*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Exceptions\XmlException

| Visibility | Function |
|:-----------|:---------|

*This class extends \Exception*

*This class implements \Throwable*

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\ErrorConverter (abstract)

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getErrorMessageByCode(</strong><em>mixed</em> <strong>$code</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\GeneratorCsr

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$organizationInfo</strong>, <em>string</em> <strong>$output=`'C:\Users\pamolodovskii\Desktop\Новая папка\payout\lib\Common\Helpers'`</strong>, <em>string</em> <strong>$privateKeyPassword=`''`</strong>)</strong> : <em>void</em> |
| public | <strong>generate()</strong> : <em>string/string[]</em> |
| public | <strong>getConfig()</strong> : <em>array</em> |
| public | <strong>setConfig(</strong><em>mixed</em> <strong>$config</strong>)</strong> : <em>void</em> |
| public | <strong>validateOrganization(</strong><em>\YandexCheckoutPayout\Common\Helpers\Organization</em> <strong>$organizationInfo</strong>)</strong> : <em>bool</em> |
| protected | <strong>saveFile(</strong><em>mixed</em> <strong>$fileName</strong>, <em>mixed</em> <strong>$content</strong>)</strong> : <em>void</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\OpenSSL

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>decryptPKCS7(</strong><em>mixed</em> <strong>$data</strong>, <em>mixed</em> <strong>$CAcert=null</strong>)</strong> : <em>string</em><br /><em>Проверяет подпись и возвращает содержимое пакета</em> |
| public static | <strong>encryptPKCS7(</strong><em>mixed</em> <strong>$data</strong>, <em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> <strong>$keychain</strong>)</strong> : <em>string</em><br /><em>Подписывает и возвращает данные запакованные в PKCS#7</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\Parser

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>parseDateToArray(</strong><em>mixed</em> <strong>$date</strong>)</strong> : <em>array</em> |
| public static | <strong>parseDateToIssueDate(</strong><em>mixed</em> <strong>$date</strong>)</strong> : <em>[\YandexCheckoutPayout\Model\IssueDate](#class-yandexcheckoutpayoutmodelissuedate)</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\Random

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>bool()</strong> : <em>bool Либо true либо false, одно из двух</em><br /><em>Возвращает рандомное буллево значение</em> |
| public static | <strong>bytes(</strong><em>int</em> <strong>$length</strong>, <em>bool</em> <strong>$useBest=true</strong>)</strong> : <em>string Строка, состоящая из рандомных символов</em><br /><em>Возвращает рандомную последовательность байт</em> |
| public static | <strong>float(</strong><em>float/null</em> <strong>$min=null</strong>, <em>float/null</em> <strong>$max=null</strong>, <em>bool</em> <strong>$useBest=true</strong>)</strong> : <em>float Рандомное число с плавающей точкой</em><br /><em>Возвращает рандомное число с плавающей точкой. По умолчанию возвращает значение в промежутке от нуля до едениы.</em> |
| public static | <strong>hex(</strong><em>int</em> <strong>$length</strong>, <em>bool</em> <strong>$useBest=true</strong>)</strong> : <em>string Строка, состоящая из рандомных символов</em><br /><em>Возвращает строку, состоящую из символов '0123456789abcdef'</em> |
| public static | <strong>int(</strong><em>int/null</em> <strong>$min=null</strong>, <em>int/null</em> <strong>$max=null</strong>, <em>bool</em> <strong>$useBest=true</strong>)</strong> : <em>int Рандомное целое число</em><br /><em>Возвращает рандомное целое число. По умолчанию возвращает число от нуля до PHP_INT_MAX.</em> |
| public static | <strong>str(</strong><em>int</em> <strong>$length</strong>, <em>int/null</em> <strong>$maxLength=null</strong>, <em>string/array/null</em> <strong>$characters=null</strong>, <em>bool</em> <strong>$useBest=true</strong>)</strong> : <em>string Строка, состоящая из рандомных символов</em><br /><em>Возвращает строку из рандомных символов</em> |
| public static | <strong>value(</strong><em>array</em> <strong>$values</strong>, <em>bool</em> <strong>$useBest=true</strong>)</strong> : <em>mixed Случайное значение из переданного массива</em><br /><em>Возвращает рандомное значение из переданного массива</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\RawHeadersParser

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>parse(</strong><em>mixed</em> <strong>$rawHeaders</strong>)</strong> : <em>void</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\StringObject

> Класс объекта, кастящегося в строку, используется только в тестах

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>StringObject constructor.</em> |
| public | <strong>__toString()</strong> : <em>string Строковое представление объекта</em><br /><em>Возвращает строковое значение текущего объекта</em> |

<hr />

### Class: \YandexCheckoutPayout\Common\Helpers\TypeCast

> Класс хэлпер для преобразования типов значений

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>canCastToBoolean(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>bool True если значение качтится в bool, false если нет</em><br /><em>Проверяет можно ли преобразовать переданное значение в буллево значение</em> |
| public static | <strong>canCastToDateTime(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>bool True если значение можно преобразовать в объект даты, false если нет</em><br /><em>Проверяет, можно ли преобразовать переданное значение в объект даты-времени</em> |
| public static | <strong>canCastToEnumString(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>bool True если значение преобразовать в строку можно, false если нет</em><br /><em>Проверяет можно ли преобразовать переданное значение в строку из перечисления</em> |
| public static | <strong>canCastToString(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>bool True если значение преобразовать в строку можно, false если нет</em><br /><em>Проверяет может ли переданное значение быть преобразовано в строку</em> |
| public static | <strong>castToDateTime(</strong><em>string/int/\YandexCheckoutPayout\Common\Helpers\DateTime</em> <strong>$value</strong>)</strong> : <em>\YandexCheckoutPayout\Common\Helpers\DateTime/null Объект типа \DateTime или null если при парсинг даты не удался</em><br /><em>Преобразует переданне значение в объект типа \DateTime</em> |

<hr />

### Class: \YandexCheckoutPayout\Model\CurrencyCode

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Common\AbstractEnum](#class-yandexcheckoutpayoutcommonabstractenum-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Model\DstAccount

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Common\AbstractEnum](#class-yandexcheckoutpayoutcommonabstractenum-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Model\FormatType

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Common\AbstractEnum](#class-yandexcheckoutpayoutcommonabstractenum-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Model\IssueDate

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

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getDateTime()</strong> : <em>mixed</em> |

<hr />

### Class: \YandexCheckoutPayout\Model\RequestMode

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Common\AbstractEnum](#class-yandexcheckoutpayoutcommonabstractenum-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Model\Recipient\BankAccountRecipient

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

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$clientOrderId</strong>, <em>mixed</em> <strong>$status</strong>, <em>string</em> <strong>$processedDT=`''`</strong>)</strong> : <em>void</em> |
| public | <strong>build(</strong><em>[\YandexCheckoutPayout\Request\Keychain](#class-yandexcheckoutpayoutrequestkeychain)</em> <strong>$keychain</strong>)</strong> : <em>string</em> |
| public | <strong>getClientOrderId()</strong> : <em>string</em> |
| public | <strong>getProcessedDT()</strong> : <em>string</em> |
| public | <strong>getStatus()</strong> : <em>string</em> |
| public | <strong>setClientOrderId(</strong><em>string</em> <strong>$clientOrderId</strong>)</strong> : <em>\YandexCheckoutPayout\Notification\$this</em> |
| public | <strong>setProcessedDT(</strong><em>string</em> <strong>$processedDT</strong>)</strong> : <em>\YandexCheckoutPayout\Notification\$this</em> |
| public | <strong>setStatus(</strong><em>string</em> <strong>$status</strong>)</strong> : <em>\YandexCheckoutPayout\Notification\$this</em> |

<hr />

### Class: \YandexCheckoutPayout\Request\AbstractDepositionRequest (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAmount()</strong> : <em>mixed</em> |
| public | <strong>getContract()</strong> : <em>mixed</em> |
| public | <strong>getCurrency()</strong> : <em>mixed</em> |
| public | <strong>getDstAccount()</strong> : <em>mixed</em> |
| public | <strong>getPaymentParams()</strong> : <em>\YandexCheckoutPayout\Request\BankAccountRecipient/\YandexCheckoutPayout\Request\BankCardRecipient/array</em> |
| public | <strong>getSerializer()</strong> : <em>mixed</em> |
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
| protected | <strong>setValidationError(</strong><em>string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Устанавливает ошибку валидации</em> |

<hr />

### Class: \YandexCheckoutPayout\Request\BalanceRequest

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getSerializer()</strong> : <em>mixed</em> |
| public | <strong>validate()</strong> : <em>bool True если запрос валиден, false если нет</em><br /><em>Валидирует текущий запрос, проверяет все ли нужные свойства установлены</em> |

*This class extends [\YandexCheckoutPayout\Request\AbstractRequest](#class-yandexcheckoutpayoutrequestabstractrequest-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\Keychain

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

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getBuilder(</strong><em>mixed</em> <strong>$clientOrderId=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>validate()</strong> : <em>bool True если запрос валиден, false если нет</em><br /><em>Валидирует текущий запрос, проверяет все ли нужные свойства установлены</em> |

*This class extends [\YandexCheckoutPayout\Request\AbstractDepositionRequest](#class-yandexcheckoutpayoutrequestabstractdepositionrequest-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\SynonymCardRequest

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public static | <strong>getBuilder()</strong> : <em>mixed</em> |
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

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>getBuilder(</strong><em>mixed</em> <strong>$clientOrderId=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>validate()</strong> : <em>bool True если запрос валиден, false если нет</em><br /><em>Валидирует текущий запрос, проверяет все ли нужные свойства установлены</em> |

*This class extends [\YandexCheckoutPayout\Request\AbstractDepositionRequest](#class-yandexcheckoutpayoutrequestabstractdepositionrequest-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\Builders\AbstractRequestBuilder (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>build(</strong><em>array</em> <strong>$options=null</strong>)</strong> : <em>AbstractDepositionRequest Инстанс собранного запроса</em><br /><em>Строит запрос, валидирует его и возвращает, если все прошло нормально</em> |
| public | <strong>setOptions(</strong><em>array/\YandexCheckoutPayout\Request\Builders\Traversable</em> <strong>$options</strong>)</strong> : <em>[\YandexCheckoutPayout\Request\Builders\AbstractRequestBuilder](#class-yandexcheckoutpayoutrequestbuildersabstractrequestbuilder-abstract)</em><br /><em>Устанавливает свойства запроса из массива</em> |

<hr />

### Class: \YandexCheckoutPayout\Request\Builders\MakeDepositionRequestBuilder

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$clientOrderId=null</strong>)</strong> : <em>void</em> |

*This class extends [\YandexCheckoutPayout\Request\Builders\AbstractRequestBuilder](#class-yandexcheckoutpayoutrequestbuildersabstractrequestbuilder-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\Builders\SynonymCardRequestBuilder

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |

*This class extends [\YandexCheckoutPayout\Request\Builders\AbstractRequestBuilder](#class-yandexcheckoutpayoutrequestbuildersabstractrequestbuilder-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\Builders\TestDepositionRequestBuilder

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$clientOrderId=null</strong>)</strong> : <em>void</em> |

*This class extends [\YandexCheckoutPayout\Request\Builders\AbstractRequestBuilder](#class-yandexcheckoutpayoutrequestbuildersabstractrequestbuilder-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\Serializers\AbstractRequestSerializer (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>serialize(</strong><em>[\YandexCheckoutPayout\Request\AbstractRequest](#class-yandexcheckoutpayoutrequestabstractrequest-abstract)</em> <strong>$request</strong>)</strong> : <em>void</em> |

<hr />

### Class: \YandexCheckoutPayout\Request\Serializers\BalanceRequestSerializer

| Visibility | Function |
|:-----------|:---------|

*This class extends [\YandexCheckoutPayout\Request\Serializers\AbstractRequestSerializer](#class-yandexcheckoutpayoutrequestserializersabstractrequestserializer-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\Serializers\DepositionRequestSerializer

| Visibility | Function |
|:-----------|:---------|
| public | <strong>serialize(</strong><em>[\YandexCheckoutPayout\Request\AbstractRequest](#class-yandexcheckoutpayoutrequestabstractrequest-abstract)</em> <strong>$request</strong>)</strong> : <em>void</em> |
| public | <strong>serializePaymentParams(</strong><em>mixed</em> <strong>$paymentParams</strong>)</strong> : <em>void</em> |

*This class extends [\YandexCheckoutPayout\Request\Serializers\AbstractRequestSerializer](#class-yandexcheckoutpayoutrequestserializersabstractrequestserializer-abstract)*

<hr />

### Class: \YandexCheckoutPayout\Request\Serializers\SynonymCardRequestSerializer

| Visibility | Function |
|:-----------|:---------|
| public | <strong>serialize(</strong><em>[\YandexCheckoutPayout\Request\SynonymCardRequest](#class-yandexcheckoutpayoutrequestsynonymcardrequest)</em> <strong>$request</strong>)</strong> : <em>void</em> |