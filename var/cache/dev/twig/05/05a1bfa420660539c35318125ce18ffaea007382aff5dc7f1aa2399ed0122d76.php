<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_d971b46b741e9b3115bb1420653d89e0b058f86415e9402794866fa8ee1b617f extends Twig_Template
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
        $__internal_6d573412c80cc821bbdb0087b1839c0139b8f001eb386c824d1919376a7ad629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d573412c80cc821bbdb0087b1839c0139b8f001eb386c824d1919376a7ad629->enter($__internal_6d573412c80cc821bbdb0087b1839c0139b8f001eb386c824d1919376a7ad629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_6d573412c80cc821bbdb0087b1839c0139b8f001eb386c824d1919376a7ad629->leave($__internal_6d573412c80cc821bbdb0087b1839c0139b8f001eb386c824d1919376a7ad629_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c17700d11bae9e00477c7dc136dbad93de0524a12b3763be5880eae2606db38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c17700d11bae9e00477c7dc136dbad93de0524a12b3763be5880eae2606db38->enter($__internal_4c17700d11bae9e00477c7dc136dbad93de0524a12b3763be5880eae2606db38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_4c17700d11bae9e00477c7dc136dbad93de0524a12b3763be5880eae2606db38->leave($__internal_4c17700d11bae9e00477c7dc136dbad93de0524a12b3763be5880eae2606db38_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_398ce25cb85cd537eadd7f332aeb1f238409e6cedcb207e2a027d078b1bff4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398ce25cb85cd537eadd7f332aeb1f238409e6cedcb207e2a027d078b1bff4b9->enter($__internal_398ce25cb85cd537eadd7f332aeb1f238409e6cedcb207e2a027d078b1bff4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_398ce25cb85cd537eadd7f332aeb1f238409e6cedcb207e2a027d078b1bff4b9->leave($__internal_398ce25cb85cd537eadd7f332aeb1f238409e6cedcb207e2a027d078b1bff4b9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77ec06a4cafaeab68286cbff86eb274a72f3bf92d4ec6071f07423eb508ad19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77ec06a4cafaeab68286cbff86eb274a72f3bf92d4ec6071f07423eb508ad19->enter($__internal_f77ec06a4cafaeab68286cbff86eb274a72f3bf92d4ec6071f07423eb508ad19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_f77ec06a4cafaeab68286cbff86eb274a72f3bf92d4ec6071f07423eb508ad19->leave($__internal_f77ec06a4cafaeab68286cbff86eb274a72f3bf92d4ec6071f07423eb508ad19_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_907381005716f59df415d459c03221007c835fc5fe648f3d8fa9091d0a9e1798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907381005716f59df415d459c03221007c835fc5fe648f3d8fa9091d0a9e1798->enter($__internal_907381005716f59df415d459c03221007c835fc5fe648f3d8fa9091d0a9e1798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_907381005716f59df415d459c03221007c835fc5fe648f3d8fa9091d0a9e1798->leave($__internal_907381005716f59df415d459c03221007c835fc5fe648f3d8fa9091d0a9e1798_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
";
    }
}
