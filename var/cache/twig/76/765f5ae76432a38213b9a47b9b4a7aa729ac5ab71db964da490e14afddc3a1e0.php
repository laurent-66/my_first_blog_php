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

/* dashboardAdmin.html.twig */
class __TwigTemplate_1cc491a23b27455c26c99c5ac4957cd052ae85c68fc87a669f619140b2fd6166 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("template.html.twig", "dashboardAdmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<h4><bold>Administration des blogs et commentaires</bold></h4><br/>

<ul class=\"nav nav-tabs\">
    <li class=\"nav-item\">
      <a class=\"nav-link active tab-text\" id=\"tab-blogs\" href=\"#blogs\" role=\"tab\" data-toggle=\"tab\">Blogs</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link tab-text\" id=\"tab-comment\" href=\"#commentaires\" role=\"tab\" data-toggle=\"tab\">Commentaires</a>
    </li>
</ul>
<div class=\"tab-content\">
    <div id=\"blogs\" role=\"tabpanel\" class=\"tab-pane active\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 16
            echo "        <div class=\"row\" style=\"border: 1px solid grey;\">
                <div class=\"col 10 row-align-start-left\">
                    <div class=\"col4 row-item\"><p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</p></div>
                    <div class=\"col4 row-item\"><p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "chapo", [], "any", false, false, false, 19), "html", null, true);
            echo "</p></div>
                    <div class=\"col4 row-item\"><p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "last_update", [], "any", false, false, false, 20), "html", null, true);
            echo "</p></div>
                </div>
    
                <div class=\"col 2 row-align-start-right\">
                    <div class=\"col4\"><a href=";
            // line 24
            echo twig_escape_filter($this->env, ("/blogs/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 24)), "html", null, true);
            echo "><button class=\"btn btn-lg btn-primary btn-block mb-3\">Voir</button></a></div>
                    ";
            // line 25
            if ((0 !== twig_compare(($context["user"] ?? null), null))) {
                // line 26
                echo "                        <div class=\"col4\"><a href=";
                echo twig_escape_filter($this->env, (("/blogs/admin/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 26)) . "/edit"), "html", null, true);
                echo "><button class=\"btn btn-lg btn-warning btn-block mb-3\">Modifier</button></a></div>
                        <div class=\"col4\"><a href=";
                // line 27
                echo twig_escape_filter($this->env, (("/blogs/admin/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 27)) . "/delete"), "html", null, true);
                echo "><button class=\"btn btn-lg btn-danger btn-block mb-3\">Supprimer</button></a></div>
                    ";
            }
            // line 29
            echo "                </div>
    
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        <div class=\"col1\"><a href=\"/blogs/admin/new\"><button class=\"btn btn-lg btn-success btn-block mb-3\">Créer un nouveau blog</button></a></div>
    </div>

    <div id=\"commentaires\" role=\"tabpanel\" class=\"tab-pane\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 38
            echo "        <div class=\"comment-line row\">
            <div class=\"col8\"><p class=\"mx-3 my-3\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 39), "html", null, true);
            echo "</p></div>
            <div class=\"col4 mr-3\">
                <div class=\"row px-0 mx-0\">
                    <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 42
            echo twig_escape_filter($this->env, ((("/blog/approveComment/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 42)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 42)), "html", null, true);
            echo "><button type=\"button\" class=\"btn btn-success btn-block my auto\">approuver</button></a></div>
                    <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 43
            echo twig_escape_filter($this->env, ((("/blog/deleteComment/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 43)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 43)), "html", null, true);
            echo "><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                </div>
            </div>
        </div>    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>
</div>









";
    }

    public function getTemplateName()
    {
        return "dashboardAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 48,  135 => 43,  131 => 42,  125 => 39,  122 => 38,  118 => 37,  112 => 33,  103 => 29,  98 => 27,  93 => 26,  91 => 25,  87 => 24,  80 => 20,  76 => 19,  72 => 18,  68 => 16,  64 => 15,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block body %} 
<h4><bold>Administration des blogs et commentaires</bold></h4><br/>

<ul class=\"nav nav-tabs\">
    <li class=\"nav-item\">
      <a class=\"nav-link active tab-text\" id=\"tab-blogs\" href=\"#blogs\" role=\"tab\" data-toggle=\"tab\">Blogs</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link tab-text\" id=\"tab-comment\" href=\"#commentaires\" role=\"tab\" data-toggle=\"tab\">Commentaires</a>
    </li>
</ul>
<div class=\"tab-content\">
    <div id=\"blogs\" role=\"tabpanel\" class=\"tab-pane active\">
        {% for blog in blogs %}
        <div class=\"row\" style=\"border: 1px solid grey;\">
                <div class=\"col 10 row-align-start-left\">
                    <div class=\"col4 row-item\"><p>{{blog.title}}</p></div>
                    <div class=\"col4 row-item\"><p>{{blog.chapo}}</p></div>
                    <div class=\"col4 row-item\"><p>{{blog.last_update}}</p></div>
                </div>
    
                <div class=\"col 2 row-align-start-right\">
                    <div class=\"col4\"><a href={{'/blogs/'~blog.id}}><button class=\"btn btn-lg btn-primary btn-block mb-3\">Voir</button></a></div>
                    {% if ( user != null) %}
                        <div class=\"col4\"><a href={{'/blogs/admin/'~blog.id~'/edit'}}><button class=\"btn btn-lg btn-warning btn-block mb-3\">Modifier</button></a></div>
                        <div class=\"col4\"><a href={{'/blogs/admin/'~blog.id~'/delete'}}><button class=\"btn btn-lg btn-danger btn-block mb-3\">Supprimer</button></a></div>
                    {% endif %}
                </div>
    
        </div>
        {% endfor %}
        <div class=\"col1\"><a href=\"/blogs/admin/new\"><button class=\"btn btn-lg btn-success btn-block mb-3\">Créer un nouveau blog</button></a></div>
    </div>

    <div id=\"commentaires\" role=\"tabpanel\" class=\"tab-pane\">
        {% for comment in comments %}
        <div class=\"comment-line row\">
            <div class=\"col8\"><p class=\"mx-3 my-3\">{{comment.commentContent}}</p></div>
            <div class=\"col4 mr-3\">
                <div class=\"row px-0 mx-0\">
                    <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/approveComment/'~blog.id~'/'~comment.id }}><button type=\"button\" class=\"btn btn-success btn-block my auto\">approuver</button></a></div>
                    <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/deleteComment/'~blog.id~'/'~comment.id }}><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                </div>
            </div>
        </div>    
        {% endfor %}
    </div>
</div>









{% endblock %}





", "dashboardAdmin.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\dashboardAdmin.html.twig");
    }
}
