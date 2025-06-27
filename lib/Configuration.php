<?php

namespace Finnhub;

class Configuration
{
    private $apiKey;
    private static $defaultConfiguration;

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }
        return self::$defaultConfiguration;
    }
} 