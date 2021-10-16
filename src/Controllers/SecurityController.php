<?php

namespace Application\Controllers;

use Application\Application\Http\ParametersBag;
use Application\Application\Http\RedirectResponseHttp;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Repository\UserRepository;
use Application\Repository\AbstractRepository;
use Application\Controllers\AbstractController;

class SecurityController extends AbstractController
{

    protected $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function login(ServerRequestInterface $request, ParametersBag $bag)
    {


        $error = '';

        if ($request->getMethod() === 'POST') {
            $dataSubmitted = $request->getParsedBody();

            if ((strlen(trim($dataSubmitted['email']))) === 0 || strlen(trim($dataSubmitted['inputPassword'])) === 0) {
                $error = "L'identifiant et le mot de passe sont requis.";
            } else {
                $user = $this->userRepository->findByEmail($dataSubmitted['email']);
                if (!$user || !password_verify($dataSubmitted['inputPassword'], $user['password'])) {
                    $error = "Identifiants invalides";
                } else {
                    $_SESSION['user'] = $user;
                    $response = new RedirectResponseHttp('/');

                    return $response->send();

                    $validation = "vous êtes bien connecté";
                }
            }
        }
        return $this->renderHtml('login.html.twig', ['error' => $error]);
    }


    public function register(ServerRequestInterface $request, ParametersBag $bag)
    {
        $error = '';

        if ($request->getMethod() === 'POST') {
            $dataSubmitted = $request->getParsedBody();

            if (
                (strlen(trim($dataSubmitted['email']))) === 0 ||
                (strlen(trim($dataSubmitted['pseudo']))) === 0 ||
                (strlen(trim($dataSubmitted['inputPassword']))) === 0 ||
                (strlen(trim($dataSubmitted['confirmPassword']))) === 0
            ) {
                $error = 'Tout les champs sont requis.';
            } elseif (
                strlen(trim($dataSubmitted['inputPassword']))
                !== strlen(trim($dataSubmitted['confirmPassword']))
            ) {
                $error = 'Le mot de passe et la confirmation sont différents.';
            } else {
                $passwordHash = password_hash($dataSubmitted['inputPassword'], PASSWORD_DEFAULT);
                $this->userRepository->registerUser($dataSubmitted['pseudo'], $dataSubmitted['email'], $passwordHash);
            }
        }

        return $this->renderHtml('register.html.twig', ['error' => $error]);
    }


    public function disconnect(ServerRequestInterface $request, ParametersBag $bag)
    {
        $validate = '';
        $error = '';
        $user = $_SESSION['user'];

            session_destroy();

            $validate = "Vous êtes maintenant déconnecté.";

            $result = new RedirectResponseHttp('/se-connecter');
            return $result->send();
    }
}
