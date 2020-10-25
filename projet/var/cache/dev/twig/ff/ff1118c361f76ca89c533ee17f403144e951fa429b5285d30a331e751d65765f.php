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

/* adherent/showBibliotheque.html.twig */
class __TwigTemplate_6d466167c1edb690ee255a61a017df46dceefa5a7603409684cd23fa7c5412a6 extends Template
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
        return "adherent/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherent/showBibliotheque.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adherent/showBibliotheque.html.twig"));

        $this->parent = $this->loadTemplate("adherent/layout.html.twig", "adherent/showBibliotheque.html.twig", 1);
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
        echo "    <div class=\"\">
        <h1 style=\"text-align: center\">Récapitulatifs des livres</h1><br>
        <br>
        <div>
            <table class=\"table table-striped table-bordered\">
                <caption>Récapitulatifs des livres</caption>
                <thead class=\"thead-dark\">
                <tr>
                    <th>Code Livre</th>
                    <th>Code ISBN</th>
                    <th>Titre / Designation</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Format</th>
                    <th>Typologie</th>
                    <th>Disponible</th>
                    <th>Inactif</th>
                    <th>Nb sortie</th>
                    <th>Lien</th>
                    <th>Date de retrait</th>
                    <th>Date achat</th>
                    <th>Date de création</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Libelle genre</th>
                    <th>Opérations</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 33
        if ( !twig_test_empty((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 35
                echo "                        <tr>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeLivre", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeISBN", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titreDesignation", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "descriptionArticle", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "photo", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "format", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "typologie", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 44
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "disponible", [], "any", false, false, false, 44), 0))) {
                    // line 45
                    echo "                                    <span style=\"color:red\">Non</span>
                                ";
                } else {
                    // line 47
                    echo "                                    <span style=\"color:green\">Oui</span>
                                ";
                }
                // line 49
                echo "                            </td>
                            <td>
                                ";
                // line 51
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "inactif", [], "any", false, false, false, 51), 0))) {
                    // line 52
                    echo "                                    <span style=\"color:red\">Non</span>
                                ";
                } else {
                    // line 54
                    echo "                                    <span style=\"color:green\">Oui</span>
                                ";
                }
                // line 56
                echo "                            </td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "nombreDeSorties", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "Lien", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateDeRetrait", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateAchat", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateCreation", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                            <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 63), "prenom", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                            <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdGenre", [], "any", false, false, false, 64), "libelleGenre", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 66
                echo "\" class=\"btn btn-primary\">Réserver</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                ";
        } else {
            // line 71
            echo "                    <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                ";
        }
        // line 73
        echo "                </tbody>
            </table>
            <div class=\"pagination\">
                 ";
        // line 76
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 76, $this->source); })()));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "adherent/showBibliotheque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 76,  215 => 73,  211 => 71,  208 => 70,  199 => 66,  194 => 64,  190 => 63,  186 => 62,  182 => 61,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  163 => 56,  159 => 54,  155 => 52,  153 => 51,  149 => 49,  145 => 47,  141 => 45,  139 => 44,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  107 => 35,  102 => 34,  100 => 33,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"adherent/layout.html.twig\" %}
{% block body %}
    <div class=\"\">
        <h1 style=\"text-align: center\">Récapitulatifs des livres</h1><br>
        <br>
        <div>
            <table class=\"table table-striped table-bordered\">
                <caption>Récapitulatifs des livres</caption>
                <thead class=\"thead-dark\">
                <tr>
                    <th>Code Livre</th>
                    <th>Code ISBN</th>
                    <th>Titre / Designation</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Format</th>
                    <th>Typologie</th>
                    <th>Disponible</th>
                    <th>Inactif</th>
                    <th>Nb sortie</th>
                    <th>Lien</th>
                    <th>Date de retrait</th>
                    <th>Date achat</th>
                    <th>Date de création</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Libelle genre</th>
                    <th>Opérations</th>

                </tr>
                </thead>
                <tbody>
                {% if livres is not empty %}
                    {% for livre in livres %}
                        <tr>
                            <td>{{livre.codeLivre}}</td>
                            <td>{{livre.codeISBN}}</td>
                            <td>{{livre.titreDesignation}}</td>
                            <td>{{livre.descriptionArticle}}</td>
                            <td>{{livre.photo}}</td>
                            <td>{{livre.format}}</td>
                            <td>{{livre.typologie}}</td>
                            <td>
                                {% if livre.disponible == 0 %}
                                    <span style=\"color:red\">Non</span>
                                {% else %}
                                    <span style=\"color:green\">Oui</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if livre.inactif == 0 %}
                                    <span style=\"color:red\">Non</span>
                                {% else %}
                                    <span style=\"color:green\">Oui</span>
                                {% endif %}
                            </td>
                            <td>{{livre.nombreDeSorties}}</td>
                            <td>{{livre.Lien}}</td>
                            <td>{{livre.dateDeRetrait | date('d/m/Y')}}</td>
                            <td>{{livre.dateAchat | date('d/m/Y')}}</td>
                            <td>{{livre.dateCreation | date('d/m/Y')}}</td>
                            <td>{{livre.fkIdAuteur.nom}}</td>
                            <td>{{livre.fkIdAuteur.prenom}}</td>
                            <td>{{livre.fkIdGenre.libelleGenre}}</td>
                            <td>
                                <a href=\"{#{ path('livre_reverve', {id: livre.id}) }#}\" class=\"btn btn-primary\">Réserver</a>
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                {% endif %}
                </tbody>
            </table>
            <div class=\"pagination\">
                 {{ knp_pagination_render(livres)}}
            </div>
        </div>
    </div>
{% endblock %}", "adherent/showBibliotheque.html.twig", "/var/www/html/ptut/projet2/projet/templates/adherent/showBibliotheque.html.twig");
    }
}
