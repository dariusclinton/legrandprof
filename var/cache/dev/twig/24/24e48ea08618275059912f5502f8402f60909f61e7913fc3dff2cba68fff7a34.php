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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63630b1fe85dd55050119c87394c62eebdce2ba7219f4c0e853a648bf382c786 = $this->env->getExtension("native_profiler");
        $__internal_63630b1fe85dd55050119c87394c62eebdce2ba7219f4c0e853a648bf382c786->enter($__internal_63630b1fe85dd55050119c87394c62eebdce2ba7219f4c0e853a648bf382c786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 39
        echo "    </head>
    <body>
        ";
        // line 41
        echo twig_include($this->env, $context, "LGPCoreBundle::dialog.html.twig");
        echo "
        
        <!-- start Container Wrapper -->
        <div class=\"container-wrapper\">
            ";
        // line 45
        echo twig_include($this->env, $context, "LGPCoreBundle::header.html.twig");
        echo "
            
            <div class=\"clear\"></div>
            
            <div class=\"main-wrapper\">
                ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "            </div>
            
            ";
        // line 53
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
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "    </body>
</html>";
        
        $__internal_63630b1fe85dd55050119c87394c62eebdce2ba7219f4c0e853a648bf382c786->leave($__internal_63630b1fe85dd55050119c87394c62eebdce2ba7219f4c0e853a648bf382c786_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_098c9c4db32d68fcb85b4111cf35b72da6acc224a389f659e060aa8be26f1307 = $this->env->getExtension("native_profiler");
        $__internal_098c9c4db32d68fcb85b4111cf35b72da6acc224a389f659e060aa8be26f1307->enter($__internal_098c9c4db32d68fcb85b4111cf35b72da6acc224a389f659e060aa8be26f1307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Le Grand Prof ";
        
        $__internal_098c9c4db32d68fcb85b4111cf35b72da6acc224a389f659e060aa8be26f1307->leave($__internal_098c9c4db32d68fcb85b4111cf35b72da6acc224a389f659e060aa8be26f1307_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c534d74b27d3a285adbe67826390429a4eaadc076798309f43f350e51377f22a = $this->env->getExtension("native_profiler");
        $__internal_c534d74b27d3a285adbe67826390429a4eaadc076798309f43f350e51377f22a->enter($__internal_c534d74b27d3a285adbe67826390429a4eaadc076798309f43f350e51377f22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            <!-- CSS Plugins -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\">\t
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
        
        $__internal_c534d74b27d3a285adbe67826390429a4eaadc076798309f43f350e51377f22a->leave($__internal_c534d74b27d3a285adbe67826390429a4eaadc076798309f43f350e51377f22a_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_37a229dbf37ee94b606750a7b3173dc83a854588708f61a3e910a7ecc6ab3fc8 = $this->env->getExtension("native_profiler");
        $__internal_37a229dbf37ee94b606750a7b3173dc83a854588708f61a3e910a7ecc6ab3fc8->enter($__internal_37a229dbf37ee94b606750a7b3173dc83a854588708f61a3e910a7ecc6ab3fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_37a229dbf37ee94b606750a7b3173dc83a854588708f61a3e910a7ecc6ab3fc8->leave($__internal_37a229dbf37ee94b606750a7b3173dc83a854588708f61a3e910a7ecc6ab3fc8_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1075046917c66f41164ac6f64d4a3724559ad0a2c8d833f36ba9c4088861bf87 = $this->env->getExtension("native_profiler");
        $__internal_1075046917c66f41164ac6f64d4a3724559ad0a2c8d833f36ba9c4088861bf87->enter($__internal_1075046917c66f41164ac6f64d4a3724559ad0a2c8d833f36ba9c4088861bf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/instagram.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/spin.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.introLoader.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/select2.full.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.responsivegrid.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/readmore.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/validator.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.js"), "html", null, true);
        echo "\"></script> 
            <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/customs.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1075046917c66f41164ac6f64d4a3724559ad0a2c8d833f36ba9c4088861bf87->leave($__internal_1075046917c66f41164ac6f64d4a3724559ad0a2c8d833f36ba9c4088861bf87_prof);

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
        return array (  266 => 82,  262 => 81,  258 => 80,  254 => 79,  250 => 78,  246 => 77,  242 => 76,  238 => 75,  234 => 74,  230 => 73,  226 => 72,  222 => 71,  218 => 70,  214 => 69,  210 => 68,  206 => 67,  202 => 66,  198 => 65,  193 => 64,  187 => 63,  175 => 50,  166 => 37,  155 => 29,  151 => 28,  147 => 27,  143 => 26,  139 => 25,  135 => 24,  130 => 22,  126 => 21,  122 => 20,  118 => 19,  115 => 18,  109 => 17,  97 => 8,  89 => 84,  87 => 63,  74 => 53,  70 => 51,  68 => 50,  60 => 45,  53 => 41,  49 => 39,  47 => 17,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html lang="fr">*/
/*     <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         */
/*         <title> {% block title %} Le Grand Prof {% endblock %}</title>*/
/*         */
/* 	<meta name="description" content="Template legrandprof" />*/
/* 	<meta name="keywords" content="legrandprof, prof, soutien scolaire, mathématiques" />*/
/* 	<meta name="author" content="legrandprof">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*        */
/*         */
/*         */
/*         {% block stylesheets %}*/
/*             <!-- CSS Plugins -->*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" media="screen">	*/
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
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {{ include('LGPCoreBundle::dialog.html.twig') }}*/
/*         */
/*         <!-- start Container Wrapper -->*/
/*         <div class="container-wrapper">*/
/*             {{ include('LGPCoreBundle::header.html.twig') }}*/
/*             */
/*             <div class="clear"></div>*/
/*             */
/*             <div class="main-wrapper">*/
/*                 {% block body %} {% endblock %}*/
/*             </div>*/
/*             */
/*             {{ include('LGPCoreBundle::footer.html.twig') }}*/
/*         </div> <!-- end Container Wrapper -->*/
/*         */
/*         <!-- start Back To Top -->*/
/* 	<div id="back-to-top">*/
/* 		 <a href="#"><i class="fa fa-angle-up"></i></a>*/
/* 	</div>*/
/* 	<!-- end Back To Top -->*/
/*         */
/*         <!-- JS -->*/
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>*/
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
/*             <script type="text/javascript" src="{{ asset('js/jquery.raty.js') }}"></script> */
/*             <script type="text/javascript" src="{{ asset('js/customs.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
