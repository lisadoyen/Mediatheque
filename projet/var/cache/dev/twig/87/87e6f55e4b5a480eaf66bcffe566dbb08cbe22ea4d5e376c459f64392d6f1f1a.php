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

/* users/profil/rgpd_data.html.twig */
class __TwigTemplate_08c8c8418230e49dc54445ad482368c911704b25a9f2ba472de7a87ca4198df5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/rgpd_data.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/rgpd_data.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/rgpd_data.html.twig", 1);
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
        echo "    <div class=\"container cadre\">
        <div class=\"row\">
            <div class=\"col-sm\">
                ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "avatar", [], "any", false, false, false, 6))) {
            // line 7
            echo "                    <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7), "html", null, true);
            echo "\" alt=\"Image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7), "html", null, true);
            echo "\" >
                ";
        } else {
            // line 9
            echo "                    <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account.png"), "html", null, true);
            echo "\" alt=\"Aucun avatar\">
                ";
        }
        // line 11
        echo "            </div>
            <div class=\"col-sm\">
                <h1>Vos données personnelles</h1>
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
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "prenom", [], "any", false, false, false, 40), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Nom :
            </div>
            <div class=\"col-sm\">
                ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Sexe :
            </div>
            <div class=\"col-sm\">
                ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "sexe", [], "any", false, false, false, 58), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Entreprise :
            </div>
            <div class=\"col-sm\">
                ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "entreprise", [], "any", false, false, false, 67), "nom", [], "any", false, false, false, 67), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Fonction :
            </div>
            <div class=\"col-sm\">
                ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "fonction", [], "any", false, false, false, 76), "libelle", [], "any", false, false, false, 76), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email de récupération :
            </div>
            <div class=\"col-sm\">
                ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "emailRecup", [], "any", false, false, false, 85), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email personnel :
            </div>
            <div class=\"col-sm\">
                ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "emailPerso", [], "any", false, false, false, 94), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email Professionnel :
            </div>
            <div class=\"col-sm\">
                ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "emailPro", [], "any", false, false, false, 103), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone Personnels :
            </div>
            <div class=\"col-sm\">
                ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "telPerso", [], "any", false, false, false, 112), "html", null, true);
        echo "
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone Personnel 2 :
            </div>
            <div class=\"col-sm\">
                ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "telPerso2", [], "any", false, false, false, 120), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone Professionnel :
            </div>
            <div class=\"col-sm\">
                ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "telPro", [], "any", false, false, false, 129), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone Professionnel 2 :
            </div>
            <div class=\"col-sm\">
                ";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "telPro2", [], "any", false, false, false, 138), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Adresse de la rue :
            </div>
            <div class=\"col-sm\">
                ";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "adresseRue", [], "any", false, false, false, 147), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Compléments :
            </div>
            <div class=\"col-sm\">
                ";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "adresseRueComplement", [], "any", false, false, false, 156), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Ville :
            </div>
            <div class=\"col-sm\">
                ";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165), "ville", [], "any", false, false, false, 165), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Code postal :
            </div>
            <div class=\"col-sm\">
                ";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174), "codePostal", [], "any", false, false, false, 174), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Droit Emprunt :
            </div>
            <div class=\"col-sm\">
                ";
        // line 183
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183), "droitEmprunt", [], "any", false, false, false, 183), 1))) {
            // line 184
            echo "                    <span class=\"text-success\">Oui</span>
                ";
        } else {
            // line 186
            echo "                    <span class=\"text-danger\">Non</span>
                ";
        }
        // line 188
        echo "            </div>
            <div class=\"col-sm border-left\">
                Droit d'achat :
            </div>
            <div class=\"col-sm\">
                ";
        // line 193
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "droitAchat", [], "any", false, false, false, 193), 1))) {
            // line 194
            echo "                    <span class=\"text-success\">Oui</span>
                ";
        } else {
            // line 196
            echo "                    <span class=\"text-danger\">Non</span>
                ";
        }
        // line 198
        echo "            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Date de création :
            </div>
            <div class=\"col-sm\">
                ";
        // line 206
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 206, $this->source); })()), "user", [], "any", false, false, false, 206), "dateCreation", [], "any", false, false, false, 206), "d/m/Y"), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Date de modification :
            </div>
            <div class=\"col-sm\">
                ";
        // line 215
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "user", [], "any", false, false, false, 215), "dateModification", [], "any", false, false, false, 215), "d/m/Y"), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Commentaire :
            </div>
            <div class=\"col-sm\">
                ";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "user", [], "any", false, false, false, 224), "commentaireUtilisateur", [], "any", false, false, false, 224), "html", null, true);
        echo "
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn float-left\">Exporter mes données</a>
            </div>
        </div><hr>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/rgpd_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 224,  367 => 215,  355 => 206,  345 => 198,  341 => 196,  337 => 194,  335 => 193,  328 => 188,  324 => 186,  320 => 184,  318 => 183,  306 => 174,  294 => 165,  282 => 156,  270 => 147,  258 => 138,  246 => 129,  234 => 120,  223 => 112,  211 => 103,  199 => 94,  187 => 85,  175 => 76,  163 => 67,  151 => 58,  139 => 49,  127 => 40,  115 => 31,  103 => 22,  90 => 11,  84 => 9,  75 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
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
                <h1>Vos données personnelles</h1>
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
                Sexe :
            </div>
            <div class=\"col-sm\">
                {{  app.user.sexe  }}
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
                Email de récupération :
            </div>
            <div class=\"col-sm\">
                {{  app.user.emailRecup  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email personnel :
            </div>
            <div class=\"col-sm\">
                {{  app.user.emailPerso  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email Professionnel :
            </div>
            <div class=\"col-sm\">
                {{  app.user.emailPro  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone Personnels :
            </div>
            <div class=\"col-sm\">
                {{  app.user.telPerso  }}
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone Personnel 2 :
            </div>
            <div class=\"col-sm\">
                {{  app.user.telPerso2  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone Professionnel :
            </div>
            <div class=\"col-sm\">
                {{  app.user.telPro  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone Professionnel 2 :
            </div>
            <div class=\"col-sm\">
                {{  app.user.telPro2  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Adresse de la rue :
            </div>
            <div class=\"col-sm\">
                {{  app.user.adresseRue  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Compléments :
            </div>
            <div class=\"col-sm\">
                {{  app.user.adresseRueComplement }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Ville :
            </div>
            <div class=\"col-sm\">
                {{  app.user.ville }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Code postal :
            </div>
            <div class=\"col-sm\">
                {{  app.user.codePostal }}
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
                Commentaire :
            </div>
            <div class=\"col-sm\">
                {{  app.user.commentaireUtilisateur}}
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn float-left\">Exporter mes données</a>
            </div>
        </div><hr>
    </div>
{% endblock %}
", "users/profil/rgpd_data.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\users\\profil\\rgpd_data.html.twig");
    }
}
