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
class __TwigTemplate_6d1bdd054c65769ef6be0a3b8ee3b7c8f6f67befb2b1c208a1e430b1061b488f extends Template
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
<form method=\"post\" action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livres_show");
        echo "\" >


    <div class=\"form-group\">
        la recherche est : <input name=\"search\" placeholder=\"Recherchez\" size=\"18\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" >
    </div>

    <i style=\"color: grey\">
        filtre activé : ...
    </i>
    <hr>
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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 31, $this->source); })()), 0, (twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 31, $this->source); })())) / 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 32
            echo "                <input  type=\"checkbox\" name=\"genres[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "idGenre", [], "any", false, false, false, 32), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "genres", [], "any", false, true, false, 32), twig_get_attribute($this->env, $this->source, $context["genre"], "idGenre", [], "any", false, false, false, 32), [], "array", true, true, false, 32)) {
                echo " checked ";
            }
            echo ">
                ";
            // line 33
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelleGenre", [], "any", false, false, false, 33)), "html", null, true);
            echo "
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </div>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 37, $this->source); })()), (twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 37, $this->source); })())) / 2), twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 37, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 38
            echo "                <input type=\"checkbox\" name=\"genres[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "idGenre", [], "any", false, false, false, 38), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "genres", [], "any", false, true, false, 38), twig_get_attribute($this->env, $this->source, $context["genre"], "idGenre", [], "any", false, false, false, 38), [], "array", true, true, false, 38)) {
                echo " checked ";
            }
            echo ">
                ";
            // line 39
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelleGenre", [], "any", false, false, false, 39)), "html", null, true);
            echo "
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
    <input type=\"hidden\" name=\"token\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form_articles"), "html", null, true);
        echo "\">
    <button type=\"submit\" class=\"edit-btn float-left\">Filtrer</button>
</form>

    <form action=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter_clear");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"GET\">
        <button type=\"submit\" class=\"edit-btn\" onclick=\"return confirm('Voulez-vous vraiment vider le filtre ?')\">Vider</button>
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
        return array (  193 => 102,  186 => 98,  128 => 42,  119 => 39,  110 => 38,  106 => 37,  103 => 36,  94 => 33,  85 => 32,  81 => 31,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div id=\"1\" style=\"visibility: visible\">
<form method=\"post\" action=\"{{ path('livres_show') }}\" >


    <div class=\"form-group\">
        la recherche est : <input name=\"search\" placeholder=\"Recherchez\" size=\"18\" value=\"{{donnees.search|default('')}}\" class=\"form-control\" >
    </div>

    <i style=\"color: grey\">
        filtre activé : ...
    </i>
    <hr>
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
                <input  type=\"checkbox\" name=\"genres[]\" value=\"{{ genre.idGenre }}\"{% if donnees.genres[genre.idGenre] is defined %} checked {% endif %}>
                {{ genre.libelleGenre|capitalize }}
                <br/>
            {% endfor %}
            </div>
            {% for genre in genres|slice(genres|length/2, genres|length) %}
                <input type=\"checkbox\" name=\"genres[]\" value=\"{{ genre.idGenre }}\"{% if donnees.genres[genre.idGenre] is defined %} checked {% endif %}>
                {{ genre.libelleGenre|capitalize }}
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
    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form_articles') }}\">
    <button type=\"submit\" class=\"edit-btn float-left\">Filtrer</button>
</form>

    <form action=\"{{ path('filter_clear') }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"GET\">
        <button type=\"submit\" class=\"edit-btn\" onclick=\"return confirm('Voulez-vous vraiment vider le filtre ?')\">Vider</button>
    </form>
</div>

", "data/_filtre_articles.html.twig", "/var/www/html/ptut/projet_actu/projet/templates/data/_filtre_articles.html.twig");
    }
}
