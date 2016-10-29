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
        $__internal_2d127481ca8bc2a524be0d7840c704c93ed151fe3140050ff39fe23e8a8eb63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d127481ca8bc2a524be0d7840c704c93ed151fe3140050ff39fe23e8a8eb63b->enter($__internal_2d127481ca8bc2a524be0d7840c704c93ed151fe3140050ff39fe23e8a8eb63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_2d127481ca8bc2a524be0d7840c704c93ed151fe3140050ff39fe23e8a8eb63b->leave($__internal_2d127481ca8bc2a524be0d7840c704c93ed151fe3140050ff39fe23e8a8eb63b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b81dbbf7d175cff4b96aa697f9757fb864598b2f2bcc7bca499fd99fcb304a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81dbbf7d175cff4b96aa697f9757fb864598b2f2bcc7bca499fd99fcb304a7d->enter($__internal_b81dbbf7d175cff4b96aa697f9757fb864598b2f2bcc7bca499fd99fcb304a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_b81dbbf7d175cff4b96aa697f9757fb864598b2f2bcc7bca499fd99fcb304a7d->leave($__internal_b81dbbf7d175cff4b96aa697f9757fb864598b2f2bcc7bca499fd99fcb304a7d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb4d26c62c101b9a0406dfe6214ff8d1caeefd34b457f78aa11515b51f4bcfe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4d26c62c101b9a0406dfe6214ff8d1caeefd34b457f78aa11515b51f4bcfe5->enter($__internal_fb4d26c62c101b9a0406dfe6214ff8d1caeefd34b457f78aa11515b51f4bcfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_fb4d26c62c101b9a0406dfe6214ff8d1caeefd34b457f78aa11515b51f4bcfe5->leave($__internal_fb4d26c62c101b9a0406dfe6214ff8d1caeefd34b457f78aa11515b51f4bcfe5_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eb735aabaf9dedff7a0aeb9e084c9a03e9bbd507764af7b8377fbf261c46144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb735aabaf9dedff7a0aeb9e084c9a03e9bbd507764af7b8377fbf261c46144->enter($__internal_6eb735aabaf9dedff7a0aeb9e084c9a03e9bbd507764af7b8377fbf261c46144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_6eb735aabaf9dedff7a0aeb9e084c9a03e9bbd507764af7b8377fbf261c46144->leave($__internal_6eb735aabaf9dedff7a0aeb9e084c9a03e9bbd507764af7b8377fbf261c46144_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5eb0e8fe8d6b7a9652b69f3ba59d687a38f75ad909a723a2924154a5e19668d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb0e8fe8d6b7a9652b69f3ba59d687a38f75ad909a723a2924154a5e19668d6->enter($__internal_5eb0e8fe8d6b7a9652b69f3ba59d687a38f75ad909a723a2924154a5e19668d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5eb0e8fe8d6b7a9652b69f3ba59d687a38f75ad909a723a2924154a5e19668d6->leave($__internal_5eb0e8fe8d6b7a9652b69f3ba59d687a38f75ad909a723a2924154a5e19668d6_prof);

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
