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

/* security/login.html.twig */
class __TwigTemplate_3b579ed90ec1f15f245c26dc69147f3338a88f69f7996266ba1c5b423cf0431e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
    
    <link rel=\"apple-touch-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/images/ico/apple-icon-120.png"), "html", null, true);
        echo ")\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/images/ico/favicon.ico"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/bootstrap-extended.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/colors.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/components.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/themes/layout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/themes/layout.css"), "html", null, true);
        echo "\">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/core/menu/menu-types/vertical-menu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/pages/authentication.css"), "html", null, true);
        echo "\">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "

<!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/js/vendors.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"), "html", null, true);
        echo "\"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/configs/vertical-menu-light.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/core/app-menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/core/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/components.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/footer.js"), "html", null, true);
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
                                            <form method=\"post\" >
                                                <div class=\"form-group mb-50\">
                                                    <label class=\"text-bold-600\" for=\"exampleInputEmail1\">Email address</label>
                                                    <input type=\"text\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 82, $this->source); })()), "html", null, true);
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                                >
                                                <button type=\"submit\" class=\"btn btn-primary glow w-100 position-relative\">Login<i id=\"icon-arrow\" class=\"bx bx-right-arrow-alt\"></i></button>
                                            </form>
                                            <hr>
                                            <div class=\"text-center\"><small class=\"mr-25\">Don't have an account?</small><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app_register"), "html", null, true);
        echo "\"><small>Sign up</small></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- right section image -->
                            <div class=\"col-md-6 d-md-block d-none text-center align-self-center p-3\">
                                <div class=\"card-content\">
                                    <img class=\"img-fluid\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/images/pages/login.png"), "html", null, true);
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 111,  267 => 103,  259 => 98,  240 => 82,  198 => 42,  188 => 41,  167 => 142,  163 => 141,  159 => 140,  155 => 139,  151 => 138,  141 => 131,  137 => 130,  133 => 129,  129 => 128,  124 => 125,  122 => 41,  114 => 36,  108 => 33,  104 => 32,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  70 => 19,  63 => 15,  59 => 14,  44 => 1,);
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
    
    <link rel=\"apple-touch-icon\" href=\"{{asset('/app-assets/images/ico/apple-icon-120.png')}})\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('/app-assets/images/ico/favicon.ico')}}\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700\" rel=\"stylesheet\">

    <!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontoffie/app-assets/vendors/css/vendors.min.css') }}\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/bootstrap-extended.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/colors.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/components.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/themes/layout.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/themes/layout.css') }}\">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/core/menu/menu-types/vertical-menu.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/pages/authentication.css') }}\">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/style.css') }}\">
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
                                            <form method=\"post\" >
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
                                            <div class=\"text-center\"><small class=\"mr-25\">Don't have an account?</small><a href=\"{{asset('app_register')}}\"><small>Sign up</small></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- right section image -->
                            <div class=\"col-md-6 d-md-block d-none text-center align-self-center p-3\">
                                <div class=\"card-content\">
                                    <img class=\"img-fluid\" src=\"{{asset('/app-assets/images/pages/login.png')}}\" alt=\"branding logo\">
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
<script src=\"{{ asset('/app-assets/vendors/js/vendors.min.js') }}\"></script>
<script src=\"{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}\"></script>
<script src=\"{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}\"></script>
<script src=\"{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}\"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=\"{{ asset('/app-assets/js/scripts/configs/vertical-menu-light.js') }}\"></script>
<script src=\"{{ asset('/app-assets/js/core/app-menu.js') }}\"></script>
<script src=\"{{ asset('/app-assets/js/core/app.js') }}\"></script>
<script src=\"{{ asset('/app-assets/js/scripts/components.js') }}\"></script>
<script src=\"{{ asset('/app-assets/js/scripts/footer.js') }}\"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
", "security/login.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\security\\login.html.twig");
    }
}
