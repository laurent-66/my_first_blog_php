<?php 
namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\App\Http\RedirectResponseHttp;
use Application\App\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;

class BlogPostController
{
    use TwigTrait;
    
    public function getAllBlogs (ServerRequestInterface $request){
        dump($request);
    }

    public function getBlog (ServerRequestInterface $request){
        dump($request);
    }

    public function getAllComments (ServerRequestInterface $request){
        dump($request);
    }

    public function getComment (ServerRequestInterface $request){
        dump($request);
    }

    public function createComment (ServerRequestInterface $request){
        dump($request);
    }

    public function updateComment (ServerRequestInterface $request){
        dump($request);
    }

    public function deleteComment (ServerRequestInterface $request){
        dump($request);
    }










}