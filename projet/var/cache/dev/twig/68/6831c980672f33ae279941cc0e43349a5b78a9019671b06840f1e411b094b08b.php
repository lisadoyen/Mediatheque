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

/* livres/show_livre_details.html.twig */
class __TwigTemplate_93d648cccf2320f316d67da7efeb3b71524fd2517722f5855019f7f373f7b6de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livres/show_livre_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livres/show_livre_details.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "livres/show_livre_details.html.twig", 1);
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
            <div class=\"col-md-9\">
                <h1 class=\"center p-3\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1><br>
                <div>
                    <table class=\"table table-striped table-bordered\">
                        <caption>Détails de ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        echo "</caption>
                        interface a refaire
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
        // line 25
        if ( !twig_test_empty((isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "                            <tr>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 27, $this->source); })()), "codeArticle", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 28, $this->source); })()), "gencode", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 31, $this->source); })()), "vignette", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 33
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 33, $this->source); })()), "numerique", [], "any", false, false, false, 33), 0))) {
                // line 34
                echo "                                        <span style=\"color:red\">Non</span>
                                    ";
            } else {
                // line 36
                echo "                                        <span style=\"color:green\">Oui</span>
                                    ";
            }
            // line 38
            echo "                                </td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 39, $this->source); })()), "datePublication", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 40, $this->source); })()), "genre", [], "any", false, false, false, 40), "libelle", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 42
            echo "\" class=\"btn btn-primary mb-2\">Réserver</a>
                                    ";
            // line 43
            if (twig_test_empty((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article_favoris", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"><i class=\"far fa-star text-danger\"></i></a>
                                    ";
            } else {
                // line 46
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_article_favoris", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\"><i class=\"fas fa-star text-danger\"></i></a>
                                    ";
            }
            // line 48
            echo "                                </td>
                            </tr>
                        ";
        } else {
            // line 51
            echo "                            <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                        ";
        }
        // line 53
        echo "                        </tbody>
                    </table>
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
        return "livres/show_livre_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 53,  168 => 51,  163 => 48,  157 => 46,  151 => 44,  149 => 43,  146 => 42,  141 => 40,  137 => 39,  134 => 38,  130 => 36,  126 => 34,  124 => 33,  119 => 31,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  100 => 26,  98 => 25,  79 => 9,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-9\">
                <h1 class=\"center p-3\">{{ livre.titre }}</h1><br>
                <div>
                    <table class=\"table table-striped table-bordered\">
                        <caption>Détails de {{ livre.titre }}</caption>
                        interface a refaire
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
                        {% if livre is not empty %}
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
                                    <a href=\"{#{ path('livre_edit', {id: livre.id}) }#}\" class=\"btn btn-primary mb-2\">Réserver</a>
                                    {% if favoris is empty %}
                                        <a href=\"{{ path('add_article_favoris', {id: livre.id}) }}\"><i class=\"far fa-star text-danger\"></i></a>
                                    {% else %}
                                        <a href=\"{{ path('remove_article_favoris', {id: livre.id}) }}\"><i class=\"fas fa-star text-danger\"></i></a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                        {% endif %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "livres/show_livre_details.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\livres\\show_livre_details.html.twig");
    }
}
