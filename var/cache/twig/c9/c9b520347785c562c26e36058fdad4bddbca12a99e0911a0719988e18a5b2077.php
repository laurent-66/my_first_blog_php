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

/* template.html.twig */
class __TwigTemplate_0d701f946a879aa126ddaf9d26a3f595f9c9cf049f9854193a4f17ccf387b413 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"/css/style.css\">
        <link rel=\"stylesheet\" href=\"../src/fonts\">
</head>

<body>
    <div id=\"page-template\">
        <header class=\"sticky-top\">
                <nav class=\"navbar navbar-dark navbar-expand-md bg-dark m-0 p-0\">
                    <div class=\" menunavigation container-fluid m-0 p-0\">
                        <div class=\"navbar-brand m-0 p-3\">Menu</div>
                        <div id=\"buttonMenu\">
                            <button class=\"d-block navbar-toggler m-3 p-1\" data-toggle=\"collapse\" data-target=\"#navbarText\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>
                        </div>
                        <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                            <ul class=\"menu\">
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/\">Accueil</a>
                                </li>
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/blogs\">Blogs</a>
                                </li>
            
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/inscription\">Inscription</a>
                                </li>

                            ";
        // line 37
        if ((0 === twig_compare(($context["session"] ?? null), false))) {
            // line 38
            echo "                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/se-connecter\">Connexion</a>
                                </li>
                            ";
        } elseif ((0 === twig_compare(        // line 41
($context["session"] ?? null), true))) {
            // line 42
            echo "
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/deconnecter\">déconnexion</a>
                                </li>

                            ";
        }
        // line 48
        echo "
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);

        // line 59

        echo "

        <footer class=\"sticky-footer\">
                <div class=\"container-fluid bg-dark m-0 p-0\">
                    <div id=\"row_footer\" class=\"row m-0 px-0 py-3\">
                        <div id=\"block_mail\" class=\"col-12 col-sm-12 col-md-4 m-0 p-0 text-white text-center\">
                            <h5 id=\"mail_footer\">laurent.lesage51@gmail.com</h5>
                        </div>
                        <div id=\"block_arrow\" class=\"col-12 col-sm-12 col-md-4 m-0 p-0 text-center\">
                            
                                <div id=\"arrow-top\"class=\"mx-auto my-3\"> <a href=\"#\"><img src=\"/images/iconarrow.png\"/></a></div>
                        
                            <h5 class=\"my-3\">Cliquez, haut de la page</h5>
                        </div>
                        <div id=\"block_linkedin\" class=\"col-12 col-sm-12 col-md-4 m-0 p-0\">
                            <div id=\"logo_linkedin\"><a href=\"https://fr.linkedin.com/in/laurent-lesage-795599113\" target=\"_blank\"><img src=\"/images/LinkedIn_Logo.png\"/></a></div>
                            <div id=\"logo_linkedin\"><a href=\"https://github.com/laurent-66/my_first_blog_php\" target=\"_blank\"><img src=\"/images/GitHub-Mark-Light-64px.png\"/></a></div>
                        </div>
                    </div>
                    <div class=\"row m-0 px-0 py-3\" id=\"connexionAdmin\">

                        <a href=\"/blogs/admin/dashboard\">Administration blogs</a>

                    </div>
                </div>
            </footer>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script> 
    </div>
</body>

</html> ";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }


    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57

        echo "
        ";
    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  157 => 56,  151 => 6,  112 => 59,  110 => 56,  100 => 48,  92 => 42,  90 => 41,  85 => 38,  83 => 37,  66 => 23,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"/css/style.css\">
        <link rel=\"stylesheet\" href=\"../src/fonts\">
</head>

<body>
    <div id=\"page-template\">
        <header class=\"sticky-top\">
                <nav class=\"navbar navbar-dark navbar-expand-md bg-dark m-0 p-0\">
                    <div class=\" menunavigation container-fluid m-0 p-0\">
                        <div class=\"navbar-brand m-0 p-3\">Menu</div>
                        <div id=\"buttonMenu\">
                            <button class=\"d-block navbar-toggler m-3 p-1\" data-toggle=\"collapse\" data-target=\"#navbarText\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>
                        </div>
                        <p>{{session.id}}</p>
                        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                            <ul class=\"menu\">
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/\">Accueil</a>
                                </li>
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/blogs\">Blogs</a>
                                </li>
            
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/inscription\">Inscription</a>
                                </li>

                            {% if session == false %}
                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/se-connecter\">Connexion</a>
                                </li>
                            {% elseif session == true %}

                                <li class=\"menu-item\">
                                    <a class=\"item nav-link\" href=\"/deconnecter\">déconnexion</a>
                                </li>

                            {% endif %}

                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


        {% block body %}

        {% endblock %}


        <footer class=\"sticky-footer\">
                <div class=\"container-fluid bg-dark m-0 p-0\">
                    <div id=\"row_footer\" class=\"row m-0 px-0 py-3\">
                        <div id=\"block_mail\" class=\"col-12 col-sm-12 col-md-4 m-0 p-0 text-white text-center\">
                            <h5 id=\"mail_footer\">laurent.lesage51@gmail.com</h5>
                        </div>
                        <div id=\"block_arrow\" class=\"col-12 col-sm-12 col-md-4 m-0 p-0 text-center\">
                            
                                <div id=\"arrow-top\"class=\"mx-auto my-3\"> <a href=\"#\"><img src=\"/images/iconarrow.png\"/></a></div>
                        
                            <h5 class=\"my-3\">Cliquez, haut de la page</h5>
                        </div>
                        <div id=\"block_linkedin\" class=\"col-12 col-sm-12 col-md-4 m-0 p-0\">
                            <div id=\"logo_linkedin\"><a href=\"https://fr.linkedin.com/in/laurent-lesage-795599113\" target=\"_blank\"><img src=\"/images/LinkedIn_Logo.png\"/></a></div>
                            <div id=\"logo_linkedin\"><a href=\"https://github.com/laurent-66/my_first_blog_php\" target=\"_blank\"><img src=\"/images/GitHub-Mark-Light-64px.png\"/></a></div>
                        </div>
                    </div>
                    <div class=\"row m-0 px-0 py-3\" id=\"connexionAdmin\">

                        <a href=\"/blogs/admin/dashboard\">Administration blogs</a>

                    </div>
                </div>
            </footer>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script> 
    </div>
</body>

</html> ", "template.html.twig", "C:\\wamp64\\www\\oc_my_first_blog_php\\templates\\template.html.twig");
    }
}
