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

/* mails/hello.html.twig */
class __TwigTemplate_2746a07ac8bc030a1ca563ed3a74d21e011af474a218ee6155aefe3f02858ce4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "mails/base_mail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("mails/base_mail.html.twig", "mails/hello.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<style>
h1 {
    color: blue;
}
</style>

";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
<h3><strong>Message venant de ";
        // line 15
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</strong></h3>

<p>
";
        // line 18
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
</p>
<p> Prénom: ";
        // line 20
        echo twig_escape_filter($this->env, ($context["firstname"] ?? null), "html", null, true);
        echo " <br>
Nom: ";
        // line 21
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</p>
<p>Téléphone: ";
        // line 22
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "mails/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  84 => 21,  80 => 20,  75 => 18,  69 => 15,  66 => 14,  62 => 13,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'mails/base_mail.html.twig' %}

{% block  style %}

<style>
h1 {
    color: blue;
}
</style>

{% endblock %}

{% block body %}

<h3><strong>Message venant de {{email}}</strong></h3>

<p>
{{message}}
</p>
<p> Prénom: {{firstname}} <br>
Nom: {{name}}</p>
<p>Téléphone: {{phone}}</p>

{% endblock %}", "mails/hello.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\mails\\hello.html.twig");
    }
}
