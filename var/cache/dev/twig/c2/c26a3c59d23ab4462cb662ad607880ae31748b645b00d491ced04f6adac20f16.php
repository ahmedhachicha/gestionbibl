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

/* user/user.html.twig */
class __TwigTemplate_f98e8b715d7b46063a39c9c2d6b220ee8c1ee3bbd1b01dfd4fd24688a6d77c70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"rtl\">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0\">
    <meta name=\"description\" content=\"Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\" content=\"admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
    <title> welcome </title>
    <link rel=\"apple-touch-icon\" href=\"/app-assets/images/ico/apple-icon-120.png\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/images/ico/cmc-04_1.ico"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700\" rel=\"stylesheet\">

    <!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/vendors.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/tables/datatable/datatables.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/animate/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/vendors.min.css"), "html", null, true);
        echo "\"> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/ui/prism.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/extensions/toastr.css"), "html", null, true);
        echo "\">    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/extensions/sweetalert2.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/css/extensions/swiper.min.css"), "html", null, true);
        echo "\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
   <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/bootstrap-extended.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/colors.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/components.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/themes/dark-layout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/themes/semi-dark-layout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/custom.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/plugins/extensions/swiper.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/pages/faq.css"), "html", null, true);
        echo "\">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/core/menu/menu-types/vertical-menu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/css/pages/authentication.css"), "html", null, true);
        echo "\">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">
    <!-- END: Custom CSS-->

    <style>
        .dropzone {
        min-height: 200px !important;
        }   
        .dropzone .dz-message{
            zoom: 0.6;
        }
        #toast-container > div.toast-error {
            background-image: none !important;
        }
        #toast-container > div.toast-error {
            background-image: none !important;
        }
        h1,h2,h3,h4,h5,h6{
            font-family: \"Effra\" !important;
        }
        th{
            font-size: 1em !important;
        }
        .form-control::placeholder{
            font-family: \"Effra\"!important;
        }
        
        .table-responsive{
overflow-y:visible;
overflow-x:visible;
}
        
    </style>
    <link href=\"//db.onlinewebfonts.com/c/f41eeef7f001b066c10e8597ddf6eca2?family=Effra\" rel=\"stylesheet\" type=\"text/css\"/>
    <style>
        @import url(//db.onlinewebfonts.com/c/f41eeef7f001b066c10e8597ddf6eca2?family=Effra);
        @font-face {font-family: \"Effra\";
         src: url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.eot\");
          src: url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.eot?#iefix\") format(\"embedded-opentype\"),
           url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.woff2\") format(\"woff2\"), 
           url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.woff\") format(\"woff\"),
            url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.ttf\") format(\"truetype\"),
             url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.svg#Effra\") format(\"svg\"); }
             *{
                 font-family: \"Effra\" ;
             }
             table{
                font-family: \"Effra\";
             }
             .table td, .table th {
                font-family: \"Effra\";
            }
            .chip,.chip-body{
                background-color: #2e3d63 !important;
            }
            .bullet {
    width: 26px;
    height: 26px;}
    .badge {
        font-family: \"Effra\" !important;
    }
            
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class=\"vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"2-columns\" data-layout=\"dark-layout\">

    <!-- BEGIN: Header-->
    <div class=\"header-navbar-shadow\"></div>
    <nav class=\"header-navbar navbar-expand-lg navbar navbar-with-menu navbar-demo\">
        <div class=\"navbar-wrapper\">
            <div class=\"navbar-container content\">
                <div class=\"navbar-collapse\" id=\"navbar-mobile\">
                    <div class=\"mr-auto float-left bookmark-wrapper d-flex align-items-center\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item mobile-menu d-xl-none mr-auto\"><a class=\"nav-link nav-menu-main menu-toggle hidden-xs\" href=\"#\"><i class=\"ficon bx bx-menu\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav bookmark-icons\">
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-email.html\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"البريد الإلكتروني\"><i class=\"ficon bx bx-envelope\"></i></a></li>
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-chat.html\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"المحادثات\"><i class=\"ficon bx bx-chat\"></i></a></li>
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-todo.html\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"المفكرة\"><i class=\"ficon bx bx-check-circle\"></i></a></li>
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-calendar.html\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"التقويم\"><i class=\"ficon bx bx-calendar-alt\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link bookmark-star\"><i class=\"ficon bx bx-star warning\"></i></a>
                                <div class=\"bookmark-input search-input\">
                                    <div class=\"bookmark-input-icon\"><i class=\"bx bx-search primary\"></i></div>
                                    <input class=\"form-control input\" type=\"text\" placeholder=\"بحث...\" tabindex=\"0\" data-search=\"template-search\">
                                    <ul class=\"search-list\"></ul>
                                </div>
                            </li>
                        </ul>
                    </div>
 

                        </li>
                        <!--notifications end-->
                        <!--user dropdown begin-->
                               
                    <div class=\"col-md-3>
                                <a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><button class=\"btn btn-primary\">login</button> </a>

                    </div>
                    <div class=\"col-md-1\"></div>
                                 
                                <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><button class=\"btn btn-primary\">register</button> </a>


                        <!--user dropdown end-->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->
    <!-- BEGIN: Content-->
    <br>
    <div id=\"j\" class=\"row books\">
           ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 168, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            echo "           
                <div class=\"col-md-3 book\">
                    <div class=\"card text-center \">
                        <div  class=\"card-content\">
                            <div  class=\"card-body\">
                                ";
            // line 175
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["livre"], "previewName", [], "any", false, false, false, 175))), "html", null, true);
            echo "\"/>
                                </div>
                                <div class=\"book-text\"  >
                                <p  class=\"text-muted mb-0 line-ellipsis\">Titre:";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 178), "html", null, true);
            echo "</p>
                                <p class=\"text-muted mb-0 line-ellipsis\">category:";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "categorie", [], "any", false, false, false, 179), "html", null, true);
            echo "</p>
                                <p  class=\"text-muted mb-0 line-ellipsis\">Prix:";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "prix", [], "any", false, false, false, 180), "html", null, true);
            echo "</p>
                                </div>
                               
                            
                        </div>
                    </div>
                </div>  
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 188
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "    
    <!-- END: Content-->
       <!-- BEGIN: Customizer-->
    <div class=\"customizer d-none d-md-block\"><a class=\"customizer-close\" href=\"#\"><i class=\"bx bx-x\"></i></a><a class=\"customizer-toggle\" href=\"#\"><i class=\"bx bx-cog bx bx-spin white\"></i></a><div class=\"customizer-content p-2\">
        <h4 class=\"text-uppercase mb-0\">Theme Customizer</h4>
        <small>Customize & Preview in Real Time</small>
        <hr>
        <!-- Theme options starts -->
        <h5 class=\"mt-1\">Theme Layout</h5>
        <div class=\"theme-layouts\">
          <div class=\"d-flex justify-content-start\">
            <div class=\"mx-50\">
              <fieldset>
                <div class=\"radio\">
                  <input type=\"radio\" name=\"layoutOptions\" value=\"false\" id=\"radio-light\" class=\"layout-name\" data-layout=\"\"
                    checked>
                  <label for=\"radio-light\">Light</label>
                </div>
              </fieldset>
            </div>
            <div class=\"mx-50\">
              <fieldset>
                <div class=\"radio\">
                  <input type=\"radio\" name=\"layoutOptions\" value=\"false\" id=\"radio-dark\" class=\"layout-name\"
                    data-layout=\"dark-layout\">
                  <label for=\"radio-dark\">Dark</label>
                </div>
              </fieldset>
            </div>
            <div class=\"mx-50\">
              <fieldset>
                <div class=\"radio\">
                  <input type=\"radio\" name=\"layoutOptions\" value=\"false\" id=\"radio-semi-dark\" class=\"layout-name\"
                    data-layout=\"semi-dark-layout\">
                  <label for=\"radio-semi-dark\">Semi Dark</label>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
        <!-- Theme options starts -->
        <hr>
      
        <!-- Menu Colors Starts -->
        <div id=\"customizer-theme-colors\">
          <h5>Menu Colors</h5>
          <ul class=\"list-inline unstyled-list\">
            <li class=\"color-box bg-primary selected\" data-color=\"theme-primary\"></li>
            <li class=\"color-box bg-success\" data-color=\"theme-success\"></li>
            <li class=\"color-box bg-danger\" data-color=\"theme-danger\"></li>
            <li class=\"color-box bg-info\" data-color=\"theme-info\"></li>
            <li class=\"color-box bg-warning\" data-color=\"theme-warning\"></li>
            <li class=\"color-box bg-dark\" data-color=\"theme-dark\"></li>
          </ul>
          <hr>
        </div>
        <!-- Menu Colors Ends -->
        <!-- Menu Icon Animation Starts -->
        <div id=\"menu-icon-animation\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"icon-animation-title\">
              <h5 class=\"pt-25\">Icon Animation</h5>
            </div>
            <div class=\"icon-animation-switch\">
              <div class=\"custom-control custom-switch\">
                <input type=\"checkbox\" class=\"custom-control-input\" checked id=\"icon-animation-switch\">
                <label class=\"custom-control-label\" for=\"icon-animation-switch\"></label>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <!-- Menu Icon Animation Ends -->
        <!-- Collapse sidebar switch starts -->
        <div class=\"collapse-sidebar d-flex justify-content-between align-items-center\">
          <div class=\"collapse-option-title\">
            <h5 class=\"pt-25\">Collapse Menu</h5>
          </div>
          <div class=\"collapse-option-switch\">
            <div class=\"custom-control custom-switch\">
              <input type=\"checkbox\" class=\"custom-control-input\" id=\"collapse-sidebar-switch\">
              <label class=\"custom-control-label\" for=\"collapse-sidebar-switch\"></label>
            </div>
          </div>
        </div>
        <!-- Collapse sidebar switch Ends -->
        <hr>
      
        <!-- Navbar colors starts -->
        <div id=\"customizer-navbar-colors\">
          <h5>Navbar Colors</h5>
          <ul class=\"list-inline unstyled-list\">
            <li class=\"color-box bg-white border selected\" data-navbar-default=\"\"></li>
            <li class=\"color-box bg-primary\" data-navbar-color=\"bg-primary\"></li>
            <li class=\"color-box bg-success\" data-navbar-color=\"bg-success\"></li>
            <li class=\"color-box bg-danger\" data-navbar-color=\"bg-danger\"></li>
            <li class=\"color-box bg-info\" data-navbar-color=\"bg-info\"></li>
            <li class=\"color-box bg-warning\" data-navbar-color=\"bg-warning\"></li>
            <li class=\"color-box bg-dark\" data-navbar-color=\"bg-dark\"></li>
          </ul>
          <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
          <hr>
        </div>
        <!-- Navbar colors starts -->
        <!-- Navbar Type Starts -->
        <h5>Navbar Type</h5>
        <div class=\"navbar-type d-flex justify-content-start\">
          <div class=\"hidden-ele mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"navbarType\" value=\"false\" id=\"navbar-hidden\">
                <label for=\"navbar-hidden\">Hidden</label>
              </div>
            </fieldset>
          </div>
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"navbarType\" value=\"false\" id=\"navbar-static\">
                <label for=\"navbar-static\">Static</label>
              </div>
            </fieldset>
          </div>
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"navbarType\" value=\"false\" id=\"navbar-sticky\" checked>
                <label for=\"navbar-sticky\">Fixed</label>
              </div>
            </fieldset>
          </div>
        </div>
        <hr>
        <!-- Navbar Type Starts -->
      
        <!-- Footer Type Starts -->
        <h5>Footer Type</h5>
        <div class=\"footer-type d-flex justify-content-start\">
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"footerType\" value=\"false\" id=\"footer-hidden\">
                <label for=\"footer-hidden\">Hidden</label>
              </div>
            </fieldset>
          </div>
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"footerType\" value=\"false\" id=\"footer-static\" checked>
                <label for=\"footer-static\">Static</label>
              </div>
            </fieldset>
          </div>
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"footerType\" value=\"false\" id=\"footer-sticky\">
                <label for=\"footer-sticky\" class=\"\">Sticky</label>
              </div>
            </fieldset>
          </div>
        </div>
        <!-- Footer Type Ends -->
        <hr>
      
        <!-- Card Shadow Starts-->
        <div class=\"card-shadow d-flex justify-content-between align-items-center py-25\">
          <div class=\"hide-scroll-title\">
            <h5 class=\"pt-25\">Card Shadow</h5>
          </div>
          <div class=\"card-shadow-switch\">
            <div class=\"custom-control custom-switch\">
              <input type=\"checkbox\" class=\"custom-control-input\" checked id=\"card-shadow-switch\">
              <label class=\"custom-control-label\" for=\"card-shadow-switch\"></label>
            </div>
          </div>
        </div>
        <!-- Card Shadow Ends-->
        <hr>
      
        <!-- Hide Scroll To Top Starts-->
        <div class=\"hide-scroll-to-top d-flex justify-content-between align-items-center py-25\">
          <div class=\"hide-scroll-title\">
            <h5 class=\"pt-25\">Hide Scroll To Top</h5>
          </div>
          <div class=\"hide-scroll-top-switch\">
            <div class=\"custom-control custom-switch\">
              <input type=\"checkbox\" class=\"custom-control-input\" id=\"hide-scroll-top-switch\">
              <label class=\"custom-control-label\" for=\"hide-scroll-top-switch\"></label>
            </div>
          </div>
        </div>
        <!-- Hide Scroll To Top Ends-->
      </div>
          </div>
          <!-- End: Customizer-->
    

    </div>
    <div class=\"sidenav-overlay\"></div>
    <div class=\"drag-target\"></div>
    
    <!-- demo chat-->
    <div class=\"widget-chat-demo\">
        <!-- widget chat demo footer button start -->
        <button class=\"btn btn-primary chat-demo-button glow px-1\"><i class=\"livicon-evo\" data-options=\"name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;\"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class=\"widget-chat widget-chat-demo d-none\">
            <div class=\"card mb-0\">
                <div class=\"card-header border-bottom p-0\">
                    <div class=\"media m-75\">
                        <a href=\"JavaScript:void(0);\">
                            <div class=\"avatar mr-75\">
                                <img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/images/portrait/small/avatar-s-2.jpg"), "html", null, true);
        echo "\" alt=\"avtar images\" width=\"32\" height=\"32\">
                                <span class=\"avatar-status-online\"></span>
                            </div>
                        </a>
                        <div class=\"media-body\">
                            <h6 class=\"media-heading mb-0 pt-25\"><a href=\"javaScript:void(0);\">Kiara Cruiser</a></h6>
                            <span class=\"text-muted font-small-3\">Active</span>
                        </div>
                        <i class=\"bx bx-x widget-chat-close float-right my-auto cursor-pointer\"></i>
                    </div>
                </div>
                <div class=\"card-body widget-chat-container widget-chat-demo-scroll\">
                    <div class=\"chat-content\">
                        <div class=\"badge badge-pill badge-light-secondary my-1\">today</div>
                        <div class=\"chat\">
                            <div class=\"chat-body\">
                                <div class=\"chat-message\">
                                    <p>How can we help? 😄</p>
                                    <span class=\"chat-time\">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat chat-left\">
                            <div class=\"chat-body\">
                                <div class=\"chat-message\">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class=\"chat-time\">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat\">
                            <div class=\"chat-body\">
                                <div class=\"chat-message\">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class=\"chat-time\">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer border-top p-1\">
                    <form class=\"d-flex\" onsubmit=\"widgetChatMessageDemo();\" action=\"javascript:void(0);\">
                        <input type=\"text\" class=\"form-control chat-message-demo mr-75\" placeholder=\"Type here...\">
                        <button type=\"submit\" class=\"btn btn-primary glow px-1\"><i class=\"bx bx-paper-plane\"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->
    <!-- BEGIN: Footer-->
    <footer class=\"footer footer-static footer-dark\">
        <p class=\"clearfix mb-0\"><span class=\"float-left d-inline-block\">2020 &copy; copyright ...</span>
            <button class=\"btn btn-primary btn-icon scroll-top\" type=\"button\"><i class=\"bx bx-up-arrow-alt\"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

