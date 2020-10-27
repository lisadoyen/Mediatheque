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

/* adherent/_nav.html.twig */
class __TwigTemplate_ed7df4c7c4a176f1ac6105242ac1bfa2564161694d7b072e58f5717e2dc38857 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherent/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherent/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-dark\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"logo\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/white-logo.png"), "html", null, true);
        echo "\" style=\"height: 12vh;\" alt=\"logo\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" style=\"height: 12vh;\" alt=\"logo\" class=\"img-top\">
    </a>
    <a class=\"navbar-brand titre letter-spacing content-desktop\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">MEDIATECA</a>
    ";
        // line 7
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "pathInfo", [], "any", false, false, false, 7), "/adherent"))) {
            // line 8
            echo "        <form id=\"search\" action=\"POST\" class=\"content-desktop\">
            <div class=\"searchbar\">
                <input class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Search...\">
                <a href=\"#\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\"><i class=\"fas fa-search\"></i></a>
            </div>
        </form>
    ";
        }
        // line 15
        echo "    <a class=\"navbar-brand ml-auto profil content-desktop letter-spacing\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\">DECONNEXION</a>


    <button class=\"navbar-toggler custom-toggler burger\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link letter-spacing\" href=\"#\">TEST<span class=\"sr-only\">(current)</span></a>
            </li>
            <div class=\"content-mobile\">
                <li class=\"nav-item active dropdown\">
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        LIVRE
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 28]);
        echo "\">Revue</a>
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
                <br>
                <li class=\"nav-item active dropdown\">
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        FILM
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
                <br>
                <li class=\"nav-item active dropdown\">
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        MUSIQUE
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li><br>
                <li class=\"nav-item active dropdown\">
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        JEUX
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</nav>
<!--DEUXIEME NAVBAR-->
<nav class=\"navbar navbar-light nav-space content-desktop\">
    <div class=\"dropdown\" style=\"margin-left: 30vh;\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown nav-title-hover\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show");
        echo "\">LIVRE</a>
        <div class=\"dropdown-content\" id=\"a\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 28]);
        echo "\">Revue</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 30]);
        echo "\">Enfant</a></li>
                                <li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 29]);
        echo "\">Adulte</a></li>
                            </div>
                            <li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 34]);
        echo "\">Science fiction</a></li>
                            <li><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 11]);
        echo "\">Biographie</a></li>
                            <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 31]);
        echo "\">Roman</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 32]);
        echo "\">Enfant</a></li>
                                <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 33]);
        echo "\">Policier</a></li>
                            </div>
                            <li><a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 18]);
        echo "\">Famille</a></li>
                            <li><a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 23]);
        echo "\">Jeune adulte</a></li>
                            <li><a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 6]);
        echo "\">Adolescent</a></li>
                            <li><a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 16]);
        echo "\">Document</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 17]);
        echo "\">Document enfant</a></li>
                                <div class=\"sub-3-menu\">
                                    <li><a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 2]);
        echo "\">10/13 ans</a></li>
                                    <li><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 5]);
        echo "\">8/10 ans</a></li>
                                    <li><a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 4]);
        echo "\">6/8 ans</a></li>
                                    <li><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 3]);
        echo "\">3/6 ans</a></li>
                                    <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 1]);
        echo "\">0/3 ans</a></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 8]);
        echo "\">Bande Dessinée</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 10]);
        echo "\">Enfant</a></li>
                                <li><a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 9]);
        echo "\">Adulte</a></li>
                            </div>
                            <li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 26]);
        echo "\" >Maison jardin</a></li>
                            <li><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 24]);
        echo "\">Loisir manuel</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 25]);
        echo "\">Adulte</a></li>
                            </div>
                            <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 36]);
        echo "\">Sport</a></li>
                            <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 20]);
        echo "\">Géographie</a></li>
                            <li><a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 21]);
        echo "\">Histoire</a></li>
                            <li><a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 35]);
        echo "\">Société</a></li>
                            <li><a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 7]);
        echo "\">Art</a></li>
                            <li><a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 19]);
        echo "\">Fond breton</a></li>
                            <li><a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 14]);
        echo "\">Cours préparatoire</a></li>
                            <li><a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 13]);
        echo "\">Classique</a></li>
                            <li><a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 12]);
        echo "\">Cassette</a></li>
                            <li><a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 15]);
        echo "\">Divertissement</a></li>
                            <li><a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["id" => 22]);
        echo "\">Autres</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class=\"dropdown\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown nav-title-hover\" href=\"#\">FILM</a>
        <div class=\"dropdown-content\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here that's extra long so we can see how it looks</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class=\"dropdown\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown nav-title-hover\" href=\"#\">MUSIQUE</a>
        <div class=\"dropdown-content\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here that's extra long so we can see how it looks</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class=\"dropdown\" style=\"margin-right: 30vh;\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown nav-title-hover\" href=\"#\">JEUX</a>
        <div class=\"dropdown-content\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here that's extra long so we can see how it looks</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "adherent/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 138,  305 => 137,  301 => 136,  297 => 135,  293 => 134,  289 => 133,  285 => 132,  281 => 131,  277 => 130,  273 => 129,  269 => 128,  264 => 126,  259 => 124,  255 => 123,  250 => 121,  246 => 120,  241 => 118,  231 => 111,  227 => 110,  223 => 109,  219 => 108,  215 => 107,  210 => 105,  205 => 103,  201 => 102,  197 => 101,  193 => 100,  188 => 98,  184 => 97,  179 => 95,  175 => 94,  171 => 93,  166 => 91,  162 => 90,  157 => 88,  148 => 82,  96 => 33,  74 => 15,  65 => 8,  63 => 7,  59 => 6,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-dark\">
    <a href=\"{{ path(\"index\") }}\" class=\"logo\">
        <img src=\"{{asset('assets/images/white-logo.png')}}\" style=\"height: 12vh;\" alt=\"logo\">
        <img src=\"{{asset('assets/images/logo.png')}}\" style=\"height: 12vh;\" alt=\"logo\" class=\"img-top\">
    </a>
    <a class=\"navbar-brand titre letter-spacing content-desktop\" href=\"{{ path(\"index\") }}\">MEDIATECA</a>
    {% if app.request.pathInfo != '/adherent' %}
        <form id=\"search\" action=\"POST\" class=\"content-desktop\">
            <div class=\"searchbar\">
                <input class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Search...\">
                <a href=\"#\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\"><i class=\"fas fa-search\"></i></a>
            </div>
        </form>
    {% endif %}
    <a class=\"navbar-brand ml-auto profil content-desktop letter-spacing\" href=\"{{ path('security_logout') }}\">DECONNEXION</a>


    <button class=\"navbar-toggler custom-toggler burger\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link letter-spacing\" href=\"#\">TEST<span class=\"sr-only\">(current)</span></a>
            </li>
            <div class=\"content-mobile\">
                <li class=\"nav-item active dropdown\">
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        LIVRE
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('adherent_bibliotheque_show_genre', {id : 28}) }}\">Revue</a>
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
                <br>
                <li class=\"nav-item active dropdown\">
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        FILM
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
                <br>
                <li class=\"nav-item active dropdown\">
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        MUSIQUE
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li><br>
                <li class=\"nav-item active dropdown\">
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        JEUX
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</nav>
<!--DEUXIEME NAVBAR-->
<nav class=\"navbar navbar-light nav-space content-desktop\">
    <div class=\"dropdown\" style=\"margin-left: 30vh;\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown nav-title-hover\" href=\"{{ path('adherent_bibliotheque_show') }}\">LIVRE</a>
        <div class=\"dropdown-content\" id=\"a\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id : 28}) }}\">Revue</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 30}) }}\">Enfant</a></li>
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 29}) }}\">Adulte</a></li>
                            </div>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 34}) }}\">Science fiction</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 11}) }}\">Biographie</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 31}) }}\">Roman</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 32}) }}\">Enfant</a></li>
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 33}) }}\">Policier</a></li>
                            </div>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 18}) }}\">Famille</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 23}) }}\">Jeune adulte</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 6}) }}\">Adolescent</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 16}) }}\">Document</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 17}) }}\">Document enfant</a></li>
                                <div class=\"sub-3-menu\">
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 2}) }}\">10/13 ans</a></li>
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 5}) }}\">8/10 ans</a></li>
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 4}) }}\">6/8 ans</a></li>
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 3}) }}\">3/6 ans</a></li>
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 1}) }}\">0/3 ans</a></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 8}) }}\">Bande Dessinée</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 10}) }}\">Enfant</a></li>
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 9}) }}\">Adulte</a></li>
                            </div>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 26}) }}\" >Maison jardin</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 24}) }}\">Loisir manuel</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 25}) }}\">Adulte</a></li>
                            </div>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 36}) }}\">Sport</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 20}) }}\">Géographie</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 21}) }}\">Histoire</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 35}) }}\">Société</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 7}) }}\">Art</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 19}) }}\">Fond breton</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 14}) }}\">Cours préparatoire</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 13}) }}\">Classique</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 12}) }}\">Cassette</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 15}) }}\">Divertissement</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {id: 22}) }}\">Autres</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class=\"dropdown\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown nav-title-hover\" href=\"#\">FILM</a>
        <div class=\"dropdown-content\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here that's extra long so we can see how it looks</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class=\"dropdown\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown nav-title-hover\" href=\"#\">MUSIQUE</a>
        <div class=\"dropdown-content\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here that's extra long so we can see how it looks</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class=\"dropdown\" style=\"margin-right: 30vh;\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown nav-title-hover\" href=\"#\">JEUX</a>
        <div class=\"dropdown-content\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here that's extra long so we can see how it looks</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>", "adherent/_nav.html.twig", "/home/aduhoux/IUT/S3/Projets/mediatheque-g/projet/templates/adherent/_nav.html.twig");
    }
}
