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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3><br />
            <div class=\"row\">
                <div class=\"col-12 ml-50 px my-0\">
                    <img src=\"\\uploads\\";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "url_image", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"card-img\" alt=\"img\">
                </div>
            </div>
            <div class=\"row my-5\" id=\"objectif\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                    <p><bold>Dernière mise à jour: </bold><span><i>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "last_update", [], "any", false, false, false, 15), "html", null, true);
        echo "</i></span></p>
                    <p><bold>Auteur: </bold><span><i>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "author", [], "any", false, false, false, 16), "html", null, true);
        echo "</i></span></p>
                </div>
            </div>

            <h4><bold>Commentaires du blog</bold></h4><br/>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["findComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 22
            echo "                <div class=\"comment-line row\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 23), "html", null, true);
            echo "</p></div>
                    ";
            // line 24
            if ((0 !== twig_compare(($context["user"] ?? null), null))) {
                // line 25
                echo "                    <div class=\"col4 mr-3\">
                        <div class=\"row px-0 mx-0\">
                            <div class=\"col button-comment-line px-0 mx-2\"><a href=";
                // line 27
                echo twig_escape_filter($this->env, ((("/blog/approveComment/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 27)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 27)), "html", null, true);
                echo "><button type=\"button\" class=\"btn btn-success btn-block my auto\">Approuver</button></a></div>
                            <div class=\"col button-comment-line px-0 mx-2\"><a href=";
                // line 28
                echo twig_escape_filter($this->env, ((("/blog/deleteComment/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 28)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 28)), "html", null, true);
                echo "><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                        </div>
                    </div>
                    ";
            }
            // line 32
            echo "                </div>    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        // line 34

        echo "
            <h4><bold>Ajouter un commentaire</bold></h4><br/>
            <div class=\"nouveau commentaire\">
                <form method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"commentContent\">Nouveau commentaire :</label>
                        <textarea class=\"form-control rounded-0\" id=\"commentContent\" name=\"commentContent\" rows=\"3\"placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
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

        return array (  127 => 34,  120 => 32,  113 => 28,  109 => 27,  105 => 25,  103 => 24,  99 => 23,  96 => 22,  92 => 21,  84 => 16,  80 => 15,  76 => 14,  68 => 9,  62 => 6,  54 => 3,  47 => 2,  36 => 1,);

    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container\">
    <section>
        <h3>{{blog.title}}</h3><br />
            <div class=\"row\">
                <div class=\"col-12 ml-50 px my-0\">
                    <img src=\"\\uploads\\{{blog.url_image}}\" class=\"card-img\" alt=\"img\">
                </div>
            </div>
            <div class=\"row my-5\" id=\"objectif\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>{{blog.content}}</p>
                    <p><bold>Dernière mise à jour: </bold><span><i>{{blog.last_update}}</i></span></p>
                    <p><bold>Auteur: </bold><span><i>{{blog.author}}</i></span></p>
                </div>
            </div>

            <h4><bold>Commentaires du blog</bold></h4><br/>
            {% for comment in findComments %}
                <div class=\"comment-line row\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">{{comment.commentContent}}</p></div>
                    {% if ( user != null) %}
                    <div class=\"col4 mr-3\">
                        <div class=\"row px-0 mx-0\">
                            <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/approveComment/'~blog.id~'/'~comment.id }}><button type=\"button\" class=\"btn btn-success btn-block my auto\">Approuver</button></a></div>
                            <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/deleteComment/'~blog.id~'/'~comment.id }}><button type=\"button\" class=\"btn  btn-danger btn-block my auto\">Supprimer</button></a></div>
                        </div>
                    </div>
                    {% endif %}
                </div>    
            {% endfor %}

            <h4><bold>Ajouter un commentaire</bold></h4><br/>
            <div class=\"nouveau commentaire\">
                <form method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"commentContent\">Nouveau commentaire :</label>
                        <textarea class=\"form-control rounded-0\" id=\"commentContent\" name=\"commentContent\" rows=\"3\"placeholder=\"Veuillez écrire votre texte ici.\"></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyez</button>
                </form>
            </div>
    </section>
</div>   
{% endblock %}", "blog.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\blog.html.twig");
    }
}
