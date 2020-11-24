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

/* _search.html.twig */
class __TwigTemplate_c705f97d6a10d8e77f6bd0aa8c0621721f2b2dd2f284aa952fd1e168bc200d03 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_search.html.twig"));

        // line 1
        echo "<div style=\"height: 90.5vh;padding-top:0px; background:linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5)), url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg.jpg"), "html", null, true);
        echo "')\">
    <div class=\"d-flex justify-content-center h-100\">
        <form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livres_show");
        echo "\" id=\"search\" method=\"post\" style=\"margin-top: 33.75vh;\">
            <div class=\"searchbar form-group\">
                <input value=\"";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 5), "")) : ("")), "html", null, true);
        echo "\" class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search...\">
                <a type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 6), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livres_show");
        echo "\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\">
                    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/search.png"), "html", null, true);
        echo "\" class=\"search-icon\">
                </a>
            </div>
        </form>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  58 => 6,  54 => 5,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"height: 90.5vh;padding-top:0px; background:linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('assets/images/bg.jpg') }}')\">
    <div class=\"d-flex justify-content-center h-100\">
        <form action=\"{{ path('livres_show') }}\" id=\"search\" method=\"post\" style=\"margin-top: 33.75vh;\">
            <div class=\"searchbar form-group\">
                <input value=\"{{donnees.search|default('')}}\" class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search...\">
                <a type=\"submit\" value=\"{{donnees.search|default('')}}\" href=\"{{ path('livres_show') }}\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\">
                    <img src=\"{{asset('assets/images/yellow/search.png')}}\" class=\"search-icon\">
                </a>
            </div>
        </form>
    </div>
</div>", "_search.html.twig", "/var/www/html/ptut/projet_actu/projet/templates/_search.html.twig");
    }
}
