<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Templating\TwigTrait;


class DefaultController extends AbstractController
{
    use TwigTrait;

    public function getHomePage(ServerRequestInterface $request, ParametersBag $bag){
        dump($_SESSION);
        return $this->renderHtml('home.html.twig');


    }
    
}