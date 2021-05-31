<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;

class CommentController extends AbstractController
{
    use TwigTrait;

    public function getAllComments (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blogs/{id}");
        $response->send();
    }

    public function getComment (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blogs/{id}");
        $response->send();
    }

    public function createComment (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blogs/{id}");
        $response->send();
    }

    public function updateComment (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blogs/{id}");
        $response->send();
    }

    public function deleteComment (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blogs/{id}");
        $response->send();
    }

}