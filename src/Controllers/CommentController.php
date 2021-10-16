<?php

namespace Application\Controllers;

use Application\Controllers\AbstractController;
use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Http\ParametersBag;
use Application\Repository\CommentRepository;
use Application\Repository\BlogRepository;

class CommentController extends AbstractController
{
    private $CommentRepository;
    public function __construct()
    {
        $this->blogRepository = new BlogRepository();
        $this->CommentRepository = new CommentRepository();
    }
}
