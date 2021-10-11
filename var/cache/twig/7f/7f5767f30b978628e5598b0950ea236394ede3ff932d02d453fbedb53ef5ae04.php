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
class __TwigTemplate_64ebd7b5a5d14c1205dbfebb5f0d8ee12ecf82734dd768f4b77c34023122b3cf extends Template
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
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"blog\">
    <div class=\"container-blog\">
        <h3>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title_blog", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3><br />
            <div class=\"row-blog-img\">
                <img src=\"\\uploads\\";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "image_blog", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"blog-img px-auto\" alt=\"img\">
            </div>
            <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "chapo_blog", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
            <div class=\"content-blog row my-5\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content_blog", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                    <p><bold>Dernière mise à jour: </bold><span>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "last_update_blog", [], "any", false, false, false, 14), "html", null, true);
        echo "</span></p>
                    <p><bold>Auteur: </bold><span>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "pseudo_blog", [], "any", false, false, false, 15), "html", null, true);
        echo "</span></p>
                </div>
            </div>

            <h4><bold>Commentaires du blog</bold></h4><br/>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["findComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "                <div class=\"comment-line row\">
                    <div class=\"col8\"><p class=\"comment mx-3 my-3\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 22), "html", null, true);
            echo "</p></div>
                    <div class=\"col4 mr-3\">
                        <div class=\"row px-0 mx-0\">
                            <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 25
            echo twig_escape_filter($this->env, ((("/blog/reportComment/" . ($context["blogId"] ?? null)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 25)), "html", null, true);
            echo "><button type=\"button\" class=\"btn btn-secondary btn-block my-3\"><i class=\"fas fa-exclamation\"></i></button></a></div>
                        </div>
                    </div>
                </div>    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
            ";
        // line 31
        if (($context["session"] ?? null)) {
            // line 32
            echo "                <h4><bold>Ajouter un commentaire</bold></h4><br/>
                <div class=\"nouveau commentaire\">
                    <form method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"commentContent\">Nouveau commentaire :</label>
                            <textarea class=\"form-control rounded-0\" id=\"commentContent\" name=\"commentContent\" rows=\"3\" placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
                    </form>
                </div>
            ";
        } else {
            // line 43
            echo "                <p> Vous souhaitez laisser un commentaires ? Veuillez vous inscrire ou vous connecter. :-)</p>
            ";
        }
        // line 45
        echo "
    </div>
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
        return array (  140 => 45,  136 => 43,  123 => 32,  121 => 31,  118 => 30,  107 => 25,  101 => 22,  98 => 21,  94 => 20,  86 => 15,  82 => 14,  78 => 13,  72 => 10,  67 => 8,  62 => 6,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"blog\">
    <div class=\"container-blog\">
        <h3>{{blog.title_blog}}</h3><br />
            <div class=\"row-blog-img\">
                <img src=\"\\uploads\\{{blog.image_blog}}\" class=\"blog-img px-auto\" alt=\"img\">
            </div>
            <p>{{blog.chapo_blog}}</p>
            <div class=\"content-blog row my-5\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>{{blog.content_blog}}</p>
                    <p><bold>Dernière mise à jour: </bold><span>{{blog.last_update_blog}}</span></p>
                    <p><bold>Auteur: </bold><span>{{blog.pseudo_blog}}</span></p>
                </div>
            </div>

            <h4><bold>Commentaires du blog</bold></h4><br/>
            {% for comment in findComments %}
                <div class=\"comment-line row\">
                    <div class=\"col8\"><p class=\"comment mx-3 my-3\">{{comment.commentContent}}</p></div>
                    <div class=\"col4 mr-3\">
                        <div class=\"row px-0 mx-0\">
                            <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/reportComment/'~blogId~'/'~comment.id }}><button type=\"button\" class=\"btn btn-secondary btn-block my-3\"><i class=\"fas fa-exclamation\"></i></button></a></div>
                        </div>
                    </div>
                </div>    
            {% endfor %}

            {% if session %}
                <h4><bold>Ajouter un commentaire</bold></h4><br/>
                <div class=\"nouveau commentaire\">
                    <form method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"commentContent\">Nouveau commentaire :</label>
                            <textarea class=\"form-control rounded-0\" id=\"commentContent\" name=\"commentContent\" rows=\"3\" placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
                    </form>
                </div>
            {% else %}
                <p> Vous souhaitez laisser un commentaires ? Veuillez vous inscrire ou vous connecter. :-)</p>
            {% endif %}

    </div>
</div>   
{% endblock %}", "blog.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\blog.html.twig");
    }
}
