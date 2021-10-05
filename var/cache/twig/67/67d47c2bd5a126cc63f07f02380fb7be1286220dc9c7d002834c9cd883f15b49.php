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

/* updateBlog.html.twig */
class __TwigTemplate_d027cb30f6842092e1c2c5c2a9248d8bfa293a3131176937aedca7ac71f39941 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "updateBlog.html.twig", 1);
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
    <div class=\"row border shadow rounded col-12 col-sm-12 offset-md-2 col-md-8 p-0 mx-auto mt-5\">
        <div id=\"box_connexion\" class=\"col-12 col-sm-12 col-md-12 text-center rounded mt-4\">
            <form class=\"form-signin\" method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                  <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                  <input type=\"text\" name=\"title-blog\" class=\"form-control\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "\" placeholder=\"Entrer le titre\" required autofocus>
                </div>
                <div class=\"form-group\">
                <div class=\"input-group mb-3\">
                    <div class=\"custom-file\">
                      <label for=\"file_input_name\">Selectionner une image au format jpeg ou png inférieur à 2Mo</label>
                      <input type=\"file\" class=\"file_input_id\" id=\"file_input_name\" name=\"file_input_name\" accept=\"image/png, image/jpeg, image/jpg\">
                    </div>
                </div>
                <div class=\"form-group\">
                <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                <input type=\"text\" name=\"inputChapo\" class=\"form-control my-3\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "chapo", [], "any", false, false, false, 21), "html", null, true);
        echo "\" placeholder=\"Entrer le chapo 255 caratère max\" required autofocus>
                </div>

                <div class=\"form-group\">
                <label for=\"content\">Contenue du blog :</label>
                <textarea class=\"form-control rounded-0\" id=\"content\" name=\"content\" rows=\"3\"  placeholder=\"Veuillez écrire votre texte ici.\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content", [], "any", false, false, false, 26), "html", null, true);
        echo "</textarea>
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
        return "updateBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  80 => 21,  66 => 10,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container\">
    <div class=\"row border shadow rounded col-12 col-sm-12 offset-md-2 col-md-8 p-0 mx-auto mt-5\">
        <div id=\"box_connexion\" class=\"col-12 col-sm-12 col-md-12 text-center rounded mt-4\">
            <form class=\"form-signin\" method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                  <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                  <input type=\"text\" name=\"title-blog\" class=\"form-control\" value=\"{{blog.title}}\" placeholder=\"Entrer le titre\" required autofocus>
                </div>
                <div class=\"form-group\">
                <div class=\"input-group mb-3\">
                    <div class=\"custom-file\">
                      <label for=\"file_input_name\">Selectionner une image au format jpeg ou png inférieur à 2Mo</label>
                      <input type=\"file\" class=\"file_input_id\" id=\"file_input_name\" name=\"file_input_name\" accept=\"image/png, image/jpeg, image/jpg\">
                    </div>
                </div>
                <div class=\"form-group\">
                <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                <input type=\"text\" name=\"inputChapo\" class=\"form-control my-3\" value=\"{{blog.chapo}}\" placeholder=\"Entrer le chapo 255 caratère max\" required autofocus>
                </div>

                <div class=\"form-group\">
                <label for=\"content\">Contenue du blog :</label>
                <textarea class=\"form-control rounded-0\" id=\"content\" name=\"content\" rows=\"3\"  placeholder=\"Veuillez écrire votre texte ici.\">{{blog.content}}</textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>

            </form>
        </div>
    </div>
</div>  
{% endblock %} ", "updateBlog.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\updateBlog.html.twig");
    }
}
