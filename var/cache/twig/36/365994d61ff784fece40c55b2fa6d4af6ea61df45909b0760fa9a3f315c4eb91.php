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
                <div class=\"col-12 ml-50px my-0\">
                    <div><img  src=\"./images/me2.jpg\" alt=\"\"></div>
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
                </div>
            </div>

            <h4><bold>Commentaires du blog</bold></h4><br/>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["findComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "                <div class=\"commentaire shadow row\" style=\"border: 1px solid grey;\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentContent", [], "any", false, false, false, 22), "html", null, true);
            echo "</p></div>
                    <div class=\"col2\"><a href=";
            // line 23
            echo twig_escape_filter($this->env, (("/blogs/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 23)) . "/edit"), "html", null, true);
            echo "><button class=\"btn btn-lg btn-warning btn-block mb-3\">Modifier</button></a></div>
                    <div class=\"col2\"><a href=";
            // line 24
            echo twig_escape_filter($this->env, (("/blogs/" . twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "id", [], "any", false, false, false, 24)) . "/delete"), "html", null, true);
            echo "><button class=\"btn btn-lg btn-danger btn-block mb-3\">Supprimer</button></a></div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        return array (  109 => 27,  100 => 24,  96 => 23,  92 => 22,  89 => 21,  85 => 20,  77 => 15,  73 => 14,  62 => 6,  54 => 3,  47 => 2,  36 => 1,);
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
                <div class=\"col-12 ml-50px my-0\">
                    <div><img  src=\"./images/me2.jpg\" alt=\"\"></div>
                </div>
            </div>
            <div class=\"row my-5\" id=\"objectif\">
                <div class=\"col-12 mx-auto my-0\">
                    <p>{{blog.content}}</p>
                    <p><bold>Dernière mise à jour: </bold><span><i>{{blog.last_update}}</i></span></p>
                </div>
            </div>

            <h4><bold>Commentaires du blog</bold></h4><br/>
            {% for comment in findComments %}
                <div class=\"commentaire shadow row\" style=\"border: 1px solid grey;\">
                    <div class=\"col8\"><p class=\"mx-3 my-3\">{{comment.commentContent}}</p></div>
                    <div class=\"col2\"><a href={{'/blogs/'~blog.id~'/edit'}}><button class=\"btn btn-lg btn-warning btn-block mb-3\">Modifier</button></a></div>
                    <div class=\"col2\"><a href={{'/blogs/'~blog.id~'/delete'}}><button class=\"btn btn-lg btn-danger btn-block mb-3\">Supprimer</button></a></div>
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
