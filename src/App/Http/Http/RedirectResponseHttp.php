<?php

namespace Application\App\Http;

use Psr\Http\Message\ResponseInterface;


class RedirectResponseHttp implements ResponseHttpInterface
{
    protected  $uriToRedirect;

    public function __construct(string $uriToRedirect)
    {
        $this->uriToRedirect = $uriToRedirect;
    }

    public function send(){
        header( 'location: '.$this->uriToRedirect);
    }

}
