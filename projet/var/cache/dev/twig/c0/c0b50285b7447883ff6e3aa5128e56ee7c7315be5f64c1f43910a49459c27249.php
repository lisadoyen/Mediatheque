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

/* admin/_nav.html.twig */
class __TwigTemplate_5dba4d27f9954bd564691677a90e594cb438f637d02c95bce067d11c0775e3d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <span style=\"color:#007bff;\">Admin | </span></a>
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
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mediatheque_show");
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
            <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("benevole_accueil");
        echo "\">Vue Benevole</a>
            <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adherent_accueil");
        echo "\">Vue Adherent</a>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_accueil");
        echo "\">Accueil</a>
            ";
        // line 49
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "                <a class=\"btn btn-outline-primary\" type=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a>
            ";
        } else {
            // line 52
            echo "                <a class=\"btn btn-outline-primary\" type=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
            ";
        }
        // line 54
        echo "        </ul>
    </div>
</nav>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  113 => 52,  107 => 50,  105 => 49,  101 => 48,  95 => 45,  91 => 44,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <span style=\"color:#007bff;\">Admin | </span></a>
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
                    <a class=\"dropdown-item\" href=\"{{ path('admin_mediatheque_show') }}\">Afficher les livres</a>
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
            <a class=\"nav-link\" href=\"{{ path('benevole_accueil') }}\">Vue Benevole</a>
            <a class=\"nav-link\" href=\"{{ path('adherent_accueil') }}\">Vue Adherent</a>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <a class=\"nav-link\" href=\"{{ path('admin_accueil') }}\">Accueil</a>
            {% if not app.user %}
                <a class=\"btn btn-outline-primary\" type=\"button\" href=\"{{ path('security_login') }}\">Connexion</a>
            {% else %}
                <a class=\"btn btn-outline-primary\" type=\"button\" href=\"{{ path('security_logout') }}\">Déconnexion</a>
            {% endif %}
        </ul>
    </div>
</nav>

", "admin/_nav.html.twig", "/var/www/html/ptut/projet2/projet/templates/admin/_nav.html.twig");
    }
}
