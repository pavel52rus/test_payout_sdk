# Yandex.Checkout Payout API PHP Client Library

[![Build Status](https://travis-ci.org/pavel52rus/test_payout_sdk.svg?branch=master)](https://travis-ci.org/pavel52rus/test_payout_sdk)

Russian | [English](https://github.com/yandex-money/yandex-checkout-sdk-php/blob/master/README.en.md)

Клиент для работы с платежами по [API Яндекс.Кассы](https://kassa.yandex.ru/docs/checkout-api/)
Подходит тем, у кого способ подключения к Яндекс.Кассе называется API.

## Требования
PHP 5.6.0 (и выше) с расширением libcurl

## Установка
### В консоли с помощью Composer

1. Установите менеджер пакетов Composer.
2. В консоли выполните команду
```bash
composer require yandex-money/yandex-checkout-sdk-php
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
2. Обновите зависимости проекта. В консоли перейдите в каталог, где лежит composer.json, и выполните команду:
```bash
composer update
```
3. В коде вашего проекта подключите автозагрузку файлов нашего клиента:
```php
require __DIR__ . '/vendor/autoload.php';
```

### Вручную

1. Скачайте [архив Yandex.Checkout PAYOUT API PHP Client Library](https://github.com/yandex-money/yandex-checkout-payout-sdk-php/archive/master.zip), распакуйте его и скопируйте каталог lib в нужное место в вашем проекте.
2. В коде вашего проекта подключите автозагрузку файлов нашего клиента:
```php
require __DIR__ . '/lib/autoload.php'; 
```

## Начало работы

1. Импортируйте нужные классы
```php
use YandexCheckoutPayout\Client;
use YandexCheckoutPayout\Request\Keychain;
```
2. Создайте экземпляр объекта ключницы передав туда данные ваших сертификатов, затем создайте экземпляр объекта клиента и задайте идентификатор шлюза, передайте объект ключницы.
```php
$keychain = new Keychain('publicCert.cer', 'privateCert.pem', 'password');
$client = new Client('000000', $keychain);
```
3. Вызовите нужный метод API. [Подробнее в документации к API Яндекс.Кассы](https://kassa.yandex.ru/)
