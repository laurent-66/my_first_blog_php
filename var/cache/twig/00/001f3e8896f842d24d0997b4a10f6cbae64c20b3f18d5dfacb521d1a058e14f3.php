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

    ";
        // line 8
        if (($context["errorGlobal"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-danger\" role=\"danger\">
        ";
            // line 10
            echo twig_escape_filter($this->env, ($context["errorGlobal"] ?? null), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 13
        echo "
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
        <div class=\"container-activite col-sm-12 col-md-4 col-lg-4 col-xl-4 px-0 py-0 mx-0 my-5\" style=\"border: 3px solid orange\">
            <div class=\"activites\">
                <h3>Mes activités complémentaires en entreprise :</h3>        
                <ul class=\"activite-entreprise\"> 
                    <li>Site web vitrine et e-commerce: CMS wordpress thème AVADA</li>
                    <li>Application front-end: Angular 11.</li> 
                    <li>Application Back-end: PHP et nestjs</li> 
                </ul>
            </div>
            <div class=\"row-button\">
                <a href='../src/docs/2020_CV-laurentLESAGE.pdf' class='button-download' target='blank'>Télécharger CV</a>
            </div>
        </div>

        <div class=\"form-contact col-sm-12 col-md-8 col-lg-8 col-xl-8 px-3 py-0 mx-0 my-5\">
            <div class=\"px-0 mx-0\">
                <form class=\"contact-form border border-white rounded\" method=\"post\" action=\"\" role=\"form\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label for=\"firstname\"><strong>Prénom</strong><span class=\"blue\"> *</span></label>
                            <input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" placeholder=\"votre prénom\">
                            <small class=\"text-danger\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "firstname", [], "any", false, false, false, 48), "html", null, true);
        echo "</small>
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
                    </div>    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <label for=\"message\"><strong>Message</strong><span class=\"blue\"> *</span></label>
                            <textarea id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Votre message\" row=\"4\"></textarea>
                            <p class=\"comments\">Message d'erreur</p>
                        </div>
                    </div>

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
        return array (  110 => 48,  73 => 13,  67 => 10,  64 => 9,  62 => 8,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block body %} 
<div class=\"container-fluid\" id=\"home\">

    {% if errorGlobal %}
    <div class=\"alert alert-danger\" role=\"danger\">
        {{ errorGlobal }}
    </div>
    {% endif %}

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
        <div class=\"container-activite col-sm-12 col-md-4 col-lg-4 col-xl-4 px-0 py-0 mx-0 my-5\" style=\"border: 3px solid orange\">
            <div class=\"activites\">
                <h3>Mes activités complémentaires en entreprise :</h3>        
                <ul class=\"activite-entreprise\"> 
                    <li>Site web vitrine et e-commerce: CMS wordpress thème AVADA</li>
                    <li>Application front-end: Angular 11.</li> 
                    <li>Application Back-end: PHP et nestjs</li> 
                </ul>
            </div>
            <div class=\"row-button\">
                <a href='../src/docs/2020_CV-laurentLESAGE.pdf' class='button-download' target='blank'>Télécharger CV</a>
            </div>
        </div>

        <div class=\"form-contact col-sm-12 col-md-8 col-lg-8 col-xl-8 px-3 py-0 mx-0 my-5\">
            <div class=\"px-0 mx-0\">
                <form class=\"contact-form border border-white rounded\" method=\"post\" action=\"\" role=\"form\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label for=\"firstname\"><strong>Prénom</strong><span class=\"blue\"> *</span></label>
                            <input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"form-control\" placeholder=\"votre prénom\">
                            <small class=\"text-danger\">{{error.firstname}}</small>
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
                    </div>    
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <label for=\"message\"><strong>Message</strong><span class=\"blue\"> *</span></label>
                            <textarea id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Votre message\" row=\"4\"></textarea>
                            <p class=\"comments\">Message d'erreur</p>
                        </div>
                    </div>

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
