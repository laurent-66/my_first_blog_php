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
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 13
            echo "                <div class=\"card row\">
                    <div class=\"col-4 imageCard border border-primary\">
                        <img class=\"card-img-top\" src=\"...\" alt=\"Card image cap\">
                        <a href=";
            // line 16
            echo twig_escape_filter($this->env, ("/blogs/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 16)), "html", null, true);
            echo " class=\"btn btn-primary btnSeeBlog\">voir</a>
                    </div>
                    
                    <div class=\"col-8 card-body border border-primary\">
                      <h5 class=\"card-title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
                      <p class=\"card-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "chapo", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                      <div class=\"col4 row-item\"><p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "last_update", [], "any", false, false, false, 22), "html", null, true);
            echo "</p></div>
                    </div>
                  </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
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
        return array (  102 => 26,  92 => 22,  88 => 21,  84 => 20,  77 => 16,  72 => 13,  68 => 12,  54 => 3,  47 => 2,  36 => 1,);
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
                <div class=\"card row\">
                    <div class=\"col-4 imageCard border border-primary\">
                        <img class=\"card-img-top\" src=\"...\" alt=\"Card image cap\">
                        <a href={{'/blogs/'~blog.id}} class=\"btn btn-primary btnSeeBlog\">voir</a>
                    </div>
                    
                    <div class=\"col-8 card-body border border-primary\">
                      <h5 class=\"card-title\">{{blog.title}}</h5>
                      <p class=\"card-text\">{{blog.chapo}}</p>
                      <div class=\"col4 row-item\"><p>{{blog.last_update}}</p></div>
                    </div>
                  </div>
        {% endfor %}

    </div>






    
</section>
{% endblock %}", "blogs-list.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\blogs-list.html.twig");
    }
}
