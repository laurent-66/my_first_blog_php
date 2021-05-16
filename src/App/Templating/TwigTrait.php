<?php

namespace Application\Application\Templating;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Application\App\Http\ResponseHttp;

trait TwigTrait
{
    protected $templating;

    public function renderHtml(string $template,array $parameters= [])
    {
        $response = new ResponseHttp(
            $this->templating->render($template, $parameters)
        );

        return $response->send();
    }

    private function configureTwig()
    {
        $loader = new FilesystemLoader('/../../../templates');
        $this->templating = new Environment(
            $loader,
            [
                'cache' => '/../../../var/cache/twig',
                'debug' => true,
            ]


            );
    }
}