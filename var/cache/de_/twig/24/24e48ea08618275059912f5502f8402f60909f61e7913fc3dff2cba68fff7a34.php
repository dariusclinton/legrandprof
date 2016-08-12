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
        $__internal_9f39cac2e05a8ac77b8d0c20a21efb76e60373e18ca4bdd14e28932ac0b0aabf = $this->env->getExtension("native_profiler");
        $__internal_9f39cac2e05a8ac77b8d0c20a21efb76e60373e18ca4bdd14e28932ac0b0aabf->enter($__internal_9f39cac2e05a8ac77b8d0c20a21efb76e60373e18ca4bdd14e28932ac0b0aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_9f39cac2e05a8ac77b8d0c20a21efb76e60373e18ca4bdd14e28932ac0b0aabf->leave($__internal_9f39cac2e05a8ac77b8d0c20a21efb76e60373e18ca4bdd14e28932ac0b0aabf_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_13d5baa232aa844bfdde7ce28c7d71ff626d7c19bc2204bb332620a6c07adbf1 = $this->env->getExtension("native_profiler");
        $__internal_13d5baa232aa844bfdde7ce28c7d71ff626d7c19bc2204bb332620a6c07adbf1->enter($__internal_13d5baa232aa844bfdde7ce28c7d71ff626d7c19bc2204bb332620a6c07adbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Le Grand Prof ";
        
        $__internal_13d5baa232aa844bfdde7ce28c7d71ff626d7c19bc2204bb332620a6c07adbf1->leave($__internal_13d5baa232aa844bfdde7ce28c7d71ff626d7c19bc2204bb332620a6c07adbf1_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_322e5e966831fe606f32d3be687d74c3fc6fc09c826f16726c2959a226ef880c = $this->env->getExtension("native_profiler");
        $__internal_322e5e966831fe606f32d3be687d74c3fc6fc09c826f16726c2959a226ef880c->enter($__internal_322e5e966831fe606f32d3be687d74c3fc6fc09c826f16726c2959a226ef880c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_322e5e966831fe606f32d3be687d74c3fc6fc09c826f16726c2959a226ef880c->leave($__internal_322e5e966831fe606f32d3be687d74c3fc6fc09c826f16726c2959a226ef880c_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e1cc0b5b17d66ba5b0343894bba4d41be5ee1f4cd4fdcfb6b020a9aa366fa6a = $this->env->getExtension("native_profiler");
        $__internal_1e1cc0b5b17d66ba5b0343894bba4d41be5ee1f4cd4fdcfb6b020a9aa366fa6a->enter($__internal_1e1cc0b5b17d66ba5b0343894bba4d41be5ee1f4cd4fdcfb6b020a9aa366fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_1e1cc0b5b17d66ba5b0343894bba4d41be5ee1f4cd4fdcfb6b020a9aa366fa6a->leave($__internal_1e1cc0b5b17d66ba5b0343894bba4d41be5ee1f4cd4fdcfb6b020a9aa366fa6a_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2f7c9c785863def6cc5b257426ecf03a376f0b6e41ba7f8aaf26a1c0d1b11ec = $this->env->getExtension("native_profiler");
        $__internal_d2f7c9c785863def6cc5b257426ecf03a376f0b6e41ba7f8aaf26a1c0d1b11ec->enter($__internal_d2f7c9c785863def6cc5b257426ecf03a376f0b6e41ba7f8aaf26a1c0d1b11ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d2f7c9c785863def6cc5b257426ecf03a376f0b6e41ba7f8aaf26a1c0d1b11ec->leave($__internal_d2f7c9c785863def6cc5b257426ecf03a376f0b6e41ba7f8aaf26a1c0d1b11ec_prof);

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
