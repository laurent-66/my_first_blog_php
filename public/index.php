<?php

require_once '../vendor/autoload.php';

use GuzzleHttp\Psr7\ServerRequest;
use Application\App\Http\Request;
use Application\App\Http\RedirectResponseHttp;
use Application\Application;

session_start();

$request = ServerRequest::fromGlobals();
$application = new Application();
$test = $application->run($request);
var_dump($test);


