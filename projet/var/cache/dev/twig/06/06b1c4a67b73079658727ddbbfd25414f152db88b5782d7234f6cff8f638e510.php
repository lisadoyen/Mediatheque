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

/* users/profil/favoris.html.twig */
class __TwigTemplate_9c43df0e26e6fe9719c453c5f4f2104d1f083a9be7f8e8dd1fc379892c0fc94b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/favoris.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/favoris.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/favoris.html.twig", 1);
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
        echo "
<div class=\"container cadre\">
    <h1>Vos favoris</h1><hr>
    ";
        // line 6
        if ( !twig_test_empty((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "        <div class=\"row justify-content-end\">
            <form action=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_all_favoris");
            echo "\" method=\"POST\" style=\"display:inline\">
                <input type=\"hidden\" name=\"token\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("favoris_delete"), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button type=\"submit\" class=\"btn btn-danger float-right m-3\" onclick=\"return confirm('Voulez vous vraiment supprimer tous vos favoris ?')\">Supprimer tous les favoris</button>
            </form>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm\">
                <b>Illustration</b>
            </div>
            <div class=\"col-sm\">
                <b>Titre</b>
            </div>
            <div class=\"col-sm\">
                <b>Catégorie</b>
            </div>
            <div class=\"col-sm\">
                <b>Genre</b>
            </div>
            <div class=\"col-sm</b>\">
                <b>Statut</b>
            </div>
            <div class=\"col-4\"></div>
            <div class=\"col-1\"></div>
        </div>
        <hr style=\"border: 1px solid black;\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
                // line 35
                echo "        <div class=\"row\">
            <div class=\"col-sm\">
                ";
                // line 37
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 37), "vignette", [], "any", false, false, false, 37))) {
                    // line 38
                    echo "                    <img class=\"img-fluid rounded\" style=\"width:auto;height:100px\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tmp/"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 38), "vignette", [], "any", false, false, false, 38), "html", null, true);
                    echo "\" alt=\"image de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 38), "titre", [], "any", false, false, false, 38), "html", null, true);
                    echo "\" >
                ";
                } else {
                    // line 40
                    echo "                    Pas de vignette
                ";
                }
                // line 42
                echo "            </div>
            <div class=\"col-sm\">
                ";
                // line 44
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 44), "titre", [], "any", false, false, false, 44))) {
                    // line 45
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 45), "titre", [], "any", false, false, false, 45), "html", null, true);
                    echo "
                ";
                } else {
                    // line 47
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 47), "codeArticle", [], "any", false, false, false, 47), "html", null, true);
                    echo "
                ";
                }
                // line 49
                echo "            </div>
            <div class=\"col-sm\">
                ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 51), "categorie", [], "any", false, false, false, 51), "libelle", [], "any", false, false, false, 51), "html", null, true);
                echo "
            </div>
            <div class=\"col-sm\">
                ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 54), "genre", [], "any", false, false, false, 54), "libelle", [], "any", false, false, false, 54), "html", null, true);
                echo "
            </div>
            <div class=\"col-sm\">
                ";
                // line 57
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 57), "statut", [], "any", false, false, false, 57), "libelle", [], "any", false, false, false, 57), "empruntable")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 57), "statut", [], "any", false, false, false, 57), "libelle", [], "any", false, false, false, 57), "vendable")))) {
                    // line 58
                    echo "                    <span class=\"text-success\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 58), "statut", [], "any", false, false, false, 58), "libelle", [], "any", false, false, false, 58), "html", null, true);
                    echo "</span>
                ";
                } else {
                    // line 60
                    echo "                    <span class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 60), "statut", [], "any", false, false, false, 60), "libelle", [], "any", false, false, false, 60), "html", null, true);
                    echo "</span>
                ";
                }
                // line 62
                echo "
            </div>
            <div class=\"col-3\">
                ";
                // line 65
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 65), "statut", [], "any", false, false, false, 65), "libelle", [], "any", false, false, false, 65), "empruntable"))) {
                    // line 66
                    echo "                    <a href=\"";
                    echo "\" class=\"btn edit-btn\">Ajouter au panier</a>
                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 67
$context["fav"], "article", [], "any", false, false, false, 67), "statut", [], "any", false, false, false, 67), "libelle", [], "any", false, false, false, 67), "vendable"))) {
                    // line 68
                    echo "                    <a href=\"";
                    echo "\" class=\"btn edit-btn\">Ajouter au panier</a>
                    ";
                } else {
                    // line 70
                    echo "                ";
                }
                // line 71
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\" class=\"btn edit-btn\">Voir plus de détail</a>
            </div>
            <div class=\"col-1 align-content-center\">
                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favoris", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\" class=\"close p-4\" aria-label=\"Close\" onclick=\"return confirm('Voulez vous vraiment supprimer cette article de vos favoris ?')\">
                    <span aria-hidden=\"true\">&times;</span>
                </a>
            </div>
        </div><hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    ";
        } else {
            // line 81
            echo "        <div class=\"col-sm m-2\">
            <b>Vous n'avez pas d'article favori</b>
        </div>
    ";
        }
        // line 85
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/favoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 85,  224 => 81,  221 => 80,  209 => 74,  202 => 71,  199 => 70,  194 => 68,  192 => 67,  188 => 66,  186 => 65,  181 => 62,  175 => 60,  169 => 58,  167 => 57,  161 => 54,  155 => 51,  151 => 49,  145 => 47,  139 => 45,  137 => 44,  133 => 42,  129 => 40,  120 => 38,  118 => 37,  114 => 35,  110 => 34,  82 => 9,  78 => 8,  75 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}

