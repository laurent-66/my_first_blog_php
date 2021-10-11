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
class __TwigTemplate_f42d1d6ce2aabdc6ef4cd3cf03851cd23653555c1319d98fd2653dcbff29a5bb extends Template
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

<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"newblog\">
    <div class=\"heading\">
        <h2>Creation blog</h2>
    </div>
    <div class=\"container-newblog\">
        <div class=\"row\">
            <div id=\"box_newblog\">
                ";
        // line 12
        if (($context["error"] ?? null)) {
            // line 13
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 17
        echo "                <form class=\"form-signin\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                        <input type=\"text\" name=\"title-blog\" class=\"form-control\" placeholder=\"Entrer le titre\" autofocus>
                    </div>
                    <div class=\"input-group mb-3\">
                        
                        <div class=\"custom-file\">
                            <label for=\"file_input_name\">Selectionner une image au format jpeg ou png inférieur à 2Mo</label>
                            <input type=\"file\" class=\"file_input_id\" id=\"file_input_name\" name=\"file_input_name\" accept=\"image/png, image/jpeg, image/jpg\" visibility=\"hidden\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                        <input type=\"text\" name=\"inputChapo\" class=\"form-control my-3\" placeholder=\"Entrer le chapo 255 caratère max\" autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"content\">Contenue du blog :</label>
                        <textarea class=\"form-control rounded-0\" id=\"content\" name=\"content\" rows=\"3\" placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                    </div>
                    <button type=\"submit\" value=\"Upload\" class=\"btn btn-primary mx-auto mb-3\">Envoyez</button>
                </form>

            </div>
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
        return array (  79 => 17,  73 => 14,  70 => 13,  68 => 12,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 

<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"newblog\">
    <div class=\"heading\">
        <h2>Creation blog</h2>
    </div>
    <div class=\"container-newblog\">
        <div class=\"row\">
            <div id=\"box_newblog\">
                {% if error %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ error }}
                    </div>
                {% endif %}
                <form class=\"form-signin\" method=\"POST\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                        <input type=\"text\" name=\"title-blog\" class=\"form-control\" placeholder=\"Entrer le titre\" autofocus>
                    </div>
                    <div class=\"input-group mb-3\">
                        
                        <div class=\"custom-file\">
                            <label for=\"file_input_name\">Selectionner une image au format jpeg ou png inférieur à 2Mo</label>
                            <input type=\"file\" class=\"file_input_id\" id=\"file_input_name\" name=\"file_input_name\" accept=\"image/png, image/jpeg, image/jpg\" visibility=\"hidden\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                        <input type=\"text\" name=\"inputChapo\" class=\"form-control my-3\" placeholder=\"Entrer le chapo 255 caratère max\" autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"content\">Contenue du blog :</label>
                        <textarea class=\"form-control rounded-0\" id=\"content\" name=\"content\" rows=\"3\" placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                    </div>
                    <button type=\"submit\" value=\"Upload\" class=\"btn btn-primary mx-auto mb-3\">Envoyez</button>
                </form>

            </div>
        </div>   
    </div>   


</div>  
{% endblock %} ", "newBlog.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\newBlog.html.twig");
    }
}
