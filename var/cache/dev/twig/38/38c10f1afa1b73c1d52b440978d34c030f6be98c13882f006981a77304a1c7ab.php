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

/* acceuil/login.html.twig */
class __TwigTemplate_c25b61d508fd8ded6bf6b9de86da0322403786476db344528e824197f7be4c71 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"ltr\">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0\">
    <meta name=\"description\" content=\"Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\" content=\"admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/images/ico/apple-icon-120.png"), "html", null, true);
        echo ")\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/images/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700\" rel=\"stylesheet\">

    <!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffie/app-assets/vendors/css/vendors.min.css"), "html", null, true);
        echo "\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/css/bootstrap-extended.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/css/colors.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/css/components.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/css/themes/dark-layout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/css/themes/semi-dark-layout.css"), "html", null, true);
        echo "\">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/css/core/menu/menu-types/vertical-menu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/css/pages/authentication.css"), "html", null, true);
        echo "\">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/assets/css/style.css"), "html", null, true);
        echo "\">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "

<!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/vendors/js/vendors.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"), "html", null, true);
        echo "\"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/js/scripts/configs/vertical-menu-light.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/js/core/app-menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/js/core/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/js/scripts/components.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/js/scripts/footer.js"), "html", null, true);
        echo "\"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "<!-- BEGIN: Body-->


<body class=\"vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page\" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"1-column\">

<!-- BEGIN: Content-->
<div class=\"app-content content\">
    <div class=\"content-overlay\"></div>
    <div class=\"content-wrapper\">
        <div class=\"content-header row\">
        </div>
        <div class=\"content-body\">
            <!-- login page start -->
            <section id=\"auth-login\" class=\"row flexbox-container\">
                <div class=\"col-xl-8 col-11\">
                    <div class=\"card bg-authentication mb-0\">
                        <div class=\"row m-0\">
                            <!-- left section-login -->
                            <div class=\"col-md-6 col-12 px-0\">
                                <div class=\"card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center\">
                                    <div class=\"card-header pb-1\">
                                        <div class=\"card-title\">
                                            <h4 class=\"text-center mb-2\">E-Library</h4>
                                        </div>
                                    </div>
                                    <div class=\"card-content\">
                                        <div class=\"card-body\">
                                            <!-- <div class=\"d-flex flex-md-row flex-column justify-content-around\">
                                                <a href=\"#\" class=\"btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1\">
                                                    <i class=\"bx bxl-google font-medium-3\"></i><span class=\"pl-50 d-block text-center\">Google</span></a>
                                                <a href=\"#\" class=\"btn btn-social btn-block mt-0 btn-facebook font-small-3\">
                                                    <i class=\"bx bxl-facebook-square font-medium-3\"></i><span class=\"pl-50 d-block text-center\">Facebook</span></a>
                                            </div> -->
                                            <!-- <div class=\"divider\">
                                                <div class=\"divider-text text-uppercase text-muted\"><small>or login with
                                                        email</small>
                                                </div>
                                            </div> -->
                                            <form method=\"post\">
                                                ";
        // line 81
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 81, $this->source); })())) {
            // line 82
            echo "                                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 82, $this->source); })()), "messageKey", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 82, $this->source); })()), "messageData", [], "any", false, false, false, 82), "security"), "html", null, true);
            echo "</div>
                                                ";
        }
        // line 84
        echo "
                                                ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85)) {
            // line 86
            echo "                                                    <div class=\"mb-3\">
                                                        You are logged in as ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "username", [], "any", false, false, false, 87), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                                    </div>
                                                ";
        }
        // line 90
        echo "                                                <div class=\"form-group mb-50\">
                                                    <label class=\"text-bold-600\" for=\"exampleInputEmail1\">Email address</label>
                                                    <input type=\"text\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "\" name=\"user\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email address\"></div>
                                                <div class=\"form-group\">
                                                    <label class=\"text-bold-600\" for=\"exampleInputPassword1\">Password</label>
                                                    <input type=\"password\"  name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                                                </div>
                                                <div class=\"form-group d-flex flex-md-row flex-column justify-content-between align-items-center\">
                                                    <div class=\"text-left\">
                                                        <div class=\"checkbox checkbox-sm\">
                                                            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                                            <label class=\"checkboxsmall\" for=\"exampleCheck1\"><small>Keep me logged
                                                                    in</small></label>
                                                        </div>
                                                    </div>
                                                    <div class=\"text-right\"><a href=\"auth-forgot-password.html\" class=\"card-link\"><small>Forgot Password?</small></a></div>
                                                </div>
                                                <input type=\"hidden\" name=\"_csrf_token\"
                                                       value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                                >
                                                <button type=\"submit\" class=\"btn btn-primary glow w-100 position-relative\">Login<i id=\"icon-arrow\" class=\"bx bx-right-arrow-alt\"></i></button>
                                            </form>
                                            <hr>
                                            <div class=\"text-center\"><small class=\"mr-25\">Don't have an account?</small><a href=\"auth-register.html\"><small>Sign up</small></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- right section image -->
                            <div class=\"col-md-6 d-md-block d-none text-center align-self-center p-3\">
                                <div class=\"card-content\">
                                    <img class=\"img-fluid\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/app-assets/images/pages/login.png"), "html", null, true);
        echo "\" alt=\"branding logo\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login page ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "acceuil/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 121,  309 => 108,  290 => 92,  286 => 90,  278 => 87,  275 => 86,  273 => 85,  270 => 84,  264 => 82,  262 => 81,  221 => 42,  211 => 41,  192 => 13,  171 => 152,  167 => 151,  163 => 150,  159 => 149,  155 => 148,  145 => 141,  141 => 140,  137 => 139,  133 => 138,  128 => 135,  126 => 41,  118 => 36,  112 => 33,  108 => 32,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  74 => 19,  67 => 15,  63 => 14,  59 => 13,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"ltr\">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0\">
    <meta name=\"description\" content=\"Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\" content=\"admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
        <title>{% block title %}Log in!{% endblock %}</title>
    <link rel=\"apple-touch-icon\" href=\"{{asset('frontoffice/app-assets/images/ico/apple-icon-120.png')}})\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('frontoffice/app-assets/images/ico/favicon.ico')}}\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700\" rel=\"stylesheet\">

    <!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffie/app-assets/vendors/css/vendors.min.css') }}\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/app-assets/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/app-assets/css/bootstrap-extended.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/app-assets/css/colors.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/app-assets/css/components.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/app-assets/css/themes/dark-layout.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/app-assets/css/themes/semi-dark-layout.css') }}\">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/app-assets/css/core/menu/menu-types/vertical-menu.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/app-assets/css/pages/authentication.css') }}\">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffice/assets/css/style.css') }}\">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
{% block body %}
<!-- BEGIN: Body-->


