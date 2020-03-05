<?php

namespace Tests\YandexCheckoutPayout\Common\Exceptions;

use YandexCheckoutPayout\Common\Exceptions\TooManyRequestsException;

class TooManyRequestsExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new TooManyRequestsException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return TooManyRequestsException::HTTP_CODE;
    }
}
