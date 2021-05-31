<?php

namespace Application\Application\Templating;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Application\Application\Http\ResponseHttp;

trait TwigTrait
{
    protected $templating;

    public function renderHtml(string $template,array $parameters= [])
    {
        $this->configureTwig();
        $response = new ResponseHttp(
            $this->templating->render($template, $parameters)
        );

        return $response->send();
    }

    private function configureTwig()
    {
        $loader = new FilesystemLoader(__DIR__.'/../../../templates');
        $this->templating = new Environment(
            $loader,
            [
                'cache' => __DIR__.'/../../../var/cache/twig',
                'debug' => true,
            ]

        );
    }
}
