<?php

require_once '../vendor/autoload.php';

use GuzzleHttp\Psr7\ServerRequest;
use Application\App\Http\Request;
use Application\App\Http\RedirectResponseHttp;
use Application\Application;

session_start();

$request = ServerRequest::fromGlobals();


$application = new Application();

$application->run($request);







//$request = Request::createCustomGlobal();
//utilisation de la class Request extension de ServerRequest
//$request = Request::fromGlobals();
//if($request->isMethod('POST')){

//}


//redirection
//$response = new RedirectResponseHttp('/home.php');

//$response->send();