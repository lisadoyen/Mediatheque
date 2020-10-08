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

/* pages/showMediatheque.html.twig */
class __TwigTemplate_73cd7504d2335df2a33e37b44dec6a7d6f4927e65e3284f6f4e1ee4495298ceb extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/showMediatheque.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/showMediatheque.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/showMediatheque.html.twig", 1);
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
        echo "    <div class=\"container\">
        <h1 style=\"text-align: center\">Récapitulatifs des Articles</h1><br>
        <div class=>
                <label>Afficher </label>
                <input type=\"number\" name=\"limite\" value=\"10\" > article(s)
                <a href=\"";
        // line 8
        echo "\" class=\"btn btn-primary m-1 p-1\"> Ajouter un Article </a>
        </div><br>
        <div>
            <table class=\"table table-striped table-bordered\">
                <caption>Récapitulatifs des Articles</caption>
                <thead class=\"thead-dark\">
                <tr>
                    <th>Code Livre</th>
                    <th>Code ISBN</th>
                    <th>Titre / Designation</th>
                    <th>Description</th>
                    <th>Support</th>
                    <th>Disponible</th>
                    <th>Nb sortie</th>
                    <th>Date de retrait</th>
                    <th>Date achat</th>
                    <th>Date de création</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Libelle genre</th>
                    <th>nom user</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 33
        if ( !twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 34, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 35
                echo "                        <tr>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "CodeLivre", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "CodeIsbn", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titreDesignation", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "descriptionLivre", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "supportLivre", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "disponible", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nombreSorties", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDernierRetrait", [], "any", false, false, false, 43), "d-m-Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateAchat", [], "any", false, false, false, 44), "d-m-Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateCreation", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "fkIdAuteur", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "fkIdAuteur", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "fkIdGenre", [], "any", false, false, false, 48), "libelleGenre", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 50
                echo "\" class=\"btn btn-primary\">Modifier</a>
                                <a href=\"";
                // line 51
                echo "\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                ";
        } else {
            // line 56
            echo "                    <tr class=\"table-warning\"><td>Pas d article</td></tr>
                ";
        }
        // line 58
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/showMediatheque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 58,  180 => 56,  177 => 55,  168 => 51,  165 => 50,  160 => 48,  156 => 47,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  136 => 42,  132 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  109 => 35,  104 => 34,  102 => 33,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"container\">
        <h1 style=\"text-align: center\">Récapitulatifs des Articles</h1><br>
        <div class=>
                <label>Afficher </label>
                <input type=\"number\" name=\"limite\" value=\"10\" > article(s)
                <a href=\"{#{ path('article_add') }#}\" class=\"btn btn-primary m-1 p-1\"> Ajouter un Article </a>
        </div><br>
        <div>
            <table class=\"table table-striped table-bordered\">
                <caption>Récapitulatifs des Articles</caption>
                <thead class=\"thead-dark\">
                <tr>
                    <th>Code Livre</th>
                    <th>Code ISBN</th>
                    <th>Titre / Designation</th>
                    <th>Description</th>
                    <th>Support</th>
                    <th>Disponible</th>
                    <th>Nb sortie</th>
                    <th>Date de retrait</th>
                    <th>Date achat</th>
                    <th>Date de création</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Libelle genre</th>
                    <th>nom user</th>

                </tr>
                </thead>
                <tbody>
                {% if articles is not empty %}
                    {% for article in articles | slice(0, 10) %}
                        <tr>
                            <td>{{article.CodeLivre}}</td>
                            <td>{{article.CodeIsbn}}</td>
                            <td>{{article.titreDesignation}}</td>
                            <td>{{article.descriptionLivre}}</td>
                            <td>{{article.supportLivre}}</td>
                            <td>{{article.disponible}}</td>
                            <td>{{article.nombreSorties}}</td>
                            <td>{{article.dateDernierRetrait | date('d-m-Y')}}</td>
                            <td>{{article.dateAchat | date('d-m-Y')}}</td>
                            <td>{{article.dateCreation | date('d-m-Y')}}</td>
                            <td>{{article.fkIdAuteur.nom}}</td>
                            <td>{{article.fkIdAuteur.prenom}}</td>
                            <td>{{article.fkIdGenre.libelleGenre}}</td>
                            <td>
                                <a href=\"{#{ path('article_edit', {id: article.id}) }#}\" class=\"btn btn-primary\">Modifier</a>
                                <a href=\"{#{ path('article_edit', {id: article.id}) }#}\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <tr class=\"table-warning\"><td>Pas d article</td></tr>
                {% endif %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}", "pages/showMediatheque.html.twig", "/home/aduhoux/IUT/S3/Projets/thibault/templates/pages/showMediatheque.html.twig");
    }
}
