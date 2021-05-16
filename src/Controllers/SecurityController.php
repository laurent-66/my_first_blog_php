<?php 
namespace Application\Controllers;

use Application\App\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;

class SecurityController
{
    use TwigTrait;
    
    public function login (ServerRequestInterface $request, ParametersBag $bag){
        dump($request);
        echo "login";
    }

    public function register (ServerRequestInterface $request){
        dump($request);
        echo "register";
    }



}