<!-- modal FAQ-->
<div class=\"modal fade\" id=\"faq\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel20\" aria-hidden=\"true\" > 
    <div class=\"modal-dialog modal-full\" role=\"document\">
        <div class=\"modal-content \">
            <div class=\"modal-body\">
                    <!-- faq search start -->
            <section class=\"faq-search\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card faq-bg bg-transparent box-shadow-0 p-1 p-md-5\">
                            <div class=\"card-content\">
                                <div class=\"card-body p-0\">
                                    <h1 class=\"faq-title text-center mb-3\">مرحبا كيف يمكننا المساعدة؟</h1>
                                    <form>
                                        <fieldset class=\"faq-search-width form-group position-relative w-50 mx-auto\">
                                            <input type=\"text\" class=\"form-control round form-control-lg shadow pl-2\" id=\"searchbar\" placeholder=\"اطرح سؤال...\">
                                            <button class=\"btn btn-primary round position-absolute d-none d-sm-block\" type=\"button\">بحث</button>
                                            <button class=\"btn btn-primary round position-absolute d-block d-sm-none\" type=\"button\"><i class=\"bx bx-search\"></i></button>
                                        </fieldset>
                                    </form>
                                    <p class=\"card-text text-center mt-3 font-medium-1 text-muted\">
                                        أو اختر فئة للعثور بسرعة على المساعدة التي تحتاجها</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq search ends -->

            <!-- faq start -->
            <section class=\"faq\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <!-- swiper start -->
                        <div class=\"card bg-transparent shadow-none\">
                            <div class=\"card-content\">
                                <div class=\"card-body\">
                                    <div class=\"swiper-centered-slides swiper-container p-1\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"getting-text\"> <i class=\"bx bx-flag mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">Getting Started</div>
                                            </div>
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"pricing-text\"> <i class=\"bx bx-dollar-circle mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">التسعيرات و الخطط</div>
                                            </div>
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"sales-text\"> <i class=\"bx bx-shopping-bag mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">سؤال المبيعات</div>
                                            </div>
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"usage-text\"> <i class=\"bx bx-book-open mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">أدلة الاستخدام</div>
                                            </div>
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"general-text\"> <i class=\"bx bx-info-circle mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">المرشد العام</div>
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                    </div>
                                    <div class=\"main-wrapper-content\">
                                        <div class=\"wrapper-content\" data-faq=\"getting-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">Getting Started</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper1\" class=\"collapse-icon accordion-icon-rotate\">
                                                <div class=\"accordion\" id=\"accordionWrapar2\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading5\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion5\" aria-expanded=\"false\" aria-controls=\"accordion5\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Purchasing process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion5\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading5\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading6\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion66\" aria-expanded=\"false\" aria-controls=\"accordion66\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure are your payment?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion66\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading6\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading17\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion71\" aria-expanded=\"false\" aria-controls=\"accordion71\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to apply for a prepaid card?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion71\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading17\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.
                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading81\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion801\" aria-expanded=\"false\" aria-controls=\"accordion801\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is my data in App?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion801\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading81\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.
                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading91\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion125\" aria-expanded=\"false\" aria-controls=\"accordion125\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do I know latest version?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion125\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading91\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading103\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion142\" aria-expanded=\"false\" aria-controls=\"accordion142\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download documentation
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion142\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading103\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading113\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion91\" aria-expanded=\"false\" aria-controls=\"accordion91\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure my personal info?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion91\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading113\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class=\"wrapper-content\" data-faq=\"pricing-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">التسعيرات و الخطط</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper2\" class=\"collapse-icon accordion-icon-rotate\">

                                                <div class=\"accordion\" id=\"accordionWrapar3\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading27\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion16\" aria-expanded=\"false\" aria-controls=\"accordion16\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                What are your Purchasing process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion16\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading27\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading82\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion26\" aria-expanded=\"false\" aria-controls=\"accordion26\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How rarely our information gets?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion26\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading82\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading37\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion72\" aria-expanded=\"false\" aria-controls=\"accordion72\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to apply for a unknown card?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion72\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading37\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading83\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion802\" aria-expanded=\"false\" aria-controls=\"accordion802\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is data and info in App?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion802\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading83\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading92\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion121\" aria-expanded=\"false\" aria-controls=\"accordion121\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do I know about midest version?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion121\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading92\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading104\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion143\" aria-expanded=\"false\" aria-controls=\"accordion143\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download offline documentation works?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion143\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading104\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading114\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion92\" aria-expanded=\"false\" aria-controls=\"accordion92\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Secure my personal data?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion92\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading114\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class=\"wrapper-content\" data-faq=\"sales-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">سؤال المبيعات</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper3\" class=\"collapse-icon accordion-icon-rotate\">

                                                <div class=\"accordion\" id=\"accordionWrapar4\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading47\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion73\" aria-expanded=\"false\" aria-controls=\"accordion73\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Detailed sales process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion73\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading47\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading93\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion36\" aria-expanded=\"false\" aria-controls=\"accordion36\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                What you sales ?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion36\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading93\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading57\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion74\" aria-expanded=\"false\" aria-controls=\"accordion74\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to apply for a sales card?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion74\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading57\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading84\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion803\" aria-expanded=\"false\" aria-controls=\"accordion803\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is my data in sales App?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion803\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading84\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading94\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion122\" aria-expanded=\"false\" aria-controls=\"accordion122\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do I know sales?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion122\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading94\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading105\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion144\" aria-expanded=\"false\" aria-controls=\"accordion144\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion144\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading105\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading115\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion93\" aria-expanded=\"false\" aria-controls=\"accordion93\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure my sales information?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion93\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading115\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class=\"wrapper-content\" data-faq=\"usage-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">أدلة الاستخدام</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor? Lorem1 </p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper4\" class=\"collapse-icon accordion-icon-rotate\">
                                                <div class=\"accordion\" id=\"accordionWrapar5\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading85\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion804\" aria-expanded=\"false\" aria-controls=\"accordion804\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Purchasing user process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion804\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading85\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading106\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion46\" aria-expanded=\"false\" aria-controls=\"accordion46\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure are and legal rights?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion46\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading106\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading67\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion75\" aria-expanded=\"false\" aria-controls=\"accordion75\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to write for a postpaid card?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion75\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading67\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading86\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion805\" aria-expanded=\"false\" aria-controls=\"accordion805\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How refresh is my info in App?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion805\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading86\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading95\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion123\" aria-expanded=\"false\" aria-controls=\"accordion123\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do write about about latest ?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion123\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading95\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading101\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion145\" aria-expanded=\"false\" aria-controls=\"accordion145\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion145\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading101\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading116\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion94\" aria-expanded=\"false\" aria-controls=\"accordion94\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is your personal information?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion94\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading116\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class=\"wrapper-content\" data-faq=\"general-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">المرشد العام</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper5\" class=\"collapse-icon accordion-icon-rotate\">
                                                <div class=\"accordion\" id=\"accordionWrapar6\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading96\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion95\" aria-expanded=\"false\" aria-controls=\"accordion95\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                I wanna write process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion95\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading96\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading111\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion56\" aria-expanded=\"false\" aria-controls=\"accordion56\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How untoched your gateway information?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion56\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading111\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading77\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion76\" aria-expanded=\"false\" aria-controls=\"accordion76\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to apply for a details?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion76\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading77\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading87\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion800\" aria-expanded=\"false\" aria-controls=\"accordion800\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is opensource ?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion800\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading87\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading97\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion124\" aria-expanded=\"false\" aria-controls=\"accordion124\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do I know about oldest version?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion124\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading97\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading102\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion141\" aria-expanded=\"false\" aria-controls=\"accordion141\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion141\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading102\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading112\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion96\" aria-expanded=\"false\" aria-controls=\"accordion96\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure personal data ?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion96\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading112\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper ends -->
                    </div>
                </div>
            </section>
            <!-- faq ends -->

            <!-- fab bottom start -->
            <section class=\"faq-bottom\">
                <div class=\"row mb-2\">
                    <div class=\"col-12 text-center\">
                        <h2 class=\"faq-subtitle\">لا يزال لديك سؤال؟</h2>
                        <p class=\"p-2 text-muted font-medium-1\">إذا لم تتمكن من العثور على سؤال في الأسئلة الشائعة ، يمكنك دائمًا الاتصال بنا. نحن سيجيب لك قريبا!</p>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center mb-5\">
                    <div class=\"col-sm-12 col-md-4 text-center border rounded p-2 mr-md-2 m-1\">
                        <i class=\"bx bx-phone-call primary font-large-1 text-muted p-50\"></i>
                        <h5>+ (810) 2548 2568</h5>
                        <p class=\"text-muted font-medium-1\"> يسعدنا دائمًا تقديم المساعدة!</p>
                    </div>
                    <div class=\"col-sm-12 col-md-4 text-center border color-gray-faq rounded p-2 m-1\">
                        <i class=\"bx bx-mail-send primary font-large-1 p-50\"></i>
                        <h5><a href=\"mailto:hello@help.com\">hello@help.com</a></h5>
                        <p class=\"text-muted font-medium-1\">Best way to get answer faster!</p>
                    </div>
                </div>
            </section>
            <!-- fab bottom ends -->
            </div>
            
        </div>
    </div>
