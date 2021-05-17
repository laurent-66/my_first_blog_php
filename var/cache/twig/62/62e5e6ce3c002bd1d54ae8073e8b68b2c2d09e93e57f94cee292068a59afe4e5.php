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

/* login.html.twig */
class __TwigTemplate_218c82a680538d3dfa087b6eb04925cc00d0c21ca0d97a5206f540a2fe796788 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<section id=\"connexion\">
    <div class=\"heading\">
        <h2>Connexion</h2>
    </div>
    <div class=\"blue-divider\"></div>
    <div class=\"container\">
        <div class=\"row border shadow rounded col-12 col-sm-12 offset-md-2 col-md-8 p-0 mx-auto\">
            <div id=\"box_connexion\" class=\"col-12 col-sm-12 col-md-12 text-center rounded\">
                <form class=\"form-signin\" action=\"connexionController.php\" method=\"post\">
                    <label for=\"identifiant\" class=\"sr-only\">Identifiant</label>
                    <input type=\"text\" id=\"identifiant\" class=\"form-control mt-3\" placeholder=\"Identifiant\" required autofocus>
                    <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
                    <input type=\"password\" id=\"inputPassword\" class=\"form-control my-3\" placeholder=\"Mot de passe\" required>
                    <button class=\"btn btn-lg btn-primary btn-block mb-3\" type=\"submit\">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Connexion{% endblock %}
{% block body %} 
<section id=\"connexion\">
    <div class=\"heading\">
        <h2>Connexion</h2>
    </div>
    <div class=\"blue-divider\"></div>
    <div class=\"container\">
        <div class=\"row border shadow rounded col-12 col-sm-12 offset-md-2 col-md-8 p-0 mx-auto\">
            <div id=\"box_connexion\" class=\"col-12 col-sm-12 col-md-12 text-center rounded\">
                <form class=\"form-signin\" action=\"connexionController.php\" method=\"post\">
                    <label for=\"identifiant\" class=\"sr-only\">Identifiant</label>
                    <input type=\"text\" id=\"identifiant\" class=\"form-control mt-3\" placeholder=\"Identifiant\" required autofocus>
                    <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
                    <input type=\"password\" id=\"inputPassword\" class=\"form-control my-3\" placeholder=\"Mot de passe\" required>
                    <button class=\"btn btn-lg btn-primary btn-block mb-3\" type=\"submit\">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "login.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\login.html.twig");
    }
}
