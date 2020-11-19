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
class __TwigTemplate_c4943a78ec6d635ab2f3e886f9aca243576c523f29e60d8f98a8460981f03cb9 extends Template
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
        echo "
    <div class=\"container cadre\">
        <h1>Votre profil</h1><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Identifiant :
            </div>
            <div class=\"col-sm\">
                ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Prenom :
            </div>
            <div class=\"col-sm\">
                ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "firstname", [], "any", false, false, false, 20), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Nom :
            </div>
            <div class=\"col-sm\">
                ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email :
            </div>
            <div class=\"col-sm\">
                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "email", [], "any", false, false, false, 38), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Téléphone :
            </div>
            <div class=\"col-sm\">
                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "phone", [], "any", false, false, false, 47), "html", null, true);
        echo "
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\"></div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profil");
        echo "\" class=\"edit-btn\">Modifier le profil</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Mot de passe :
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_password_profil");
        echo "\" class=\"edit-btn\">Modifier le mot de passe</a>
            </div>
        </div>

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
        return array (  146 => 61,  135 => 53,  126 => 47,  114 => 38,  102 => 29,  90 => 20,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}

    <div class=\"container cadre\">
        <h1>Votre profil</h1><hr>
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
                {{  app.user.firstname  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Nom :
            </div>
            <div class=\"col-sm\">
                {{  app.user.name  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email :
            </div>
            <div class=\"col-sm\">
                {{  app.user.email  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Téléphone :
            </div>
            <div class=\"col-sm\">
                {{  app.user.phone  }}
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\"></div>
            <div class=\"col-sm\">
                <a href=\"{{path('edit_profil')}}\" class=\"edit-btn\">Modifier le profil</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Mot de passe :
            </div>
            <div class=\"col-sm\">
                <a href=\"{{path('edit_password_profil')}}\" class=\"edit-btn\">Modifier le mot de passe</a>
            </div>
        </div>

    </div>

{% endblock %}
", "users/profil/profil.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\users\\profil\\profil.html.twig");
    }
}
