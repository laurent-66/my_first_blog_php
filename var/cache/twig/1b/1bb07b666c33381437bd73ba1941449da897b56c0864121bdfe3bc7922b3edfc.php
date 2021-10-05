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

/* register.html.twig */
class __TwigTemplate_8678427f99d7a8790902d4ce6370a15ebae427db08c27740d14b9b1176ba7c14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"register\">
    <div class=\"heading\">
        <h2>Inscription</h2>
    </div>
    <div class=\"container\">

            <div class=\"box_register\">
                ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 13
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 16
        echo "
                <form class=\"form-signin\" action=\"\"  method=\"post\">
                    <label for=\"email\" class=\"sr-only\">Identifiant</label>
                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mt-3\" placeholder=\"Votre email\" autofocus>
                    <label for=\"pseudo\" class=\"sr-only\">votre pseudo</label>
                    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" class=\"form-control mt-3\" placeholder=\"Votre pseudo\" autofocus>
                    <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
                    <input type=\"password\" id=\"inputPassword\" name=\"inputPassword\" class=\"form-control my-3\" placeholder=\"Mot de passe\">
                    <label for=\"confirmPassword\" class=\"sr-only\">Confirmation</label>
                    <input type=\"password\" id=\"confirmPassword\" name=\"confirmPassword\" class=\"form-control my-3\" placeholder=\"Confirmer votre mot de passe\">
                    <button class=\"btn btn-lg btn-primary btn-block mb-3\" type=\"submit\">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  72 => 13,  69 => 12,  67 => 11,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Inscription{% endblock %}
{% block body %} 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"register\">
    <div class=\"heading\">
        <h2>Inscription</h2>
    </div>
    <div class=\"container\">

            <div class=\"box_register\">
                {% if error %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ error }}
                    </div>
                {% endif %}

                <form class=\"form-signin\" action=\"\"  method=\"post\">
                    <label for=\"email\" class=\"sr-only\">Identifiant</label>
                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mt-3\" placeholder=\"Votre email\" autofocus>
                    <label for=\"pseudo\" class=\"sr-only\">votre pseudo</label>
                    <input type=\"text\" id=\"pseudo\" name=\"pseudo\" class=\"form-control mt-3\" placeholder=\"Votre pseudo\" autofocus>
                    <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
                    <input type=\"password\" id=\"inputPassword\" name=\"inputPassword\" class=\"form-control my-3\" placeholder=\"Mot de passe\">
                    <label for=\"confirmPassword\" class=\"sr-only\">Confirmation</label>
                    <input type=\"password\" id=\"confirmPassword\" name=\"confirmPassword\" class=\"form-control my-3\" placeholder=\"Confirmer votre mot de passe\">
                    <button class=\"btn btn-lg btn-primary btn-block mb-3\" type=\"submit\">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "register.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\register.html.twig");
    }
}
