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

/* benevole/_nav.html.twig */
class __TwigTemplate_ec31e7a6c73ef13e19cdff8d6999ebf900a627d2c1e4c2133b1b1fcda25344c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "benevole/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "benevole/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <span style=\"color:#007bff;\">Benevole | </span></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"DropdownEvenements\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Biblothèque
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"DropdownEvenements\">
                    <a class=\"dropdown-item\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("benevole_mediatheque_show");
        echo "\">Afficher les livres</a>
                    <a class=\"dropdown-item\" href=\"\">Ajouter un livre</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"DropdownEvenements\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Musicothèque
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"DropdownEvenements\">
                    <a class=\"dropdown-item\" href=\"\">Afficher les musiques</a>
                    <a class=\"dropdown-item\" href=\"\">Ajouter une musiques</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"DropdownEvenements\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Vidéothèque
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"DropdownEvenements\">
                    <a class=\"dropdown-item\" href=\"\">Afficher les vidéos</a>
                    <a class=\"dropdown-item\" href=\"\">Ajouter une vidéo</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"DropdownEvenements\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Ludothèque
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"DropdownEvenements\">
                    <a class=\"dropdown-item\" href=\"\">Afficher les jeux</a>
                    <a class=\"dropdown-item\" href=\"\">Ajouter un jeu</a>
                </div>
            </li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("benevole_accueil");
        echo "\">Accueil</a>
            ";
        // line 48
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "                <a class=\"btn btn-outline-primary\" type=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a>
            ";
        } else {
            // line 51
            echo "                <a class=\"btn btn-outline-primary\" type=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
            ";
        }
        // line 53
        echo "        </ul>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "benevole/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 53,  106 => 51,  100 => 49,  98 => 48,  94 => 47,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <span style=\"color:#007bff;\">Benevole | </span></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"DropdownEvenements\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Biblothèque
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"DropdownEvenements\">
                    <a class=\"dropdown-item\" href=\"{{ path('benevole_mediatheque_show') }}\">Afficher les livres</a>
                    <a class=\"dropdown-item\" href=\"\">Ajouter un livre</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"DropdownEvenements\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Musicothèque
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"DropdownEvenements\">
                    <a class=\"dropdown-item\" href=\"\">Afficher les musiques</a>
                    <a class=\"dropdown-item\" href=\"\">Ajouter une musiques</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"DropdownEvenements\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Vidéothèque
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"DropdownEvenements\">
                    <a class=\"dropdown-item\" href=\"\">Afficher les vidéos</a>
                    <a class=\"dropdown-item\" href=\"\">Ajouter une vidéo</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"DropdownEvenements\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Ludothèque
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"DropdownEvenements\">
                    <a class=\"dropdown-item\" href=\"\">Afficher les jeux</a>
                    <a class=\"dropdown-item\" href=\"\">Ajouter un jeu</a>
                </div>
            </li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <a class=\"nav-link\" href=\"{{ path('benevole_accueil') }}\">Accueil</a>
            {% if not app.user %}
                <a class=\"btn btn-outline-primary\" type=\"button\" href=\"{{ path('security_login') }}\">Connexion</a>
            {% else %}
                <a class=\"btn btn-outline-primary\" type=\"button\" href=\"{{ path('security_logout') }}\">Déconnexion</a>
            {% endif %}
        </ul>
    </div>
</nav>
", "benevole/_nav.html.twig", "/var/www/html/ptut/projet/projet/templates/benevole/_nav.html.twig");
    }
}
