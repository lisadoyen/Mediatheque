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
    <a class=\"navbar-brand titre letter-spacing\" href=\"#\">MEDIATHEQUE</a>
    <a class=\"navbar-brand ml-auto profil content-desktop letter-spacing\" href=\"";
        // line 3
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
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show");
        echo "\">LIVRE</a>
        <div class=\"dropdown-content\" id=\"a\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "REVUE"]);
        echo "\">Revue</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "REVUE ENFANT"]);
        echo "\">Enfant</a></li>
                                <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "REVUE ADULTE"]);
        echo "\">Adulte</a></li>
                            </div>
                            <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "SIENCE FICTION"]);
        echo "\">Science fiction</a></li>
                            <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "BIO"]);
        echo "\">Biographie</a></li>
                            <li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "ROMAN"]);
        echo "\">Roman</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "ROMAN ENFANT"]);
        echo "\">Enfant</a></li>
                                <li><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "ROMAN POLICIER"]);
        echo "\">Policier</a></li>
                            </div>
                            <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "FAMILLE"]);
        echo "\">Famille</a></li>
                            <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "JEUNES ADULTES"]);
        echo "\">Jeune adulte</a></li>
                            <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "Adolescents"]);
        echo "\">Adolescent</a></li>
                            <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "DOC"]);
        echo "\">Document</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "DUCUMENT ENFANT"]);
        echo "\">Document enfant</a></li>
                                <div class=\"sub-3-menu\">
                                    <li><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "10/13 ans"]);
        echo "\">10/13 ans</a></li>
                                    <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "8/10 ans"]);
        echo "\">8/10 ans</a></li>
                                    <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "6/8 ans"]);
        echo "\">6/8 ans</a></li>
                                    <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "3/6 ans"]);
        echo "\">3/6 ans</a></li>
                                    <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "0/3 ans"]);
        echo "\">0/3 ans</a></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "BD"]);
        echo "\">Bande Dessinée</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "BDE"]);
        echo "\">Enfant</a></li>
                                <li><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "BDA"]);
        echo "\">Adulte</a></li>
                            </div>
                            <li><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "MAISON JARDIN"]);
        echo "\" >Maison jardin</a></li>
                            <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "LOISIR MANUEL"]);
        echo "\">Loisir manuel</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "LOISIRS MANUEL ADULTE"]);
        echo "\">Adulte</a></li>
                            </div>
                            <li><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "SPORT"]);
        echo "\">Sport</a></li>
                            <li><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "GEO"]);
        echo "\">Géographie</a></li>
                            <li><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "HISTOIRE"]);
        echo "\">Histoire</a></li>
                            <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "SOCIETE"]);
        echo "\">Société</a></li>
                            <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "ART"]);
        echo "\">Art</a></li>
                            <li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "FOND BRETON"]);
        echo "\">Fond breton</a></li>
                            <li><a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "COURS PREPARATOIRE"]);
        echo "\">Cours préparatoire</a></li>
                            <li><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "CLASSIQUE"]);
        echo "\">Classique</a></li>
                            <li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "CASSETTE"]);
        echo "\">Cassette</a></li>
                            <li><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "DIV"]);
        echo "\">Divertissement</a></li>
                            <li><a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_bibliotheque_show_genre", ["genre" => "Inconnu"]);
        echo "\">Autres</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class=\"dropdown\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"#\">FILM</a>
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
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"#\">MUSIQUE</a>
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
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"#\">JEUX</a>
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
        return array (  277 => 125,  273 => 124,  269 => 123,  265 => 122,  261 => 121,  257 => 120,  253 => 119,  249 => 118,  245 => 117,  241 => 116,  237 => 115,  232 => 113,  227 => 111,  223 => 110,  218 => 108,  214 => 107,  209 => 105,  199 => 98,  195 => 97,  191 => 96,  187 => 95,  183 => 94,  178 => 92,  173 => 90,  169 => 89,  165 => 88,  161 => 87,  156 => 85,  152 => 84,  147 => 82,  143 => 81,  139 => 80,  134 => 78,  130 => 77,  125 => 75,  116 => 69,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-dark\">
    <a class=\"navbar-brand titre letter-spacing\" href=\"#\">MEDIATHEQUE</a>
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
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"{{ path('adherent_bibliotheque_show') }}\">LIVRE</a>
        <div class=\"dropdown-content\" id=\"a\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre : 'REVUE'}) }}\">Revue</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"REVUE ENFANT\"}) }}\">Enfant</a></li>
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"REVUE ADULTE\"}) }}\">Adulte</a></li>
                            </div>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"SIENCE FICTION\"}) }}\">Science fiction</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"BIO\"}) }}\">Biographie</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"ROMAN\"}) }}\">Roman</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"ROMAN ENFANT\"}) }}\">Enfant</a></li>
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"ROMAN POLICIER\"}) }}\">Policier</a></li>
                            </div>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"FAMILLE\"}) }}\">Famille</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"JEUNES ADULTES\"}) }}\">Jeune adulte</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"Adolescents\"}) }}\">Adolescent</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"DOC\"}) }}\">Document</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"DUCUMENT ENFANT\"}) }}\">Document enfant</a></li>
                                <div class=\"sub-3-menu\">
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"10/13 ans\"}) }}\">10/13 ans</a></li>
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"8/10 ans\"}) }}\">8/10 ans</a></li>
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"6/8 ans\"}) }}\">6/8 ans</a></li>
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"3/6 ans\"}) }}\">3/6 ans</a></li>
                                    <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"0/3 ans\"}) }}\">0/3 ans</a></li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"BD\"}) }}\">Bande Dessinée</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"BDE\"}) }}\">Enfant</a></li>
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"BDA\"}) }}\">Adulte</a></li>
                            </div>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"MAISON JARDIN\"}) }}\" >Maison jardin</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"LOISIR MANUEL\"}) }}\">Loisir manuel</a></li>
                            <div class=\"sub-2-menu\">
                                <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"LOISIRS MANUEL ADULTE\"}) }}\">Adulte</a></li>
                            </div>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"SPORT\"}) }}\">Sport</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"GEO\"}) }}\">Géographie</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"HISTOIRE\"}) }}\">Histoire</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"SOCIETE\"}) }}\">Société</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"ART\"}) }}\">Art</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"FOND BRETON\"}) }}\">Fond breton</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"COURS PREPARATOIRE\"}) }}\">Cours préparatoire</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"CLASSIQUE\"}) }}\">Classique</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"CASSETTE\"}) }}\">Cassette</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"DIV\"}) }}\">Divertissement</a></li>
                            <li><a href=\"{{ path('adherent_bibliotheque_show_genre', {genre: \"Inconnu\"}) }}\">Autres</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class=\"dropdown\">
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"#\">FILM</a>
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
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"#\">MUSIQUE</a>
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
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"#\">JEUX</a>
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
</nav>", "adherent/_nav.html.twig", "/var/www/html/ptut/projet/projet/templates/adherent/_nav.html.twig");
    }
}
