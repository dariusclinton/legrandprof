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
        $__internal_5c24373ee157ef4954fb4af44d178baed549bbaf22974ae5f7023de5ac6dfb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c24373ee157ef4954fb4af44d178baed549bbaf22974ae5f7023de5ac6dfb31->enter($__internal_5c24373ee157ef4954fb4af44d178baed549bbaf22974ae5f7023de5ac6dfb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_5c24373ee157ef4954fb4af44d178baed549bbaf22974ae5f7023de5ac6dfb31->leave($__internal_5c24373ee157ef4954fb4af44d178baed549bbaf22974ae5f7023de5ac6dfb31_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3939df38c1c176cec62f9db6191253c770eea0bbc92670dd3ff517a8d857499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3939df38c1c176cec62f9db6191253c770eea0bbc92670dd3ff517a8d857499->enter($__internal_b3939df38c1c176cec62f9db6191253c770eea0bbc92670dd3ff517a8d857499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_b3939df38c1c176cec62f9db6191253c770eea0bbc92670dd3ff517a8d857499->leave($__internal_b3939df38c1c176cec62f9db6191253c770eea0bbc92670dd3ff517a8d857499_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e93e26180b51f7aed723218c275d677f3d8f57e7b8f1c5f961f5835098ee91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e93e26180b51f7aed723218c275d677f3d8f57e7b8f1c5f961f5835098ee91f->enter($__internal_7e93e26180b51f7aed723218c275d677f3d8f57e7b8f1c5f961f5835098ee91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_7e93e26180b51f7aed723218c275d677f3d8f57e7b8f1c5f961f5835098ee91f->leave($__internal_7e93e26180b51f7aed723218c275d677f3d8f57e7b8f1c5f961f5835098ee91f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_036506d495eb8b474bb198d6fab3dcc252c713c83a24e8a3d6315dc88a33a525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036506d495eb8b474bb198d6fab3dcc252c713c83a24e8a3d6315dc88a33a525->enter($__internal_036506d495eb8b474bb198d6fab3dcc252c713c83a24e8a3d6315dc88a33a525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_036506d495eb8b474bb198d6fab3dcc252c713c83a24e8a3d6315dc88a33a525->leave($__internal_036506d495eb8b474bb198d6fab3dcc252c713c83a24e8a3d6315dc88a33a525_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa767616cce5884b77ff34b96b291caee2caefc6ad809648620fd99464c85d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa767616cce5884b77ff34b96b291caee2caefc6ad809648620fd99464c85d40->enter($__internal_aa767616cce5884b77ff34b96b291caee2caefc6ad809648620fd99464c85d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_aa767616cce5884b77ff34b96b291caee2caefc6ad809648620fd99464c85d40->leave($__internal_aa767616cce5884b77ff34b96b291caee2caefc6ad809648620fd99464c85d40_prof);

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
