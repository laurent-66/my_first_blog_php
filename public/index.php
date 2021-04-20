<?php

use GuzzleHttp\Psr7\ServerRequest;

require_once '/../vendor/autoload.php';

session_start();

//utilisation de la class ServerRequest
$request = ServerRequest::fromGlobals();

//on peut personnalisé également par une classe fille de ServerRequest




echo("je suis la page d'accueil de php") ;
echo("test !");
?>