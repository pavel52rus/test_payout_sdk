<?php

namespace Tests\YandexCheckoutPayout\Common\Exceptions;

use YandexCheckoutPayout\Common\Exceptions\AuthorizeException;

class AuthorizeExceptionTest extends ApiExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new AuthorizeException($message, $code, $responseHeaders, $responseBody);
    }
}
