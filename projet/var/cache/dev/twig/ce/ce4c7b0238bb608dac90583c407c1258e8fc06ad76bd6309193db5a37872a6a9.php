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

/* _nav.html.twig */
class __TwigTemplate_64c231ec48d1f4481c65bf0dec338dd1f1428b1fc040983d51ec4b90ebfc5bd5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<nav class=\"main-menu\">
    <h1 id=\"main-title\">Médiathèque</h1>
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/home.png"), "html", null, true);
        echo "\" class=\"icon home\" alt=\"Accueil\"></a>
    ";
        // line 4
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "pathInfo", [], "any", false, false, false, 4), "/accueil"))) {
            // line 5
            echo "    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livres_show");
            echo "\" id=\"search\" method=\"post\" class=\"search-in-nav\">
        ";
            // line 6
            $this->loadTemplate("_search_bar.html.twig", "_nav.html.twig", 6)->display($context);
            // line 7
            echo "    </form>
    ";
        }
        // line 9
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/shopping-cart.png"), "html", null, true);
        echo "\" class=\"icon  shopCar\" alt=\"Panier\"></a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/star.png"), "html", null, true);
        echo "\" class=\"icon  fav\" alt=\"Favories\"></a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/user.png"), "html", null, true);
        echo "\" class=\"icon  account\" alt=\"Profile\"></a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/logout.png"), "html", null, true);
        echo "\" class=\"icon  logout\" alt=\"Déconnexion\"></a>
</nav>
<nav class=\"sub-menu\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm sub-dropdown container\">
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livres_show");
        echo "\" class=\"media-item dropbtn\">Livres</a>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\GenreController::getAllGenres"));
        echo "
            </div>
            <div class=\"col-sm\">
                <a href=\"#\" class=\"media-item\">Films</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"#\" class=\"media-item\">Musiques</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"#\" class=\"media-item\">Jeux</a>
            </div>
        </div>
    </div>
</nav>
";
        // line 33
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BENEVOLE"))) {
            // line 34
            echo "    <input id=\"burger\" type=\"checkbox\"/>
    <label for=\"burger\">
        <span class=\"barre\"></span>
        <span class=\"barre\"></span>
        <span class=\"barre\"></span> 
    </label>
    <nav id=\"lateral-menu\">
        <ul id=\"lateral-menu\">
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Éditer les statistiques</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Gestion des emprunts/retours</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Gestion des annonces</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operations_articles");
            echo "\">Opérations sur les articles</a></li>
            ";
            // line 46
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BENEVOLE") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 47
                echo "                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_base_articles");
                echo "\">Export de la base de données des articles</a></li>";
            }
            // line 48
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_base_articles");
                echo "\">Import/Export de la base de données des articles</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                // line 50
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_accueil");
                echo "\">Opérations sur les adhérents</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                // line 51
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_base_users");
                echo "\">Import/Export de la base de donnée des adhérents</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Définir les paramètres et les règles d'emprunts</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Maintenance du site</a></li>";
            }
            // line 54
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  155 => 51,  151 => 50,  146 => 49,  143 => 48,  138 => 47,  136 => 46,  132 => 45,  119 => 34,  117 => 33,  100 => 19,  96 => 18,  85 => 12,  79 => 11,  73 => 10,  66 => 9,  62 => 7,  60 => 6,  55 => 5,  53 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"main-menu\">
    <h1 id=\"main-title\">Médiathèque</h1>
    <a href=\"{{ path('accueil') }}\"><img src=\"{{asset('assets/images/yellow/home.png')}}\" class=\"icon home\" alt=\"Accueil\"></a>
    {% if app.request.pathInfo != '/accueil' %}
    <form action=\"{{ path('livres_show') }}\" id=\"search\" method=\"post\" class=\"search-in-nav\">
        {% include '_search_bar.html.twig' %}
    </form>
    {% endif %}
    <a href=\"{{ path('panier') }}\"><img src=\"{{asset('assets/images/yellow/shopping-cart.png')}}\" class=\"icon  shopCar\" alt=\"Panier\"></a>
    <a href=\"{{ path('favoris') }}\"><img src=\"{{asset('assets/images/yellow/star.png')}}\" class=\"icon  fav\" alt=\"Favories\"></a>
    <a href=\"{{ path('profil') }}\"><img src=\"{{asset('assets/images/yellow/user.png')}}\" class=\"icon  account\" alt=\"Profile\"></a>
    <a href=\"{{ path('security_logout') }}\"><img src=\"{{asset('assets/images/yellow/logout.png')}}\" class=\"icon  logout\" alt=\"Déconnexion\"></a>
</nav>
<nav class=\"sub-menu\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm sub-dropdown container\">
                <a href=\"{{ path('livres_show') }}\" class=\"media-item dropbtn\">Livres</a>
                {{ render(controller('App\\\\Controller\\\\GenreController::getAllGenres')) }}
            </div>
            <div class=\"col-sm\">
                <a href=\"#\" class=\"media-item\">Films</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"#\" class=\"media-item\">Musiques</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"#\" class=\"media-item\">Jeux</a>
            </div>
        </div>
    </div>
</nav>
{% if (is_granted('ROLE_ADMIN')) or (is_granted('ROLE_BENEVOLE'))  %}
    <input id=\"burger\" type=\"checkbox\"/>
    <label for=\"burger\">
        <span class=\"barre\"></span>
        <span class=\"barre\"></span>
        <span class=\"barre\"></span> 
    </label>
    <nav id=\"lateral-menu\">
        <ul id=\"lateral-menu\">
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Éditer les statistiques</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Gestion des emprunts/retours</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Gestion des annonces</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('operations_articles') }}\">Opérations sur les articles</a></li>
            {% if is_granted('ROLE_BENEVOLE') and not is_granted('ROLE_ADMIN')%}
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('data_base_articles') }}\">Export de la base de données des articles</a></li>{% endif %}
            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('data_base_articles') }}\">Import/Export de la base de données des articles</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('users_accueil') }}\">Opérations sur les adhérents</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('data_base_users') }}\">Import/Export de la base de donnée des adhérents</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Définir les paramètres et les règles d'emprunts</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Maintenance du site</a></li>{% endif %}
        </ul>
    </nav>
{% endif %}", "_nav.html.twig", "/var/www/html/localhost/ptut/projet_actu/projet/templates/_nav.html.twig");
    }
}