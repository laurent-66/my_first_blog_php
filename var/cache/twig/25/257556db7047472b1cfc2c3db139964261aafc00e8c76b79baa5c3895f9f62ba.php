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
class __TwigTemplate_f6154bc90984441c71bab56ff6ae52e4ea3f3903f5d615eb91092b09dc24609d extends Template
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
            <form class=\"form-signin\" method=\"POST\">

                <div class=\"form-group\">
                <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                <input type=\"text\" name=\"title-blog\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "\" placeholder=\"Entrer le titre\" required autofocus>
                </div>

                <!-- <div class=\"form-group\">
                <div class=\"input-group mb-3\">
                    <div class=\"custom-file\">
                      <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile02\">
                      <label class=\"custom-file-label\" for=\"inputGroupFile02\">Choose file</label>
                    </div>
                    <div class=\"input-group-append\">
                      <span class=\"input-group-text\" id=\"\">Upload</span>
                    </div>
                  </div>
                </div> -->


                <div class=\"form-group\">
                <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                <input type=\"text\" name=\"inputChapo\" class=\"form-control my-3\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "chapo", [], "any", false, false, false, 29), "html", null, true);
        echo "\" placeholder=\"Entrer le chapo 255 caratère max\" required autofocus>
                </div>

                <div class=\"form-group\">
                <label for=\"content\">Contenue du blog :</label>
                <textarea class=\"form-control rounded-0\" id=\"content\" name=\"content\" rows=\"3\"  value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content", [], "any", false, false, false, 34), "html", null, true);
        echo "\" placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                </div>
                
                <!-- <div class=\"form-group\">
                    <label for=\"last_update\" class=\"sr-only\">Dernière mise à jour</label>
                    <input type=\"datepicker\" name=\"last_update\" class=\"form-control my-3\" placeholder=\"Date de la dernière mise à jour\" value=\"\">
                </div> -->
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
        return array (  96 => 34,  88 => 29,  67 => 11,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container\">
    <div class=\"row border shadow rounded col-12 col-sm-12 offset-md-2 col-md-8 p-0 mx-auto mt-5\">
        <div id=\"box_connexion\" class=\"col-12 col-sm-12 col-md-12 text-center rounded mt-4\">
            <form class=\"form-signin\" method=\"POST\">

                <div class=\"form-group\">
                <label for=\"title-blog\" class=\"sr-only\">Titre du blog</label>
                <input type=\"text\" name=\"title-blog\" class=\"form-control\" value=\"{{blog.title}}\" placeholder=\"Entrer le titre\" required autofocus>
                </div>

                <!-- <div class=\"form-group\">
                <div class=\"input-group mb-3\">
                    <div class=\"custom-file\">
                      <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile02\">
                      <label class=\"custom-file-label\" for=\"inputGroupFile02\">Choose file</label>
                    </div>
                    <div class=\"input-group-append\">
                      <span class=\"input-group-text\" id=\"\">Upload</span>
                    </div>
                  </div>
                </div> -->


                <div class=\"form-group\">
                <label for=\"inputChapo\" class=\"sr-only\">Chapo</label>
                <input type=\"text\" name=\"inputChapo\" class=\"form-control my-3\" value=\"{{blog.chapo}}\" placeholder=\"Entrer le chapo 255 caratère max\" required autofocus>
                </div>

                <div class=\"form-group\">
                <label for=\"content\">Contenue du blog :</label>
                <textarea class=\"form-control rounded-0\" id=\"content\" name=\"content\" rows=\"3\"  value=\"{{blog.content}}\" placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                </div>
                
                <!-- <div class=\"form-group\">
                    <label for=\"last_update\" class=\"sr-only\">Dernière mise à jour</label>
                    <input type=\"datepicker\" name=\"last_update\" class=\"form-control my-3\" placeholder=\"Date de la dernière mise à jour\" value=\"\">
                </div> -->
                <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
            </form>
        </div>
    </div>
</div>  
{% endblock %}", "updateBlog.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\updateBlog.html.twig");
    }
}
