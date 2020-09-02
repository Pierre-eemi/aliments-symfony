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

/* aliment/aliments.html.twig */
class __TwigTemplate_b085abc1926f501a2f525b413ce1ba161cbbcaef856f0bdf907527c951048ac4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aliment/aliments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aliment/aliments.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "aliment/aliments.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Aliments";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        // line 6
        echo "    Liste de tous les aliments
    ";
        // line 7
        if ((isset($context["isCalorie"]) || array_key_exists("isCalorie", $context) ? $context["isCalorie"] : (function () { throw new RuntimeError('Variable "isCalorie" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        avec moins de 50 calories
    ";
        } elseif (        // line 9
(isset($context["isGlucide"]) || array_key_exists("isGlucide", $context) ? $context["isGlucide"] : (function () { throw new RuntimeError('Variable "isGlucide" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        avec moins de 5 glucides
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aliments");
        echo "\" class=\"btn btn-primary\">Tous</a>
<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alimentsParCalorie", ["calorie" => 50]);
        echo "}\" class=\"btn btn-primary\">Aliments avec moins de 50 calories au 100g</a>
<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alimentsParGlucides", ["glucide" => 5]);
        echo "}\" class=\"btn btn-primary\">Aliments avec moins de 5 glucides au 100g</a>
    <div class=\"row\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliments"]) || array_key_exists("aliments", $context) ? $context["aliments"] : (function () { throw new RuntimeError('Variable "aliments" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["aliment"]) {
            // line 19
            echo "            <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                <div class=\"card border-primary mb-3 mx-auto\" style=\"max-width:20rem\">
                    <div class=\"card-header text-center\">
                        <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["aliment"], "image", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" class=\"perso_imgAliment card-img-top\">
                    </div>
                    <div class=\"card-body\">
                        <h3 class=\"card-title text-center pb-2 mx-3 border-bottom border-primary\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</h3>
                        <p class=\"card-text\">
                            <h4 class=\"text-center\">Prix (kilo) : ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "prix", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4>
                            <table class=\"table text-center\">
                                <tr class=\"table-primary\">
                                    <td>Propriété</td>
                                    <td>Valeur (100g)</td>
                                </tr>
                                <tr>
                                    <td>Calories</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "calorie", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <td>Proteines</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "proteine", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <td>Glucides</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "glucide", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <td>Lipides</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "lipide", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                </tr>   
                            </table>
                        </p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aliment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "aliment/aliments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 55,  187 => 47,  180 => 43,  173 => 39,  166 => 35,  155 => 27,  150 => 25,  144 => 22,  139 => 19,  135 => 18,  130 => 16,  126 => 15,  121 => 14,  111 => 13,  99 => 10,  97 => 9,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Aliments{% endblock %}

{% block monTitre %}
    Liste de tous les aliments
    {% if isCalorie %}
        avec moins de 50 calories
    {% elseif isGlucide %}
        avec moins de 5 glucides
    {% endif %}
{% endblock %}
{% block body %}
<a href=\"{{ path('aliments')}}\" class=\"btn btn-primary\">Tous</a>
<a href=\"{{ path('alimentsParCalorie',{'calorie':50})}}}\" class=\"btn btn-primary\">Aliments avec moins de 50 calories au 100g</a>
<a href=\"{{ path('alimentsParGlucides',{'glucide':5})}}}\" class=\"btn btn-primary\">Aliments avec moins de 5 glucides au 100g</a>
    <div class=\"row\">
        {% for aliment in aliments %}
            <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                <div class=\"card border-primary mb-3 mx-auto\" style=\"max-width:20rem\">
                    <div class=\"card-header text-center\">
                        <img src=\"{{asset('images/' ~ aliment.image)}}\" class=\"perso_imgAliment card-img-top\">
                    </div>
                    <div class=\"card-body\">
                        <h3 class=\"card-title text-center pb-2 mx-3 border-bottom border-primary\">{{ aliment.nom }}</h3>
                        <p class=\"card-text\">
                            <h4 class=\"text-center\">Prix (kilo) : {{ aliment.prix }}</h4>
                            <table class=\"table text-center\">
                                <tr class=\"table-primary\">
                                    <td>Propriété</td>
                                    <td>Valeur (100g)</td>
                                </tr>
                                <tr>
                                    <td>Calories</td>
                                    <td>{{ aliment.calorie }}</td>
                                </tr>
                                <tr>
                                    <td>Proteines</td>
                                    <td>{{ aliment.proteine }}</td>
                                </tr>
                                <tr>
                                    <td>Glucides</td>
                                    <td>{{ aliment.glucide }}</td>
                                </tr>
                                <tr>
                                    <td>Lipides</td>
                                    <td>{{ aliment.lipide }}</td>
                                </tr>   
                            </table>
                        </p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

{% endblock %}
", "aliment/aliments.html.twig", "/Users/macbook/Desktop/Realisations/3-recette/templates/aliment/aliments.html.twig");
    }
}
