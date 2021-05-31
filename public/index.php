<?php

require_once '../vendor/autoload.php';

use GuzzleHttp\Psr7\ServerRequest;
use Application\Application\Http\Request;
use Application\App\Http\RedirectResponseHttp;
use Application\Application;

session_start();

//$request = ServerRequest::fromGlobals();
$request = Request::fromGlobals();
$application = new Application();

echo $application->run($request);
