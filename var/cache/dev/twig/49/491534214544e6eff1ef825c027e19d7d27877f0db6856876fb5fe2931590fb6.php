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

/* article/home.html.twig */
class __TwigTemplate_2a1f4a39882adf2f144dd8fd60cda00e5e8b6e8b1e777800c40e577d0e7c1e1a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/home.html.twig"));

        // line 1
        echo "<h1>Bienvenue dans la médiathèque</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet animi atque beatae commodi consequuntur
    dolorem doloremque dolorum eveniet hic id illum, impedit incidunt magnam non nulla obcaecati optio perspiciatis
    quisquam tempora temporibus voluptatem voluptates. Ab animi consequatur possimus vero!</p>
<p>Aliquam animi autem
    consequatur culpa distinctio dolore dolores esse eveniet inventore, labore necessitatibus nobis nostrum officiis
    pariatur quas, quod suscipit velit? Aperiam excepturi laboriosam odio porro. Aliquid aperiam autem consectetur cum
    doloremque expedita hic, mollitia nulla praesentium qui reprehenderit totam.</p>
<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\">index</a>
<ul>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "codeArticle", [], "any", false, false, false, 13), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  63 => 13,  59 => 12,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Bienvenue dans la médiathèque</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet animi atque beatae commodi consequuntur
    dolorem doloremque dolorum eveniet hic id illum, impedit incidunt magnam non nulla obcaecati optio perspiciatis
    quisquam tempora temporibus voluptatem voluptates. Ab animi consequatur possimus vero!</p>
<p>Aliquam animi autem
    consequatur culpa distinctio dolore dolores esse eveniet inventore, labore necessitatibus nobis nostrum officiis
    pariatur quas, quod suscipit velit? Aperiam excepturi laboriosam odio porro. Aliquid aperiam autem consectetur cum
    doloremque expedita hic, mollitia nulla praesentium qui reprehenderit totam.</p>
<a href=\"{{ path(\"article\") }}\">index</a>
<ul>
    {% for article in articles %}
        <li>{{ article.codeArticle }}</li>
    {% endfor %}
</ul>", "article/home.html.twig", "/home/aduhoux/IUT/S3/Projets/heroku/templates/article/home.html.twig");
    }
}
