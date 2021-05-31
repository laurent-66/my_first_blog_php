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

/* hometest.html.twig */
class __TwigTemplate_1a00a32ae7e85c8f5ce07b5af8607493e6ca274b633a87bbb785ca2816b48bea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "hometest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1>Mon titre</h1>
<form>
    <input type=\"text\" name=\"name\" />
    <button type=\"submit\">Envoyer</button>

</form>
";
    }

    public function getTemplateName()
    {
        return "hometest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<h1>Mon titre</h1>
<form>
    <input type=\"text\" name=\"name\" />
    <button type=\"submit\">Envoyer</button>

</form>
{% endblock %}    ", "hometest.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\hometest.html.twig");
    }
}
