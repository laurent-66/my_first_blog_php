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
      <a class=\"nav-link active\" href=\"#blogs\" role=\"tab\" data-toggle=\"tab\">Blogs</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#commentaires\" role=\"tab\" data-toggle=\"tab\">Commentaires</a>
    </li>
</ul>
<div class=\"tab-content\">

    <div id=\"blogs\" role=\"tabpanel\" class=\"tab-pane active\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 17
            echo "        <div class=\"comment-line row\">
            <div class=\"col8\"><p class=\"mx-3 my-3\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 18), "html", null, true);
            echo "</p></div>
            <div class=\"col4 mr-3\">
                <div class=\"row px-0 mx-0\">
                    <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 21
            echo twig_escape_filter($this->env, ((("/blog/approveComment/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 21)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 21)), "html", null, true);
            echo "><button type=\"button\" class=\"btn btn-success btn-block my auto\">Approuver</button></a></div>
                    <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 22
            echo twig_escape_filter($this->env, ((("/blog/deleteComment/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 22)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 22)), "html", null, true);
            echo "><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                </div>
            </div>
        </div>    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>

    <div id=\"commentaires\" role=\"tabpanel\" class=\"tab-pane\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 31
            echo "        <div class=\"comment-line row\">
            <div class=\"col8\"><p class=\"mx-3 my-3\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 32), "html", null, true);
            echo "</p></div>
            <div class=\"col4 mr-3\">
                <div class=\"row px-0 mx-0\">
                    <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 35
            echo twig_escape_filter($this->env, ((("/blog/approveComment/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 35)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 35)), "html", null, true);
            echo "><button type=\"button\" class=\"btn btn-success btn-block my auto\">Test</button></a></div>
                    <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 36
            echo twig_escape_filter($this->env, ((("/blog/deleteComment/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 36)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 36)), "html", null, true);
            echo "><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                </div>
            </div>
        </div>    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return array (  126 => 41,  115 => 36,  111 => 35,  105 => 32,  102 => 31,  98 => 30,  93 => 27,  82 => 22,  78 => 21,  72 => 18,  69 => 17,  65 => 16,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block body %} 
<h4><bold>Administration des blogs et commentaires</bold></h4><br/>

<ul class=\"nav nav-tabs\">
    <li class=\"nav-item\">
      <a class=\"nav-link active\" href=\"#blogs\" role=\"tab\" data-toggle=\"tab\">Blogs</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#commentaires\" role=\"tab\" data-toggle=\"tab\">Commentaires</a>
    </li>
</ul>
<div class=\"tab-content\">

    <div id=\"blogs\" role=\"tabpanel\" class=\"tab-pane active\">
        {% for comment in comments %}
        <div class=\"comment-line row\">
            <div class=\"col8\"><p class=\"mx-3 my-3\">{{comment.commentContent}}</p></div>
            <div class=\"col4 mr-3\">
                <div class=\"row px-0 mx-0\">
                    <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/approveComment/'~blog.id~'/'~comment.id }}><button type=\"button\" class=\"btn btn-success btn-block my auto\">Approuver</button></a></div>
                    <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/deleteComment/'~blog.id~'/'~comment.id }}><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                </div>
            </div>
        </div>    
        {% endfor %}
    </div>

    <div id=\"commentaires\" role=\"tabpanel\" class=\"tab-pane\">
        {% for comment in comments %}
        <div class=\"comment-line row\">
            <div class=\"col8\"><p class=\"mx-3 my-3\">{{comment.commentContent}}</p></div>
            <div class=\"col4 mr-3\">
                <div class=\"row px-0 mx-0\">
                    <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/approveComment/'~blog.id~'/'~comment.id }}><button type=\"button\" class=\"btn btn-success btn-block my auto\">Test</button></a></div>
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
