<?php

namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Helpers\Mailer;

class DefaultController extends AbstractController
{

    protected $mailer;

    public function __construct()
    {
        $this-> mailer = new Mailer();
    }

    public function getHomePage(ServerRequestInterface $request, ParametersBag $bag)
    {

        $error = '';
        $errorMail = '';

        if ($request->getMethod() === 'POST') {
            $dataSubmitted = $request->getParsedBody();

            if (
                (strlen(trim($dataSubmitted['firstname']))) === 0 ||
                (strlen(trim($dataSubmitted['name']))) === 0 ||
                (strlen(trim($dataSubmitted['email']))) === 0 ||
                (strlen(trim($dataSubmitted['message']))) === 0
            ) {
                $error = 'Tout les champs sont requis';
            } if (strpos($dataSubmitted['email'], '@') === false) {
                $errorMail = 'Votre email doit comporter un arobase.';
            } else {
                $sendMail = $this->mailer->send(
                    $dataSubmitted['message'],
                    'lesageduweb@gmail.com',
                    $dataSubmitted['email'],
                    $this->renderHtml('mails/hello.html.twig', [

                    'firstname' => $dataSubmitted['firstname'],
                    'name' => $dataSubmitted['name'],
                    'email' => $dataSubmitted['email'],
                    'phone' => $dataSubmitted['phone'],
                    'message' => $dataSubmitted['message']
                    ])
                );

                if ($sendMail) {
                    $validation = 'Votre message a été envoyé';
                } else {
                    $errorGlobal = 'erreur d\'envoi du message';
                }
            }
        }

        $errorGlobal = '';
        return $this->renderHtml('home.html.twig', ['error' => $error,'errorMail' => $errorMail]);
    }
}
