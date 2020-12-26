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
class __TwigTemplate_7c4b7fb3af57d8051cb176f0aaca00c73b576f6fe6552326859580057894b582 extends Template
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
            ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "avatar", [], "any", false, false, false, 6))) {
            // line 7
            echo "                <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7), "html", null, true);
            echo "\" alt=\"Image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7), "html", null, true);
            echo "\" >
            ";
        } else {
            // line 9
            echo "                <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account.png"), "html", null, true);
            echo "\" alt=\"Aucun avatar\">
            ";
        }
        // line 11
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
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "matricule", [], "any", false, false, false, 22), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Identifiant :
        </div>
        <div class=\"col-sm\">
            ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
        echo "
        </div>
    </div><hr>


    <div class=\"row\">
        <div class=\"col-sm\">
            Prenom :
        </div>
        <div class=\"col-sm\">
            ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "prenom", [], "any", false, false, false, 41), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Nom :
        </div>
        <div class=\"col-sm\">
            ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Entreprise :
        </div>
        <div class=\"col-sm\">
            ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "entreprise", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Fonction :
        </div>
        <div class=\"col-sm\">
            ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "fonction", [], "any", false, false, false, 68), "libelle", [], "any", false, false, false, 68), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Email de récupération:
        </div>
        <div class=\"col-sm\">
            ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "emailRecup", [], "any", false, false, false, 77), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Droit Emprunt :
        </div>
        <div class=\"col-sm\">
            ";
        // line 86
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "droitEmprunt", [], "any", false, false, false, 86), 1))) {
            // line 87
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 89
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 91
        echo "        </div>
        <div class=\"col-sm border-left\">
            Droit d'achat :
        </div>
        <div class=\"col-sm\">
            ";
        // line 96
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "droitAchat", [], "any", false, false, false, 96), 1))) {
            // line 97
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 99
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 101
        echo "        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Date de création :
        </div>
        <div class=\"col-sm\">
            ";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "dateCreation", [], "any", false, false, false, 109), "d/m/Y"), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Date de modification :
        </div>
        <div class=\"col-sm\">
            ";
        // line 118
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "dateModification", [], "any", false, false, false, 118), "d/m/Y"), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_donnees");
        echo "\" class=\"edit-btn float-left\">Mes données personnels</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profil");
        echo "\" class=\"edit-btn float-right\">Modifier les paramètres</a>
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-left\">Voir les emprunts / achat en cours</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-right\">Voir l'historique des activités</a>
        </div>
    </div><hr>

    <!--
    <div class=\"row\">
        <div class=\"col-sm\">
            Mot de passe :
        </div>
        <div class=\"col-sm\">
            <a href=\"";
        // line 146
        echo "\" class=\"edit-btn  float-right\">Modifier le mot de passe</a>
        </div>
    </div>
    -->

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
        return array (  274 => 146,  252 => 127,  246 => 124,  237 => 118,  225 => 109,  215 => 101,  211 => 99,  207 => 97,  205 => 96,  198 => 91,  194 => 89,  190 => 87,  188 => 86,  176 => 77,  164 => 68,  152 => 59,  140 => 50,  128 => 41,  115 => 31,  103 => 22,  90 => 11,  84 => 9,  75 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
<div class=\"container cadre\">
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
            <a href=\"{{path('mes_donnees')}}\" class=\"edit-btn float-left\">Mes données personnels</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"{{path('edit_profil')}}\" class=\"edit-btn float-right\">Modifier les paramètres</a>
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-left\">Voir les emprunts / achat en cours</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-right\">Voir l'historique des activités</a>
        </div>
    </div><hr>

    <!--
    <div class=\"row\">
        <div class=\"col-sm\">
            Mot de passe :
        </div>
        <div class=\"col-sm\">
            <a href=\"{# {path('edit_password_profil')}#}\" class=\"edit-btn  float-right\">Modifier le mot de passe</a>
        </div>
    </div>
    -->

</div>
{% endblock %}
", "users/profil/profil.html.twig", "/home/thibault/Documents/S3/Mediatheque/projet/templates/users/profil/profil.html.twig");
    }
}
