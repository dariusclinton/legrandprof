<?php

/* ::layout.html.twig */
class __TwigTemplate_b91cd275106bd3ff51e9fe3b5194a6092128c520a895d65a26eabb44dfa50716 extends Twig_Template
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
        $__internal_2639736912bcf6b37137fb41ad1e2e589b2e0522ce2bdd80d01f584b693cd4dd = $this->env->getExtension("native_profiler");
        $__internal_2639736912bcf6b37137fb41ad1e2e589b2e0522ce2bdd80d01f584b693cd4dd->enter($__internal_2639736912bcf6b37137fb41ad1e2e589b2e0522ce2bdd80d01f584b693cd4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta name=\"description\" content=\"Template legrandprof\" />
        <meta name=\"keywords\" content=\"legrandprof, prof, soutien scolaire, mathématiques\" />
        <meta name=\"author\" content=\"legrandprof\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">



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
        <div id=\"back-to-top\">
            <a href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
        <!-- end Back To Top -->

        <!-- JS -->
        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "    </body>
</html>";
        
        $__internal_2639736912bcf6b37137fb41ad1e2e589b2e0522ce2bdd80d01f584b693cd4dd->leave($__internal_2639736912bcf6b37137fb41ad1e2e589b2e0522ce2bdd80d01f584b693cd4dd_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a91264c054bdfc38051252b17f583e563cb486e930f613aefcd6ce003374ff7f = $this->env->getExtension("native_profiler");
        $__internal_a91264c054bdfc38051252b17f583e563cb486e930f613aefcd6ce003374ff7f->enter($__internal_a91264c054bdfc38051252b17f583e563cb486e930f613aefcd6ce003374ff7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Le Grand Prof ";
        
        $__internal_a91264c054bdfc38051252b17f583e563cb486e930f613aefcd6ce003374ff7f->leave($__internal_a91264c054bdfc38051252b17f583e563cb486e930f613aefcd6ce003374ff7f_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c3c79c2a5bc9c33e3d66d471d02811364ad100bb6f8905ca1722c036a6ee7ec = $this->env->getExtension("native_profiler");
        $__internal_5c3c79c2a5bc9c33e3d66d471d02811364ad100bb6f8905ca1722c036a6ee7ec->enter($__internal_5c3c79c2a5bc9c33e3d66d471d02811364ad100bb6f8905ca1722c036a6ee7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5c3c79c2a5bc9c33e3d66d471d02811364ad100bb6f8905ca1722c036a6ee7ec->leave($__internal_5c3c79c2a5bc9c33e3d66d471d02811364ad100bb6f8905ca1722c036a6ee7ec_prof);

    }

    // line 54
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e60bfd24d634c437559b047a3a4edead28ba846d2dfd4de3ca95a33016aa6c12 = $this->env->getExtension("native_profiler");
        $__internal_e60bfd24d634c437559b047a3a4edead28ba846d2dfd4de3ca95a33016aa6c12->enter($__internal_e60bfd24d634c437559b047a3a4edead28ba846d2dfd4de3ca95a33016aa6c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " ";
        
        $__internal_e60bfd24d634c437559b047a3a4edead28ba846d2dfd4de3ca95a33016aa6c12->leave($__internal_e60bfd24d634c437559b047a3a4edead28ba846d2dfd4de3ca95a33016aa6c12_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf29b9f0a0a0f4297963d70a2d8a171a0505eabd82875d676764767f2fdc7ace = $this->env->getExtension("native_profiler");
        $__internal_cf29b9f0a0a0f4297963d70a2d8a171a0505eabd82875d676764767f2fdc7ace->enter($__internal_cf29b9f0a0a0f4297963d70a2d8a171a0505eabd82875d676764767f2fdc7ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_cf29b9f0a0a0f4297963d70a2d8a171a0505eabd82875d676764767f2fdc7ace->leave($__internal_cf29b9f0a0a0f4297963d70a2d8a171a0505eabd82875d676764767f2fdc7ace_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7400ec80aed33dbb7219a84a9030dc54b36bc1a8b08f7edd7067a70013be6cd5 = $this->env->getExtension("native_profiler");
        $__internal_7400ec80aed33dbb7219a84a9030dc54b36bc1a8b08f7edd7067a70013be6cd5->enter($__internal_7400ec80aed33dbb7219a84a9030dc54b36bc1a8b08f7edd7067a70013be6cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/addToCart.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loadData.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            
            ";
        // line 103
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 104
            echo "              <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/avis.js"), "html", null, true);
            echo "\"></script>
              <script type=\"text/javascript\" src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/messages.js"), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 107
        echo "        ";
        
        $__internal_7400ec80aed33dbb7219a84a9030dc54b36bc1a8b08f7edd7067a70013be6cd5->leave($__internal_7400ec80aed33dbb7219a84a9030dc54b36bc1a8b08f7edd7067a70013be6cd5_prof);

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
        return array (  354 => 107,  349 => 105,  344 => 104,  342 => 103,  337 => 101,  333 => 100,  329 => 99,  325 => 98,  321 => 97,  316 => 95,  312 => 94,  308 => 93,  304 => 92,  300 => 91,  296 => 90,  292 => 89,  288 => 88,  284 => 87,  280 => 86,  276 => 85,  272 => 84,  268 => 83,  264 => 82,  260 => 81,  256 => 80,  252 => 79,  248 => 78,  244 => 77,  240 => 76,  236 => 75,  232 => 74,  227 => 73,  221 => 72,  209 => 59,  197 => 54,  188 => 44,  181 => 41,  176 => 38,  165 => 30,  161 => 29,  157 => 28,  153 => 27,  149 => 26,  145 => 25,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  121 => 18,  115 => 17,  103 => 8,  95 => 108,  93 => 72,  80 => 62,  76 => 60,  74 => 59,  68 => 55,  66 => 54,  61 => 52,  54 => 48,  50 => 46,  48 => 17,  36 => 8,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE HTML>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title> {% block title %} Le Grand Prof {% endblock %}</title>

        <meta name=\"description\" content=\"Template legrandprof\" />
        <meta name=\"keywords\" content=\"legrandprof, prof, soutien scolaire, mathématiques\" />
        <meta name=\"author\" content=\"legrandprof\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">



        {% block stylesheets %}
            <!-- CSS Plugins -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" media=\"screen\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}\" media=\"screen\">
            <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('css/component.css') }}\" rel=\"stylesheet\">
            <!-- CSS Font Icons -->
            <link rel=\"stylesheet\" href=\"{{ asset('icons/ionicons/css/ionicons.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('icons/font-awesome/css/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('icons/simple-line-icons/css/simple-line-icons.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('icons/themify-icons/themify-icons.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('icons/rivolicons/style.css') }}\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

            <!-- Google Fonts -->
            <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

            <!-- CSS Custom -->
            <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

            {# icon #}
            <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('ico.png') }}\" />

            <!-- jquery-ui css -->
            <link href=\"{{ asset('jquery-ui-1.12.0/jquery-ui.min.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>
        {{ include('LGPCoreBundle::dialog.html.twig') }}

        <!-- start Container Wrapper -->
        <div class=\"container-wrapper\">
            {{ include('LGPCoreBundle::header.html.twig') }}

            {% block header_submenu %} {% endblock %}

            <div class=\"clear\"></div>

            <div class=\"main-wrapper\">
                {% block body %} {% endblock %}
            </div>

            {{ include('LGPCoreBundle::footer.html.twig') }}
        </div> <!-- end Container Wrapper -->

        <!-- start Back To Top -->
        <div id=\"back-to-top\">
            <a href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        </div>
        <!-- end Back To Top -->

        <!-- JS -->
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.11.3.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('jquery-ui-1.12.0/jquery-ui.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery-migrate-1.2.1.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bootstrap-datetimepicker/moment/moment-with-locales.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/SmoothScroll.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.slicknav.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.placeholder.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/instagram.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/spin.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.introLoader.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/select2.full.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.responsivegrid.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/ion.rangeSlider.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/readmore.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/slick.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/validator.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.raty.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/customs.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/user.js') }}\"></script>
            
            <script type=\"text/javascript\" src=\"{{ asset('js/addToCart.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/search.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/loadData.js') }}\"></script>
            <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
            <script src=\"{{ path('fos_js_routing_js', { 'callback': 'fos.Router.setData' }) }}\"></script>
            
            {% if is_granted('ROLE_USER') %}
              <script type=\"text/javascript\" src=\"{{ asset('js/avis.js') }}\"></script>
              <script type=\"text/javascript\" src=\"{{ asset('js/messages.js') }}\"></script>
            {% endif %}
        {% endblock %}
    </body>
</html>";
    }
}
