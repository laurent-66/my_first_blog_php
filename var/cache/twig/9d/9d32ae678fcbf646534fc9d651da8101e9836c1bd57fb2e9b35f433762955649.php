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
class __TwigTemplate_0610db439c136da80585514d9be513041d85997f8925eef881f52e8e3ccf423b extends Template
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

<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"updateBlog\">
    <div class=\"heading\">
        <h2>Edition blog</h2>
    </div>
    <div class=\"container-updateBlog\">
        <div class=\"row\">
            <div id=\"box_update_blog\"> 
                <form class=\"form-signin\" method=\"POST\" enctype=\"multipart/form-data\">
                    ";
        // line 13
        if (($context["error"] ?? null)) {
            // line 14
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 15
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 18
        echo "                    <div class=\"form-group\">
                        <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                        <input type=\"text\" name=\"title-blog\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title_blog", [], "any", false, false, false, 20), "html", null, true);
        echo "\" placeholder=\"Entrer le titre\" autofocus>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group mb-3\">
                            <div class=\"custom-file\">
                                <label for=\"file_input_name\">image format jpeg ou png inférieur à 2Mo</label></br>
                                <input type=\"file\" class=\"file_input_id\" id=\"file_input_name\" name=\"file_input_name\" accept=\"image/png, image/jpeg, image/jpg\">
                            </div>
                        </div>
                    </div>    
                    <div class=\"form-group\">
                        <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                        <input type=\"text\" name=\"inputChapo\" class=\"form-control my-3\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "chapo_blog", [], "any", false, false, false, 32), "html", null, true);
        echo "\" placeholder=\"Entrer le chapo 255 caratère max\" autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"content\">Contenue du blog :</label>
                        <textarea class=\"form-control rounded-0\" id=\"content\" name=\"content\" rows=\"3\"  placeholder=\"Veuillez écrire votre texte ici.\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content_blog", [], "any", false, false, false, 36), "html", null, true);
        echo "</textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
                </form>
            </div>
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
        return array (  106 => 36,  99 => 32,  84 => 20,  80 => 18,  74 => 15,  71 => 14,  69 => 13,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 

<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"updateBlog\">
    <div class=\"heading\">
        <h2>Edition blog</h2>
    </div>
    <div class=\"container-updateBlog\">
        <div class=\"row\">
            <div id=\"box_update_blog\"> 
                <form class=\"form-signin\" method=\"POST\" enctype=\"multipart/form-data\">
                    {% if error %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ error }}
                        </div>
                    {% endif %}
                    <div class=\"form-group\">
                        <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                        <input type=\"text\" name=\"title-blog\" class=\"form-control\" value=\"{{blog.title_blog}}\" placeholder=\"Entrer le titre\" autofocus>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group mb-3\">
                            <div class=\"custom-file\">
                                <label for=\"file_input_name\">image format jpeg ou png inférieur à 2Mo</label></br>
                                <input type=\"file\" class=\"file_input_id\" id=\"file_input_name\" name=\"file_input_name\" accept=\"image/png, image/jpeg, image/jpg\">
                            </div>
                        </div>
                    </div>    
                    <div class=\"form-group\">
                        <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                        <input type=\"text\" name=\"inputChapo\" class=\"form-control my-3\" value=\"{{blog.chapo_blog}}\" placeholder=\"Entrer le chapo 255 caratère max\" autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"content\">Contenue du blog :</label>
                        <textarea class=\"form-control rounded-0\" id=\"content\" name=\"content\" rows=\"3\"  placeholder=\"Veuillez écrire votre texte ici.\">{{blog.content_blog}}</textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
                </form>
            </div>
        </div>
    </div>    
</div>  
{% endblock %} ", "updateBlog.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\updateBlog.html.twig");
    }
}
