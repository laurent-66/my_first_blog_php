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
class __TwigTemplate_77799ab11a693dab906715ea2ed784c609ee973d495fa0a45850cd7c8b94efc1 extends Template
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
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"dashboard\">
      <div class=\"heading\">
          <h2>Administration des blogs et commentaires</h2>
      </div>
<div class=\"container-dashboard\">
    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\">
        <a class=\"nav-link active tab-text\" id=\"tab-blogs\" href=\"#blogs\" role=\"tab\" data-toggle=\"tab\">Blogs</a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link tab-text\" id=\"tab-comment\" href=\"#commentaires\" role=\"tab\" data-toggle=\"tab\">Commentaires</a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <a href=\"/blogs/admin/new\"><button class=\"btn btn-success btn-block mb-3 new-blog-button\">Créer un nouveau blog</button></a>
        <div id=\"blogs\" role=\"tabpanel\" class=\"tab-pane active\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 20
            echo "            <div class=\"row border-top border-dark\">
                <div class=\"line-info-list my-3\">
                    <div class=\"col 10 row-align-start-left\">
                        <div class=\"col4 item-list font-weight-bold\"><p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "last_update", [], "any", false, false, false, 23), "html", null, true);
            echo "</p></div>
                        <div class=\"col4 item-list\"><p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</p></div>
                        <div class=\"col4 item-list\"><p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "chapo", [], "any", false, false, false, 25), "html", null, true);
            echo "</p></div>

                    </div>
        
                    <div class=\"col 2 row-align-start-right\">
                        <div class=\"col4\"><a href=";
            // line 30
            echo twig_escape_filter($this->env, ("/blogs/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 30)), "html", null, true);
            echo "><button class=\"btn btn-lg btn-primary btn-block mb-3 my-auto\"><i class=\"far fa-eye\"></i></button></a></div>
                        ";
            // line 31
            if ((0 !== twig_compare(($context["user"] ?? null), null))) {
                // line 32
                echo "                            <div class=\"col4\"><a href=";
                echo twig_escape_filter($this->env, (("/blogs/admin/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 32)) . "/edit"), "html", null, true);
                echo "><button class=\"btn btn-lg btn-warning btn-block mb-3 my-auto\"><i class=\"fas fa-edit\"></i></button></a></div>
                            <div class=\"col4\"><a href=";
                // line 33
                echo twig_escape_filter($this->env, (("/blogs/admin/" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 33)) . "/delete"), "html", null, true);
                echo "><button class=\"btn btn-lg btn-danger btn-block mb-3 my-auto\"><i class=\"fas fa-trash-alt\"></i></button></a></div>
                        ";
            }
            // line 35
            echo "                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>

        <div id=\"commentaires\" role=\"tabpanel\" class=\"tab-pane\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentsNotValidate"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 43
            echo "                <div class=\"comment-line row\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 44), "html", null, true);
            echo "</p></div>
                    <div class=\"col4 mr-3\">
                        <div class=\"row px-0 mx-0\">
                            <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 47
            echo twig_escape_filter($this->env, ((("/blog/admin/approveComment/" . twig_get_attribute($this->env, $this->source, $context["comment"], "blog_post_id_blog_post", [], "any", false, false, false, 47)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 47)), "html", null, true);
            echo "><button type=\"button\" class=\"btn btn-success btn-block my auto\">approuver</button></a></div>
                            <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 48
            echo twig_escape_filter($this->env, ((("/blog/admin/deleteComment/" . twig_get_attribute($this->env, $this->source, $context["comment"], "blog_post_id_blog_post", [], "any", false, false, false, 48)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 48)), "html", null, true);
            echo "><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                        </div>
                    </div>
                </div>    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
    </div>
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
        return array (  151 => 53,  140 => 48,  136 => 47,  130 => 44,  127 => 43,  123 => 42,  118 => 39,  109 => 35,  104 => 33,  99 => 32,  97 => 31,  93 => 30,  85 => 25,  81 => 24,  77 => 23,  72 => 20,  68 => 19,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block body %} 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"dashboard\">
      <div class=\"heading\">
          <h2>Administration des blogs et commentaires</h2>
      </div>
<div class=\"container-dashboard\">
    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\">
        <a class=\"nav-link active tab-text\" id=\"tab-blogs\" href=\"#blogs\" role=\"tab\" data-toggle=\"tab\">Blogs</a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link tab-text\" id=\"tab-comment\" href=\"#commentaires\" role=\"tab\" data-toggle=\"tab\">Commentaires</a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <a href=\"/blogs/admin/new\"><button class=\"btn btn-success btn-block mb-3 new-blog-button\">Créer un nouveau blog</button></a>
        <div id=\"blogs\" role=\"tabpanel\" class=\"tab-pane active\">
            {% for blog in blogs %}
            <div class=\"row border-top border-dark\">
                <div class=\"line-info-list my-3\">
                    <div class=\"col 10 row-align-start-left\">
                        <div class=\"col4 item-list font-weight-bold\"><p>{{blog.last_update}}</p></div>
                        <div class=\"col4 item-list\"><p>{{blog.title}}</p></div>
                        <div class=\"col4 item-list\"><p>{{blog.chapo}}</p></div>

                    </div>
        
                    <div class=\"col 2 row-align-start-right\">
                        <div class=\"col4\"><a href={{'/blogs/'~blog.id}}><button class=\"btn btn-lg btn-primary btn-block mb-3 my-auto\"><i class=\"far fa-eye\"></i></button></a></div>
                        {% if ( user != null) %}
                            <div class=\"col4\"><a href={{'/blogs/admin/'~blog.id~'/edit'}}><button class=\"btn btn-lg btn-warning btn-block mb-3 my-auto\"><i class=\"fas fa-edit\"></i></button></a></div>
                            <div class=\"col4\"><a href={{'/blogs/admin/'~blog.id~'/delete'}}><button class=\"btn btn-lg btn-danger btn-block mb-3 my-auto\"><i class=\"fas fa-trash-alt\"></i></button></a></div>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>

        <div id=\"commentaires\" role=\"tabpanel\" class=\"tab-pane\">
            {% for comment in commentsNotValidate %}
                <div class=\"comment-line row\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">{{comment.commentContent}}</p></div>
                    <div class=\"col4 mr-3\">
                        <div class=\"row px-0 mx-0\">
                            <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/admin/approveComment/'~comment.blog_post_id_blog_post~'/'~comment.id }}><button type=\"button\" class=\"btn btn-success btn-block my auto\">approuver</button></a></div>
                            <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/admin/deleteComment/'~comment.blog_post_id_blog_post~'/'~comment.id }}><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                        </div>
                    </div>
                </div>    
            {% endfor %}
        </div>
    </div>
</div>    
{% endblock %} ", "dashboardAdmin.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\dashboardAdmin.html.twig");
    }
}