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

/* users/profil/favoris.html.twig */
class __TwigTemplate_52f8ed077fe234166b8580a9c0b974be6a29157479f5d2d71f4709e6a397569c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/favoris.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/favoris.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/favoris.html.twig", 1);
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
    <h1>Vos favoris</h1><hr>
    <div>
        <table class=\"table table-striped table-bordered\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Genre</th>
                <th>Statut</th>
                <th>Opération</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        if ( !twig_test_empty((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
                // line 20
                echo "                    <tr>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 21), "vignette", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
                        <td> ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 22), "titre", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 23), "genre", [], "any", false, false, false, 23), "libelle", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                        <td> ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 24), "statut", [], "any", false, false, false, 24), "libelle", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favoris", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" class=\"close\" aria-label=\"Close\" onclick=\"return confirm('Voulez vous vraiment supprimer cette article de vos favoris ?')\">
                                <span aria-hidden=\"true\">&times;</span>
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        } else {
            // line 33
            echo "                <tr class=\"table-warning\"><td>Vous n'avez pas d'article favori</td></tr>
            ";
        }
        // line 35
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/favoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  127 => 33,  124 => 32,  112 => 26,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  92 => 20,  87 => 19,  85 => 18,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}

<div class=\"container cadre\">
    <h1>Vos favoris</h1><hr>
    <div>
        <table class=\"table table-striped table-bordered\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Genre</th>
                <th>Statut</th>
                <th>Opération</th>
            </tr>
            </thead>
            <tbody>
            {% if favoris is not empty %}
                {% for fav in favoris %}
                    <tr>
                        <td>{{ fav.article.vignette }}</td>
                        <td> {{ fav.article.titre }}</td>
                        <td>{{ fav.article.genre.libelle }}</td>
                        <td> {{ fav.article.statut.libelle }}</td>
                        <td>
                            <a href=\"{{ path('remove_favoris', {id: fav.article.id}) }}\" class=\"close\" aria-label=\"Close\" onclick=\"return confirm('Voulez vous vraiment supprimer cette article de vos favoris ?')\">
                                <span aria-hidden=\"true\">&times;</span>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            {% else %}
                <tr class=\"table-warning\"><td>Vous n'avez pas d'article favori</td></tr>
            {% endif %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "users/profil/favoris.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\users\\profil\\favoris.html.twig");
    }
}
