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

/* benevole/addLivre.html.twig */
class __TwigTemplate_a30274c98d0232a978e403c95ecc687127d5c3fbd4461062c075462d7cfb9591 extends Template
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
        return "benevole/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "benevole/addLivre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "benevole/addLivre.html.twig"));

        $this->parent = $this->loadTemplate("benevole/layout.html.twig", "benevole/addLivre.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-0 col-md-2 col-lg-3\"></div>
            <div class=\"col-sm-12 col-md-8 col-lg-6\">
                <h1 style=\"text-align: center\">Barre de recherche</h1>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"search-isbn\" value=\"\" placeholder=\"Rechercher un isbn\"/>
                </div>
                <div id=\"result-isbn\" style=\"margin-top: 5em;\"></div>
            </div>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.1.1.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search-isbn').keyup(function(){
                \$(\"#result-isbn\").html('');
                let isbn = \$(this).val();
                if(isbn !== \"\"){
                    console.log(isbn);
                    axios.get('/benevole/bibliotheque/addLivre/'+isbn)
                        .then(function (response) {
                            let livre = response.data;
                            console.log(livre.titre)
                            ligne = 'Titre : ' + livre.titre +'<br>';
                            ligne += 'Sous Titre : ' + livre.sous_titre +'<br>';
                            ligne += 'Auteur : ' + livre.auteur +'<br>';
                            ligne += 'Editeur : ' + livre.editeur +'<br>';
                            ligne += 'Date de publication : ' + livre.dateDePublication +'<br>';
                            ligne += 'Description : ' + livre.description +'<br>';
                            ligne += 'ISBN : ' + livre.isbn +'<br>';
                            ligne += 'Image  : ' +'<img src=\"'+livre.image+'\" alt=\"image isbn\">' +'<br>';
                            document.getElementById(\"result-isbn\").innerHTML=ligne;
                        })
                        .catch(function (error) {
                            console.log(\"YOLOOO\");
                        });
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "benevole/addLivre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'benevole/layout.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-0 col-md-2 col-lg-3\"></div>
            <div class=\"col-sm-12 col-md-8 col-lg-6\">
                <h1 style=\"text-align: center\">Barre de recherche</h1>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"search-isbn\" value=\"\" placeholder=\"Rechercher un isbn\"/>
                </div>
                <div id=\"result-isbn\" style=\"margin-top: 5em;\"></div>
            </div>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.1.1.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"{{asset('assets/js/bootstrap.js')}}\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search-isbn').keyup(function(){
                \$(\"#result-isbn\").html('');
                let isbn = \$(this).val();
                if(isbn !== \"\"){
                    console.log(isbn);
                    axios.get('/benevole/bibliotheque/addLivre/'+isbn)
                        .then(function (response) {
                            let livre = response.data;
                            console.log(livre.titre)
                            ligne = 'Titre : ' + livre.titre +'<br>';
                            ligne += 'Sous Titre : ' + livre.sous_titre +'<br>';
                            ligne += 'Auteur : ' + livre.auteur +'<br>';
                            ligne += 'Editeur : ' + livre.editeur +'<br>';
                            ligne += 'Date de publication : ' + livre.dateDePublication +'<br>';
                            ligne += 'Description : ' + livre.description +'<br>';
                            ligne += 'ISBN : ' + livre.isbn +'<br>';
                            ligne += 'Image  : ' +'<img src=\"'+livre.image+'\" alt=\"image isbn\">' +'<br>';
                            document.getElementById(\"result-isbn\").innerHTML=ligne;
                        })
                        .catch(function (error) {
                            console.log(\"YOLOOO\");
                        });
                }
            });
        });
    </script>
{% endblock %}", "benevole/addLivre.html.twig", "/home/aduhoux/IUT/S3/Projets/mediatheque-g/projet/templates/benevole/addLivre.html.twig");
    }
}
