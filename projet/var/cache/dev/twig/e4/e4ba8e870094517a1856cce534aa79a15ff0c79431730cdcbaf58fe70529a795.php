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
                        ";
        // line 38
        if ( !twig_test_empty((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 39, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 40
                echo "                                <tr>
                                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeLivre", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeISBN", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titreDesignation", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "descriptionArticle", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "photo", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "format", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "typologie", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 49
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "disponible", [], "any", false, false, false, 49), 0))) {
                    // line 50
                    echo "                                            <span style=\"color:red\">Non</span>
                                        ";
                } else {
                    // line 52
                    echo "                                            <span style=\"color:green\">Oui</span>
                                        ";
                }
                // line 54
                echo "                                    </td>
                                    <!--<td>
                                        ";
                // line 56
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "inactif", [], "any", false, false, false, 56), 0))) {
                    // line 57
                    echo "                                            <span style=\"color:red\">Non</span>
                                        ";
                } else {
                    // line 59
                    echo "                                            <span style=\"color:green\">Oui</span>
                                        ";
                }
                // line 61
                echo "                                    </td>
                                    <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "nombreDeSorties", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                                    <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "Lien", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                                    <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateDeRetrait", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateAchat", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
                echo "</td>-->
                                    <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateCreation", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 67), "nom", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 68), "prenom", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdGenre", [], "any", false, false, false, 69), "libelleGenre", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 71
                echo "\" class=\"btn btn-primary\">Réserver</a>
                                        <a href=\"";
                // line 72
                echo "\" class=\"btn btn-danger\">Voir plus de détail</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                        ";
        } else {
            // line 77
            echo "                            <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                        ";
        }
        // line 79
        echo "                        </tbody>
                    </table>
                    <div class=\"pagination\">
                        ";
        // line 82
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 82, $this->source); })()));
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
        return array (  231 => 82,  226 => 79,  222 => 77,  219 => 76,  210 => 72,  207 => 71,  202 => 69,  198 => 68,  194 => 67,  190 => 66,  186 => 65,  182 => 64,  178 => 63,  174 => 62,  171 => 61,  167 => 59,  163 => 57,  161 => 56,  157 => 54,  153 => 52,  149 => 50,  147 => 49,  142 => 47,  138 => 46,  134 => 45,  130 => 44,  126 => 43,  122 => 42,  118 => 41,  115 => 40,  110 => 39,  108 => 38,  77 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
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
                                        <a href=\"{#{ path('livre_edit', {id: livre.id}) }#}\" class=\"btn btn-primary\">Réserver</a>
                                        <a href=\"{#{ path('livre_edit', {id: livre.id}) }#}\" class=\"btn btn-danger\">Voir plus de détail</a>
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
{% endblock %}", "livres/show_all_livres.html.twig", "/var/www/html/localhost/ptut/projet_actu/projet/templates/livres/show_all_livres.html.twig");
    }
}
