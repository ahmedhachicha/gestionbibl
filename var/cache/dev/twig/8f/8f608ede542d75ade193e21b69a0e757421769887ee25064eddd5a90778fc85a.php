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

/* auteur/index.html.twig */
class __TwigTemplate_006957a32705ccad518367999d5fbdf58ee97fa3324c6b647d0eae0c1a1e225c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auteur/index.html.twig", 1);
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

        echo "Hello AuteurController!";
        
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
        echo "    <h2>Autor</h2>
    <br>
    <table class=\"table\" xmlns=\"http://www.w3.org/1999/html\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>bibliography</th>
        <th>Actions</th>
    </tr>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["c"] => $context["a"]) {
            // line 19
            echo "    <tr>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, ($context["c"] + 1), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "prenom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "bigraphie", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
        <td>
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_autor", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"><span class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></span></a>&nbsp;&nbsp;
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_autor", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"><span class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i></span></a>&nbsp;&nbsp;&nbsp;
            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_autor", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><span class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></span></a>&nbsp;
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['c'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
    </thead>
</table>
    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_autor");
        echo "\"><button class=\"btn btn-success\">Create new</button></a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 34,  144 => 31,  134 => 27,  130 => 26,  126 => 25,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  106 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AuteurController!{% endblock %}

{% block body %}
    <h2>Autor</h2>
    <br>
    <table class=\"table\" xmlns=\"http://www.w3.org/1999/html\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>bibliography</th>
        <th>Actions</th>
    </tr>
    <tbody>
    {%  for c,a  in liste %}
    <tr>
        <td>{{ c+1}}</td>
        <td>{{ a.prenom }}</td>
        <td>{{ a.nom }}</td>
        <td>{{ a.bigraphie }}</td>
        <td>
            <a href=\"{{ path('show_autor',{'id':a.id}) }}\"><span class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></span></a>&nbsp;&nbsp;
            <a href=\"{{ path('edit_autor',{'id':a.id})}}\"><span class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i></span></a>&nbsp;&nbsp;&nbsp;
            <a href=\"{{ path('delete_autor',{'id':a.id})}}\"><span class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></span></a>&nbsp;
        </td>
    </tr>
    {% endfor %}
    </tbody>
    </thead>
</table>
    <a href=\"{{ path('new_autor') }}\"><button class=\"btn btn-success\">Create new</button></a>

{% endblock %}
", "auteur/index.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\auteur\\index.html.twig");
    }
}
