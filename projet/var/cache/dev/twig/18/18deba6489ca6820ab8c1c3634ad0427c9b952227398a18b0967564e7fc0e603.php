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

/* crud_list.html.twig */
class __TwigTemplate_214077551c3feedec62ccfa07b68db00a10800b0fbcefafed87f5598ed02897a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_list.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "crud_list.html.twig", 1);
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
        echo "    <div class=\"container cadre\">
        <h1>Liens CRUD</h1><hr>
        <div class=\"row\">
            <div class=\"col-sm\">User</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr><div class=\"row\">
            <div class=\"col-sm\">Annonce</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Categorie</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Entite</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entite_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entite_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Entreprise</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Fonction</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Genre</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genre_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genre_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Lien</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lien_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lien_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Rubrique</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Tag</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">TrancheAge</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tranche_age_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tranche_age_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">TypeEntite</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_entite_index");
        echo "\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_entite_new");
        echo "\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 109,  239 => 106,  230 => 100,  224 => 97,  215 => 91,  209 => 88,  200 => 82,  194 => 79,  185 => 73,  179 => 70,  170 => 64,  164 => 61,  155 => 55,  149 => 52,  140 => 46,  134 => 43,  125 => 37,  119 => 34,  110 => 28,  104 => 25,  95 => 19,  89 => 16,  81 => 11,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container cadre\">
        <h1>Liens CRUD</h1><hr>
        <div class=\"row\">
            <div class=\"col-sm\">User</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('user_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('user_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr><div class=\"row\">
            <div class=\"col-sm\">Annonce</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('annonce_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('annonce_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Categorie</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('categorie_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('categorie_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Entite</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('entite_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('entite_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Entreprise</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('entreprise_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('entreprise_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Fonction</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('fonction_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('fonction_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Genre</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('genre_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('genre_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Lien</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('lien_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('lien_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Rubrique</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('rubrique_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('rubrique_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Tag</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('tag_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('tag_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">TrancheAge</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('tranche_age_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('tranche_age_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">TypeEntite</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('type_entite_index') }}\" class=\"edit-btn\">index</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('type_entite_new') }}\" class=\"edit-btn\">add</a>
            </div>
        </div><hr>
    </div>
{% endblock %}
", "crud_list.html.twig", "/home/thibault/Documents/S3/Mediatheque/projet/templates/crud_list.html.twig");
    }
}
