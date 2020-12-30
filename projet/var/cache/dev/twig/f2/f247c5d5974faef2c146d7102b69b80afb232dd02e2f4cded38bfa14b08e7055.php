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

/* _search_bar.html.twig */
class __TwigTemplate_58c406130e8accc761c626f6b233ce0f026025c5454c63b824610256c83dcae8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_search_bar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_search_bar.html.twig"));

        // line 1
        echo "<div class=\"searchbar form-group\">
    <input value=\"";
        // line 2
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 2), "")) : ("")), "html", null, true);
        echo "\" class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search...\">
    <a type=\"submit\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 3), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livres_show");
        echo "\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/search.png"), "html", null, true);
        echo "\" class=\"search-icon\">
    </a>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_search_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"searchbar form-group\">
    <input value=\"{{donnees.search|default('')}}\" class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search...\">
    <a type=\"submit\" value=\"{{donnees.search|default('')}}\" href=\"{{ path('livres_show') }}\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\">
        <img src=\"{{asset('assets/images/yellow/search.png')}}\" class=\"search-icon\">
    </a>
</div>
", "_search_bar.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\_search_bar.html.twig");
    }
}
