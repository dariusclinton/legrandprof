<?php

/* layout.html.twig */
class __TwigTemplate_b10fcc4e96899a9bc19bd31ae588f2c6dc5d1cd922c850507cc37c2ea1eb9e2e extends Twig_Template
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
        $__internal_5a92ae07a5666f2fb27d9b4bfce88f2ae8c6f7ef57944567665e9048c9b01548 = $this->env->getExtension("native_profiler");
        $__internal_5a92ae07a5666f2fb27d9b4bfce88f2ae8c6f7ef57944567665e9048c9b01548->enter($__internal_5a92ae07a5666f2fb27d9b4bfce88f2ae8c6f7ef57944567665e9048c9b01548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 45
        echo "    </head>
    <body>
        ";
        // line 47
        echo twig_include($this->env, $context, "LGPCoreBundle::dialog.html.twig");
        echo "

        <!-- start Container Wrapper -->
        <div class=\"container-wrapper\">
            ";
        // line 51
        echo twig_include($this->env, $context, "LGPCoreBundle::header.html.twig");
        echo "
            
            ";
        // line 53
        $this->displayBlock('header_submenu', $context, $blocks);
        // line 54
        echo "
            <div class=\"clear\"></div>

            <div class=\"main-wrapper\">
                ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "            </div>

            ";
        // line 61
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
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "    </body>
</html>
";
        
        $__internal_5a92ae07a5666f2fb27d9b4bfce88f2ae8c6f7ef57944567665e9048c9b01548->leave($__internal_5a92ae07a5666f2fb27d9b4bfce88f2ae8c6f7ef57944567665e9048c9b01548_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_356c502a6f2fb2a08d6e69d2f7eea8e78b89533ea4a4522587b8a85e74550650 = $this->env->getExtension("native_profiler");
        $__internal_356c502a6f2fb2a08d6e69d2f7eea8e78b89533ea4a4522587b8a85e74550650->enter($__internal_356c502a6f2fb2a08d6e69d2f7eea8e78b89533ea4a4522587b8a85e74550650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Le Grand Prof ";
        
        $__internal_356c502a6f2fb2a08d6e69d2f7eea8e78b89533ea4a4522587b8a85e74550650->leave($__internal_356c502a6f2fb2a08d6e69d2f7eea8e78b89533ea4a4522587b8a85e74550650_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_865e3e2f07f25b16bb550f8ee27b9b61544fb4a9ac85b63347e99f01c6c579d9 = $this->env->getExtension("native_profiler");
        $__internal_865e3e2f07f25b16bb550f8ee27b9b61544fb4a9ac85b63347e99f01c6c579d9->enter($__internal_865e3e2f07f25b16bb550f8ee27b9b61544fb4a9ac85b63347e99f01c6c579d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            <!-- CSS Plugins -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\">
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- CSS Font Icons -->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/ionicons/css/ionicons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/rivolicons/style.css"), "html", null, true);
        echo "\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

            <!-- Google Fonts -->
            <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

            <!-- CSS Custom -->
            <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            
            ";
        // line 40
        echo "            <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("ico.png"), "html", null, true);
        echo "\" />

            <!-- jquery-ui css -->
            <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.12.0/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_865e3e2f07f25b16bb550f8ee27b9b61544fb4a9ac85b63347e99f01c6c579d9->leave($__internal_865e3e2f07f25b16bb550f8ee27b9b61544fb4a9ac85b63347e99f01c6c579d9_prof);

    }

    // line 53
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_06f417cf993944453c914dae4a659197fba3beebae4311adeb1c960c0a15bb7e = $this->env->getExtension("native_profiler");
        $__internal_06f417cf993944453c914dae4a659197fba3beebae4311adeb1c960c0a15bb7e->enter($__internal_06f417cf993944453c914dae4a659197fba3beebae4311adeb1c960c0a15bb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " ";
        
        $__internal_06f417cf993944453c914dae4a659197fba3beebae4311adeb1c960c0a15bb7e->leave($__internal_06f417cf993944453c914dae4a659197fba3beebae4311adeb1c960c0a15bb7e_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_42b8d0c0fc527d02bfe6dc1e5df8e6f0be7b989882cabb04ecab4c13d101fd68 = $this->env->getExtension("native_profiler");
        $__internal_42b8d0c0fc527d02bfe6dc1e5df8e6f0be7b989882cabb04ecab4c13d101fd68->enter($__internal_42b8d0c0fc527d02bfe6dc1e5df8e6f0be7b989882cabb04ecab4c13d101fd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_42b8d0c0fc527d02bfe6dc1e5df8e6f0be7b989882cabb04ecab4c13d101fd68->leave($__internal_42b8d0c0fc527d02bfe6dc1e5df8e6f0be7b989882cabb04ecab4c13d101fd68_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_628c5699d7fbf73e25888afa3d271faf745b4626aebf81706f086af32b111419 = $this->env->getExtension("native_profiler");
        $__internal_628c5699d7fbf73e25888afa3d271faf745b4626aebf81706f086af32b111419->enter($__internal_628c5699d7fbf73e25888afa3d271faf745b4626aebf81706f086af32b111419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.12.0/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/instagram.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/spin.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.introLoader.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/select2.full.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.responsivegrid.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/readmore.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/validator.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/customs.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/user.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_628c5699d7fbf73e25888afa3d271faf745b4626aebf81706f086af32b111419->leave($__internal_628c5699d7fbf73e25888afa3d271faf745b4626aebf81706f086af32b111419_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 92,  301 => 91,  297 => 90,  293 => 89,  289 => 88,  285 => 87,  281 => 86,  277 => 85,  273 => 84,  269 => 83,  265 => 82,  261 => 81,  257 => 80,  253 => 79,  249 => 78,  245 => 77,  241 => 76,  237 => 75,  233 => 74,  229 => 73,  224 => 72,  218 => 71,  206 => 58,  194 => 53,  185 => 43,  178 => 40,  173 => 37,  162 => 29,  158 => 28,  154 => 27,  150 => 26,  146 => 25,  142 => 24,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  122 => 18,  116 => 17,  104 => 8,  95 => 94,  93 => 71,  80 => 61,  76 => 59,  74 => 58,  68 => 54,  66 => 53,  61 => 51,  54 => 47,  50 => 45,  48 => 17,  36 => 8,  27 => 1,);
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
/*             <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
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
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
