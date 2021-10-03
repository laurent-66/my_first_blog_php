<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mails/base_mail.html.twig */
class __TwigTemplate_60a8ba5e4ceed352b3b860c39c819c005ebd402b4829d6b0715e72431946d01e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    ";
        // line 10
        $this->displayBlock('style', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "</body>
</html>";
    }

    // line 10
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    
    ";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "mails/base_mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  71 => 14,  66 => 11,  62 => 10,  57 => 17,  55 => 14,  52 => 13,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    {% block  style %}
    
    {% endblock %}

    {% block body %}

    {% endblock %}
</body>
</html>", "mails/base_mail.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\mails\\base_mail.html.twig");
    }
}
