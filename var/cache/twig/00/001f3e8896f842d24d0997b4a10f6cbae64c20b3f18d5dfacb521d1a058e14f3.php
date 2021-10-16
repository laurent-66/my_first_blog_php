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
class __TwigTemplate_988dddfeff3be0e61300a4907ce3b182ccc733b686be064a658c6845731d7a2b extends Template
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
    <div class=\"row section1-accueil\">
        <div class=\"col-sm-12 col-md-6 col-lg-6 profile-picture\">
            <img src=\"/images/laurent.jpg\" alt=\"photo laurent\" class=\"rounded-circle w-50\">
        </div>
        <div class=\"heading col-sm-12 col-md-6 col-lg-6\">
            <h1>Laurent LESAGE</h1></br>
            <h3>Développeur web junior fullstack<br /><br /> JavaScript et PHP/Symfony</h3>
            <p>\"Actuellement j'effectue une formation en alternance <br /> de développeur d'application PHP/symfony
                        avec Openclassrooms\"</p>
        </div>
    </div>  

    <div class=\"row section2-accueil\">
        <div class=\"container-activite col-sm-12 col-md-4 col-lg-4 col-xl-4 px-0 py-0 mx-0 my-0\">
            <h3>Mes activités complémentaires en entreprise :</h3>  
            <div class=\"activites\">
      
                <ul class=\"activite-entreprise\"> 
                    <li>Site web vitrine et e-commerce: CMS wordpress thème AVADA</li>
                    <li>Application front-end: Angular 11.</li> 
                    <li>Application Back-end: PHP et nestjs</li> 
                </ul>
            </div>
            <div class=\"row-button\">
                <a href=\"/docs/2020_CV-laurentLESAGE.pdf\" class='button-download' target='blank'>Télécharger CV</a>
            </div>
        </div>
        <div class=\"form-contact col-sm-12 col-md-8 col-lg-8 col-xl-8 px-0 py-0 mx-0 my-0\">
            <div class=\"px-0 mx-0\">
                <form class=\"contact-form\" method=\"post\" action=\"\" role=\"form\">
                    ";
        // line 37
        if (($context["error"] ?? null)) {
            // line 38
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 42
        echo "                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label for=\"firstname\"><strong>Prénom</strong><span class=\"blue\"> *</span></label>
                            <input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" placeholder=\"votre prénom\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"name\"><strong>Nom</strong><span class=\"blue\"> *</span></label>
                            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"votre nom\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label for=\"Email\"><strong>Email</strong><span class=\"blue\"> *</span></label>
                            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"votre email\">
                            ";
        // line 56
        if (($context["errorMail"] ?? null)) {
            // line 57
            echo "                                <small class=\"text-danger\">Votre mail doit comporter un arobase.</small>
                            ";
        }
        // line 59
        echo "                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"phone\"><strong>Téléphone</strong></label>
                            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"votre téléphone\">
                        </div>
                    </div>    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <label for=\"message\"><strong>Message</strong><span class=\"blue\"> *</span></label>
                            <textarea id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Votre message\" row=\"4\"></textarea>
                        </div>
                    </div>
                    ";
        // line 71
        if (($context["errorGlobal"] ?? null)) {
            // line 72
            echo "                    <div class=\"alert alert-danger my-3\" role=\"danger\">
                        ";
            // line 73
            echo twig_escape_filter($this->env, ($context["errorGlobal"] ?? null), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 76
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"blue\"><strong>* Ces informations sont requises</strong></p>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <input type=\"submit\" class=\"button-send\" value=\"Envoyer\">
                        </div>
                    </div>
                </form>
            </div>
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
        return array (  149 => 76,  143 => 73,  140 => 72,  138 => 71,  124 => 59,  120 => 57,  118 => 56,  102 => 42,  96 => 39,  93 => 38,  91 => 37,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block body %} 
<div class=\"container-fluid\" id=\"home\">
    <div class=\"row section1-accueil\">
        <div class=\"col-sm-12 col-md-6 col-lg-6 profile-picture\">
            <img src=\"/images/laurent.jpg\" alt=\"photo laurent\" class=\"rounded-circle w-50\">
        </div>
        <div class=\"heading col-sm-12 col-md-6 col-lg-6\">
            <h1>Laurent LESAGE</h1></br>
            <h3>Développeur web junior fullstack<br /><br /> JavaScript et PHP/Symfony</h3>
            <p>\"Actuellement j'effectue une formation en alternance <br /> de développeur d'application PHP/symfony
                        avec Openclassrooms\"</p>
        </div>
    </div>  

    <div class=\"row section2-accueil\">
        <div class=\"container-activite col-sm-12 col-md-4 col-lg-4 col-xl-4 px-0 py-0 mx-0 my-0\">
            <h3>Mes activités complémentaires en entreprise :</h3>  
            <div class=\"activites\">
      
                <ul class=\"activite-entreprise\"> 
                    <li>Site web vitrine et e-commerce: CMS wordpress thème AVADA</li>
                    <li>Application front-end: Angular 11.</li> 
                    <li>Application Back-end: PHP et nestjs</li> 
                </ul>
            </div>
            <div class=\"row-button\">
                <a href=\"/docs/2020_CV-laurentLESAGE.pdf\" class='button-download' target='blank'>Télécharger CV</a>
            </div>
        </div>
        <div class=\"form-contact col-sm-12 col-md-8 col-lg-8 col-xl-8 px-0 py-0 mx-0 my-0\">
            <div class=\"px-0 mx-0\">
                <form class=\"contact-form\" method=\"post\" action=\"\" role=\"form\">
                    {% if error %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ error }}
                        </div>
                    {% endif %}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label for=\"firstname\"><strong>Prénom</strong><span class=\"blue\"> *</span></label>
                            <input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" placeholder=\"votre prénom\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"name\"><strong>Nom</strong><span class=\"blue\"> *</span></label>
                            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"votre nom\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label for=\"Email\"><strong>Email</strong><span class=\"blue\"> *</span></label>
                            <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"votre email\">
                            {% if errorMail %}
                                <small class=\"text-danger\">Votre mail doit comporter un arobase.</small>
                            {% endif %}
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"phone\"><strong>Téléphone</strong></label>
                            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" placeholder=\"votre téléphone\">
                        </div>
                    </div>    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <label for=\"message\"><strong>Message</strong><span class=\"blue\"> *</span></label>
                            <textarea id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Votre message\" row=\"4\"></textarea>
                        </div>
                    </div>
                    {% if errorGlobal %}
                    <div class=\"alert alert-danger my-3\" role=\"danger\">
                        {{ errorGlobal }}
                    </div>
                    {% endif %}

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <p class=\"blue\"><strong>* Ces informations sont requises</strong></p>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <input type=\"submit\" class=\"button-send\" value=\"Envoyer\">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "home.html.twig", "C:\\wamp64\\www\\myblogphp\\my_first_blog_php\\templates\\home.html.twig");
    }
}
