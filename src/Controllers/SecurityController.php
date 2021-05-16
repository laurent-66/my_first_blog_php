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
        return $this->renderHtml('login.html.twig');
    }

    public function register (ServerRequestInterface $request, ParametersBag $bag){
        dump($request);
        return $this->renderHtml('register.html.twig');
    }

}