<div class=\"container cadre\">
    <h1>Vos favoris</h1><hr>
    {% if favoris is not empty %}
        <div class=\"row justify-content-end\">
            <form action=\"{{ path('remove_all_favoris') }}\" method=\"POST\" style=\"display:inline\">
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('favoris_delete') }}\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                <button type=\"submit\" class=\"btn btn-danger float-right m-3\" onclick=\"return confirm('Voulez vous vraiment supprimer tous vos favoris ?')\">Supprimer tous les favoris</button>
            </form>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm\">
                <b>Illustration</b>
            </div>
            <div class=\"col-sm\">
                <b>Titre</b>
            </div>
            <div class=\"col-sm\">
                <b>Catégorie</b>
            </div>
            <div class=\"col-sm\">
                <b>Genre</b>
            </div>
            <div class=\"col-sm</b>\">
                <b>Statut</b>
            </div>
            <div class=\"col-4\"></div>
            <div class=\"col-1\"></div>
        </div>
        <hr style=\"border: 1px solid black;\">
        {% for fav in favoris %}
        <div class=\"row\">
            <div class=\"col-sm\">
                {%  if fav.article.vignette is not empty %}
                    <img class=\"img-fluid rounded\" style=\"width:auto;height:100px\" src=\"{{asset('images/tmp/')}}{{ fav.article.vignette }}\" alt=\"image de {{ fav.article.titre }}\" >
                {% else %}
                    Pas de vignette
                {% endif %}
            </div>
            <div class=\"col-sm\">
                {%  if fav.article.titre is not empty %}
                    {{ fav.article.titre }}
                {% else %}
                    {{ fav.article.codeArticle }}
                {% endif %}
            </div>
            <div class=\"col-sm\">
                {{ fav.article.categorie.libelle }}
            </div>
            <div class=\"col-sm\">
                {{ fav.article.genre.libelle }}
            </div>
            <div class=\"col-sm\">
                {%  if fav.article.statut.libelle == \"empruntable\" or fav.article.statut.libelle == \"vendable\" %}
                    <span class=\"text-success\">{{ fav.article.statut.libelle }}</span>
                {% else %}
                    <span class=\"text-danger\">{{ fav.article.statut.libelle }}</span>
                {% endif %}

            </div>
            <div class=\"col-3\">
                {%  if fav.article.statut.libelle == \"empruntable\" %}
                    <a href=\"{# ajouter au panier emprunt #}\" class=\"btn edit-btn\">Ajouter au panier</a>
                {% elseif fav.article.statut.libelle == \"vendable\"%}
                    <a href=\"{# ajouter au panier achat #}\" class=\"btn edit-btn\">Ajouter au panier</a>
                    {% else %}
                {% endif %}
                <a href=\"{{ path('livre_details', {id: fav.article.id}) }}\" class=\"btn edit-btn\">Voir plus de détail</a>
            </div>
            <div class=\"col-1 align-content-center\">
                <a href=\"{{ path('remove_favoris', {id: fav.article.id}) }}\" class=\"close p-4\" aria-label=\"Close\" onclick=\"return confirm('Voulez vous vraiment supprimer cette article de vos favoris ?')\">
                    <span aria-hidden=\"true\">&times;</span>
                </a>
            </div>
        </div><hr>
        {% endfor %}
    {% else %}
        <div class=\"col-sm m-2\">
            <b>Vous n'avez pas d'article favori</b>
        </div>
    {% endif %}
</div>
{% endblock %}
", "users/profil/favoris.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\users\\profil\\favoris.html.twig");
    }
}
