<?php 
namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;

class CommentController extends AbstractController
{

    public function getAllComments (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blog/comments");
        $response->send();
    }

    public function getComment (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blog/comments/{id}");
        $response->send();
    }

    public function createComment (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blog/newComment");
        $response->send();
    }

    public function updateComment (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blog/updateComment/{id}");
        $response->send();
    }

    public function deleteComment (ServerRequestInterface $request){
        $response = new RedirectResponseHttp("/blog/deleteComment/{id}");
        $response->send();
    }

}