<?php 
namespace Application\Controllers;

use Application\App\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\ResponseHttp;

class SecurityController
{
    public function login (ServerRequestInterface $request, ParametersBag $bag){
        var_dump($request);
        var_dump($bag);
        $response = new ResponseHttp("test");
        return $response->send();
    }

    public function register (ServerRequestInterface $request){
        var_dump($request);
    }



}