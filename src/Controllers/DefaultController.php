<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\RedirectResponseHttp;
use Application\Application\Templating\TwigTrait;

class DefaultController
{
    use TwigTrait;

    public function getHomePage (ServerRequestInterface $request){
        return $this->renderHtml('home.html.twig');
        //dump($request);
    }
    
}