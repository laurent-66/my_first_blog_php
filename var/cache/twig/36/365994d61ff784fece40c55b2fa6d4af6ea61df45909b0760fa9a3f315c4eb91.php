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

/* blog.html.twig */
class __TwigTemplate_591273e4aa68a2bae5443c26e74f70ad58b94dbb69409cb13856d7019e7ff97b extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "blog.html.twig", 1);
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
    <section>
        <h3>";
        // line 6
        echo twig_escape_filter($this->env, (($context["title"] ?? null) - ($context["blog"] ?? null)), "html", null, true);
        echo "</h3><br />
            <div class=\"row\">
                <div class=\"col-12 ml-50px my-0\">
                    <div><img  src=\"./images/me2.jpg\" alt=\"\"></div>
                </div>
            </div>
            <div class=\"row my-5\" id=\"objectif\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, (($context["content"] ?? null) - ($context["blog"] ?? null)), "html", null, true);
        echo "</p>
                    <p><bold>Dernière mise à jour: </bold><span><i>";
        // line 15
        echo twig_escape_filter($this->env, (($context["date"] ?? null) - ($context["blog"] ?? null)), "html", null, true);
        echo "</i></span></p>
                </div>
            </div>

            <h4><bold>Commentaires</bold></h4><br/>
            <div class=\"commentaire shadow\" style=\"border: 1px solid grey;\">
                <p class=\"mx-3 my-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.In dignissim mollis lorem at viverra</p>
            </div>
            <div class=\"btn btn-success my-5\">Ajouter un commentaire</div>
            <div class=\"nouveau commentaire\">
                <form>
                    <div class=\"form-group\">
                        <label for=\"comment\">Nouveau commentaire :</label>
                        <textarea class=\"form-control rounded-0\" id=\"comment\" rows=\"3\"placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
                </form>
            </div>
    </section>
</div>   
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  73 => 14,  62 => 6,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container\">
    <section>
        <h3>{{title-blog}}</h3><br />
            <div class=\"row\">
                <div class=\"col-12 ml-50px my-0\">
                    <div><img  src=\"./images/me2.jpg\" alt=\"\"></div>
                </div>
            </div>
            <div class=\"row my-5\" id=\"objectif\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>{{content-blog}}</p>
                    <p><bold>Dernière mise à jour: </bold><span><i>{{date-blog}}</i></span></p>
                </div>
            </div>

            <h4><bold>Commentaires</bold></h4><br/>
            <div class=\"commentaire shadow\" style=\"border: 1px solid grey;\">
                <p class=\"mx-3 my-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.In dignissim mollis lorem at viverra</p>
            </div>
            <div class=\"btn btn-success my-5\">Ajouter un commentaire</div>
            <div class=\"nouveau commentaire\">
                <form>
                    <div class=\"form-group\">
                        <label for=\"comment\">Nouveau commentaire :</label>
                        <textarea class=\"form-control rounded-0\" id=\"comment\" rows=\"3\"placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
                </form>
            </div>
    </section>
</div>   
{% endblock %}", "blog.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\blog.html.twig");
    }
}
