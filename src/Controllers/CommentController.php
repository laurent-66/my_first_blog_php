<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\RedirectResponseHttp;
use Application\App\Http\ResponseHttp;

class CommentController
{
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