<body class=\"vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page\" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"1-column\">

<!-- BEGIN: Content-->
<div class=\"app-content content\">
    <div class=\"content-overlay\"></div>
    <div class=\"content-wrapper\">
        <div class=\"content-header row\">
        </div>
        <div class=\"content-body\">
            <!-- login page start -->
            <section id=\"auth-login\" class=\"row flexbox-container\">
                <div class=\"col-xl-8 col-11\">
                    <div class=\"card bg-authentication mb-0\">
                        <div class=\"row m-0\">
                            <!-- left section-login -->
                            <div class=\"col-md-6 col-12 px-0\">
                                <div class=\"card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center\">
                                    <div class=\"card-header pb-1\">
                                        <div class=\"card-title\">
                                            <h4 class=\"text-center mb-2\">E-Library</h4>
                                        </div>
                                    </div>
                                    <div class=\"card-content\">
                                        <div class=\"card-body\">
                                            <!-- <div class=\"d-flex flex-md-row flex-column justify-content-around\">
                                                <a href=\"#\" class=\"btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1\">
                                                    <i class=\"bx bxl-google font-medium-3\"></i><span class=\"pl-50 d-block text-center\">Google</span></a>
                                                <a href=\"#\" class=\"btn btn-social btn-block mt-0 btn-facebook font-small-3\">
                                                    <i class=\"bx bxl-facebook-square font-medium-3\"></i><span class=\"pl-50 d-block text-center\">Facebook</span></a>
                                            </div> -->
                                            <!-- <div class=\"divider\">
                                                <div class=\"divider-text text-uppercase text-muted\"><small>or login with
                                                        email</small>
                                                </div>
                                            </div> -->
                                            <form method=\"post\">
                                                {% if error %}
                                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                                {% endif %}

                                                {% if app.user %}
                                                    <div class=\"mb-3\">
                                                        You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                                    </div>
                                                {% endif %}
                                                <div class=\"form-group mb-50\">
                                                    <label class=\"text-bold-600\" for=\"exampleInputEmail1\">Email address</label>
                                                    <input type=\"text\" value=\"{{ last_username }}\" name=\"user\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email address\"></div>
                                                <div class=\"form-group\">
                                                    <label class=\"text-bold-600\" for=\"exampleInputPassword1\">Password</label>
                                                    <input type=\"password\"  name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                                                </div>
                                                <div class=\"form-group d-flex flex-md-row flex-column justify-content-between align-items-center\">
                                                    <div class=\"text-left\">
                                                        <div class=\"checkbox checkbox-sm\">
                                                            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                                            <label class=\"checkboxsmall\" for=\"exampleCheck1\"><small>Keep me logged
                                                                    in</small></label>
                                                        </div>
                                                    </div>
                                                    <div class=\"text-right\"><a href=\"auth-forgot-password.html\" class=\"card-link\"><small>Forgot Password?</small></a></div>
                                                </div>
                                                <input type=\"hidden\" name=\"_csrf_token\"
                                                       value=\"{{ csrf_token('authenticate') }}\"
                                                >
                                                <button type=\"submit\" class=\"btn btn-primary glow w-100 position-relative\">Login<i id=\"icon-arrow\" class=\"bx bx-right-arrow-alt\"></i></button>
                                            </form>
                                            <hr>
                                            <div class=\"text-center\"><small class=\"mr-25\">Don't have an account?</small><a href=\"auth-register.html\"><small>Sign up</small></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- right section image -->
                            <div class=\"col-md-6 d-md-block d-none text-center align-self-center p-3\">
                                <div class=\"card-content\">
                                    <img class=\"img-fluid\" src=\"{{ asset('frontoffice/app-assets/images/pages/login.png') }}\" alt=\"branding logo\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login page ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
{% endblock %}


<!-- BEGIN: Vendor JS-->
<script src=\"{{ asset('frontoffice/app-assets/vendors/js/vendors.min.js') }}\"></script>
<script src=\"{{ asset('frontoffice/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}\"></script>
<script src=\"{{ asset('frontoffice/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}\"></script>
<script src=\"{{ asset('frontoffice/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}\"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=\"{{ asset('frontoffice/app-assets/js/scripts/configs/vertical-menu-light.js') }}\"></script>
<script src=\"{{ asset('frontoffice/app-assets/js/core/app-menu.js') }}\"></script>
<script src=\"{{ asset('frontoffice/app-assets/js/core/app.js') }}\"></script>
<script src=\"{{ asset('frontoffice/app-assets/js/scripts/components.js') }}\"></script>
<script src=\"{{ asset('frontoffice/app-assets/js/scripts/footer.js') }}\"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
", "acceuil/login.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\acceuil\\login.html.twig");
    }
}
