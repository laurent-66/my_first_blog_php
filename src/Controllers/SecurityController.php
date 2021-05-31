<?php 
namespace Application\Controllers;

use Application\Application\Http\ParametersBag;
use Application\Application\Http\RedirectResponseHttp;
use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Repository\UserRepository;

class SecurityController
{
    use TwigTrait;

    protected $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository;

    }


    public function login (ServerRequestInterface $request, ParametersBag $bag)
    {   
        //création d'un password provisoire

        dump(password_hash('123456', PASSWORD_DEFAULT));

        $error = ''; 
        if ($request->getMethod() === 'POST'){
            $dataSubmitted = $request->getParsedBody();
            if (  (strlen( trim($dataSubmitted['identifiant']))) === 0 || strlen(trim($dataSubmitted['inputPassword'])) === 0 ){
                //TODO Create error
                $error = "L'identifiant et le mot de passe sont requis.";
            } else {

                $user = $this->userRepository->findByEmail($dataSubmitted['email']);
                if(!$user || !password_verify($dataSubmitted['password'], $user['password'])) {
                    $error = "Identifiants invalides";
                } else { 
                    $_SESSION['user'] = $user;
                    $response = new RedirectResponseHttp('/');
                    $response->send();
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
            if ((strlen( trim($dataSubmitted['identifiant']))) === 0 || strlen(trim($dataSubmitted['inputPassword'])) === 0 || strlen(trim($dataSubmitted['confirmPassword'])) === 0 ) {

                //TODO Create error
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


}