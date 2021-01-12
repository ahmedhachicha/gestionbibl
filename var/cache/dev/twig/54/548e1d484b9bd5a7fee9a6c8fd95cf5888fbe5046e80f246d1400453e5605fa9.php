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

/* registration/register.html.twig */
class __TwigTemplate_09f042dac36e4796aac4a5621941cc55f1cba5d980d8230745575493913db99e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"rtl\">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0\">
    <meta name=\"description\" content=\"Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\" content=\"admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
    <title>Register</title>
    <link rel=\"apple-touch-icon\" href=\"../../../app-assets/images/ico/apple-icon-120.png\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../../../app-assets/images/ico/favicon.ico\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700\" rel=\"stylesheet\">

    <!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/vendors-rtl.min.css\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
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

<!-- BEGIN: Body-->

<body class=\"vertical-layout vertical-menu-modern layout 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page\" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"1-column\" data-layout=\"dark-layout\">
    <!-- BEGIN: Content-->
    <div class=\"app-content content\">
        <div class=\"content-overlay\"></div>
        <div class=\"content-wrapper\">
            <div class=\"content-header row\">
            </div>
            <div class=\"content-body\">
                <!-- register section starts -->
                <section class=\"row flexbox-container\">
                    <div class=\"col-xl-8 col-10\">
                        <div class=\"card bg-authentication mb-0\">
                            <div class=\"row m-0\">
                                <!-- register section left -->
                                <div class=\"col-md-6 col-12 px-0\">
                                    <div class=\"card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center\">
                                        <div class=\"card-header pb-1\">
                                            <div class=\"card-title\">
                                                <h4 class=\"text-center mb-2\">Sign Up</h4>
                                            </div>
                                        </div>
                                        <div class=\"text-center\">
                                            <p> <small> Please enter your details to sign up and be part of our great community</small>
                                            </p>
                                        </div>
                                        <div class=\"card-content\">
                                            <div class=\"card-body\">
                                               ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "                                                <hr>
                                                <div class=\"text-center\"><small class=\"mr-25\">Already have an account?</small><a href=\"auth-login.html\"><small>Sign in</small> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- image section right -->
                                <div class=\"col-md-6 d-md-block d-none text-center align-self-center p-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/images/pages/register.png"), "html", null, true);
        echo "\" alt=\"branding logo\">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- register section endss -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/js/vendors.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"), "html", null, true);
        echo "\"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/configs/vertical-menu-light.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/core/app-menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/core/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/components.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/footer.js"), "html", null, true);
        echo "\"></script>
<!-- END: Theme JS-->


    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 72
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
  

    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), 'form_start');
        echo "
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), 'row');
        echo "
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "plainPassword", [], "any", false, false, false, 79), 'row', ["label" => "Password"]);
        // line 81
        echo "
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "agreeTerms", [], "any", false, false, false, 82), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-primary\">Register</button>
    ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 85,  272 => 82,  269 => 81,  267 => 79,  263 => 78,  259 => 77,  254 => 74,  245 => 72,  240 => 71,  230 => 70,  209 => 123,  205 => 122,  201 => 121,  197 => 120,  193 => 119,  183 => 112,  179 => 111,  175 => 110,  171 => 109,  154 => 95,  144 => 87,  142 => 70,  105 => 36,  99 => 33,  95 => 32,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"rtl\">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0\">
    <meta name=\"description\" content=\"Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\" content=\"admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
    <title>Register</title>
    <link rel=\"apple-touch-icon\" href=\"../../../app-assets/images/ico/apple-icon-120.png\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../../../app-assets/images/ico/favicon.ico\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700\" rel=\"stylesheet\">

    <!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/vendors-rtl.min.css\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
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

<!-- BEGIN: Body-->

<body class=\"vertical-layout vertical-menu-modern layout 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page\" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"1-column\" data-layout=\"dark-layout\">
    <!-- BEGIN: Content-->
    <div class=\"app-content content\">
        <div class=\"content-overlay\"></div>
        <div class=\"content-wrapper\">
            <div class=\"content-header row\">
            </div>
            <div class=\"content-body\">
                <!-- register section starts -->
                <section class=\"row flexbox-container\">
                    <div class=\"col-xl-8 col-10\">
                        <div class=\"card bg-authentication mb-0\">
                            <div class=\"row m-0\">
                                <!-- register section left -->
                                <div class=\"col-md-6 col-12 px-0\">
                                    <div class=\"card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center\">
                                        <div class=\"card-header pb-1\">
                                            <div class=\"card-title\">
                                                <h4 class=\"text-center mb-2\">Sign Up</h4>
                                            </div>
                                        </div>
                                        <div class=\"text-center\">
                                            <p> <small> Please enter your details to sign up and be part of our great community</small>
                                            </p>
                                        </div>
                                        <div class=\"card-content\">
                                            <div class=\"card-body\">
                                               {% block body %}
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

  

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.user) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
        {{ form_row(registrationForm.agreeTerms) }}

        <button type=\"submit\" class=\"btn btn-primary\">Register</button>
    {{ form_end(registrationForm) }}
{% endblock %}
                                                <hr>
                                                <div class=\"text-center\"><small class=\"mr-25\">Already have an account?</small><a href=\"auth-login.html\"><small>Sign in</small> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- image section right -->
                                <div class=\"col-md-6 d-md-block d-none text-center align-self-center p-3\">
                                    <img class=\"img-fluid\" src=\"{{asset('/app-assets/images/pages/register.png')}}\" alt=\"branding logo\">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- register section endss -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


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

</html>", "registration/register.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\registration\\register.html.twig");
    }
}
