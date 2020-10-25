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

/* background_search.html.twig */
class __TwigTemplate_50526968cf1c7eb0e2f92409e1ab5bdae7251c1b447068f7df2ed1d7afb6db56 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "background_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "background_search.html.twig"));

        // line 1
        echo "<div style=\"height: 77.5vh; background:linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5)), url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg.jpg"), "html", null, true);
        echo "')\">
    <div class=\"d-flex justify-content-center h-100\">
        <form id=\"search\" action=\"POST\">
            <div class=\"searchbar\">
                <input class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Search...\">
                <a href=\"#\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\"><i class=\"fas fa-search\"></i></a>
            </div>
        </form>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "background_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"height: 77.5vh; background:linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('assets/images/bg.jpg') }}')\">
    <div class=\"d-flex justify-content-center h-100\">
        <form id=\"search\" action=\"POST\">
            <div class=\"searchbar\">
                <input class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Search...\">
                <a href=\"#\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\"><i class=\"fas fa-search\"></i></a>
            </div>
        </form>
    </div>
</div>", "background_search.html.twig", "/var/www/html/ptut/projet/projet/templates/background_search.html.twig");
    }
}
