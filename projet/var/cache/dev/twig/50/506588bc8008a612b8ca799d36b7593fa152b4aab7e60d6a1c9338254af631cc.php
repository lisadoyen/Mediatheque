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

/* user/index.html.twig */
class __TwigTemplate_91f510b7bee123b7999d06658ed1468db6bbbd65bc7a352327cc8cc673221d8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>User index</title>

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>User index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Username</th>
                <th>EmailPerso</th>
                <th>Password</th>
                <th>TelPerso</th>
                <th>Roles</th>
                <th>Matricule</th>
                <th>Sexe</th>
                <th>Avatar</th>
                <th>TelPerso2</th>
                <th>NotificationPerso</th>
                <th>TelPro</th>
                <th>TelPro2</th>
                <th>EmailPro</th>
                <th>NotificationPro</th>
                <th>EmailRecup</th>
                <th>AdresseRue</th>
                <th>AdresseRueComplement</th>
                <th>Ville</th>
                <th>CodePostal</th>
                <th>DroitEmprunt</th>
                <th>DroitAchat</th>
                <th>CommentaireUtilisateur</th>
                <th>CommentaireStaff</th>
                <th>DateCreation</th>
                <th>DateModification</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "            <tr>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "emailPerso", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telPerso", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 52)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "matricule", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telPerso2", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "notificationPerso", [], "any", false, false, false, 57)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telPro", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telPro2", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "emailPro", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "notificationPro", [], "any", false, false, false, 61)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "emailRecup", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresseRue", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresseRueComplement", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "ville", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "codePostal", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "droitEmprunt", [], "any", false, false, false, 67)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 68
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "droitAchat", [], "any", false, false, false, 68)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "commentaireUtilisateur", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "commentaireStaff", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            ((twig_get_attribute($this->env, $this->source, $context["user"], "dateCreation", [], "any", false, false, false, 71)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateCreation", [], "any", false, false, false, 71), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 72
            ((twig_get_attribute($this->env, $this->source, $context["user"], "dateModification", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateModification", [], "any", false, false, false, 72), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "            <tr>
                <td colspan=\"29\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  256 => 86,  251 => 83,  242 => 79,  233 => 75,  229 => 74,  224 => 72,  220 => 71,  216 => 70,  212 => 69,  208 => 68,  204 => 67,  200 => 66,  196 => 65,  192 => 64,  188 => 63,  184 => 62,  180 => 61,  176 => 60,  172 => 59,  168 => 58,  164 => 57,  160 => 56,  156 => 55,  152 => 54,  148 => 53,  144 => 52,  140 => 51,  136 => 50,  132 => 49,  128 => 48,  124 => 47,  120 => 46,  116 => 45,  113 => 44,  108 => 43,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>User index</title>

{% block body %}
    <h1>User index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Username</th>
                <th>EmailPerso</th>
                <th>Password</th>
                <th>TelPerso</th>
                <th>Roles</th>
                <th>Matricule</th>
                <th>Sexe</th>
                <th>Avatar</th>
                <th>TelPerso2</th>
                <th>NotificationPerso</th>
                <th>TelPro</th>
                <th>TelPro2</th>
                <th>EmailPro</th>
                <th>NotificationPro</th>
                <th>EmailRecup</th>
                <th>AdresseRue</th>
                <th>AdresseRueComplement</th>
                <th>Ville</th>
                <th>CodePostal</th>
                <th>DroitEmprunt</th>
                <th>DroitAchat</th>
                <th>CommentaireUtilisateur</th>
                <th>CommentaireStaff</th>
                <th>DateCreation</th>
                <th>DateModification</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.username }}</td>
                <td>{{ user.emailPerso }}</td>
                <td>{{ user.password }}</td>
                <td>{{ user.telPerso }}</td>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                <td>{{ user.matricule }}</td>
                <td>{{ user.sexe }}</td>
                <td>{{ user.avatar }}</td>
                <td>{{ user.telPerso2 }}</td>
                <td>{{ user.notificationPerso ? 'Yes' : 'No' }}</td>
                <td>{{ user.telPro }}</td>
                <td>{{ user.telPro2 }}</td>
                <td>{{ user.emailPro }}</td>
                <td>{{ user.notificationPro ? 'Yes' : 'No' }}</td>
                <td>{{ user.emailRecup }}</td>
                <td>{{ user.adresseRue }}</td>
                <td>{{ user.adresseRueComplement }}</td>
                <td>{{ user.ville }}</td>
                <td>{{ user.codePostal }}</td>
                <td>{{ user.droitEmprunt ? 'Yes' : 'No' }}</td>
                <td>{{ user.droitAchat ? 'Yes' : 'No' }}</td>
                <td>{{ user.commentaireUtilisateur }}</td>
                <td>{{ user.commentaireStaff }}</td>
                <td>{{ user.dateCreation ? user.dateCreation|date('Y-m-d') : '' }}</td>
                <td>{{ user.dateModification ? user.dateModification|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('user_show', {'id': user.id}) }}\">show</a>
                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"29\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('user_new') }}\">Create new</a>
{% endblock %}
", "user/index.html.twig", "/home/thibault/Documents/S3/Mediatheque/projet/templates/user/index.html.twig");
    }
}
