<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\RedirectResponseHttp;
use Application\App\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;

class AdminController
{
    use TwigTrait;

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