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
        echo "    <form id=\"search\" action=\"POST\" class=\"content-mobile\">
        <div class=\"searchbar\" style=\"margin-top: 2rem\">
            <input class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Search...\">
            <a href=\"#\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\"><i class=\"fas fa-search\"></i></a>
        </div>
    </form>
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
                    <!--
                    <th>Date de retrait</th>
                    <th>Date achat</th>
                    <th>Date de création</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Libelle genre</th>
                    <th>Opérations</th>
                    -->

                </tr>
                </thead>
                <tbody>
                ";
        // line 41
        if ( !twig_test_empty((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 41, $this->source); })()))) {
            // line 42
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 43
                echo "                        <tr>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeLivre", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeISBN", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titreDesignation", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "descriptionArticle", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "photo", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "format", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "typologie", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 52
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "disponible", [], "any", false, false, false, 52), 0))) {
                    // line 53
                    echo "                                    <span style=\"color:red\">Non</span>
                                ";
                } else {
                    // line 55
                    echo "                                    <span style=\"color:green\">Oui</span>
                                ";
                }
                // line 57
                echo "                            </td>
                            <td>
                                ";
                // line 59
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "inactif", [], "any", false, false, false, 59), 0))) {
                    // line 60
                    echo "                                    <span style=\"color:red\">Non</span>
                                ";
                } else {
                    // line 62
                    echo "                                    <span style=\"color:green\">Oui</span>
                                ";
                }
                // line 64
                echo "                            </td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "nombreDeSorties", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                            <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "Lien", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                            <!--
                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateDeRetrait", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateAchat", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateCreation", [], "any", false, false, false, 70), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                            <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 72), "prenom", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                            <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdGenre", [], "any", false, false, false, 73), "libelleGenre", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 75
                echo "\" class=\"btn btn-primary\">Réserver</a>
                            </td>
                            -->
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                ";
        } else {
            // line 81
            echo "                    <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                ";
        }
        // line 83
        echo "                </tbody>
            </table>
            <div class=\"pagination\">
                 ";
        // line 86
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 86, $this->source); })()));
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
        return array (  230 => 86,  225 => 83,  221 => 81,  218 => 80,  208 => 75,  203 => 73,  199 => 72,  195 => 71,  191 => 70,  187 => 69,  183 => 68,  178 => 66,  174 => 65,  171 => 64,  167 => 62,  163 => 60,  161 => 59,  157 => 57,  153 => 55,  149 => 53,  147 => 52,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  115 => 43,  110 => 42,  108 => 41,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"adherent/layout.html.twig\" %}
{% block body %}
    <form id=\"search\" action=\"POST\" class=\"content-mobile\">
        <div class=\"searchbar\" style=\"margin-top: 2rem\">
            <input class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Search...\">
            <a href=\"#\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\"><i class=\"fas fa-search\"></i></a>
        </div>
    </form>
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
                    <!--
                    <th>Date de retrait</th>
                    <th>Date achat</th>
                    <th>Date de création</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Libelle genre</th>
                    <th>Opérations</th>
                    -->

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
                            <!--
                            <td>{{livre.dateDeRetrait | date('d/m/Y')}}</td>
                            <td>{{livre.dateAchat | date('d/m/Y')}}</td>
                            <td>{{livre.dateCreation | date('d/m/Y')}}</td>
                            <td>{{livre.fkIdAuteur.nom}}</td>
                            <td>{{livre.fkIdAuteur.prenom}}</td>
                            <td>{{livre.fkIdGenre.libelleGenre}}</td>
                            <td>
                                <a href=\"{#{ path('livre_reverve', {id: livre.id}) }#}\" class=\"btn btn-primary\">Réserver</a>
                            </td>
                            -->
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
{% endblock %}", "adherent/showBibliotheque.html.twig", "/home/aduhoux/IUT/S3/Projets/mediatheque-g/projet/templates/adherent/showBibliotheque.html.twig");
    }
}