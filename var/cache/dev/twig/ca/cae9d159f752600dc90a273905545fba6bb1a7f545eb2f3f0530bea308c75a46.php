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

/* auteur/editt.html.twig */
class __TwigTemplate_e56e642140c1306efdfe07a31f7d55f675a73ad9f84fff6260261945098f75ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/editt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/editt.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auteur/editt.html.twig", 1);
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

        echo "Library";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"page-inner\">
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"board\">
                <div class=\"panel panel-primary\">
                    <div class=\"number\">
                        <h3>
                            <h3>44,023</h3>
                            <small>Daily Visits</small>
                        </h3>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-eye fa-5x red\"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"board\">
                <div class=\"panel panel-primary\">
                    <div class=\"number\">
                        <h3>
                            <h3>32,850</h3>
                            <small>Sales</small>
                        </h3>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-shopping-cart fa-5x blue\"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"board\">
                <div class=\"panel panel-primary\">
                    <div class=\"number\">
                        <h3>
                            <h3>56,150</h3>
                            <small>Comments</small>
                        </h3>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-comments fa-5x green\"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"board\">
                <div class=\"panel panel-primary\">
                    <div class=\"number\">
                        <h3>
                            <h3>89,645</h3>
                            <small>Daily Profits</small>
                        </h3>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-user fa-5x yellow\"></i>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "<!-- Morris Chart Js -->
<script src=\"assets/js/morris/raphael-2.1.0.min.js\"></script>
<script src=\"assets/js/morris/morris.js\"></script>


<script src=\"assets/js/easypiechart.js\"></script>
<script src=\"assets/js/easypiechart-data.js\"></script>

<script src=\"assets/js/Lightweight-Chart/jquery.chart.js\"></script>



<!-- Chart Js -->
<script type=\"text/javascript\" src=\"assets/js/Chart.min.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/chartjs.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auteur/editt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 82,  172 => 81,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Library{% endblock %}

{% block body %}
<div class=\"page-inner\">
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"board\">
                <div class=\"panel panel-primary\">
                    <div class=\"number\">
                        <h3>
                            <h3>44,023</h3>
                            <small>Daily Visits</small>
                        </h3>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-eye fa-5x red\"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"board\">
                <div class=\"panel panel-primary\">
                    <div class=\"number\">
                        <h3>
                            <h3>32,850</h3>
                            <small>Sales</small>
                        </h3>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-shopping-cart fa-5x blue\"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"board\">
                <div class=\"panel panel-primary\">
                    <div class=\"number\">
                        <h3>
                            <h3>56,150</h3>
                            <small>Comments</small>
                        </h3>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-comments fa-5x green\"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"board\">
                <div class=\"panel panel-primary\">
                    <div class=\"number\">
                        <h3>
                            <h3>89,645</h3>
                            <small>Daily Profits</small>
                        </h3>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-user fa-5x yellow\"></i>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

{% endblock %}

{%  block javascripts  %}
<!-- Morris Chart Js -->
<script src=\"assets/js/morris/raphael-2.1.0.min.js\"></script>
<script src=\"assets/js/morris/morris.js\"></script>


<script src=\"assets/js/easypiechart.js\"></script>
<script src=\"assets/js/easypiechart-data.js\"></script>

<script src=\"assets/js/Lightweight-Chart/jquery.chart.js\"></script>



<!-- Chart Js -->
<script type=\"text/javascript\" src=\"assets/js/Chart.min.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/chartjs.js\"></script>
{%  endblock %}
", "auteur/editt.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\auteur\\editt.html.twig");
    }
}
