<?php

namespace Finnhub;

class ApiException extends \Exception
{
    protected $responseHeaders;
    protected $responseBody;

    public function __construct($message = "", $code = 0, $responseHeaders = null, $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    public function getResponseBody()
    {
        return $this->responseBody;
    }
} 