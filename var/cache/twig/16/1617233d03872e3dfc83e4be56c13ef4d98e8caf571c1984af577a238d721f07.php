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
class __TwigTemplate_7c403218afca87a05cfd235ebd958d4f6505c81ebdee9be2874115ed3f15991f extends Template
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
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"blogs-list\">
      <div class=\"heading\">
          <h2>Liste des blogs</h2>
      </div>

      <div class=\"container-blog-list\">
          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 11
            echo "                  <div class=\"card-blog\">
                    <div class=\"card-img\">
                      <img src=\"\\uploads\\";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "image_blog", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"img\" alt=\"img\">
                    </div>
                    <div class=\"card-body\">
                      <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title_blog", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                      <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "chapo_blog", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                      <p>Date: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "last_update_blog", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                      <p>Auteur: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "pseudo_blog", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                      <p><a href=";
            // line 20
            echo twig_escape_filter($this->env, ("/blogs/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 20)), "html", null, true);
            echo " class=\"btn btn-primary\">consulter</a></p>
                    </div>
                  </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </div>
</div>   
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
        return array (  106 => 24,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  74 => 13,  70 => 11,  66 => 10,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"blogs-list\">
      <div class=\"heading\">
          <h2>Liste des blogs</h2>
      </div>

      <div class=\"container-blog-list\">
          {% for blog in blogs %}
                  <div class=\"card-blog\">
                    <div class=\"card-img\">
                      <img src=\"\\uploads\\{{blog.image_blog}}\" class=\"img\" alt=\"img\">
                    </div>
                    <div class=\"card-body\">
                      <h5 class=\"card-title\">{{blog.title_blog}}</h5>
                      <p class=\"card-text\">{{blog.chapo_blog}}</p>
                      <p>Date: {{blog.last_update_blog}}</p>
                      <p>Auteur: {{blog.pseudo_blog}}</p>
                      <p><a href={{'/blogs/'~blog.id}} class=\"btn btn-primary\">consulter</a></p>
                    </div>
                  </div>
          {% endfor %}
      </div>
</div>   
{% endblock %}", "blogs-list.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\blogs-list.html.twig");
    }
}
