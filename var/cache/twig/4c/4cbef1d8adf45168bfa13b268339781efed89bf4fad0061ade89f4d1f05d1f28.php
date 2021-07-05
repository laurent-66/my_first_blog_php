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

/* comments-list.html.twig */
class __TwigTemplate_5fcb990ebccde5513236642a1ff5c60acc7ade36ff70363895783faa454de2cd extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "comments-list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container\">
    <section>
            <h4><bold>Commentaires du blog</bold></h4><br/>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 7
            echo "                <div class=\"commentaire shadow row\" style=\"border: 1px solid grey;\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">";
            // line 8
            echo twig_escape_filter($this->env, $context["comment"], "html", null, true);
            echo "</p></div>
                    <div class=\"col2\"><a href=";
            // line 9
            echo twig_escape_filter($this->env, (("/blogs/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 9)) . "/edit"), "html", null, true);
            echo "><button class=\"btn btn-lg btn-warning btn-block mb-3\">Modifier</button></a></div>
                    <div class=\"col2\"><a href=";
            // line 10
            echo twig_escape_filter($this->env, (("/blogs/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 10)) . "/delete"), "html", null, true);
            echo "><button class=\"btn btn-lg btn-danger btn-block mb-3\">Supprimer</button></a></div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </section>
</div>   
";
    }

    public function getTemplateName()
    {
        return "comments-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  70 => 10,  66 => 9,  62 => 8,  59 => 7,  55 => 6,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block body %} 
<div class=\"container\">
    <section>
            <h4><bold>Commentaires du blog</bold></h4><br/>
            {% for comment in comments %}
                <div class=\"commentaire shadow row\" style=\"border: 1px solid grey;\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">{{comment}}</p></div>
                    <div class=\"col2\"><a href={{'/blogs/'~blog.id~'/edit'}}><button class=\"btn btn-lg btn-warning btn-block mb-3\">Modifier</button></a></div>
                    <div class=\"col2\"><a href={{'/blogs/'~blog.id~'/delete'}}><button class=\"btn btn-lg btn-danger btn-block mb-3\">Supprimer</button></a></div>
                </div>
            {% endfor %}
    </section>
</div>   
{% endblock %}", "comments-list.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\comments-list.html.twig");
    }
}
