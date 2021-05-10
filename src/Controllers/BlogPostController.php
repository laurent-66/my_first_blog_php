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

    }

    public function createBlog (ServerRequestInterface $request){

    }

    public function updateBlog (ServerRequestInterface $request){

    }

    public function deleteBlog (ServerRequestInterface $request){

    }

    public function getAllComments (ServerRequestInterface $request){

    }

    public function getComment (ServerRequestInterface $request){

    }

    public function createComment (ServerRequestInterface $request){

    }

    public function updateComment (ServerRequestInterface $request){

    }

    public function deleteComment (ServerRequestInterface $request){

    }










}