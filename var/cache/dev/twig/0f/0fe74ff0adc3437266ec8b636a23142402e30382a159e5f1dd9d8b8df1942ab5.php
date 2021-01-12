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

/* menu.html.twig */
class __TwigTemplate_a8f2c6bdc9041596d33ab089f2cea0ddfdb4e302e4d86338c0d17d293ee8e04c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar-default navbar-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul class=\"nav\" id=\"main-menu\">

            <li>
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fa fa-user\"></i> Autors</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editeur_index");
        echo "\"><i class=\"fa fa-pencil\"></i> Editors</a>
            </li>
            <li>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\"><i class=\"fa fa-folder\"></i> Categories</a>
            </li>
            <li>
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_index");
        echo "\"><i class=\"fa fa-book\"></i> Books</a>
            </li>
            <li>
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"><i class=\"fa fa-book\"></i> users</a>
            </li>

        </ul>

    </div>

</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  68 => 15,  62 => 12,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar-default navbar-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul class=\"nav\" id=\"main-menu\">

            <li>
                <a href=\"{{ path('index') }}\"><i class=\"fa fa-user\"></i> Autors</a>
            </li>
            <li>
                <a href=\"{{ path('editeur_index') }}\"><i class=\"fa fa-pencil\"></i> Editors</a>
            </li>
            <li>
                <a href=\"{{ path('categorie_index') }}\"><i class=\"fa fa-folder\"></i> Categories</a>
            </li>
            <li>
                <a href=\"{{ path('livre_index') }}\"><i class=\"fa fa-book\"></i> Books</a>
            </li>
            <li>
                <a href=\"{{ path('admin') }}\"><i class=\"fa fa-book\"></i> users</a>
            </li>

        </ul>

    </div>

</nav>
", "menu.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\menu.html.twig");
    }
}
