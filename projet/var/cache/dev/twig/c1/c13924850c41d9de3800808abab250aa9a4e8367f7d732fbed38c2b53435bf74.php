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
            <!--
                Récup les infos dans entite via article_entite
            -->
            <div class=\"col-md-9\">
                <h1 class=\"center p-3\">Récapitulatifs des articles</h1><br>
                <div>
                    <table class=\"table table-striped table-bordered\">
                        <caption>Récapitulatifs des livres</caption>
                        <thead class=\"thead-dark\">
                        <tr>
                            <th>Code Livre</th>
                            <th>Code ISBN</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Numérique</th>
                            <th>Date de publication</th>
                            <th>Libelle genre</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 32
        if ( !twig_test_empty((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 33, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 34
                echo "                                <tr>
                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeArticle", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "gencode", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                                    <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "description", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "vignette", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 41
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "numerique", [], "any", false, false, false, 41), 0))) {
                    // line 42
                    echo "                                            <span style=\"color:red\">Non</span>
                                        ";
                } else {
                    // line 44
                    echo "                                            <span style=\"color:green\">Oui</span>
                                        ";
                }
                // line 46
                echo "                                    </td>
                                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "datePublication", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "genre", [], "any", false, false, false, 48), "libelle", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                                    <td>
                                        <input type=\"hidden\" name=\"id\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
                                        <a href=\"";
                // line 51
                echo "\" class=\"btn btn-primary mb-2\">Réserver</a>
                                        <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_details", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-primary mb-2\">Voir plus de détail</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        ";
        } else {
            // line 57
            echo "                            <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                        ";
        }
        // line 59
        echo "                        </tbody>
                    </table>
                    <div class=\"pagination\">
                        ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 62, $this->source); })()));
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
        return array (  184 => 62,  179 => 59,  175 => 57,  172 => 56,  162 => 52,  159 => 51,  155 => 50,  150 => 48,  146 => 47,  143 => 46,  139 => 44,  135 => 42,  133 => 41,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  109 => 34,  104 => 33,  102 => 32,  77 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
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
            <!--
                Récup les infos dans entite via article_entite
            -->
            <div class=\"col-md-9\">
                <h1 class=\"center p-3\">Récapitulatifs des articles</h1><br>
                <div>
                    <table class=\"table table-striped table-bordered\">
                        <caption>Récapitulatifs des livres</caption>
                        <thead class=\"thead-dark\">
                        <tr>
                            <th>Code Livre</th>
                            <th>Code ISBN</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Numérique</th>
                            <th>Date de publication</th>
                            <th>Libelle genre</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% if livres is not empty %}
                            {% for livre in livres | slice(0, 10) %}
                                <tr>
                                    <td>{{livre.codeArticle}}</td>
                                    <td>{{livre.gencode}}</td>
                                    <td>{{livre.titre}}</td>
                                    <td>{{livre.description}}</td>
                                    <td>{{livre.vignette}}</td>
                                    <td>
                                        {% if livre.numerique == 0 %}
                                            <span style=\"color:red\">Non</span>
                                        {% else %}
                                            <span style=\"color:green\">Oui</span>
                                        {% endif %}
                                    </td>
                                    <td>{{livre.datePublication | date('d/m/Y')}}</td>
                                    <td>{{livre.genre.libelle}}</td>
                                    <td>
                                        <input type=\"hidden\" name=\"id\" value=\"{{ livre.id }}\">
                                        <a href=\"{#{ path('livre_edit', {id: livre.id}) }#}\" class=\"btn btn-primary mb-2\">Réserver</a>
                                        <a href=\"{{ path('livre_details', {id: livre.id}) }}\" class=\"btn btn-primary mb-2\">Voir plus de détail</a>
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
{% endblock %}", "livres/show_all_livres.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\livres\\show_all_livres.html.twig");
    }
}
