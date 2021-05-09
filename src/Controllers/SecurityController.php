<?php 
namespace Application\Controllers;

use Application\App\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;

class SecurityController
{
    public function login (ServerRequestInterface $request, ParametersBag $bag){
        //var_dump($request);
        var_dump($bag);
    }

    public function register (ServerRequestInterface $request){
        var_dump($request);
    }



}