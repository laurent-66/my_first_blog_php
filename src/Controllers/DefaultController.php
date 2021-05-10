<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\RedirectResponseHttp;

class DefaultController
{
    public function getHomePage (ServerRequestInterface $request){

        $response = new RedirectResponseHttp('/accueil');
        $response->send();

    }










    
}