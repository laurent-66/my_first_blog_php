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
        $this->userRepository = new UserRepository;
    }

    public function login (ServerRequestInterface $request, ParametersBag $bag)
    {   
        //création d'un password provisoire

 

        $error = ''; 
        if ($request->getMethod() === 'POST'){
            $dataSubmitted = $request->getParsedBody();
            if (  (strlen( trim($dataSubmitted['email']))) === 0 || strlen(trim($dataSubmitted['inputPassword'])) === 0 ){
                $error = "L'identifiant et le mot de passe sont requis.";
            } else {

                $user = $this->userRepository->findByEmail($dataSubmitted['email']);
                if(!$user || !password_verify($dataSubmitted['inputPassword'], $user['password'])) {
                    $error = "Identifiants invalides";
                } else { 
                    $_SESSION['user'] = $user;
                    $response = new RedirectResponseHttp('/');
                    return $response->send();
                }

                dump($user);
            }

        }
        return $this->renderHtml('login.html.twig', ['error' => $error]);

    }


    public function register (ServerRequestInterface $request, ParametersBag $bag)
    {
        $error = ''; 

        if ($request->getMethod() === 'POST'){
            $dataSubmitted = $request->getParsedBody();
            if ((strlen( trim($dataSubmitted['email']))) === 0 || strlen(trim($dataSubmitted['inputPassword'])) === 0 || strlen(trim($dataSubmitted['confirmPassword'])) === 0 ) {

                $error = "L'identifiant, le mot de passe et la confirmation sont requis.";


            } else if (strlen(trim($dataSubmitted['inputPassword'])) !== strlen(trim($dataSubmitted['confirmPassword']))) {
                
                    echo "erreur !";
                    $error = "Le mot de passe et la confirmation sont différents.";

            } else {

                    echo "effectue la connexion";

            }
        }

        return $this->renderHtml('register.html.twig',['error' => $error]);

    }



    public function disconnect (ServerRequestInterface $request, ParametersBag $bag)
    {   
        $validate = ''; 
        if ($request->getMethod() === 'GET'){
            $dataSubmitted = $request->getParsedBody();
            if (  (strlen( trim($dataSubmitted['disconnect']))) === 'disconnect' ){

                $this->userRepository->disconnect(
                    session_destroy()
                );

                $validate = "Vous êtes maintenant déconnecté.";
            } else {

                $error = "erreur de déconnexion";

            }

        }
        return $this->renderHtml('login.html.twig');

    }















}