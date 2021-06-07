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

/* blogs-list.html.twig */
class __TwigTemplate_eefe012987964194d44f6ba58a90824b78b3dc68badd49803124da75a0f268c5 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "blogs-list.html.twig", 1);
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
<section id=\"connexion\">
    <div class=\"heading\">
        <h2>Liste des blogs</h2>
    </div>
    <div class=\"blue-divider\"></div>
    <div class=\"container\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 11
            echo "    <div class=\"row\" style=\"border: 1px solid grey;\">
            <div class=\"col 10 row-align-start-left\">
                <div class=\"col4 row-item\"><p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</p></div>
                <div class=\"col4 row-item\"><p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "chapo", [], "any", false, false, false, 14), "html", null, true);
            echo "</p></div>
                <div class=\"col4 row-item\"><p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "last_update", [], "any", false, false, false, 15), "html", null, true);
            echo "</p></div>
            </div>


            <div class=\"col 2 row-align-start-right\">
                <div class=\"col4\"><a href=";
            // line 20
            echo twig_escape_filter($this->env, ("/blogs/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id_blog_post", [], "any", false, false, false, 20)), "html", null, true);
            echo "><button class=\"btn btn-lg btn-primary btn-block mb-3\">Voir</button></a></div>
                <div class=\"col4\"><a href=\"/blogs/admin/1/edit\"><button class=\"btn btn-lg btn-warning btn-block mb-3\">Modifier</button></a></div>
                <div class=\"col4\"><a href=\"\"><button class=\"btn btn-lg btn-danger btn-block mb-3\">Supprimer</button></a></div>
            </div>

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    <div class=\"col1\"><a href=\"/blogs/admin/new\"><button class=\"btn btn-lg btn-success btn-block mb-3\">Créer un nouveau blog</button></a></div>
    </div>
    
</section>





";
    }

    public function getTemplateName()
    {
        return "blogs-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  90 => 20,  82 => 15,  78 => 14,  74 => 13,  70 => 11,  66 => 10,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<section id=\"connexion\">
    <div class=\"heading\">
        <h2>Liste des blogs</h2>
    </div>
    <div class=\"blue-divider\"></div>
    <div class=\"container\">
    {% for blog in blogs %}
    <div class=\"row\" style=\"border: 1px solid grey;\">
            <div class=\"col 10 row-align-start-left\">
                <div class=\"col4 row-item\"><p>{{blog.title}}</p></div>
                <div class=\"col4 row-item\"><p>{{blog.chapo}}</p></div>
                <div class=\"col4 row-item\"><p>{{blog.last_update}}</p></div>
            </div>


            <div class=\"col 2 row-align-start-right\">
                <div class=\"col4\"><a href={{'/blogs/'~blog.id_blog_post}}><button class=\"btn btn-lg btn-primary btn-block mb-3\">Voir</button></a></div>
                <div class=\"col4\"><a href=\"/blogs/admin/1/edit\"><button class=\"btn btn-lg btn-warning btn-block mb-3\">Modifier</button></a></div>
                <div class=\"col4\"><a href=\"\"><button class=\"btn btn-lg btn-danger btn-block mb-3\">Supprimer</button></a></div>
            </div>

    </div>
    {% endfor %}
    <div class=\"col1\"><a href=\"/blogs/admin/new\"><button class=\"btn btn-lg btn-success btn-block mb-3\">Créer un nouveau blog</button></a></div>
    </div>
    
</section>





{% endblock %}
", "blogs-list.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\blogs-list.html.twig");
    }
}
