<?php

/* ::layout.html.twig */
class __TwigTemplate_d9afb7f73911d6d86e238115279bf5d29b5fb224a09ddbda043fc3d5f0d8228f extends Twig_Template
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
        $__internal_e201bc9ed33be703fa6c9c1a63b064bb7edd9a9f13548b16c892e50fc6fa1555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e201bc9ed33be703fa6c9c1a63b064bb7edd9a9f13548b16c892e50fc6fa1555->enter($__internal_e201bc9ed33be703fa6c9c1a63b064bb7edd9a9f13548b16c892e50fc6fa1555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 67
        echo "</head>
<body>
";
        // line 69
        echo twig_include($this->env, $context, "LGPCoreBundle::dialog.html.twig");
        echo "

<!-- start Container Wrapper -->
<div class=\"container-wrapper\">
    ";
        // line 73
        echo twig_include($this->env, $context, "LGPCoreBundle::header.html.twig");
        echo "

    ";
        // line 75
        $this->displayBlock('header_submenu', $context, $blocks);
        // line 76
        echo "
    <div class=\"clear\"></div>

    <div class=\"main-wrapper\">
        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "    </div>

    ";
        // line 83
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
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 165
        echo "</body>
</html>";
        
        $__internal_e201bc9ed33be703fa6c9c1a63b064bb7edd9a9f13548b16c892e50fc6fa1555->leave($__internal_e201bc9ed33be703fa6c9c1a63b064bb7edd9a9f13548b16c892e50fc6fa1555_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_5343c0db5c6205dfa8c3459c5f3f02f57312697188daeb4fd2d5dfc87fd5debc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5343c0db5c6205dfa8c3459c5f3f02f57312697188daeb4fd2d5dfc87fd5debc->enter($__internal_5343c0db5c6205dfa8c3459c5f3f02f57312697188daeb4fd2d5dfc87fd5debc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Le Grand Prof ";
        
        $__internal_5343c0db5c6205dfa8c3459c5f3f02f57312697188daeb4fd2d5dfc87fd5debc->leave($__internal_5343c0db5c6205dfa8c3459c5f3f02f57312697188daeb4fd2d5dfc87fd5debc_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84732c3d9cb1e72156683345788e3a58aa12c6d0fd6205994e588ab349aea6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84732c3d9cb1e72156683345788e3a58aa12c6d0fd6205994e588ab349aea6ce->enter($__internal_84732c3d9cb1e72156683345788e3a58aa12c6d0fd6205994e588ab349aea6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <!-- CSS Plugins -->
        ";
        // line 31
        echo "
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300'
              rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic'
              rel='stylesheet' type='text/css'>

        <!-- CSS Custom -->
        ";
        // line 42
        echo "

        ";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3a482ce_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_bootstrap.min_1.css");
            // line 58
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_bootstrap-datetimepicker.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_animate_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_main_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_component_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_ionicons_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_font-awesome.min_7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_pe-icon-7-stroke_8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_simple-line-icons_9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_themify-icons_10.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_style_11.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_style_12.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
            // asset "3a482ce_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce_jquery-ui.min_13.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
        } else {
            // asset "3a482ce"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a482ce") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3a482ce.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 60
        echo "
        ";
        // line 62
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ico.png"), "html", null, true);
        echo "\"/>

        <!-- jquery-ui css -->
        ";
        // line 66
        echo "    ";
        
        $__internal_84732c3d9cb1e72156683345788e3a58aa12c6d0fd6205994e588ab349aea6ce->leave($__internal_84732c3d9cb1e72156683345788e3a58aa12c6d0fd6205994e588ab349aea6ce_prof);

    }

    // line 75
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_3e5583d52c3a3e720438ef93e424419b65c497d376a6a899e0db520424973994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5583d52c3a3e720438ef93e424419b65c497d376a6a899e0db520424973994->enter($__internal_3e5583d52c3a3e720438ef93e424419b65c497d376a6a899e0db520424973994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " ";
        
        $__internal_3e5583d52c3a3e720438ef93e424419b65c497d376a6a899e0db520424973994->leave($__internal_3e5583d52c3a3e720438ef93e424419b65c497d376a6a899e0db520424973994_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_46dd73d740ee75f89c466295dc7ca535af64dfbd471161165d314ac5b57af7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dd73d740ee75f89c466295dc7ca535af64dfbd471161165d314ac5b57af7f9->enter($__internal_46dd73d740ee75f89c466295dc7ca535af64dfbd471161165d314ac5b57af7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_46dd73d740ee75f89c466295dc7ca535af64dfbd471161165d314ac5b57af7f9->leave($__internal_46dd73d740ee75f89c466295dc7ca535af64dfbd471161165d314ac5b57af7f9_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a62171609c1b0cb3d9eea77fe8321a5550cbddbdc56534d8fa9e6c0ae80213dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62171609c1b0cb3d9eea77fe8321a5550cbddbdc56534d8fa9e6c0ae80213dd->enter($__internal_a62171609c1b0cb3d9eea77fe8321a5550cbddbdc56534d8fa9e6c0ae80213dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "78c73df_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery-1.11.3.min_1.js");
            // line 123
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery-ui.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery-migrate-1.2.1.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_moment-with-locales.min_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_bootstrap.min_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_bootstrap-datetimepicker.min_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery.waypoints.min_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery.easing.1.3_8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_SmoothScroll.min_9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery.slicknav.min_10.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery.placeholder.min_11.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_spin.min_12.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery.introLoader.min_13.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_select2.full_14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery.responsivegrid_15.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_ion.rangeSlider.min_16.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_readmore.min_17.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_slick.min_18.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_18") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_validator.min_19.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_19") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_jquery.raty_20.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_20") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_customs_21.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_21") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_user_22.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_22") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_addToCart_23.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_23") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_search_24.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_24") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_loadData_25.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_25") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_router_26.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_26") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_avis_27.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78c73df_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df_27") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df_messages_28.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "78c73df"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78c73df") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78c73df.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 125
        echo "
    ";
        // line 151
        echo "
    <script src=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    ";
        
        $__internal_a62171609c1b0cb3d9eea77fe8321a5550cbddbdc56534d8fa9e6c0ae80213dd->leave($__internal_a62171609c1b0cb3d9eea77fe8321a5550cbddbdc56534d8fa9e6c0ae80213dd_prof);

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
        return array (  463 => 152,  460 => 151,  457 => 125,  281 => 123,  276 => 94,  270 => 93,  258 => 80,  246 => 75,  239 => 66,  232 => 62,  229 => 60,  143 => 58,  139 => 44,  135 => 42,  123 => 31,  120 => 17,  114 => 16,  102 => 8,  94 => 165,  92 => 93,  79 => 83,  75 => 81,  73 => 80,  67 => 76,  65 => 75,  60 => 73,  53 => 69,  49 => 67,  47 => 16,  36 => 8,  27 => 1,);
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
        {#<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" media=\"screen\">
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
        <link rel=\"stylesheet\" href=\"{{ asset('icons/rivolicons/style.css') }}\">#}

        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300'
              rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic'
              rel='stylesheet' type='text/css'>

        <!-- CSS Custom -->
        {#<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">#}


        {% stylesheets filter='cssrewrite, ?scssphp'
        'bootstrap/css/bootstrap.min.css'
        'bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'
        'css/animate.css'
        'css/main.css'
        'css/component.css'
        'icons/ionicons/css/ionicons.css'
        'icons/font-awesome-4.6.3/css/font-awesome.min.css'
        'icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css'
        'icons/simple-line-icons/css/simple-line-icons.css'
        'icons/themify-icons/themify-icons.css'
        'icons/rivolicons/style.css'
        'css/style.css'
        'jquery-ui-1.12.0/jquery-ui.min.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\"/>
        {% endstylesheets %}

        {# icon #}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('ico.png') }}\"/>

        <!-- jquery-ui css -->
        {#<link href=\"{{ asset('jquery-ui-1.12.0/jquery-ui.min.css') }}\" rel=\"stylesheet\"/>#}
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
    {% javascripts filter='?jsqueeze'
    'js/jquery-1.11.3.min.js'
    'jquery-ui-1.12.0/jquery-ui.min.js'
    'js/jquery-migrate-1.2.1.min.js'
    'bootstrap-datetimepicker/moment/moment-with-locales.min.js'
    'bootstrap/js/bootstrap.min.js'
    'bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'
    'js/jquery.waypoints.min.js'
    'js/jquery.easing.1.3.js'
    'js/SmoothScroll.min.js'
    'js/jquery.slicknav.min.js'
    'js/jquery.placeholder.min.js'
    'js/spin.min.js'
    'js/jquery.introLoader.min.js'
    'js/select2.full.js'
    'js/jquery.responsivegrid.js'
    'js/ion.rangeSlider.min.js'
    'js/readmore.min.js'
    'js/slick.min.js'
    'js/validator.min.js'
    'js/jquery.raty.js'
    'js/customs.js'
    'js/user.js'
    'js/addToCart.js'
    'js/search.js'
    'js/loadData.js'
    'bundles/fosjsrouting/js/router.js'
    'js/avis.js'
    'js/messages.js' %}
    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

    {#<script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.11.3.min.js') }}\"></script>
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
    <script type=\"text/javascript\" src=\"{{ asset('js/select2.full.js') }}\"></script>
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
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>#}

    <script src=\"{{ path('fos_js_routing_js', { 'callback': 'fos.Router.setData' }) }}\"></script>

    {#{% if is_granted('ROLE_USER') %}
        {% javascripts filter='?jsqueeze'
        'js/avis.js'
        'js/messages.js' %}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}

        #}{#<script type=\"text/javascript\" src=\"{{ asset('js/avis.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/messages.js') }}\"></script>#}{#
    {% endif %}#}
{% endblock %}
</body>
</html>";
    }
}
