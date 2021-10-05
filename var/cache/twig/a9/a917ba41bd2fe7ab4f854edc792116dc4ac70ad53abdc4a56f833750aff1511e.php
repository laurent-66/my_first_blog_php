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
class __TwigTemplate_819ca9d8c69f4cf9a858c9a3c9f7695f931c01457c30604671a2e10d7de26dbf extends Template
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

    <div class=\"container-blog-list\">

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 13
            echo "                <div class=\"card mb-4\">
                    <div class=\"row no-gutters\">
                      <div class=\"col-md-4\">
                        <img src=\"\\uploads\\";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "url_image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"card-img\" alt=\"img\">
                      </div>
                      <div class=\"col-md-8\">
                        <div class=\"card-body\">
                          <h5 class=\"card-title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
                          <p class=\"card-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "chapo", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>

                          <div class=\"row\">
                            <div class=\"col4\"><p>Date: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "last_update", [], "any", false, false, false, 24), "html", null, true);
            echo "</p></div>
                            <div class=\"col4\"><p>Auteur: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["blog"], "user", [], "any", false, false, false, 25), "pseudo", [], "any", false, false, false, 25), "html", null, true);
            echo "</p></div>
                          </div>
                            <div class=\"col4\"><a href=";
            // line 27
            echo twig_escape_filter($this->env, ("/blogs/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 27)), "html", null, true);
            echo " class=\"btn btn-primary btnSeeBlog\">voir</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
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
        return array (  115 => 33,  103 => 27,  98 => 25,  94 => 24,  88 => 21,  84 => 20,  77 => 16,  72 => 13,  68 => 12,  54 => 3,  47 => 2,  36 => 1,);
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

    <div class=\"container-blog-list\">

        {% for blog in blogs %}
                <div class=\"card mb-4\">
                    <div class=\"row no-gutters\">
                      <div class=\"col-md-4\">
                        <img src=\"\\uploads\\{{blog.url_image}}\" class=\"card-img\" alt=\"img\">
                      </div>
                      <div class=\"col-md-8\">
                        <div class=\"card-body\">
                          <h5 class=\"card-title\">{{blog.title}}</h5>
                          <p class=\"card-text\">{{blog.chapo}}</p>

                          <div class=\"row\">
                            <div class=\"col4\"><p>Date: {{blog.last_update}}</p></div>
                            <div class=\"col4\"><p>Auteur: {{blog.user.pseudo}}</p></div>
                          </div>
                            <div class=\"col4\"><a href={{'/blogs/'~blog.id}} class=\"btn btn-primary btnSeeBlog\">voir</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
        {% endfor %}
    </div>
</section>
{% endblock %}", "blogs-list.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\blogs-list.html.twig");
    }
}
