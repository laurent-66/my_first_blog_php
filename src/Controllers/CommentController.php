<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class CommentController
{
    public function getAllComments (ServerRequestInterface $request){
        var_dump($request);
    }

    public function getComment (ServerRequestInterface $request){
        var_dump($request);
    }

    public function createComment (ServerRequestInterface $request){
        var_dump($request);
    }

    public function updateComment (ServerRequestInterface $request){
        var_dump($request);
    }

    public function deleteComment (ServerRequestInterface $request){
        var_dump($request);
    }

}