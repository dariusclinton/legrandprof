<?php

/* ::layout.html.twig */
class __TwigTemplate_d18df7d18504c630bb8990b6b8e6ecaf8cf4471dd84e515bded03e19049cbd0a extends Twig_Template
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

    <meta name=\"description\" content=\"Template legrandprof\"/>
    <meta name=\"keywords\" content=\"legrandprof, prof, soutien scolaire, mathématiques\"/>
    <meta name=\"author\" content=\"legrandprof\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">


    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "</head>
<body>
";
        // line 56
        echo twig_include($this->env, $context, "LGPCoreBundle::dialog.html.twig");
        echo "

<!-- start Container Wrapper -->
<div class=\"container-wrapper\">
    ";
        // line 60
        echo twig_include($this->env, $context, "LGPCoreBundle::header.html.twig");
        echo "

    ";
        // line 62
        $this->displayBlock('header_submenu', $context, $blocks);
        // line 63
        echo "
    <div class=\"clear\"></div>

    <div class=\"main-wrapper\">
        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "    </div>

    ";
        // line 70
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
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo " Le Grand Prof ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        <!-- CSS Plugins -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\">
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"";
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
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300'
              rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic'
              rel='stylesheet' type='text/css'>

        <!-- CSS Custom -->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


       ";
        // line 47
        echo "
        ";
        // line 49
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("ico.png"), "html", null, true);
        echo "\"/>

        <!-- jquery-ui css -->
        <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.12.0/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    ";
    }

    // line 62
    public function block_header_submenu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.12.0/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-datetimepicker/moment/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.responsivegrid.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/validator.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.raty.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/customs.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/user.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/addToCart.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loadData.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    ";
        // line 107
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 108
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/avis.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/messages.js"), "html", null, true);
            echo "\"></script>
    ";
        }
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
        return array (  297 => 109,  292 => 108,  290 => 107,  285 => 105,  281 => 104,  277 => 103,  273 => 102,  269 => 101,  264 => 99,  260 => 98,  256 => 97,  252 => 96,  248 => 95,  244 => 94,  240 => 93,  236 => 92,  232 => 91,  228 => 90,  223 => 88,  218 => 86,  214 => 85,  209 => 83,  205 => 82,  200 => 81,  197 => 80,  191 => 67,  185 => 62,  179 => 52,  172 => 49,  169 => 47,  163 => 40,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  108 => 18,  105 => 17,  102 => 16,  96 => 8,  91 => 112,  89 => 80,  76 => 70,  72 => 68,  70 => 67,  64 => 63,  62 => 62,  57 => 60,  50 => 56,  46 => 54,  44 => 16,  33 => 8,  24 => 1,);
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

    <meta name=\"description\" content=\"Template legrandprof\"/>
    <meta name=\"keywords\" content=\"legrandprof, prof, soutien scolaire, mathématiques\"/>
    <meta name=\"author\" content=\"legrandprof\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">


    {% block stylesheets %}
        <!-- CSS Plugins -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" media=\"screen\">
        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"{{ asset('bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}\" media=\"screen\">
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
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300'
              rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic'
              rel='stylesheet' type='text/css'>

        <!-- CSS Custom -->
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">


       {# {% stylesheets
        'css/style.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\"/>
        {% endstylesheets %}#}

        {# icon #}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('ico.png') }}\"/>

        <!-- jquery-ui css -->
        <link href=\"{{ asset('jquery-ui-1.12.0/jquery-ui.min.css') }}\" rel=\"stylesheet\"/>
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
    <script type=\"text/javascript\"
            src=\"{{ asset('bootstrap-datetimepicker/moment/moment-with-locales.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}\"></script>
    
    <script type=\"text/javascript\" src=\"{{ asset('js/SmoothScroll.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.slicknav.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.placeholder.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.responsivegrid.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/ion.rangeSlider.min.js') }}\"></script>
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
