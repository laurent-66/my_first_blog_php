<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class SecurityController
{
    public function login (ServerRequestInterface $request){
        var_dump($request);
    }
}