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

/* top.html.twig */
class __TwigTemplate_bbf5e6e9d93bf6316b91f535a78700f4deeaeb8f675e88121118e6509e02f13a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "top.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "top.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default top-navbar\" role=\"navigation\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\"><strong><i class=\"icon fa fa-book\"></i> Library </strong></a>
        <div id=\"sideNav\" href=\"\">
            <i class=\"fa fa-bars icon\"></i>
        </div>
    </div>
    <ul class=\"nav navbar-top-links navbar-right\">
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-messages\">
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Doe</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Today</em>
                                    </span>
                        </div>
                        <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Smith</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Smith</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>Read All Messages</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-tasks\">
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 1</strong>
                                <span class=\"pull-right text-muted\">60% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                    <span class=\"sr-only\">60% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 2</strong>
                                <span class=\"pull-right text-muted\">28% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"28\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 28%\">
                                    <span class=\"sr-only\">28% Complete</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 3</strong>
                                <span class=\"pull-right text-muted\">60% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                    <span class=\"sr-only\">60% Complete (warning)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 4</strong>
                                <span class=\"pull-right text-muted\">85% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                                    <span class=\"sr-only\">85% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>See All Tasks</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-alerts\">
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-comment fa-fw\"></i> New Comment
                            <span class=\"pull-right text-muted small\">4 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                            <span class=\"pull-right text-muted small\">12 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                            <span class=\"pull-right text-muted small\">4 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-tasks fa-fw\"></i> New Task
                            <span class=\"pull-right text-muted small\">4 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                            <span class=\"pull-right text-muted small\">4 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>See All Alerts</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> log</a>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                </li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 215,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-default top-navbar\" role=\"navigation\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ path('acceuil') }}\"><strong><i class=\"icon fa fa-book\"></i> Library </strong></a>
        <div id=\"sideNav\" href=\"\">
            <i class=\"fa fa-bars icon\"></i>
        </div>
    </div>
    <ul class=\"nav navbar-top-links navbar-right\">
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-messages\">
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Doe</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Today</em>
                                    </span>
                        </div>
                        <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Smith</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <strong>John Smith</strong>
                            <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>Read All Messages</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-tasks\">
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 1</strong>
                                <span class=\"pull-right text-muted\">60% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                    <span class=\"sr-only\">60% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 2</strong>
                                <span class=\"pull-right text-muted\">28% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"28\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 28%\">
                                    <span class=\"sr-only\">28% Complete</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 3</strong>
                                <span class=\"pull-right text-muted\">60% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                    <span class=\"sr-only\">60% Complete (warning)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <p>
                                <strong>Task 4</strong>
                                <span class=\"pull-right text-muted\">85% Complete</span>
                            </p>
                            <div class=\"progress progress-striped active\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                                    <span class=\"sr-only\">85% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>See All Tasks</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-alerts\">
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-comment fa-fw\"></i> New Comment
                            <span class=\"pull-right text-muted small\">4 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                            <span class=\"pull-right text-muted small\">12 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                            <span class=\"pull-right text-muted small\">4 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-tasks fa-fw\"></i> New Task
                            <span class=\"pull-right text-muted small\">4 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">
                        <div>
                            <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                            <span class=\"pull-right text-muted small\">4 min</span>
                        </div>
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a class=\"text-center\" href=\"#\">
                        <strong>See All Alerts</strong>
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> log</a>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                </li>
                <li class=\"divider\"></li>
                <li><a href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</nav>
", "top.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\top.html.twig");
    }
}
