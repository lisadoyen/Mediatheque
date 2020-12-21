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

/* data/_filtre_articles.html.twig */
class __TwigTemplate_09bff90e9db40fe265ab9c5e7d97cf6f75008f4a232fed69cf8fcef1593e51c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data/_filtre_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data/_filtre_articles.html.twig"));

        // line 1
        echo "
<div id=\"1\" style=\"visibility: visible\">
    <form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter_clear");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"GET\">
        <button type=\"submit\" class=\"edit-btn float-left\" onclick=\"return confirm('Voulez-vous vraiment vider le filtre ?')\">Vider</button>
    </form>

<form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livres_show");
        echo "\" >

    <input type=\"hidden\" name=\"token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form_articles"), "html", null, true);
        echo "\">
    <button type=\"submit\" class=\"edit-btn \">Filtrer</button>
    <hr>
    <div class=\"container\" style=\"color: grey\">
        <u style=\"text-decoration: none\">
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 15)) {
            // line 16
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 16, $this->source); })()), "search", [], "any", false, false, false, 16))) {
                // line 17
                echo "                <li> recherche : <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 17, $this->source); })()), "search", [], "any", false, false, false, 17), "html", null, true);
                echo "</strong></li>
            ";
            }
        }
        // line 19
        echo "            ";
        if ( !twig_test_empty((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 21
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "genres", [], "any", false, true, false, 21), twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 21), [], "array", true, true, false, 21)) {
                    // line 22
                    echo "                        <li> genre : <strong>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 22)), "html", null, true);
                    echo "</strong></li>
                    ";
                }
                // line 24
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        }
        // line 26
        echo "        </u>
   </div>

    <div class=\"form-group p-3\">
       <input name=\"search\" placeholder=\"Recherchez\" size=\"18\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 30), "")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" >
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-1\" data-js=\"hide\"><h5>Catégories</h5></a>
        </div>
        <div id=\"mon-bloc-1\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter (livre, jeu, musique video)
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-2\" data-js=\"hide\"><h5>Genres</h5></a>
        </div>
        <div id=\"mon-bloc-2\" class=\"hide-box p-2\">
            <div class=\"filtre\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 50, $this->source); })()), 0, (twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 50, $this->source); })())) / 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 51
            echo "                <input  type=\"checkbox\" name=\"genres[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "genres", [], "any", false, true, false, 51), twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 51), [], "array", true, true, false, 51)) {
                echo " checked ";
            }
            echo ">
                ";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 52)), "html", null, true);
            echo "
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </div>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 56, $this->source); })()), (twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 56, $this->source); })())) / 2), twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 56, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 57
            echo "                <input type=\"checkbox\" name=\"genres[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "genres", [], "any", false, true, false, 57), twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 57), [], "array", true, true, false, 57)) {
                echo " checked ";
            }
            echo ">
                ";
            // line 58
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 58)), "html", null, true);
            echo "
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-3\" data-js=\"hide\"><h5>Sous-genres</h5></a>
        </div>
        <div id=\"mon-bloc-3\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-4\" data-js=\"hide\"><h5>Nouveautés</h5></a>
        </div>
        <div id=\"mon-bloc-4\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-5\" data-js=\"hide\"><h5>Limite d'âge</h5></a>
        </div>
        <div id=\"mon-bloc-5\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-6\" data-js=\"hide\"><h5>Statut</h5></a>
        </div>
        <div id=\"mon-bloc-6\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre prix max/min si vente
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-7\" data-js=\"hide\"><h5>Date de parution</h5></a>
        </div>
        <div id=\"mon-bloc-7\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter
            </div>
        </div>
    </div>
    <hr>
</form>

</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "data/_filtre_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 61,  173 => 58,  164 => 57,  160 => 56,  157 => 55,  148 => 52,  139 => 51,  135 => 50,  112 => 30,  106 => 26,  103 => 25,  97 => 24,  91 => 22,  88 => 21,  83 => 20,  80 => 19,  73 => 17,  70 => 16,  68 => 15,  60 => 10,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div id=\"1\" style=\"visibility: visible\">
    <form action=\"{{ path('filter_clear') }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"GET\">
        <button type=\"submit\" class=\"edit-btn float-left\" onclick=\"return confirm('Voulez-vous vraiment vider le filtre ?')\">Vider</button>
    </form>

<form method=\"post\" action=\"{{ path('livres_show') }}\" >

    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form_articles') }}\">
    <button type=\"submit\" class=\"edit-btn \">Filtrer</button>
    <hr>
    <div class=\"container\" style=\"color: grey\">
        <u style=\"text-decoration: none\">
            {% if donnees.search is defined %}
                {% if donnees.search is not empty %}
                <li> recherche : <strong>{{ donnees.search }}</strong></li>
            {% endif %}{% endif %}
            {% if genres is not empty %}
                {% for genre in genres %}
                    {% if donnees.genres[genre.id] is defined %}
                        <li> genre : <strong>{{ genre.libelle|capitalize }}</strong></li>
                    {% endif %}
                {% endfor %}
            {% endif %}
        </u>
   </div>

    <div class=\"form-group p-3\">
       <input name=\"search\" placeholder=\"Recherchez\" size=\"18\" value=\"{{donnees.search|default('')}}\" class=\"form-control\" >
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-1\" data-js=\"hide\"><h5>Catégories</h5></a>
        </div>
        <div id=\"mon-bloc-1\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter (livre, jeu, musique video)
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-2\" data-js=\"hide\"><h5>Genres</h5></a>
        </div>
        <div id=\"mon-bloc-2\" class=\"hide-box p-2\">
            <div class=\"filtre\">
            {% for genre in genres|slice(0, genres|length/2) %}
                <input  type=\"checkbox\" name=\"genres[]\" value=\"{{ genre.id }}\"{% if donnees.genres[genre.id] is defined %} checked {% endif %}>
                {{ genre.libelle|capitalize }}
                <br/>
            {% endfor %}
            </div>
            {% for genre in genres|slice(genres|length/2, genres|length) %}
                <input type=\"checkbox\" name=\"genres[]\" value=\"{{ genre.id}}\"{% if donnees.genres[genre.id] is defined %} checked {% endif %}>
                {{ genre.libelle|capitalize }}
                <br/>
            {% endfor %}
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-3\" data-js=\"hide\"><h5>Sous-genres</h5></a>
        </div>
        <div id=\"mon-bloc-3\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-4\" data-js=\"hide\"><h5>Nouveautés</h5></a>
        </div>
        <div id=\"mon-bloc-4\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-5\" data-js=\"hide\"><h5>Limite d'âge</h5></a>
        </div>
        <div id=\"mon-bloc-5\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-6\" data-js=\"hide\"><h5>Statut</h5></a>
        </div>
        <div id=\"mon-bloc-6\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre prix max/min si vente
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"sub-menu-filtre\">
            <a href=\"#mon-bloc-7\" data-js=\"hide\"><h5>Date de parution</h5></a>
        </div>
        <div id=\"mon-bloc-7\" class=\"hide-box p-2\">
            <div class=\"filtre\">
                filtre à ajouter
            </div>
        </div>
    </div>
    <hr>
</form>

</div>

", "data/_filtre_articles.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\data\\_filtre_articles.html.twig");
    }
}
