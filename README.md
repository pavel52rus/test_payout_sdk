# Yandex.Checkout Payout API PHP Client Library

[![Build Status](https://travis-ci.org/pavel52rus/test_payout_sdk.svg?branch=master)](https://travis-ci.org/pavel52rus/test_payout_sdk)

Клиент для работы по [Протоколу массовых выплат](https://kassa.yandex.ru/tech/payout/config.html)

## Возможности
С помощью этого SDK вы можете:
1. [Генерировать сертификат](https://kassa.yandex.ru/tech/ssl.html)﻿ для взаимодействия с Яндекс.Кассой.
2. [Переводить деньги﻿](https://kassa.yandex.ru/tech/payout/payments.html) физическим лицам на кошельки в Яндекс.Деньгах, номера мобильных телефонов, банковские карты и счета (makeDeposition).
3. [Проверять возможность](https://kassa.yandex.ru/tech/payout/payments.html#payments__testdeposition) зачисления переводов на кошельки в Яндекс.Деньгах (testDeposition).
3. Отслеживать баланс выплат (balance).
3. [Получать уведомления](https://kassa.yandex.ru/tech/payout/notification-error.html) о неуспешном статусе переводов на банковский счет, карту, мобильный телефон (errorDepositionNotification).

## Требования
PHP 5.6.0 (и выше) с расширением libcurl и libxml

## Установка
Установите SDK одним из трех способов
- [с помощью менеджера пакетов Composer](#в-консоли-с-помощью-composer);
- [с помощью файла composer.json](#в-файле-composerjson-своего-проекта);
- [вручную](#вручную).

### В консоли с помощью Composer
1. Установите менеджер пакетов Composer.
2. В консоли выполните команду
```bash
composer require yandex-money/yandex-checkout-payout-sdk-php
```

### В файле composer.json своего проекта
1. Добавьте строку `"yandex-money/yandex-checkout-payout-sdk-php": "*"` в список зависимостей вашего проекта в файле composer.json
```
...
    "require": {
        "php": ">=5.6.0",
        "yandex-money/yandex-checkout-payout-sdk-php": "*"
...
```
2. Обновите зависимости проекта: в консоли перейдите в каталог с файлом composer.json и выполните команду:
```bash
composer update
```
3. В коде вашего проекта подключите автозагрузку файлов SDK Яндекс.Кассы:
```php
require __DIR__ . '/vendor/autoload.php';
```

### Вручную
1. Скачайте архив [Yandex.Checkout Payout API PHP Client Library](https://github.com/yandex-money/yandex-checkout-payout-sdk-php/archive/master.zip), распакуйте его и скопируйте каталог lib в папку вашего проекта, где будет размещен SDK.
2. В коде вашего проекта подключите автозагрузку файлов SDK Яндекс.Кассы:
```php
require __DIR__ . '/lib/autoload.php'; 
```

## Получение сертификата для аутентификации запросов
Для взаимодействия с Яндекс.Кассой необходимо получить сертификат. Для этого:
1. Создайте приватный ключ и запрос на получение сертификата (CSR).
2. Заполните заявку на сертификат.
3. Обменяйтесь данными с Яндекс.Кассой.

### Шаг 1. Создание приватного ключа и CSR
#### С помощью метода SDK
1. мпортируйте классы для создания CSR
```
use YandexCheckoutPayout\Client;
use YandexCheckoutPayout\Model\Organization;
```
2. Создайте экземпляр класса `Organization` с данными для создания заявки. Все данные нужно вводить латиницей.
```
$organization = new Organization();
$organization->setEmailAddress('test@mail.ru') //Адрес электронной почты
             ->setOrganizationName('ooo sdk.com') //Название вашей организации (латиницей)
             ->setCommonName('/business/test123'); //Имя сервера без пробелов, например название вашей организации; должно начинаться с «/business/»
```
3. Создайте CSR и приватный ключ.
```
$client->createCsr($organization, './output/', '') //Укажите место, куда должны сохраниться файлы, и пароль для приватного ключа (при необходимости)
```
В результате SDK сгенерирует приватный ключ, CSR и текстовый файл с электронной подписью (нужно для дальнейших шагов).

#### Через консоль
1. В консоли перейдите в папку вашего проекта, где расположен SDK.
```
cd <путь к SDK>
```
2. Выполните команду:
```
php bin/yamoney get:csr
```
3. Введите данные для сертификата, следуя указаниям на экране. Текст необходимо вводить латинскими буквами. 
В результате SDK сгенерирует приватный ключ, CSR и текстовый файл с электронной подписью (нужно для дальнейших шагов).

### Шаг 2. Заполнение заявки на сертификат
[Скачайте заявку](https://kassa.yandex.ru/docs/ssl_cert_form.doc) на сертификат, заполните и распечатайте. Поставьте подпись и печать. Отсканируйте.

|**Параметр**|**Описание**|
|:-----------|:---------|
|CN|Должно соответствовать значению параметра Common Name (eg, YOUR name). Например, /business/predpriyatie.|
|Электронная подпись запроса на сертификат|Текстовое представление, полученное на предыдущем шаге.|
|Наименование организации латинскими буквами|Должно соответствовать значению параметра Organization Name (eg, company) [Internet Widgits Pty Ltd].|
|<span align="top">Причина запроса</span>|Возможные варианты: <ul><li>первоначальный — для получения первого сертификата;</li><li>плановая замена — для замены сертификата, у которого закончился срок действия;</li><li>замена скомпрометированного — для замены ранее выпущенного сертификата при нарушении безопасности;</li><li>добавление сервера — для использования нового сертификата на дополнительных серверах или сервисах.</li></ul> |
|Контактное лицо (ФИО, телефон, e-mail)|Контакты специалиста для связи при возникновении вопросов по выданному сертификату.|

### Шаг 3. Обмен данными с Яндекс.Кассой
Отправьте файл запроса на сертификат (request.csr) и скан заявки по электронной почте своему менеджеру Яндекс.Кассы. В ответ на заявку менеджер в течение 2 рабочих дней пришлет файл с сертификатом. Срок действия сертификата 1 год.  
Разместите полученный сертификат на своем сервере

## Начало работы
1. Определите, какие виды выплат вам нужны и хотите ли вы проверять баланс.
2. Импортируйте обязательные классы
```php
use YandexCheckoutPayout\Client;
use YandexCheckoutPayout\Request\Keychain;
```
3. Импортируйте классы, необходимые для решения ваших задач.
4. Создайте экземпляр класса `Keychain`, передав в него путь к публичному ключу, путь к приватному ключу и, при необходимости, пароль приватного ключа..
```php
$keychain = new Keychain('publicCert.cer', 'privateCert.pem', 'password');
```
5. Создайте экземпляр класса `Client` и передайте идентификатор шлюза из [личного кабинета](https://kassa.yandex.ru/my) Яндекс.Кассы и экземпляр класса `Keychain`.
```php
$client = new Client('000000', $keychain);
```
6. Вызовите нужный метод. [Подробнее о проведении выплат](https://kassa.yandex.ru/tech/payout/config.html)

#### Пример выплаты на банковский счет
```
// Импорт классов
use YandexCheckoutPayout\Client;
use YandexCheckoutPayout\Model\Recipient\BankAccountRecipient;
use YandexCheckoutPayout\Request\Keychain;
use YandexCheckoutPayout\Request\MakeDepositionRequest;

// Создание ключницы и экземпляра клиента
$keychain = new Keychain('./250000.cer', './privateKey.pem', 12345);
$client  = new Client('250000', $keychain);

// Подготовка данных о получателе выплаты
$recipient = new BankAccountRecipient();
$recipient->setPdrLastName('Иванов')
           ->setPdrFirstName('Иван')
           ->setPdrMiddleName('Иванович')
           ->setDocNumber('1234567890')
           ->setPofOfferAccepted(true)
           ->setPdrDocIssueDate('01.02.2018')
           ->setSmsPhoneNumber('79099585455')
           ->setPaymentPurpose('Назначение выплаты')->setBankBIK(5435435435)->setBankCorAccount('');

// Проведение выплаты
$deposition = new MakeDepositionRequest();
$deposition->setDstAccount('25700120202056919')
       ->setAmount(100)
       ->setCurrency(CurrencyCode::RUB)
       ->setContract('test')
       ->setPaymentParams($recipient);
