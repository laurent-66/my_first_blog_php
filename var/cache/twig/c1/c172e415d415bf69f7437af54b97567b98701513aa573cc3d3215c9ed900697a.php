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

/* newBlog.html.twig */
class __TwigTemplate_8891c4862e4b060c8ac7dd1fcd60c32b145b2bae8b6740e865548bca26658273 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "newBlog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Blog";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container\">
    <div class=\"row border shadow rounded col-12 col-sm-12 offset-md-2 col-md-8 p-0 mx-auto\">
        <div id=\"box_connexion\" class=\"col-12 col-sm-12 col-md-12 text-center rounded\">
            <form class=\"form-signin\">
                <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                <input type=\"text\" name=\"title-blog\" class=\"form-control\" placeholder=\"Entrer le titre\" required autofocus>

                <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                <input type=\"password\" name=\"inputChapo\" class=\"form-control my-3\" placeholder=\"Entrer le chapo 255 caratère max\" required autofocus>

                <div class=\"form-group\">
                <label for=\"comment\">Contenue du blog :</label>
                <textarea class=\"form-control rounded-0\" id=\"comment\" rows=\"3\"placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                </div>

                <div class=\"form-group\">
                    <label for=\"comment\">dernière mise à jour :</label>
                    <input class=\"form-control rounded-0\" type=\"date\" rows=\"3\"placeholder=\"Notez la date.\"/>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
            </form>
        </div>
    </div>
</div>  
";
    }

    public function getTemplateName()
    {
        return "newBlog.html.twig";
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
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container\">
    <div class=\"row border shadow rounded col-12 col-sm-12 offset-md-2 col-md-8 p-0 mx-auto\">
        <div id=\"box_connexion\" class=\"col-12 col-sm-12 col-md-12 text-center rounded\">
            <form class=\"form-signin\">
                <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                <input type=\"text\" name=\"title-blog\" class=\"form-control\" placeholder=\"Entrer le titre\" required autofocus>

                <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                <input type=\"password\" name=\"inputChapo\" class=\"form-control my-3\" placeholder=\"Entrer le chapo 255 caratère max\" required autofocus>

                <div class=\"form-group\">
                <label for=\"comment\">Contenue du blog :</label>
                <textarea class=\"form-control rounded-0\" id=\"comment\" rows=\"3\"placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                </div>

                <div class=\"form-group\">
                    <label for=\"comment\">dernière mise à jour :</label>
                    <input class=\"form-control rounded-0\" type=\"date\" rows=\"3\"placeholder=\"Notez la date.\"/>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
            </form>
        </div>
    </div>
</div>  
{% endblock %}", "newBlog.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\newBlog.html.twig");
    }
}
