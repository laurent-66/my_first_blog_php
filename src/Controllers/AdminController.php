<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Controllers\AbstractController;

class AdminController extends AbstractController
{
    public function createBlog (ServerRequestInterface $request){
        dump($request);
    }

    public function updateBlog (ServerRequestInterface $request){
        dump($request);
    }

    public function deleteBlog (ServerRequestInterface $request){
        dump($request);
    }

    public function deleteCommentMember (ServerRequestInterface $request){
        dump($request);
    }

}