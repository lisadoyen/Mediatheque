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
class __TwigTemplate_c5df7df05f3757fb81e276d96198210cf9a497d696309ea21463083f9b99360d extends Template
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
            <div class=\"col-lg-3\">
                <h2 class=\"center p-4\">Filtre
                <button class=\"edit-btn\" onclick=\"toggle_visibility(1)\"><i onclick=\"btn_icone(this)\" class=\"fas fa-arrow-up\"></i></button></h2>
                ";
        // line 8
        $this->loadTemplate("data/_filtre_articles.html.twig", "livres/show_all_livres.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <!--
                Récup les infos dans entite via article_entite
            -->
            <div class=\"col-lg-9\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 14, $this->source); })()), 0, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 15
            echo "                <div class=\"col-4 mt-4 float-left\">
                    <div class=\"row p-2\">
                        <div class=\"col-lg-4\">
                        ";
            // line 18
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "vignette", [], "any", false, false, false, 18), null))) {
                // line 19
                echo "                            <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_details", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                echo "\" alt=\"pas d'image\" width=\"120\" height=\"120\"></a>
                        ";
            } else {
                // line 23
                echo "                            <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
                            <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_details", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "vignette", [], "any", false, false, false, 25), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "vignette", [], "any", false, false, false, 25), "html", null, true);
                echo "\" width=\"120\" height=\"120\"></a>
                        ";
            }
            // line 27
            echo "                        </div>
                        <div class=\"col-md-8\">
                                <div class=\"text-size-title\"><span class=\"text-orange\"> titre : </span><span class=\"text-bold\">";
            // line 29
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 29)), "html", null, true);
            echo "</span></div>
                                <div class=\"text-size\"><span class=\"text-orange\">auteur : </span>auteur</div>
                                <div class=\"text-size\"><span class=\"text-orange\">date de publication : </span>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "datePublication", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
            echo "</div>
                        </div>
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 34
            echo "\">Emprunter/Acheter</a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
            <div class=\"pagination\">
                ";
        // line 40
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 40, $this->source); })()));
        echo "</div>
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
        return array (  156 => 40,  152 => 38,  143 => 34,  139 => 33,  134 => 31,  129 => 29,  125 => 27,  118 => 25,  114 => 24,  109 => 23,  104 => 21,  100 => 20,  95 => 19,  93 => 18,  88 => 15,  84 => 14,  77 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <h2 class=\"center p-4\">Filtre
                <button class=\"edit-btn\" onclick=\"toggle_visibility(1)\"><i onclick=\"btn_icone(this)\" class=\"fas fa-arrow-up\"></i></button></h2>
                {% include 'data/_filtre_articles.html.twig' %}
            </div>
            <!--
                Récup les infos dans entite via article_entite
            -->
            <div class=\"col-lg-9\">
            {% for livre in livres | slice(0, 30) %}
                <div class=\"col-4 mt-4 float-left\">
                    <div class=\"row p-2\">
                        <div class=\"col-lg-4\">
                        {% if livre.vignette == NULL %}
                            <input type=\"hidden\" name=\"id\" value=\"{{ livre.id }}\">
                            <a href=\"{{ path('livre_details', {id: livre.id}) }}\">
                                <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"120\" height=\"120\"></a>
                        {% else %}
                            <input type=\"hidden\" name=\"id\" value=\"{{ livre.id }}\">
                            <a href=\"{{ path('livre_details', {id: livre.id}) }}\">
                                <img src=\"{{ livre.vignette }}\" alt=\"{{ livre.vignette }}\" width=\"120\" height=\"120\"></a>
                        {% endif %}
                        </div>
                        <div class=\"col-md-8\">
                                <div class=\"text-size-title\"><span class=\"text-orange\"> titre : </span><span class=\"text-bold\">{{livre.titre | capitalize }}</span></div>
                                <div class=\"text-size\"><span class=\"text-orange\">auteur : </span>auteur</div>
                                <div class=\"text-size\"><span class=\"text-orange\">date de publication : </span>{{livre.datePublication | date('d/m/Y')}}</div>
                        </div>
                        <input type=\"hidden\" name=\"id\" value=\"{{ livre.id }}\">
                        <a href=\"{#{ path('livre_details', {id: livre.id}) }#}\">Emprunter/Acheter</a>
                    </div>
                </div>
                {% endfor %}
        </div>
            <div class=\"pagination\">
                {{ knp_pagination_render(livres)}}</div>
        </div>
    </div>
{% endblock %}", "livres/show_all_livres.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\livres\\show_all_livres.html.twig");
    }
}
