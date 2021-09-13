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

/* home.html.twig */
class __TwigTemplate_9e91a178d37ba171ae02ec422362ce7b69ce269691adb394135b8983ee249595 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div class=\"container-fluid\" id=\"home\">
    ";
        // line 7
        if (($context["validation"] ?? null)) {
            // line 8
            echo "    <div class=\"alert alert-success\" role=\"success\">
        ";
            // line 9
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 12
        echo "
    <div class=\"row\">
        <div class=\"heading col-sm-12 col-md-6 col-lg-6\">
            <h1>Laurent LESAGE</h1></br>
            <h3>Développeur web junior fullstack<br /><br /> JavaScript et PHP/Symfony</h3>
            <p>\"Actuellement j'effectue une formation en alternance <br /> de développeur d'application PHP/symfony
                        avec Openclassrooms\"</p>
        </div>
        <div class=\"col-sm-12 col-md-6 col-lg-6 profile-picture\">
            <img src=\"/images/laurent.jpg\" alt=\"photo laurent\" class=\"rounded-circle w-50\">
        </div>
    </div>    
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-lg-6\">
            <div id=\"objectif\">
                <div class=\"border border-white rounded\">
                    <p><strong>Mes activités complémentaires en entreprise :</strong></br></p>        
                    <p id=\"activite-entreprise\"> 
                        Wordpress pour site vitrine et e-commerce,</br> Angular 11 pour le front-end application.
                    </p>
                </div>
            </div>
            <a href='../src/docs/2020_CV-laurentLESAGE.pdf' class='button-download' target='blank'>Télécharger CV</a>
        </div>
        <div class=\"col-sm-12 col-md-6 col-lg-6\">
            <form id=\"contact-form border border-white rounded\" method=\"post\" action=\"\" role=\"form\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"firstname\"><strong>Prénom</strong><span class=\"blue\"> *</span></label>
                        <input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" placeholder=\"votre prénom\">
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"name\"><strong>Nom</strong><span class=\"blue\"> *</span></label>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"votre nom\">
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                        <label for=\"Email\"><strong>Email</strong><span class=\"blue\"> *</span></label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"votre email\">
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                        <div class=\"col-md-6\">
                        <label for=\"phone\"><strong>Téléphone</strong></label>
                        <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"votre téléphone\">
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                    <div class=\"col-md-12\">
                        <label for=\"message\"><strong>Message</strong><span class=\"blue\"> *</span></label>
                        <textarea id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Votre message\" row=\"4\"></textarea>
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                    <div class=\"col-md-12\">
                        <p class=\"blue\"><strong>* Ces informations sont requises</strong></p>
                    </div>
                    <div class=\"col-md-12\">
                        <input type=\"submit\" class=\"button-send\" value=\"Envoyer\">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  66 => 9,  63 => 8,  61 => 7,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block body %} 
<div class=\"container-fluid\" id=\"home\">
    {% if validation %}
    <div class=\"alert alert-success\" role=\"success\">
        {{ validation }}
    </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"heading col-sm-12 col-md-6 col-lg-6\">
            <h1>Laurent LESAGE</h1></br>
            <h3>Développeur web junior fullstack<br /><br /> JavaScript et PHP/Symfony</h3>
            <p>\"Actuellement j'effectue une formation en alternance <br /> de développeur d'application PHP/symfony
                        avec Openclassrooms\"</p>
        </div>
        <div class=\"col-sm-12 col-md-6 col-lg-6 profile-picture\">
            <img src=\"/images/laurent.jpg\" alt=\"photo laurent\" class=\"rounded-circle w-50\">
        </div>
    </div>    
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-lg-6\">
            <div id=\"objectif\">
                <div class=\"border border-white rounded\">
                    <p><strong>Mes activités complémentaires en entreprise :</strong></br></p>        
                    <p id=\"activite-entreprise\"> 
                        Wordpress pour site vitrine et e-commerce,</br> Angular 11 pour le front-end application.
                    </p>
                </div>
            </div>
            <a href='../src/docs/2020_CV-laurentLESAGE.pdf' class='button-download' target='blank'>Télécharger CV</a>
        </div>
        <div class=\"col-sm-12 col-md-6 col-lg-6\">
            <form id=\"contact-form border border-white rounded\" method=\"post\" action=\"\" role=\"form\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"firstname\"><strong>Prénom</strong><span class=\"blue\"> *</span></label>
                        <input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" placeholder=\"votre prénom\">
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"name\"><strong>Nom</strong><span class=\"blue\"> *</span></label>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"votre nom\">
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                        <label for=\"Email\"><strong>Email</strong><span class=\"blue\"> *</span></label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"votre email\">
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                        <div class=\"col-md-6\">
                        <label for=\"phone\"><strong>Téléphone</strong></label>
                        <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"votre téléphone\">
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                    <div class=\"col-md-12\">
                        <label for=\"message\"><strong>Message</strong><span class=\"blue\"> *</span></label>
                        <textarea id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Votre message\" row=\"4\"></textarea>
                        <p class=\"comments\">Message d'erreur</p>
                    </div>
                    <div class=\"col-md-12\">
                        <p class=\"blue\"><strong>* Ces informations sont requises</strong></p>
                    </div>
                    <div class=\"col-md-12\">
                        <input type=\"submit\" class=\"button-send\" value=\"Envoyer\">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %} ", "home.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\home.html.twig");
    }
}
