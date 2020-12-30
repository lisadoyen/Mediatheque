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

/* users/profil/profil.html.twig */
class __TwigTemplate_744023e0adab50915bb165b1b3111a1c6bd025ff2e27b650d3f9ed9962514dcf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/profil.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container cadre\">
    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-left\">Voir les emprunts / achat en cours</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-right\">Voir l'historique des activités</a>
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            ";
        // line 15
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "avatar", [], "any", false, false, false, 15))) {
            // line 16
            echo "                <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16), "html", null, true);
            echo "\" alt=\"Image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16), "html", null, true);
            echo "\" >
            ";
        } else {
            // line 18
            echo "                <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account.png"), "html", null, true);
            echo "\" alt=\"Aucun avatar\">
            ";
        }
        // line 20
        echo "        </div>
        <div class=\"col-sm\">
            <h1>Votre profil</h1>
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Matricule :
        </div>
        <div class=\"col-sm\">
            ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "matricule", [], "any", false, false, false, 31), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Identifiant :
        </div>
        <div class=\"col-sm\">
            ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "username", [], "any", false, false, false, 40), "html", null, true);
        echo "
        </div>
    </div><hr>


    <div class=\"row\">
        <div class=\"col-sm\">
            Prenom :
        </div>
        <div class=\"col-sm\">
            ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Nom :
        </div>
        <div class=\"col-sm\">
            ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Entreprise :
        </div>
        <div class=\"col-sm\">
            ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "entreprise", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Fonction :
        </div>
        <div class=\"col-sm\">
            ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "fonction", [], "any", false, false, false, 77), "libelle", [], "any", false, false, false, 77), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Email de récupération:
        </div>
        <div class=\"col-sm\">
            ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "emailRecup", [], "any", false, false, false, 86), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Droit Emprunt :
        </div>
        <div class=\"col-sm\">
            ";
        // line 95
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "droitEmprunt", [], "any", false, false, false, 95), 1))) {
            // line 96
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 98
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 100
        echo "        </div>
        <div class=\"col-sm border-left\">
            Droit d'achat :
        </div>
        <div class=\"col-sm\">
            ";
        // line 105
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "droitAchat", [], "any", false, false, false, 105), 1))) {
            // line 106
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 108
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 110
        echo "        </div>
    </div><hr>
    <div class=\"row\">
        <div class=\"col-sm\">
            Notification personnel :
        </div>
        <div class=\"col-sm\">
            ";
        // line 117
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "notificationPerso", [], "any", false, false, false, 117), 1))) {
            // line 118
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 120
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 122
        echo "        </div>
        <div class=\"col-sm border-left\">
            Notification professionnel :
        </div>
        <div class=\"col-sm\">
            ";
        // line 127
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "notificationPro", [], "any", false, false, false, 127), 1))) {
            // line 128
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 130
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 132
        echo "        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Date de création :
        </div>
        <div class=\"col-sm\">
            ";
        // line 140
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "dateCreation", [], "any", false, false, false, 140), "d/m/Y"), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Date de modification :
        </div>
        <div class=\"col-sm\">
            ";
        // line 149
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "dateModification", [], "any", false, false, false, 149), "d/m/Y"), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_donnees");
        echo "\" class=\"edit-btn float-left\">Mes données personnelles</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_password_profil");
        echo "\" class=\"edit-btn float-center\">Modifier mon mot de passe</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profil");
        echo "\" class=\"edit-btn float-right\">Modifier les paramètres secondaire</a>
        </div>
    </div><hr>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 161,  297 => 158,  291 => 155,  282 => 149,  270 => 140,  260 => 132,  256 => 130,  252 => 128,  250 => 127,  243 => 122,  239 => 120,  235 => 118,  233 => 117,  224 => 110,  220 => 108,  216 => 106,  214 => 105,  207 => 100,  203 => 98,  199 => 96,  197 => 95,  185 => 86,  173 => 77,  161 => 68,  149 => 59,  137 => 50,  124 => 40,  112 => 31,  99 => 20,  93 => 18,  84 => 16,  82 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
<div class=\"container cadre\">
    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-left\">Voir les emprunts / achat en cours</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-right\">Voir l'historique des activités</a>
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            {% if app.user.avatar is not empty %}
                <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/')}}{{app.user.avatar}}\" alt=\"Image {{app.user.avatar}}\" >
            {% else %}
                <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/account.png')}}\" alt=\"Aucun avatar\">
            {% endif %}
        </div>
        <div class=\"col-sm\">
            <h1>Votre profil</h1>
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Matricule :
        </div>
        <div class=\"col-sm\">
            {{  app.user.matricule  }}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Identifiant :
        </div>
        <div class=\"col-sm\">
            {{  app.user.username  }}
        </div>
    </div><hr>


    <div class=\"row\">
        <div class=\"col-sm\">
            Prenom :
        </div>
        <div class=\"col-sm\">
            {{  app.user.prenom  }}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Nom :
        </div>
        <div class=\"col-sm\">
            {{  app.user.nom  }}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Entreprise :
        </div>
        <div class=\"col-sm\">
            {{  app.user.entreprise.nom  }}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Fonction :
        </div>
        <div class=\"col-sm\">
            {{  app.user.fonction.libelle  }}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Email de récupération:
        </div>
        <div class=\"col-sm\">
            {{  app.user.emailRecup  }}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Droit Emprunt :
        </div>
        <div class=\"col-sm\">
            {% if app.user.droitEmprunt == 1 %}
                <span class=\"text-success\">Oui</span>
            {% else %}
                <span class=\"text-danger\">Non</span>
            {% endif %}
        </div>
        <div class=\"col-sm border-left\">
            Droit d'achat :
        </div>
        <div class=\"col-sm\">
            {% if app.user.droitAchat == 1 %}
                <span class=\"text-success\">Oui</span>
            {% else %}
                <span class=\"text-danger\">Non</span>
            {% endif %}
        </div>
    </div><hr>
    <div class=\"row\">
        <div class=\"col-sm\">
            Notification personnel :
        </div>
        <div class=\"col-sm\">
            {% if app.user.notificationPerso == 1 %}
                <span class=\"text-success\">Oui</span>
            {% else %}
                <span class=\"text-danger\">Non</span>
            {% endif %}
        </div>
        <div class=\"col-sm border-left\">
            Notification professionnel :
        </div>
        <div class=\"col-sm\">
            {% if app.user.notificationPro == 1 %}
                <span class=\"text-success\">Oui</span>
            {% else %}
                <span class=\"text-danger\">Non</span>
            {% endif %}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Date de création :
        </div>
        <div class=\"col-sm\">
            {{  app.user.dateCreation | date('d/m/Y')}}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Date de modification :
        </div>
        <div class=\"col-sm\">
            {{  app.user.dateModification | date('d/m/Y')}}
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"{{path('mes_donnees')}}\" class=\"edit-btn float-left\">Mes données personnelles</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"{{path('edit_password_profil')}}\" class=\"edit-btn float-center\">Modifier mon mot de passe</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"{{path('edit_profil')}}\" class=\"edit-btn float-right\">Modifier les paramètres secondaire</a>
        </div>
    </div><hr>
</div>
{% endblock %}
", "users/profil/profil.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\users\\profil\\profil.html.twig");
    }
}