</div>
<!-- end modal FAQ -->
               
    <!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 1344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/vendors/js/vendors.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"), "html", null, true);
        echo "\"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src=\"";
        // line 1354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/configs/vertical-menu-light.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/core/app-menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/core/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/components.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/footer.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 1359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/app-assets/js/scripts/customizer.min.js"), "html", null, true);
        echo "\"></script>
<!-- END: Theme JS-->


       <!-- BEGIN: Page JS-->
       <script src=\"/app-assets/js/scripts/pages/faq.js\"></script>
       <!-- END: Page JS-->
    <script>
        \$(\"#radio-light\").click(function(){
            \$(\".chip\").attr(\"style\",\"background-color:#f0f0f0 !important\");
            \$(\".chip-body\").attr(\"style\",\"background-color:#f0f0f0 !important\");
            \$(\".tolight\").attr(\"style\",\"background-color:#f2f4f4 !important\");
        })

        \$(\"#radio-dark\").click(function(){
            \$(\".chip\").attr(\"style\",\"background-color: #2e3d63 !important\");
            \$(\".chip-body\").attr(\"style\",\"background-color: #2e3d63 !important\");
            \$(\".tolight\").attr(\"style\",\"background-color:#1a233a !important\");
        })
    </script>

    

</body>
<!-- END: Body-->

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1535 => 1359,  1531 => 1358,  1527 => 1357,  1523 => 1356,  1519 => 1355,  1515 => 1354,  1505 => 1347,  1501 => 1346,  1497 => 1345,  1493 => 1344,  552 => 406,  335 => 191,  326 => 188,  313 => 180,  309 => 179,  305 => 178,  298 => 175,  287 => 168,  271 => 155,  263 => 150,  158 => 48,  152 => 45,  148 => 44,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"rtl\">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0\">
    <meta name=\"description\" content=\"Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.\">
    <meta name=\"keywords\" content=\"admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app\">
    <meta name=\"author\" content=\"PIXINVENT\">
    <title> welcome </title>
    <link rel=\"apple-touch-icon\" href=\"/app-assets/images/ico/apple-icon-120.png\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('/app-assets/images/ico/cmc-04_1.ico') }}\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700\" rel=\"stylesheet\">

    <!-- BEGIN: Vendor CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/vendors.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/animate/animate.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/vendors.min.css')}}\"> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/ui/prism.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/extensions/toastr.css')}}\">    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/extensions/sweetalert2.min.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/vendors/css/extensions/swiper.min.css')}}\">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
   <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/bootstrap-extended.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/colors.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/components.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/themes/dark-layout.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/themes/semi-dark-layout.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/css/custom.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/css/plugins/extensions/swiper.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/app-assets/css/pages/faq.css')}}\">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/core/menu/menu-types/vertical-menu.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/app-assets/css/pages/authentication.css') }}\">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/assets/css/style.css') }}\">
    <!-- END: Custom CSS-->

    <style>
        .dropzone {
        min-height: 200px !important;
        }   
        .dropzone .dz-message{
            zoom: 0.6;
        }
        #toast-container > div.toast-error {
            background-image: none !important;
        }
        #toast-container > div.toast-error {
            background-image: none !important;
        }
        h1,h2,h3,h4,h5,h6{
            font-family: \"Effra\" !important;
        }
        th{
            font-size: 1em !important;
        }
        .form-control::placeholder{
            font-family: \"Effra\"!important;
        }
        
        .table-responsive{
overflow-y:visible;
overflow-x:visible;
}
        
    </style>
    <link href=\"//db.onlinewebfonts.com/c/f41eeef7f001b066c10e8597ddf6eca2?family=Effra\" rel=\"stylesheet\" type=\"text/css\"/>
    <style>
        @import url(//db.onlinewebfonts.com/c/f41eeef7f001b066c10e8597ddf6eca2?family=Effra);
        @font-face {font-family: \"Effra\";
         src: url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.eot\");
          src: url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.eot?#iefix\") format(\"embedded-opentype\"),
           url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.woff2\") format(\"woff2\"), 
           url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.woff\") format(\"woff\"),
            url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.ttf\") format(\"truetype\"),
             url(\"//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.svg#Effra\") format(\"svg\"); }
             *{
                 font-family: \"Effra\" ;
             }
             table{
                font-family: \"Effra\";
             }
             .table td, .table th {
                font-family: \"Effra\";
            }
            .chip,.chip-body{
                background-color: #2e3d63 !important;
            }
            .bullet {
    width: 26px;
    height: 26px;}
    .badge {
        font-family: \"Effra\" !important;
    }
            
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class=\"vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"2-columns\" data-layout=\"dark-layout\">

    <!-- BEGIN: Header-->
    <div class=\"header-navbar-shadow\"></div>
    <nav class=\"header-navbar navbar-expand-lg navbar navbar-with-menu navbar-demo\">
        <div class=\"navbar-wrapper\">
            <div class=\"navbar-container content\">
                <div class=\"navbar-collapse\" id=\"navbar-mobile\">
                    <div class=\"mr-auto float-left bookmark-wrapper d-flex align-items-center\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item mobile-menu d-xl-none mr-auto\"><a class=\"nav-link nav-menu-main menu-toggle hidden-xs\" href=\"#\"><i class=\"ficon bx bx-menu\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav bookmark-icons\">
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-email.html\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"البريد الإلكتروني\"><i class=\"ficon bx bx-envelope\"></i></a></li>
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-chat.html\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"المحادثات\"><i class=\"ficon bx bx-chat\"></i></a></li>
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-todo.html\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"المفكرة\"><i class=\"ficon bx bx-check-circle\"></i></a></li>
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link\" href=\"app-calendar.html\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"التقويم\"><i class=\"ficon bx bx-calendar-alt\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav\">
                            <li class=\"nav-item d-none d-lg-block\"><a class=\"nav-link bookmark-star\"><i class=\"ficon bx bx-star warning\"></i></a>
                                <div class=\"bookmark-input search-input\">
                                    <div class=\"bookmark-input-icon\"><i class=\"bx bx-search primary\"></i></div>
                                    <input class=\"form-control input\" type=\"text\" placeholder=\"بحث...\" tabindex=\"0\" data-search=\"template-search\">
                                    <ul class=\"search-list\"></ul>
                                </div>
                            </li>
                        </ul>
                    </div>
 

                        </li>
                        <!--notifications end-->
                        <!--user dropdown begin-->
                               
                    <div class=\"col-md-3>
                                <a href=\"{{ path('app_login') }}\"><button class=\"btn btn-primary\">login</button> </a>

                    </div>
                    <div class=\"col-md-1\"></div>
                                 
                                <a href=\"{{ path('app_register') }}\"><button class=\"btn btn-primary\">register</button> </a>


                        <!--user dropdown end-->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->
    <!-- BEGIN: Content-->
    <br>
    <div id=\"j\" class=\"row books\">
           {% for livre in livres %}           
                <div class=\"col-md-3 book\">
                    <div class=\"card text-center \">
                        <div  class=\"card-content\">
                            <div  class=\"card-body\">
                                {# <div class=\"badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1\">
                                    <i class=\"bx bx-book font-medium-5\"></i> #}
                                    <img src=\"{{ asset('/uploads/'~livre.previewName)}}\"/>
                                </div>
                                <div class=\"book-text\"  >
                                <p  class=\"text-muted mb-0 line-ellipsis\">Titre:{{livre.titre}}</p>
                                <p class=\"text-muted mb-0 line-ellipsis\">category:{{livre.categorie}}</p>
                                <p  class=\"text-muted mb-0 line-ellipsis\">Prix:{{livre.prix}}</p>
                                </div>
                               
                            
                        </div>
                    </div>
                </div>  
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}    
    <!-- END: Content-->
       <!-- BEGIN: Customizer-->
    <div class=\"customizer d-none d-md-block\"><a class=\"customizer-close\" href=\"#\"><i class=\"bx bx-x\"></i></a><a class=\"customizer-toggle\" href=\"#\"><i class=\"bx bx-cog bx bx-spin white\"></i></a><div class=\"customizer-content p-2\">
        <h4 class=\"text-uppercase mb-0\">Theme Customizer</h4>
        <small>Customize & Preview in Real Time</small>
        <hr>
        <!-- Theme options starts -->
        <h5 class=\"mt-1\">Theme Layout</h5>
        <div class=\"theme-layouts\">
          <div class=\"d-flex justify-content-start\">
            <div class=\"mx-50\">
              <fieldset>
                <div class=\"radio\">
                  <input type=\"radio\" name=\"layoutOptions\" value=\"false\" id=\"radio-light\" class=\"layout-name\" data-layout=\"\"
                    checked>
                  <label for=\"radio-light\">Light</label>
                </div>
              </fieldset>
            </div>
            <div class=\"mx-50\">
              <fieldset>
                <div class=\"radio\">
                  <input type=\"radio\" name=\"layoutOptions\" value=\"false\" id=\"radio-dark\" class=\"layout-name\"
                    data-layout=\"dark-layout\">
                  <label for=\"radio-dark\">Dark</label>
                </div>
              </fieldset>
            </div>
            <div class=\"mx-50\">
              <fieldset>
                <div class=\"radio\">
                  <input type=\"radio\" name=\"layoutOptions\" value=\"false\" id=\"radio-semi-dark\" class=\"layout-name\"
                    data-layout=\"semi-dark-layout\">
                  <label for=\"radio-semi-dark\">Semi Dark</label>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
        <!-- Theme options starts -->
        <hr>
      
        <!-- Menu Colors Starts -->
        <div id=\"customizer-theme-colors\">
          <h5>Menu Colors</h5>
          <ul class=\"list-inline unstyled-list\">
            <li class=\"color-box bg-primary selected\" data-color=\"theme-primary\"></li>
            <li class=\"color-box bg-success\" data-color=\"theme-success\"></li>
            <li class=\"color-box bg-danger\" data-color=\"theme-danger\"></li>
            <li class=\"color-box bg-info\" data-color=\"theme-info\"></li>
            <li class=\"color-box bg-warning\" data-color=\"theme-warning\"></li>
            <li class=\"color-box bg-dark\" data-color=\"theme-dark\"></li>
          </ul>
          <hr>
        </div>
        <!-- Menu Colors Ends -->
        <!-- Menu Icon Animation Starts -->
        <div id=\"menu-icon-animation\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"icon-animation-title\">
              <h5 class=\"pt-25\">Icon Animation</h5>
            </div>
            <div class=\"icon-animation-switch\">
              <div class=\"custom-control custom-switch\">
                <input type=\"checkbox\" class=\"custom-control-input\" checked id=\"icon-animation-switch\">
                <label class=\"custom-control-label\" for=\"icon-animation-switch\"></label>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <!-- Menu Icon Animation Ends -->
        <!-- Collapse sidebar switch starts -->
        <div class=\"collapse-sidebar d-flex justify-content-between align-items-center\">
          <div class=\"collapse-option-title\">
            <h5 class=\"pt-25\">Collapse Menu</h5>
          </div>
          <div class=\"collapse-option-switch\">
            <div class=\"custom-control custom-switch\">
              <input type=\"checkbox\" class=\"custom-control-input\" id=\"collapse-sidebar-switch\">
              <label class=\"custom-control-label\" for=\"collapse-sidebar-switch\"></label>
            </div>
          </div>
        </div>
        <!-- Collapse sidebar switch Ends -->
        <hr>
      
        <!-- Navbar colors starts -->
        <div id=\"customizer-navbar-colors\">
          <h5>Navbar Colors</h5>
          <ul class=\"list-inline unstyled-list\">
            <li class=\"color-box bg-white border selected\" data-navbar-default=\"\"></li>
            <li class=\"color-box bg-primary\" data-navbar-color=\"bg-primary\"></li>
            <li class=\"color-box bg-success\" data-navbar-color=\"bg-success\"></li>
            <li class=\"color-box bg-danger\" data-navbar-color=\"bg-danger\"></li>
            <li class=\"color-box bg-info\" data-navbar-color=\"bg-info\"></li>
            <li class=\"color-box bg-warning\" data-navbar-color=\"bg-warning\"></li>
            <li class=\"color-box bg-dark\" data-navbar-color=\"bg-dark\"></li>
          </ul>
          <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
          <hr>
        </div>
        <!-- Navbar colors starts -->
        <!-- Navbar Type Starts -->
        <h5>Navbar Type</h5>
        <div class=\"navbar-type d-flex justify-content-start\">
          <div class=\"hidden-ele mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"navbarType\" value=\"false\" id=\"navbar-hidden\">
                <label for=\"navbar-hidden\">Hidden</label>
              </div>
            </fieldset>
          </div>
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"navbarType\" value=\"false\" id=\"navbar-static\">
                <label for=\"navbar-static\">Static</label>
              </div>
            </fieldset>
          </div>
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"navbarType\" value=\"false\" id=\"navbar-sticky\" checked>
                <label for=\"navbar-sticky\">Fixed</label>
              </div>
            </fieldset>
          </div>
        </div>
        <hr>
        <!-- Navbar Type Starts -->
      
        <!-- Footer Type Starts -->
        <h5>Footer Type</h5>
        <div class=\"footer-type d-flex justify-content-start\">
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"footerType\" value=\"false\" id=\"footer-hidden\">
                <label for=\"footer-hidden\">Hidden</label>
              </div>
            </fieldset>
          </div>
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"footerType\" value=\"false\" id=\"footer-static\" checked>
                <label for=\"footer-static\">Static</label>
              </div>
            </fieldset>
          </div>
          <div class=\"mx-50\">
            <fieldset>
              <div class=\"radio\">
                <input type=\"radio\" name=\"footerType\" value=\"false\" id=\"footer-sticky\">
                <label for=\"footer-sticky\" class=\"\">Sticky</label>
              </div>
            </fieldset>
          </div>
        </div>
        <!-- Footer Type Ends -->
        <hr>
      
        <!-- Card Shadow Starts-->
        <div class=\"card-shadow d-flex justify-content-between align-items-center py-25\">
          <div class=\"hide-scroll-title\">
            <h5 class=\"pt-25\">Card Shadow</h5>
          </div>
          <div class=\"card-shadow-switch\">
            <div class=\"custom-control custom-switch\">
              <input type=\"checkbox\" class=\"custom-control-input\" checked id=\"card-shadow-switch\">
              <label class=\"custom-control-label\" for=\"card-shadow-switch\"></label>
            </div>
          </div>
        </div>
        <!-- Card Shadow Ends-->
        <hr>
      
        <!-- Hide Scroll To Top Starts-->
        <div class=\"hide-scroll-to-top d-flex justify-content-between align-items-center py-25\">
          <div class=\"hide-scroll-title\">
            <h5 class=\"pt-25\">Hide Scroll To Top</h5>
          </div>
          <div class=\"hide-scroll-top-switch\">
            <div class=\"custom-control custom-switch\">
              <input type=\"checkbox\" class=\"custom-control-input\" id=\"hide-scroll-top-switch\">
              <label class=\"custom-control-label\" for=\"hide-scroll-top-switch\"></label>
            </div>
          </div>
        </div>
        <!-- Hide Scroll To Top Ends-->
      </div>
          </div>
          <!-- End: Customizer-->
    

    </div>
    <div class=\"sidenav-overlay\"></div>
    <div class=\"drag-target\"></div>
    
    <!-- demo chat-->
    <div class=\"widget-chat-demo\">
        <!-- widget chat demo footer button start -->
        <button class=\"btn btn-primary chat-demo-button glow px-1\"><i class=\"livicon-evo\" data-options=\"name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;\"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class=\"widget-chat widget-chat-demo d-none\">
            <div class=\"card mb-0\">
                <div class=\"card-header border-bottom p-0\">
                    <div class=\"media m-75\">
                        <a href=\"JavaScript:void(0);\">
                            <div class=\"avatar mr-75\">
                                <img src=\"{{asset('/app-assets/images/portrait/small/avatar-s-2.jpg')}}\" alt=\"avtar images\" width=\"32\" height=\"32\">
                                <span class=\"avatar-status-online\"></span>
                            </div>
                        </a>
                        <div class=\"media-body\">
                            <h6 class=\"media-heading mb-0 pt-25\"><a href=\"javaScript:void(0);\">Kiara Cruiser</a></h6>
                            <span class=\"text-muted font-small-3\">Active</span>
                        </div>
                        <i class=\"bx bx-x widget-chat-close float-right my-auto cursor-pointer\"></i>
                    </div>
                </div>
                <div class=\"card-body widget-chat-container widget-chat-demo-scroll\">
                    <div class=\"chat-content\">
                        <div class=\"badge badge-pill badge-light-secondary my-1\">today</div>
                        <div class=\"chat\">
                            <div class=\"chat-body\">
                                <div class=\"chat-message\">
                                    <p>How can we help? 😄</p>
                                    <span class=\"chat-time\">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat chat-left\">
                            <div class=\"chat-body\">
                                <div class=\"chat-message\">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class=\"chat-time\">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"chat\">
                            <div class=\"chat-body\">
                                <div class=\"chat-message\">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class=\"chat-time\">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer border-top p-1\">
                    <form class=\"d-flex\" onsubmit=\"widgetChatMessageDemo();\" action=\"javascript:void(0);\">
                        <input type=\"text\" class=\"form-control chat-message-demo mr-75\" placeholder=\"Type here...\">
                        <button type=\"submit\" class=\"btn btn-primary glow px-1\"><i class=\"bx bx-paper-plane\"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->
    <!-- BEGIN: Footer-->
    <footer class=\"footer footer-static footer-dark\">
        <p class=\"clearfix mb-0\"><span class=\"float-left d-inline-block\">2020 &copy; copyright ...</span>
            <button class=\"btn btn-primary btn-icon scroll-top\" type=\"button\"><i class=\"bx bx-up-arrow-alt\"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

<!-- modal FAQ-->
<div class=\"modal fade\" id=\"faq\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel20\" aria-hidden=\"true\" > 
    <div class=\"modal-dialog modal-full\" role=\"document\">
        <div class=\"modal-content \">
            <div class=\"modal-body\">
                    <!-- faq search start -->
            <section class=\"faq-search\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card faq-bg bg-transparent box-shadow-0 p-1 p-md-5\">
                            <div class=\"card-content\">
                                <div class=\"card-body p-0\">
                                    <h1 class=\"faq-title text-center mb-3\">مرحبا كيف يمكننا المساعدة؟</h1>
                                    <form>
                                        <fieldset class=\"faq-search-width form-group position-relative w-50 mx-auto\">
                                            <input type=\"text\" class=\"form-control round form-control-lg shadow pl-2\" id=\"searchbar\" placeholder=\"اطرح سؤال...\">
                                            <button class=\"btn btn-primary round position-absolute d-none d-sm-block\" type=\"button\">بحث</button>
                                            <button class=\"btn btn-primary round position-absolute d-block d-sm-none\" type=\"button\"><i class=\"bx bx-search\"></i></button>
                                        </fieldset>
                                    </form>
                                    <p class=\"card-text text-center mt-3 font-medium-1 text-muted\">
                                        أو اختر فئة للعثور بسرعة على المساعدة التي تحتاجها</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq search ends -->

            <!-- faq start -->
            <section class=\"faq\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <!-- swiper start -->
                        <div class=\"card bg-transparent shadow-none\">
                            <div class=\"card-content\">
                                <div class=\"card-body\">
                                    <div class=\"swiper-centered-slides swiper-container p-1\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"getting-text\"> <i class=\"bx bx-flag mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">Getting Started</div>
                                            </div>
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"pricing-text\"> <i class=\"bx bx-dollar-circle mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">التسعيرات و الخطط</div>
                                            </div>
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"sales-text\"> <i class=\"bx bx-shopping-bag mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">سؤال المبيعات</div>
                                            </div>
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"usage-text\"> <i class=\"bx bx-book-open mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">أدلة الاستخدام</div>
                                            </div>
                                            <div class=\"swiper-slide rounded swiper-shadow\" id=\"general-text\"> <i class=\"bx bx-info-circle mb-1 font-large-1\"></i>
                                                <div class=\"cent-text1\">المرشد العام</div>
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                    </div>
                                    <div class=\"main-wrapper-content\">
                                        <div class=\"wrapper-content\" data-faq=\"getting-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">Getting Started</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper1\" class=\"collapse-icon accordion-icon-rotate\">
                                                <div class=\"accordion\" id=\"accordionWrapar2\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading5\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion5\" aria-expanded=\"false\" aria-controls=\"accordion5\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Purchasing process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion5\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading5\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading6\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion66\" aria-expanded=\"false\" aria-controls=\"accordion66\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure are your payment?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion66\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading6\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading17\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion71\" aria-expanded=\"false\" aria-controls=\"accordion71\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to apply for a prepaid card?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion71\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading17\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.
                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading81\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion801\" aria-expanded=\"false\" aria-controls=\"accordion801\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is my data in App?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion801\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading81\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.
                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading91\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion125\" aria-expanded=\"false\" aria-controls=\"accordion125\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do I know latest version?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion125\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading91\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading103\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion142\" aria-expanded=\"false\" aria-controls=\"accordion142\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download documentation
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion142\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading103\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading113\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion91\" aria-expanded=\"false\" aria-controls=\"accordion91\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure my personal info?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion91\" role=\"tabpanel\" data-parent=\"#accordionWrapar2\" aria-labelledby=\"heading113\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class=\"wrapper-content\" data-faq=\"pricing-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">التسعيرات و الخطط</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper2\" class=\"collapse-icon accordion-icon-rotate\">

                                                <div class=\"accordion\" id=\"accordionWrapar3\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading27\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion16\" aria-expanded=\"false\" aria-controls=\"accordion16\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                What are your Purchasing process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion16\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading27\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading82\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion26\" aria-expanded=\"false\" aria-controls=\"accordion26\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How rarely our information gets?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion26\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading82\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading37\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion72\" aria-expanded=\"false\" aria-controls=\"accordion72\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to apply for a unknown card?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion72\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading37\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading83\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion802\" aria-expanded=\"false\" aria-controls=\"accordion802\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is data and info in App?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion802\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading83\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading92\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion121\" aria-expanded=\"false\" aria-controls=\"accordion121\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do I know about midest version?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion121\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading92\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading104\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion143\" aria-expanded=\"false\" aria-controls=\"accordion143\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download offline documentation works?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion143\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading104\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading114\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion92\" aria-expanded=\"false\" aria-controls=\"accordion92\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Secure my personal data?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion92\" role=\"tabpanel\" data-parent=\"#accordionWrapar3\" aria-labelledby=\"heading114\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class=\"wrapper-content\" data-faq=\"sales-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">سؤال المبيعات</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper3\" class=\"collapse-icon accordion-icon-rotate\">

                                                <div class=\"accordion\" id=\"accordionWrapar4\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading47\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion73\" aria-expanded=\"false\" aria-controls=\"accordion73\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Detailed sales process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion73\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading47\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading93\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion36\" aria-expanded=\"false\" aria-controls=\"accordion36\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                What you sales ?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion36\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading93\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading57\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion74\" aria-expanded=\"false\" aria-controls=\"accordion74\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to apply for a sales card?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion74\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading57\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading84\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion803\" aria-expanded=\"false\" aria-controls=\"accordion803\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is my data in sales App?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion803\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading84\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading94\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion122\" aria-expanded=\"false\" aria-controls=\"accordion122\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do I know sales?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion122\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading94\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading105\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion144\" aria-expanded=\"false\" aria-controls=\"accordion144\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion144\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading105\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading115\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion93\" aria-expanded=\"false\" aria-controls=\"accordion93\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure my sales information?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion93\" role=\"tabpanel\" data-parent=\"#accordionWrapar4\" aria-labelledby=\"heading115\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class=\"wrapper-content\" data-faq=\"usage-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">أدلة الاستخدام</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor? Lorem1 </p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper4\" class=\"collapse-icon accordion-icon-rotate\">
                                                <div class=\"accordion\" id=\"accordionWrapar5\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading85\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion804\" aria-expanded=\"false\" aria-controls=\"accordion804\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Purchasing user process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion804\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading85\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading106\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion46\" aria-expanded=\"false\" aria-controls=\"accordion46\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure are and legal rights?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion46\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading106\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading67\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion75\" aria-expanded=\"false\" aria-controls=\"accordion75\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to write for a postpaid card?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion75\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading67\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading86\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion805\" aria-expanded=\"false\" aria-controls=\"accordion805\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How refresh is my info in App?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion805\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading86\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading95\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion123\" aria-expanded=\"false\" aria-controls=\"accordion123\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do write about about latest ?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion123\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading95\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading101\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion145\" aria-expanded=\"false\" aria-controls=\"accordion145\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion145\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading101\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading116\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion94\" aria-expanded=\"false\" aria-controls=\"accordion94\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is your personal information?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion94\" role=\"tabpanel\" data-parent=\"#accordionWrapar5\" aria-labelledby=\"heading116\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class=\"wrapper-content\" data-faq=\"general-text\">
                                            <div class=\"text-center p-md-4 p-sm-1 py-1 p-0\">
                                                <h1 class=\"faq-title\">المرشد العام</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id=\"accordion-icon-wrapper5\" class=\"collapse-icon accordion-icon-rotate\">
                                                <div class=\"accordion\" id=\"accordionWrapar6\">
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading96\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion95\" aria-expanded=\"false\" aria-controls=\"accordion95\">
                                                            <span class=\"collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                I wanna write process?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion95\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading96\" class=\"collapse\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                    bear
                                                                    claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                    fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                    Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                    oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                    cheesecake
                                                                    liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Voluptates
                                                                    alias
                                                                    architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                    vel illo
                                                                    debitis
                                                                    dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                    facilis.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading111\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion56\" aria-expanded=\"false\" aria-controls=\"accordion56\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How untoched your gateway information?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion56\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading111\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading77\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion76\" aria-expanded=\"false\" aria-controls=\"accordion76\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How to apply for a details?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion76\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading77\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                    drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                    sweet.

                                                                    Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                    Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading87\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion800\" aria-expanded=\"false\" aria-controls=\"accordion800\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure is opensource ?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion800\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading87\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                    jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                    Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                    Jelly jelly beans marshmallow.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading97\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion124\" aria-expanded=\"false\" aria-controls=\"accordion124\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How do I know about oldest version?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion124\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading97\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading102\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion141\" aria-expanded=\"false\" aria-controls=\"accordion141\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion141\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading102\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card collapse-header\">
                                                        <div id=\"heading112\" class=\"card-header\" data-toggle=\"collapse\" role=\"button\" data-target=\"#accordion96\" aria-expanded=\"false\" aria-controls=\"accordion96\">
                                                            <span class=\" collapse-title d-flex align-items-center\"><i class=\"bx bxs-circle font-small-1\"></i>
                                                                How secure personal data ?
                                                            </span>
                                                        </div>
                                                        <div id=\"accordion96\" role=\"tabpanel\" data-parent=\"#accordionWrapar6\" aria-labelledby=\"heading112\" class=\"collapse\" aria-expanded=\"false\">
                                                            <div class=\"card-content\">
                                                                <div class=\"card-body\">
                                                                    Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                    muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                    Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                    pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                    candy oat cake croissant halvah gummi bears toffee powder.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper ends -->
                    </div>
                </div>
            </section>
            <!-- faq ends -->

            <!-- fab bottom start -->
            <section class=\"faq-bottom\">
                <div class=\"row mb-2\">
                    <div class=\"col-12 text-center\">
                        <h2 class=\"faq-subtitle\">لا يزال لديك سؤال؟</h2>
                        <p class=\"p-2 text-muted font-medium-1\">إذا لم تتمكن من العثور على سؤال في الأسئلة الشائعة ، يمكنك دائمًا الاتصال بنا. نحن سيجيب لك قريبا!</p>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center mb-5\">
                    <div class=\"col-sm-12 col-md-4 text-center border rounded p-2 mr-md-2 m-1\">
                        <i class=\"bx bx-phone-call primary font-large-1 text-muted p-50\"></i>
                        <h5>+ (810) 2548 2568</h5>
                        <p class=\"text-muted font-medium-1\"> يسعدنا دائمًا تقديم المساعدة!</p>
                    </div>
                    <div class=\"col-sm-12 col-md-4 text-center border color-gray-faq rounded p-2 m-1\">
                        <i class=\"bx bx-mail-send primary font-large-1 p-50\"></i>
                        <h5><a href=\"mailto:hello@help.com\">hello@help.com</a></h5>
                        <p class=\"text-muted font-medium-1\">Best way to get answer faster!</p>
                    </div>
                </div>
            </section>
            <!-- fab bottom ends -->
            </div>
            
        </div>
    </div>
</div>
<!-- end modal FAQ -->
               
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
 <script src=\"{{asset('/app-assets/js/scripts/customizer.min.js')}}\"></script>
<!-- END: Theme JS-->


       <!-- BEGIN: Page JS-->
       <script src=\"/app-assets/js/scripts/pages/faq.js\"></script>
       <!-- END: Page JS-->
    <script>
        \$(\"#radio-light\").click(function(){
            \$(\".chip\").attr(\"style\",\"background-color:#f0f0f0 !important\");
            \$(\".chip-body\").attr(\"style\",\"background-color:#f0f0f0 !important\");
            \$(\".tolight\").attr(\"style\",\"background-color:#f2f4f4 !important\");
        })

        \$(\"#radio-dark\").click(function(){
            \$(\".chip\").attr(\"style\",\"background-color: #2e3d63 !important\");
            \$(\".chip-body\").attr(\"style\",\"background-color: #2e3d63 !important\");
            \$(\".tolight\").attr(\"style\",\"background-color:#1a233a !important\");
        })
    </script>

    

</body>
<!-- END: Body-->

</html>
", "user/user.html.twig", "C:\\Users\\Ahmed\\Desktop\\gestionbibl\\templates\\user\\user.html.twig");
    }
}
