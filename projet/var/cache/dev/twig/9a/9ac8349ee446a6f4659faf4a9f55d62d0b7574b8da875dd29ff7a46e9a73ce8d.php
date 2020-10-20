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
class __TwigTemplate_b7a0157372b78d3b124f3315c28896b22f8d0ed8ac749b9a408e0bb25d486fcf extends Template
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
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_mediatheque_show");
        echo "\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_mediatheque_show");
        echo "\">LIVRE</a>
        <div class=\"dropdown-content\" id=\"a\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\" >Action</a></li>
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
        return array (  120 => 70,  65 => 18,  47 => 3,  43 => 1,);
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
                    <a class=\"nav-link letter-spacing dropdown-toggle\" href=\"{{ path('adherent_mediatheque_show') }}\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
        <a class=\"navbar-brand nav-cat letter-spacing dropdown test-hover\" href=\"{{ path('adherent_mediatheque_show') }}\">LIVRE</a>
        <div class=\"dropdown-content\" id=\"a\">
            <ul class=\"multi-column columns-2\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <ul class=\"multi-column-dropdown\">
                            <li><a href=\"#\" >Action</a></li>
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
</nav>", "adherent/_nav.html.twig", "/home/aduhoux/IUT/S3/Projets/mediatheque-g/projet/templates/adherent/_nav.html.twig");
    }
}
