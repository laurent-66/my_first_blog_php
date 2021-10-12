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
            <div class=\"col-10 mx-auto my-3\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title_blog", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"row-blog-img\">
                <img src=\"\\uploads\\";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "image_blog", [], "any", false, false, false, 10), "html", null, true);
        echo "\" class=\"blog-img px-auto\" alt=\"img\">
            </div>
            <div class=\"content-blog row my-5\">
                <div class=\"col-10 mx-auto my-0\">
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "chapo_blog", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content_blog", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                    <p><bold>Dernière mise à jour: </bold><span>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "last_update_blog", [], "any", false, false, false, 16), "html", null, true);
        echo "</span></p>
                    <p><bold>Auteur: </bold><span>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "pseudo_blog", [], "any", false, false, false, 17), "html", null, true);
        echo "</span></p>
                </div>
            </div>
                <div class=\"col-10 mx-auto my-0\">
                    <h4><bold>Commentaires du blog</bold></h4><br/>
                    <div class=\"separator\"></div>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["findComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 24
            echo "                        <div class=\"comment-line row\">
                            <div class=\"col8\"><p class=\"comment mx-3 my-3\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 25), "html", null, true);
            echo "</p></div>
                            <div class=\"col4 mr-3\">
                                <div class=\"row px-0 mx-0\">
                                    <div class=\"col button-comment-line px-0 mx-2\"><a href=";
            // line 28
            echo twig_escape_filter($this->env, ((("/blog/reportComment/" . ($context["blogId"] ?? null)) . "/") . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 28)), "html", null, true);
            echo "><button type=\"button\" class=\"btn btn-secondary btn-block my-3\"><i class=\"fas fa-exclamation\"></i></button></a></div>
                                </div>
                            </div>
                        </div>    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
            ";
        // line 34
        if (($context["session"] ?? null)) {
            // line 35
            echo "                <div class=\"col-10 mx-auto mt-5 mb-5\">
                    <div class=\"separator\"></div>
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
                </div>
            ";
        } else {
            // line 49
            echo "            <div class=\"col-10 mx-auto my-0 px-0 annotation\">
                <p> Vous souhaitez laisser un commentaires ? Veuillez vous inscrire ou vous connecter. :-)</p>
            </div>    
            ";
        }
        // line 53
        echo "    </div>
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
        return array (  148 => 53,  142 => 49,  126 => 35,  124 => 34,  121 => 33,  110 => 28,  104 => 25,  101 => 24,  97 => 23,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  69 => 10,  63 => 7,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %} 
<div class=\"container-fluid mx-0 my-0 px-0 mx-0\" id=\"blog\">
    <div class=\"container-blog\">
            <div class=\"col-10 mx-auto my-3\">
                <h3>{{blog.title_blog}}</h3>
            </div>
            <div class=\"row-blog-img\">
                <img src=\"\\uploads\\{{blog.image_blog}}\" class=\"blog-img px-auto\" alt=\"img\">
            </div>
            <div class=\"content-blog row my-5\">
                <div class=\"col-10 mx-auto my-0\">
                    <p>{{blog.chapo_blog}}</p>
                    <p>{{blog.content_blog}}</p>
                    <p><bold>Dernière mise à jour: </bold><span>{{blog.last_update_blog}}</span></p>
                    <p><bold>Auteur: </bold><span>{{blog.pseudo_blog}}</span></p>
                </div>
            </div>
                <div class=\"col-10 mx-auto my-0\">
                    <h4><bold>Commentaires du blog</bold></h4><br/>
                    <div class=\"separator\"></div>
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
                </div>
            {% if session %}
                <div class=\"col-10 mx-auto mt-5 mb-5\">
                    <div class=\"separator\"></div>
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
                </div>
            {% else %}
            <div class=\"col-10 mx-auto my-0 px-0 annotation\">
                <p> Vous souhaitez laisser un commentaires ? Veuillez vous inscrire ou vous connecter. :-)</p>
            </div>    
            {% endif %}
    </div>
</div>   
{% endblock %}", "blog.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\blog.html.twig");
    }
}
