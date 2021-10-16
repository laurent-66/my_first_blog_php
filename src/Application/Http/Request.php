<?php

namespace Application\Application\Http;

use GuzzleHttp\Psr7\ServerRequest;

class Request extends ServerRequest
{

    public static function createCustomGlobal()
    {
        return self::fromGlobals();
    }

    public function isMethod(string $methodAttempted): bool
    {
        return $this->getMethod() === $methodAttempted;
    }
    public function hasQueryParam(string $paramAttempted): bool
    {
        return array_key_exists($paramAttempted, $this->getQueryParams());
    }
}
