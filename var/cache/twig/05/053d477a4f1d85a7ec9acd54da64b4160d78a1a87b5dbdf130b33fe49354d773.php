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
class __TwigTemplate_96501ed0f376121ad16088af5d15fa7dfe6c9cd578b274204af8f6865c8d64e5 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "image_blog", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"card-img\" alt=\"img\">
                </div>
            </div>
            <div class=\"row my-5\" id=\"objectif\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content_blog", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id_blog", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                    <p><bold>Dernière mise à jour: </bold><span><i>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "last_update_blog", [], "any", false, false, false, 16), "html", null, true);
        echo "</i></span></p>
                    <p><bold>Auteur: </bold><span><i>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "pseudo_blog", [], "any", false, false, false, 17), "html", null, true);
        echo "</i></span></p>

                </div>
            </div>

            <h4><bold>Commentaires du blog</bold></h4><br/>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["findComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 24
            echo "                <div class=\"comment-line row\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 25), "html", null, true);
            echo "</p></div>

                    <div class=\"col4 mr-3\">
                        <div class=\"row px-0 mx-0\">
                            ";
            // line 30
            echo "                            <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            echo twig_escape_filter($this->env, ((("/blog/reportComment/" . ($context["blogId"] ?? null)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 30)), "html", null, true);
            echo "><button type=\"button\" class=\"btn btn-secondary btn-block my auto\">Signaler</button></a></div>
                        </div>
                    </div>
                </div>    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
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
        return array (  123 => 35,  111 => 30,  104 => 25,  101 => 24,  97 => 23,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  68 => 9,  62 => 6,  54 => 3,  47 => 2,  36 => 1,);
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
                    <img src=\"\\uploads\\{{blog.image_blog}}\" class=\"card-img\" alt=\"img\">
                </div>
            </div>
            <div class=\"row my-5\" id=\"objectif\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>{{blog.content_blog}}</p>
                    <p>{{blog.id_blog}}</p>
                    <p><bold>Dernière mise à jour: </bold><span><i>{{blog.last_update_blog}}</i></span></p>
                    <p><bold>Auteur: </bold><span><i>{{blog.pseudo_blog}}</i></span></p>

                </div>
            </div>

            <h4><bold>Commentaires du blog</bold></h4><br/>
            {% for comment in findComments %}
                <div class=\"comment-line row\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">{{comment.commentContent}}</p></div>

                    <div class=\"col4 mr-3\">
                        <div class=\"row px-0 mx-0\">
                            {# <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/reportComment/'~blog.id~'/'~comment.id }}><button type=\"button\" class=\"btn btn-secondary btn-block my auto\">Signaler</button></a></div> #}
                            <div class=\"col button-comment-line px-0 mx-2\"><a href={{'/blog/reportComment/'~blogId~'/'~comment.id }}><button type=\"button\" class=\"btn btn-secondary btn-block my auto\">Signaler</button></a></div>
                        </div>
                    </div>
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
{% endblock %}", "blog.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\blog.html.twig");
    }
}
