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

/* accueil.html.twig */
class __TwigTemplate_0a63ada859b8f02fc8847160acd623a158d2b98e1352664aaa71dc0a56c85ac8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "accueil.html.twig", 1);
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
        echo "    ";
        $this->loadTemplate("_search_home.html.twig", "accueil.html.twig", 3)->display($context);
        // line 4
        echo "    <div class=\"container-carousel\">

        <div class=\"row\">

            <div class=\"col-sm \">
                <h2 class=\"carousel-title\"><span>Annonces</span></h2>
                <div id=\"annonceCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\" >

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"2\"></li>
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"3\"></li>
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"4\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus diam. Nunc placerat ante at iaculis egestas. Pellentesque risus mauris, interdum vitae tellus eu, pellentesque dignissim urna. Nulla mattis enim mauris, quis aliquam nisi placerat imperdiet. Morbi consequat leo vel ante varius finibus. Pellentesque vitae ante vitae turpis maximus volutpat porta vitae orci. Donec tincidunt felis at tortor tincidunt, quis porta ipsum dignissim. Vivamus imperdiet est augue, eu ultricies elit pulvinar ornare. Pellentesque nulla nulla, congue facilisis aliquam id, ultricies id nibh. Pellentesque sed nibh eget sapien mollis malesuada. Vivamus eget congue sem, id dapibus dui. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify \">Nullam convallis vulputate libero eu vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras lobortis lobortis quam molestie euismod. Suspendisse at ipsum auctor eros consectetur gravida at vitae magna. Morbi nisi lacus, convallis vitae aliquam sed, euismod vel ligula. Curabitur varius felis ut dictum fermentum. Curabitur semper porta nisi, sed ullamcorper nulla tristique ac. Vestibulum congue, est eget pretium venenatis, libero arcu porta odio, at consequat nisi enim eget odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi dolor massa, blandit sit amet faucibus non, aliquam vitae nunc. <p>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP7.jpg"), "html", null, true);
        echo "\"  alt=\"\" style=\"height: 300px; width: auto\">
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"row\">
                                        <div class=\"col-sm\">
                                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP1.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 300px;width: auto;\">
                                        </div>
                                        <div class=\"col-sm\">
                                            <p class=\"text-justify\">Quisque id tellus ut ex dapibus iaculis. Suspendisse ac laoreet arcu, in commodo neque. Etiam eget facilisis nulla. Mauris suscipit leo id ipsum finibus, eu commodo sapien finibus. Nulla faucibus porta metus sit amet rhoncus. Morbi non mi in lacus volutpat pulvinar quis et urna. Sed a tempus dui. Praesent massa neque, gravida a augue quis, eleifend interdum orci. Nullam at commodo elit, in malesuada libero. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify\">Maecenas interdum diam massa, ac sollicitudin lorem accumsan quis. Integer imperdiet vehicula orci id lobortis. Aenean auctor sagittis mauris eu convallis. Sed eu neque rutrum, consequat augue id, pharetra nunc. Curabitur in tortor eu arcu semper sagittis. Suspendisse vitae justo pulvinar, porttitor enim quis, mattis neque. Duis quis lectus a ante faucibus suscipit. Nunc malesuada, odio et finibus lacinia, metus ligula hendrerit mi, id iaculis lorem nunc vel mauris. Vestibulum vehicula lectus metus, id consequat massa scelerisque vitae. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm text-center\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des annonces</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#annonceCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#annonceCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-sm \">
                <h2 class=\"carousel-title\"><span>Nouveautés</span></h2>
                <div id=\"newsCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#newsCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#newsCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#newsCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <a href=\"#\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>

                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm text-center m-3\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des nouveautés disponibles</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#newsCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#newsCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class=\"separtor\"></div>

    <h2 class=\"carousel-title\"><span>E-braderie</span></h2>

    <div class=\"container-carousel\">
        <div class=\"row\">
            <div class=\"col-sm \">
                <h3 class=\"carousel-title\">Le Concept</h3>
                <div class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus diam. Nunc placerat ante at iaculis egestas. Pellentesque risus mauris, interdum vitae tellus eu, pellentesque dignissim urna. Nulla mattis enim mauris, quis aliquam nisi placerat imperdiet. Morbi consequat leo vel ante varius finibus. Pellentesque vitae ante vitae turpis maximus volutpat porta vitae orci. Donec tincidunt felis at tortor tincidunt, quis porta ipsum dignissim. Vivamus imperdiet est augue, eu ultricies elit pulvinar ornare. Pellentesque nulla nulla, congue facilisis aliquam id, ultricies id nibh. Pellentesque sed nibh eget sapien mollis malesuada. Vivamus eget congue sem, id dapibus dui. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"col-sm \">
                <h3 class=\"carousel-title\">Articles à vendre</h3>
                <div id=\"eBraderieCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>

                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm text-center m-3\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des achats disponibles</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#eBraderieCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#eBraderieCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 252,  351 => 246,  332 => 230,  324 => 225,  305 => 209,  297 => 204,  229 => 139,  220 => 133,  201 => 117,  193 => 112,  174 => 96,  166 => 91,  119 => 47,  107 => 38,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    {% include \"_search_home.html.twig\" %}
    <div class=\"container-carousel\">

        <div class=\"row\">

            <div class=\"col-sm \">
                <h2 class=\"carousel-title\"><span>Annonces</span></h2>
                <div id=\"annonceCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\" >

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"2\"></li>
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"3\"></li>
                        <li data-target=\"#annonceCarousel\" data-slide-to=\"4\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus diam. Nunc placerat ante at iaculis egestas. Pellentesque risus mauris, interdum vitae tellus eu, pellentesque dignissim urna. Nulla mattis enim mauris, quis aliquam nisi placerat imperdiet. Morbi consequat leo vel ante varius finibus. Pellentesque vitae ante vitae turpis maximus volutpat porta vitae orci. Donec tincidunt felis at tortor tincidunt, quis porta ipsum dignissim. Vivamus imperdiet est augue, eu ultricies elit pulvinar ornare. Pellentesque nulla nulla, congue facilisis aliquam id, ultricies id nibh. Pellentesque sed nibh eget sapien mollis malesuada. Vivamus eget congue sem, id dapibus dui. </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify \">Nullam convallis vulputate libero eu vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras lobortis lobortis quam molestie euismod. Suspendisse at ipsum auctor eros consectetur gravida at vitae magna. Morbi nisi lacus, convallis vitae aliquam sed, euismod vel ligula. Curabitur varius felis ut dictum fermentum. Curabitur semper porta nisi, sed ullamcorper nulla tristique ac. Vestibulum congue, est eget pretium venenatis, libero arcu porta odio, at consequat nisi enim eget odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi dolor massa, blandit sit amet faucibus non, aliquam vitae nunc. <p>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <img src=\"{{ asset('assets/images/tmp/HP7.jpg') }}\"  alt=\"\" style=\"height: 300px; width: auto\">
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"row\">
                                        <div class=\"col-sm\">
                                            <img src=\"{{ asset('assets/images/tmp/HP1.jpg') }}\" alt=\"\" style=\"height: 300px;width: auto;\">
                                        </div>
                                        <div class=\"col-sm\">
                                            <p class=\"text-justify\">Quisque id tellus ut ex dapibus iaculis. Suspendisse ac laoreet arcu, in commodo neque. Etiam eget facilisis nulla. Mauris suscipit leo id ipsum finibus, eu commodo sapien finibus. Nulla faucibus porta metus sit amet rhoncus. Morbi non mi in lacus volutpat pulvinar quis et urna. Sed a tempus dui. Praesent massa neque, gravida a augue quis, eleifend interdum orci. Nullam at commodo elit, in malesuada libero. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify\">Maecenas interdum diam massa, ac sollicitudin lorem accumsan quis. Integer imperdiet vehicula orci id lobortis. Aenean auctor sagittis mauris eu convallis. Sed eu neque rutrum, consequat augue id, pharetra nunc. Curabitur in tortor eu arcu semper sagittis. Suspendisse vitae justo pulvinar, porttitor enim quis, mattis neque. Duis quis lectus a ante faucibus suscipit. Nunc malesuada, odio et finibus lacinia, metus ligula hendrerit mi, id iaculis lorem nunc vel mauris. Vestibulum vehicula lectus metus, id consequat massa scelerisque vitae. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm text-center\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des annonces</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#annonceCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#annonceCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-sm \">
                <h2 class=\"carousel-title\"><span>Nouveautés</span></h2>
                <div id=\"newsCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#newsCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#newsCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#newsCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP1.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP2.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP3.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP4.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP5.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>

                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP7.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm text-center m-3\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des nouveautés disponibles</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#newsCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#newsCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class=\"separtor\"></div>

    <h2 class=\"carousel-title\"><span>E-braderie</span></h2>

    <div class=\"container-carousel\">
        <div class=\"row\">
            <div class=\"col-sm \">
                <h3 class=\"carousel-title\">Le Concept</h3>
                <div class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus diam. Nunc placerat ante at iaculis egestas. Pellentesque risus mauris, interdum vitae tellus eu, pellentesque dignissim urna. Nulla mattis enim mauris, quis aliquam nisi placerat imperdiet. Morbi consequat leo vel ante varius finibus. Pellentesque vitae ante vitae turpis maximus volutpat porta vitae orci. Donec tincidunt felis at tortor tincidunt, quis porta ipsum dignissim. Vivamus imperdiet est augue, eu ultricies elit pulvinar ornare. Pellentesque nulla nulla, congue facilisis aliquam id, ultricies id nibh. Pellentesque sed nibh eget sapien mollis malesuada. Vivamus eget congue sem, id dapibus dui. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"col-sm \">
                <h3 class=\"carousel-title\">Articles à vendre</h3>
                <div id=\"eBraderieCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP1.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP2.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP3.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP4.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP5.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>

                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP7.jpg') }}\" class=\"img-fluid\" alt=\"\"></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100\">
                                        <button class=\"edit-btn\" style=\"float: right\">Voir plus de détail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm text-center m-3\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des achats disponibles</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#eBraderieCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#eBraderieCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "accueil.html.twig", "D:\\Utilisateurs\\Thibault\\Documents\\Etudes\\Superieur\\DutInfo\\Cours\\S3\\ProjetTut\\Mediatheque\\projet\\templates\\accueil.html.twig");
    }
}
