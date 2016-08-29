<?php

/* ::layout.html.twig */
class __TwigTemplate_4ff3dce09e14490ac752c090a154a29b36d3580e4a4fbac6d140d346ffeb1429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44157648fa534e1d7dd54ecb68d041ba33661f824df2c86f099d5ccba58972bf = $this->env->getExtension("native_profiler");
        $__internal_44157648fa534e1d7dd54ecb68d041ba33661f824df2c86f099d5ccba58972bf->enter($__internal_44157648fa534e1d7dd54ecb68d041ba33661f824df2c86f099d5ccba58972bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
    <head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<meta name=\"description\" content=\"Template legrandprof\" />
\t<meta name=\"keywords\" content=\"legrandprof, prof, soutien scolaire, mathématiques\" />
\t<meta name=\"author\" content=\"legrandprof\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">



        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "    </head>
    <body>
        ";
        // line 48
        echo twig_include($this->env, $context, "LGPCoreBundle::dialog.html.twig");
        echo "

        <!-- start Container Wrapper -->
        <div class=\"container-wrapper\">
            ";
        // line 52
        echo twig_include($this->env, $context, "LGPCoreBundle::header.html.twig");
        echo "
            
            ";
        // line 54
        $this->displayBlock('header_submenu', $context, $blocks);
        // line 55
        echo "
            <div class=\"clear\"></div>

            <div class=\"main-wrapper\">
                ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "            </div>

            ";
        // line 62
        echo twig_include($this->env, $context, "LGPCoreBundle::footer.html.twig");
        echo "
        </div> <!-- end Container Wrapper -->

        <!-- start Back To Top -->
\t<div id=\"back-to-top\">
\t\t <a href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
\t</div>
\t<!-- end Back To Top -->

        <!-- JS -->
        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "    </body>
</html>
";
        
        $__internal_44157648fa534e1d7dd54ecb68d041ba33661f824df2c86f099d5ccba58972bf->leave($__internal_44157648fa534e1d7dd54ecb68d041ba33661f824df2c86f099d5ccba58972bf_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc0fe24bb1fedbcdc9cb8a3ab42fafc37f68a7f3219da39ee3bee1baeee8bf02 = $this->env->getExtension("native_profiler");
        $__internal_cc0fe24bb1fedbcdc9cb8a3ab42fafc37f68a7f3219da39ee3bee1baeee8bf02->enter($__internal_cc0fe24bb1fedbcdc9cb8a3ab42fafc37f68a7f3219da39ee3bee1baeee8bf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Le Grand Prof ";
        
        $__internal_cc0fe24bb1fedbcdc9cb8a3ab42fafc37f68a7f3219da39ee3bee1baeee8bf02->leave($__internal_cc0fe24bb1fedbcdc9cb8a3ab42fafc37f68a7f3219da39ee3bee1baeee8bf02_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbdebd0ddf9987a7f8675e821dceed41ec7cfda25f861a8d17d408bbe78c9943 = $this->env->getExtension("native_profiler");
        $__internal_cbdebd0ddf9987a7f8675e821dceed41ec7cfda25f861a8d17d408bbe78c9943->enter($__internal_cbdebd0ddf9987a7f8675e821dceed41ec7cfda25f861a8d17d408bbe78c9943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            <!-- CSS Plugins -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" media=\"screen\">
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- CSS Font Icons -->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/ionicons/css/ionicons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/rivolicons/style.css"), "html", null, true);
        echo "\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

            <!-- Google Fonts -->
            <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

            <!-- CSS Custom -->
            <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            
            ";
        // line 41
        echo "            <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("ico.png"), "html", null, true);
        echo "\" />

            <!-- jquery-ui css -->
            <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.12.0/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_cbdebd0ddf9987a7f8675e821dceed41ec7cfda25f861a8d17d408bbe78c9943->leave($__internal_cbdebd0ddf9987a7f8675e821dceed41ec7cfda25f861a8d17d408bbe78c9943_prof);

    }

    // line 54
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f1efc4c8258f9c18d845f6957fda0d6d32be1a82a7451948bb5daa06032858a0 = $this->env->getExtension("native_profiler");
        $__internal_f1efc4c8258f9c18d845f6957fda0d6d32be1a82a7451948bb5daa06032858a0->enter($__internal_f1efc4c8258f9c18d845f6957fda0d6d32be1a82a7451948bb5daa06032858a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " ";
        
        $__internal_f1efc4c8258f9c18d845f6957fda0d6d32be1a82a7451948bb5daa06032858a0->leave($__internal_f1efc4c8258f9c18d845f6957fda0d6d32be1a82a7451948bb5daa06032858a0_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_a689d0c2b1140235444011757692446d4712978a23a30a5f9b37e22afcff115c = $this->env->getExtension("native_profiler");
        $__internal_a689d0c2b1140235444011757692446d4712978a23a30a5f9b37e22afcff115c->enter($__internal_a689d0c2b1140235444011757692446d4712978a23a30a5f9b37e22afcff115c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_a689d0c2b1140235444011757692446d4712978a23a30a5f9b37e22afcff115c->leave($__internal_a689d0c2b1140235444011757692446d4712978a23a30a5f9b37e22afcff115c_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cb2846c92bbeb1d665549e31830ef19129d732dc37f433687a5152a0e5e4af7 = $this->env->getExtension("native_profiler");
        $__internal_7cb2846c92bbeb1d665549e31830ef19129d732dc37f433687a5152a0e5e4af7->enter($__internal_7cb2846c92bbeb1d665549e31830ef19129d732dc37f433687a5152a0e5e4af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.12.0/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-datetimepicker/moment/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/instagram.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/spin.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.introLoader.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/select2.full.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.responsivegrid.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/readmore.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/validator.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/customs.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/user.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/addToCart.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7cb2846c92bbeb1d665549e31830ef19129d732dc37f433687a5152a0e5e4af7->leave($__internal_7cb2846c92bbeb1d665549e31830ef19129d732dc37f433687a5152a0e5e4af7_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 96,  317 => 95,  313 => 94,  309 => 93,  305 => 92,  301 => 91,  297 => 90,  293 => 89,  289 => 88,  285 => 87,  281 => 86,  277 => 85,  273 => 84,  269 => 83,  265 => 82,  261 => 81,  257 => 80,  253 => 79,  249 => 78,  245 => 77,  241 => 76,  237 => 75,  233 => 74,  228 => 73,  222 => 72,  210 => 59,  198 => 54,  189 => 44,  182 => 41,  177 => 38,  166 => 30,  162 => 29,  158 => 28,  154 => 27,  150 => 26,  146 => 25,  141 => 23,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  122 => 18,  116 => 17,  104 => 8,  95 => 98,  93 => 72,  80 => 62,  76 => 60,  74 => 59,  68 => 55,  66 => 54,  61 => 52,  54 => 48,  50 => 46,  48 => 17,  36 => 8,  27 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html lang="fr">*/
/*     <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <title> {% block title %} Le Grand Prof {% endblock %}</title>*/
/* */
/* 	<meta name="description" content="Template legrandprof" />*/
/* 	<meta name="keywords" content="legrandprof, prof, soutien scolaire, mathématiques" />*/
/* 	<meta name="author" content="legrandprof">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/* */
/* */
/* */
/*         {% block stylesheets %}*/
/*             <!-- CSS Plugins -->*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" media="screen">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" media="screen">*/
/*             <link href="{{ asset('css/animate.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('css/main.css') }}" rel="stylesheet">*/
/*             <link href="{{ asset('css/component.css') }}" rel="stylesheet">*/
/*             <!-- CSS Font Icons -->*/
/*             <link rel="stylesheet" href="{{ asset('icons/ionicons/css/ionicons.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('icons/font-awesome/css/font-awesome.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('icons/simple-line-icons/css/simple-line-icons.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('icons/themify-icons/themify-icons.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('icons/rivolicons/style.css') }}">*/
/*             <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/*             <!-- Google Fonts -->*/
/*             <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>*/
/*             <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>*/
/* */
/*             <!-- CSS Custom -->*/
/*             <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*             */
/*             {# icon #}*/
/*             <link rel="icon" type="image/png" href="{{ asset('ico.png') }}" />*/
/* */
/*             <!-- jquery-ui css -->*/
/*             <link href="{{ asset('jquery-ui-1.12.0/jquery-ui.min.css') }}" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {{ include('LGPCoreBundle::dialog.html.twig') }}*/
/* */
/*         <!-- start Container Wrapper -->*/
/*         <div class="container-wrapper">*/
/*             {{ include('LGPCoreBundle::header.html.twig') }}*/
/*             */
/*             {% block header_submenu %} {% endblock %}*/
/* */
/*             <div class="clear"></div>*/
/* */
/*             <div class="main-wrapper">*/
/*                 {% block body %} {% endblock %}*/
/*             </div>*/
/* */
/*             {{ include('LGPCoreBundle::footer.html.twig') }}*/
/*         </div> <!-- end Container Wrapper -->*/
/* */
/*         <!-- start Back To Top -->*/
/* 	<div id="back-to-top">*/
/* 		 <a href="#"><i class="fa fa-angle-up"></i></a>*/
/* 	</div>*/
/* 	<!-- end Back To Top -->*/
/* */
/*         <!-- JS -->*/
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('jquery-ui-1.12.0/jquery-ui.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('bootstrap-datetimepicker/moment/moment-with-locales.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/SmoothScroll.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.placeholder.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/instagram.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/spin.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.introLoader.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/select2.full.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.responsivegrid.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/ion.rangeSlider.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/readmore.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/validator.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery.raty.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/customs.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/user.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/addToCart.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */