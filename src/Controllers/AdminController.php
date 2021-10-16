<?php

namespace Application\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Application\Application\Http\RedirectResponseHttp;
use Application\Application\Http\ResponseHttp;
use Application\Application\Templating\TwigTrait;
use Application\Controllers\AbstractController;
use Application\Application\Http\ParametersBag;
use Application\Repository\BlogRepository;
use Application\Exceptions\NotFoundException;
use Application\Repository\CommentRepository;
use Application\Helpers\FileUploader;
use Exception;

class AdminController extends AbstractController
{

    protected $blogRepository = '';
    protected $uploadFile;

    public function __construct()
    {
        $this->blogRepository = new BlogRepository();

        $this->commentRepository = new CommentRepository();
    }

    public function createBlog(ServerRequestInterface $request, ParametersBag $bag)
    {
        $error = '';
        if ($request->getMethod() === 'POST') {
            //récupération de données du post dans un tableau
            $dataArray = $request->getParsedBody();

            //récupération image
            $file = $request->getUploadedFiles()['file_input_name'];

            if (
                strlen(trim($dataArray['title-blog'] === 0)) ||
                $file->getSize() === 0 ||
                strlen(trim($dataArray['inputChapo'] === 0)) ||
                strlen(trim($dataArray['content'] === 0))
            ) {
                $error = 'Tous les champs requis sont obligatoires y compris l\' insertion d\'image';
            } else {
                $datasAfterUpload = FileUploader::uploadFile($_FILES['file_input_name']);

                if ($datasAfterUpload['isSuccess']) {
                    //Ajout de la valeur du nom du fichier au tableau $dataSubmitted
                    $dataArray['file_input_name'] = $datasAfterUpload['filename'];

                    //création du blog
                    $this->blogRepository->createBlog($dataArray);

                    //redirection sur la page courante (get)
                    $redirect = new RedirectResponseHttp('/blogs');
                    return $redirect->send();
                }
            }
        }
        return $this->renderHtml('newBlog.html.twig', ['error' => $error]);
    }


    public function updateBlog(ServerRequestInterface $request, ParametersBag $bag)
    {

        //Récupération de la valeur de l'id blog $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();
        //récupération du blog présent pour préremplir les champs
        $blog = $this->blogRepository->findByBlogId($id);

        //vérification du type de requête si http null, POST ou GET(par defaut)

        if (is_null($blog)) {
            //TODO Except exeception Not found
            throw new NotFoundException('le blog n\'existe pas');
        }

        $error = '';

        if ($request->getMethod() === 'POST') {
            //récupération de données du post dans un tableau
            $dataSubmitted = $request->getParsedBody();

            //récupération image
            $file = $request->getUploadedFiles()['file_input_name'];

            if (
                strlen(trim($dataSubmitted['title-blog'] === 0)) ||
                $file->getSize() === 0 ||
                strlen(trim($dataSubmitted['inputChapo'] === 0)) ||
                strlen(trim($dataSubmitted['content'] === 0))
            ) {
                $error = 'Tous les champs requis sont obligatoires y compris l\' insertion d\'image';
            } else {
                try {
                    $datasAfterUpload = FileUploader::uploadFile($_FILES['file_input_name']);

                    if ($datasAfterUpload['isSuccess']) {
                        //Ajout de la valeur du nom du fichier au tableau $dataSubmitted
                        $dataSubmitted['file_input_name'] = $datasAfterUpload['filename'];

                        // execution de la requête de mise à jour
                        $this->blogRepository->updateBlog($dataSubmitted, $id);

                        //redirection sur la page courante (get)
                        $redirect = new RedirectResponseHttp('/blogs/admin/dashboard');
                        return $redirect->send();
                    }
                } catch (\Exception $e) {
                    dump($e);
                    exit;
                }
            }
        }

        //page formulaire préremplie (get)
        return $this->renderHtml('updateBlog.html.twig', ['blog' => $blog,'error' => $error]);
    }


    public function deleteBlog(ServerRequestInterface $request, ParametersBag $bag)
    {

        //Récupération de la valeur de l'id blog $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();

        //supprime tout les commentaires du blog avant la suppression de celui-ci

        $this->commentRepository->deleteAllCommentBlog($id);

        //supprime le blog

        $this->blogRepository->deleteBlog($id);

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs/admin/dashboard');
        return $redirect->send();
    }

    public function dashboard(ServerRequestInterface $request, ParametersBag $bag)
    {
        //Check if administrator session is open
        if (!array_key_exists('user', $_SESSION) || $_SESSION['user']['admin'] != "1") {
            $redirect = new RedirectResponseHttp('/');
            return $redirect->send();
        }
        //get all blogs list
        $commentsNotValidate = $this->commentRepository->findAllcommentsNotValidate();
        $user = $_SESSION['user']['admin'];
        $blogs = $this->blogRepository->getAllBlog();

        return $this->renderHtml(
            'dashboardAdmin.html.twig',
            ['blogs' => $blogs,'commentsNotValidate' => $commentsNotValidate,'user' => $user]
        );
    }

    public function getBlog(ServerRequestInterface $request, ParametersBag $bag)
    {

        $user = $_SESSION['user']['admin'];


        $id = (int) $bag->getParameter('id')->getValue();

        $blog = $this->blogRepository->findByBlogId($id);

        if ($request->getMethod() === 'POST') {
            //récupération de données du post dans un tableau
            $dataArray = $request->getParsedBody();
            //création d'un commentaire
            $this->commentRepository->submitComment($dataArray, $id);
            //redirection sur la page courante (get)
            $redirect = new RedirectResponseHttp('/blogs/' . $id);
            return $redirect->send();
        }

        $findComments = $this->commentRepository->findCommentsByBlogId($id);
        return $this->renderHtml('blog.html.twig', ['blog' => $blog,'findComments' => $findComments, 'user' => $user]);
    }

    public function approveComment(ServerRequestInterface $request, ParametersBag $bag)
    {

        //Récupération de la valeur de l'id comment $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();

        // $findComments = $this->commentRepository->findCommentsByBlogId($id);

        $this->commentRepository->approveComment($id);

        $idblog = (int) $bag->getParameter('blogId')->getValue();

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs/admin/dashboard');
        return $redirect->send();
    }

    public function deleteComment(ServerRequestInterface $request, ParametersBag $bag)
    {

        //Récupération de la valeur de l'id comment $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();
        $this->commentRepository->deleteComment($id);

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs/admin/dashboard');
        return $redirect->send();
    }

    public function reportComment(ServerRequestInterface $request, ParametersBag $bag)
    {

        //Récupération de la valeur de l'id comment $id du $bag
        $id = (int) $bag->getParameter('id')->getValue();
        $idBlog = (int) $bag->getParameter('blogId')->getValue();

        $this->commentRepository->reportComment($id);

        //redirection sur la page courante (get)
        $redirect = new RedirectResponseHttp('/blogs/' . $idBlog);

        return $redirect->send();
    }
}
