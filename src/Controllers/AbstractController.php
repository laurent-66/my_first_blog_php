<?php

namespace Application\Controllers;

use Application\Application\Templating\TwigTrait;

abstract class AbstractController
{
    use TwigTrait;

    protected function isAuthenticated()
    {
    }
}
