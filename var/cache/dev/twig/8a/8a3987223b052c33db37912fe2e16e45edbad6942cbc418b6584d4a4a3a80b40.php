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

/* cart/index.html.twig */
class __TwigTemplate_2a73738080a108f00b4f48ad718962aa7274aa943da4ba9929c5376540b4891e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        // line 1
        echo "<!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/vendors.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/tables/datatable/datatables.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
   <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/bootstrap-extended.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/colors.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/components.css"), "html", null, true);
        echo "\">
    <!-- END: Theme CSS-->


<!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/js/vendors.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"), "html", null, true);
        echo "\"></script>
<!-- BEGIN Vendor JS-->
";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 25, $this->source); })())), 0))) {
            // line 26
            echo "<table class=\"table\">
<thead>
<tr>
<th>id</th>
<th>titre</th>
<th>prix</th>
<th>quantity</th>
<th>total</th>
<th></th>
</thead>
<tbody>
";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 38
                echo "<tr>
<td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
<td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 40), "titre", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
<td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 41), "prix", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
<td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
<td>";
                // line 43
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 43), "prix", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 43)), "html", null, true);
                echo "</td>
<td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "livre", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
<i class=\"bx bx-trash\"></i>
</a></td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "</tbody>
<tr>
<td colspan=\"4\"> total : </td>
<td>";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "</td>
<td></td>
</tr>
</table>
";
        } else {
            // line 56
            echo "<p>vide</p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 56,  205 => 51,  200 => 48,  190 => 44,  186 => 43,  182 => 42,  178 => 41,  174 => 40,  170 => 39,  167 => 38,  163 => 37,  150 => 26,  148 => 25,  138 => 24,  119 => 22,  109 => 24,  106 => 23,  104 => 22,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  60 => 5,  56 => 4,  52 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/vendors.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css')}}\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
   <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/bootstrap-extended.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/colors.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/components.css') }}\">
    <!-- END: Theme CSS-->


<!-- BEGIN: Vendor JS-->
<script src=\"{{ asset('/app-assets/vendors/js/vendors.min.js') }}\"></script>
<script src=\"{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}\"></script>
<script src=\"{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}\"></script>
<script src=\"{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}\"></script>
<!-- BEGIN Vendor JS-->
{% block title %}Panier{% endblock %}

{% block body %}
{% if items | length >0 %}
<table class=\"table\">
<thead>
<tr>
<th>id</th>
<th>titre</th>
<th>prix</th>
<th>quantity</th>
<th>total</th>
<th></th>
</thead>
<tbody>
{% for item in items %}
<tr>
<td>{{item.livre.id}}</td>
<td>{{item.livre.titre}}</td>
<td>{{item.livre.prix}}</td>
<td>{{item.quantity}}</td>
<td>{{item.livre.prix * item.quantity}}</td>
<td><a href=\"{{path('cart_delete',{'id':item.livre.id})}}\" class=\"btn btn-danger btn-sm\">
<i class=\"bx bx-trash\"></i>
</a></td>
{% endfor %}
</tbody>
<tr>
<td colspan=\"4\"> total : </td>
<td>{{total}}</td>
<td></td>
</tr>
</table>
{% else %}
<p>vide</p>
{% endif %}
{% endblock %}
", "cart/index.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\cart\\index.html.twig");
    }
}
