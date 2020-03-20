<?php

/**
 * The MIT License
 *
 * Copyright (c) 2020 NBCO Yandex.Money LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

use YandexCheckoutPayout\Client;
use YandexCheckoutPayout\Model\Organization;

require_once __DIR__ . '/../autoload.php';

$organizationInfo = [
    'country name' => 'RU',
    'state or province name' => 'Russia',
    'organization name' => '',
    'common name' => '',
    'email address' => '',
    'organizational unit name' => NULL,
    'locality name' => NULL,
];

if (!isset($argv[1])) {
    exit;
}

switch ($argv[1]) {
    case 'get:csr':
        print getCsr($organizationInfo);
        break;
    default:
        exit('Undefined command: ' . $argv[1]);
}

function getCsr($organizationInfo)
{
    $organization = new Organization();

    foreach ($organizationInfo as $name => $defaultValue) {
        if (!is_null($defaultValue)) {
            $question = "$name [$defaultValue]: ";
        } else {
            $question = "$name (isn't required parameter click enter for continue): ";
        }

        do {
            print $question;
            $input = trim(fgets(STDIN));

            if (empty($input) && !is_null($defaultValue)) {
                $answer = $defaultValue;
                if (empty($defaultValue)) {
                    print "Required field: $name cannot be empty" . PHP_EOL;
                    $isValid = false;
                    continue;
                }
            } else {
                $answer = $input;
            }

            if (empty($answer)) {
                continue;
            }

            $setter = getSetterByParameterName($name);
            try {
                $isValid = true;
                $organization->$setter($answer);
            } catch (Exception $e) {
                $isValid = false;
                print $e->getMessage() . PHP_EOL;
            }

        } while (!$isValid);
    }

    print "Input output dir for privateKey and request.csr[".__DIR__."]: ";
    $input = trim(fgets(STDIN));
    $outputDir = empty($input) ? __DIR__ : $input;

    print "Input password for privateKey (is't required parameter click enter for continue): ";
    $input = trim(fgets(STDIN));
    $privateKey = empty($input) ? '' : $input;

    $client = new Client();

    try {
        $result = $client->createCsr($organization, $outputDir, $privateKey);
    } catch (Exception $e) {
        return 'Error: ' . $e->getMessage() . PHP_EOL . 'Try again please';
    }

    return $result;
}

function getSetterByParameterName($name) {
    $parts = explode(' ', $name);
    $setterName = 'set';
    foreach ($parts as $part) {
        $setterName .= ucfirst($part);
    }
    return $setterName;
}

$input = fgets(STDIN);