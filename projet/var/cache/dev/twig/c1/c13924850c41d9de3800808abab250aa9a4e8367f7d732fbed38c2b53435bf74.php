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

/* livres/show_all_livres.html.twig */
class __TwigTemplate_f6739e3810d521da59abe0dab472ae38395ca8009f98aa86e1dd60934f082fba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livres/show_all_livres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livres/show_all_livres.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "livres/show_all_livres.html.twig", 1);
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
        <h1 class=\"center\">Récapitulatifs des livres</h1><br>
        ";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BENEVOLE")) {
            // line 6
            echo "            <div class=\"row\">
                <a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livres_add");
            echo "\" class=\"edit-btn\">Ajouter un livre</a>
            </div>
        ";
        }
        // line 10
        echo "        <div>
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
        // line 37
        if ( !twig_test_empty((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 38, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 39
                echo "                        <tr>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeLivre", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeISBN", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titreDesignation", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "descriptionArticle", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "photo", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "format", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "typologie", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 48
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "disponible", [], "any", false, false, false, 48), 0))) {
                    // line 49
                    echo "                                    <span style=\"color:red\">Non</span>
                                ";
                } else {
                    // line 51
                    echo "                                    <span style=\"color:green\">Oui</span>
                                ";
                }
                // line 53
                echo "                            </td>
                            <td>
                                ";
                // line 55
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "inactif", [], "any", false, false, false, 55), 0))) {
                    // line 56
                    echo "                                    <span style=\"color:red\">Non</span>
                                ";
                } else {
                    // line 58
                    echo "                                    <span style=\"color:green\">Oui</span>
                                ";
                }
                // line 60
                echo "                            </td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "nombreDeSorties", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "Lien", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                            <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateDeRetrait", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateAchat", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateCreation", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 66), "nom", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                            <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 67), "prenom", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdGenre", [], "any", false, false, false, 68), "libelleGenre", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 70
                echo "\" class=\"btn btn-primary\">Modifier</a>
                                <a href=\"";
                // line 71
                echo "\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                ";
        } else {
            // line 76
            echo "                    <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                ";
        }
        // line 78
        echo "                </tbody>
            </table>
            <div class=\"pagination\">
                ";
        // line 81
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 81, $this->source); })()));
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
        return "livres/show_all_livres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 81,  230 => 78,  226 => 76,  223 => 75,  214 => 71,  211 => 70,  206 => 68,  202 => 67,  198 => 66,  194 => 65,  190 => 64,  186 => 63,  182 => 62,  178 => 61,  175 => 60,  171 => 58,  167 => 56,  165 => 55,  161 => 53,  157 => 51,  153 => 49,  151 => 48,  146 => 46,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  126 => 41,  122 => 40,  119 => 39,  114 => 38,  112 => 37,  83 => 10,  77 => 7,  74 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"\">
        <h1 class=\"center\">Récapitulatifs des livres</h1><br>
        {% if is_granted('ROLE_BENEVOLE') %}
            <div class=\"row\">
                <a href=\"{{ path('livres_add') }}\" class=\"edit-btn\">Ajouter un livre</a>
            </div>
        {% endif %}
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
                    {% for livre in livres | slice(0, 10) %}
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
                                <a href=\"{#{ path('livre_edit', {id: livre.id}) }#}\" class=\"btn btn-primary\">Modifier</a>
                                <a href=\"{#{ path('livre_edit', {id: livre.id}) }#}\" class=\"btn btn-danger\">Supprimer</a>
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
{% endblock %}", "livres/show_all_livres.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\livres\\show_all_livres.html.twig");
    }
}
