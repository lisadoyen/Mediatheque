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
class __TwigTemplate_7a36bf502eea1f1d27a2f15d41ac454c01fc7efb460f77071415e212513091d8 extends Template
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3 p-4\">
                <h2 class=\"center\">Filtre
                <button class=\"edit-btn\" onclick=\"toggle_visibility(1)\"><i onclick=\"btn_icone(this)\" class=\"fas fa-arrow-up\"></i></button></h2>
                ";
        // line 8
        $this->loadTemplate("data/_filtre_articles.html.twig", "livres/show_all_livres.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <div class=\"col-md-9\">
                <h1 class=\"center p-3\">Récapitulatifs des articles</h1><br>
                ";
        // line 12
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BENEVOLE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 13
            echo "                    <div class=\"row\">
                        <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_ISBN");
            echo "\" class=\"edit-btn\">Ajouter un livre</a>
                    </div>
                ";
        }
        // line 17
        echo "                <div>
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
                            <!--<th>Inactif</th>
                            <th>Nb sortie</th>
                            <th>Lien</th>
                            <th>Date de retrait</th>
                            <th>Date achat</th>-->
                            <th>Date de création</th>
                            <th>Nom auteur</th>
                            <th>Prenom auteur</th>
                            <th>Libelle genre</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 43
        if ( !twig_test_empty((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 43, $this->source); })()))) {
            // line 44
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 44, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 45
                echo "                                <tr>
                                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeLivre", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeISBN", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titreDesignation", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "descriptionArticle", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "photo", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                                    <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "format", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "typologie", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 54
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "disponible", [], "any", false, false, false, 54), 0))) {
                    // line 55
                    echo "                                            <span style=\"color:red\">Non</span>
                                        ";
                } else {
                    // line 57
                    echo "                                            <span style=\"color:green\">Oui</span>
                                        ";
                }
                // line 59
                echo "                                    </td>
                                    <!--<td>
                                        ";
                // line 61
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "inactif", [], "any", false, false, false, 61), 0))) {
                    // line 62
                    echo "                                            <span style=\"color:red\">Non</span>
                                        ";
                } else {
                    // line 64
                    echo "                                            <span style=\"color:green\">Oui</span>
                                        ";
                }
                // line 66
                echo "                                    </td>
                                    <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "nombreDeSorties", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "Lien", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateDeRetrait", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateAchat", [], "any", false, false, false, 70), "d/m/Y"), "html", null, true);
                echo "</td>-->
                                    <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateCreation", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 72), "nom", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                                    <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 73), "prenom", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                                    <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdGenre", [], "any", false, false, false, 74), "libelleGenre", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 76
                echo "\" class=\"btn btn-primary\">Modifier</a>
                                        <a href=\"";
                // line 77
                echo "\" class=\"btn btn-danger\">Supprimer</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        ";
        } else {
            // line 82
            echo "                            <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                        ";
        }
        // line 84
        echo "                        </tbody>
                    </table>
                    <div class=\"pagination\">
                        ";
        // line 87
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 87, $this->source); })()));
        echo "
                    </div>
                </div>
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
        return array (  244 => 87,  239 => 84,  235 => 82,  232 => 81,  223 => 77,  220 => 76,  215 => 74,  211 => 73,  207 => 72,  203 => 71,  199 => 70,  195 => 69,  191 => 68,  187 => 67,  184 => 66,  180 => 64,  176 => 62,  174 => 61,  170 => 59,  166 => 57,  162 => 55,  160 => 54,  155 => 52,  151 => 51,  147 => 50,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  128 => 45,  123 => 44,  121 => 43,  93 => 17,  87 => 14,  84 => 13,  82 => 12,  77 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3 p-4\">
                <h2 class=\"center\">Filtre
                <button class=\"edit-btn\" onclick=\"toggle_visibility(1)\"><i onclick=\"btn_icone(this)\" class=\"fas fa-arrow-up\"></i></button></h2>
                {% include 'data/_filtre_articles.html.twig' %}
            </div>
            <div class=\"col-md-9\">
                <h1 class=\"center p-3\">Récapitulatifs des articles</h1><br>
                {% if is_granted('ROLE_BENEVOLE') or is_granted('ROLE_ADMIN') %}
                    <div class=\"row\">
                        <a href=\"{{ path('get_ISBN') }}\" class=\"edit-btn\">Ajouter un livre</a>
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
                            <!--<th>Inactif</th>
                            <th>Nb sortie</th>
                            <th>Lien</th>
                            <th>Date de retrait</th>
                            <th>Date achat</th>-->
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
                                    <!--<td>
                                        {% if livre.inactif == 0 %}
                                            <span style=\"color:red\">Non</span>
                                        {% else %}
                                            <span style=\"color:green\">Oui</span>
                                        {% endif %}
                                    </td>
                                    <td>{{livre.nombreDeSorties}}</td>
                                    <td>{{livre.Lien}}</td>
                                    <td>{{livre.dateDeRetrait | date('d/m/Y')}}</td>
                                    <td>{{livre.dateAchat | date('d/m/Y')}}</td>-->
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
        </div>
    </div>
{% endblock %}", "livres/show_all_livres.html.twig", "/var/www/html/ptut/projet_actu/projet/templates/livres/show_all_livres.html.twig");
    }
}
