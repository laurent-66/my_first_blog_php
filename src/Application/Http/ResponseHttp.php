<?php

namespace Application\Application\Http;

use GuzzleHttp\Psr7\PumpStream;
use GuzzleHttp\Psr7\Stream;
use Psr\Http\Message\StreamInterface;
use GuzzleHttp\Psr7\Response;

class ResponseHttp implements ResponseHttpInterface
{
    protected $datas;
    protected $statusCode;
    protected $additionnalHeaders;

    public function __construct(string $datas, int $statusCode = 200, array $additionnalHeaders = [])
    {
        $this->datas = $datas;
        $this->statusCode = $statusCode;
        $this->additionnalHeaders = $additionnalHeaders;
    }

    public function send()
    {
        $response = new Response(
            $this->statusCode,
            array_merge(
                ['content-Type' => 'text/html'],
                $this-> additionnalHeaders
            ),
            $this->datas
        );
        return $response->getBody();
    }
}
