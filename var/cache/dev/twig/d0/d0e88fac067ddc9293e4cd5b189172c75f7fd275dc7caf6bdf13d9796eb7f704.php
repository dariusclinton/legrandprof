<?php

/* ::base.html.twig */
class __TwigTemplate_7a2f2d95223c043aa62cb0a1e1e226295a550e70246b38a27b6b2e05caeedbe6 extends Twig_Template
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
        $__internal_c2d819a4d136d06b1e48d3f466e021dae15781e92df7f73961f14d889de8ea9c = $this->env->getExtension("native_profiler");
        $__internal_c2d819a4d136d06b1e48d3f466e021dae15781e92df7f73961f14d889de8ea9c->enter($__internal_c2d819a4d136d06b1e48d3f466e021dae15781e92df7f73961f14d889de8ea9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c2d819a4d136d06b1e48d3f466e021dae15781e92df7f73961f14d889de8ea9c->leave($__internal_c2d819a4d136d06b1e48d3f466e021dae15781e92df7f73961f14d889de8ea9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e6bc79a9ff4193cc28bc18c2b34d0a6e734a4eeee1c1b87b342036b6e6c82cd = $this->env->getExtension("native_profiler");
        $__internal_2e6bc79a9ff4193cc28bc18c2b34d0a6e734a4eeee1c1b87b342036b6e6c82cd->enter($__internal_2e6bc79a9ff4193cc28bc18c2b34d0a6e734a4eeee1c1b87b342036b6e6c82cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e6bc79a9ff4193cc28bc18c2b34d0a6e734a4eeee1c1b87b342036b6e6c82cd->leave($__internal_2e6bc79a9ff4193cc28bc18c2b34d0a6e734a4eeee1c1b87b342036b6e6c82cd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6db1d188a0dae91cb685232737576637f391dabea1d640f55d6f9f3289f4b0c9 = $this->env->getExtension("native_profiler");
        $__internal_6db1d188a0dae91cb685232737576637f391dabea1d640f55d6f9f3289f4b0c9->enter($__internal_6db1d188a0dae91cb685232737576637f391dabea1d640f55d6f9f3289f4b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6db1d188a0dae91cb685232737576637f391dabea1d640f55d6f9f3289f4b0c9->leave($__internal_6db1d188a0dae91cb685232737576637f391dabea1d640f55d6f9f3289f4b0c9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7434f2d7f6127d976b74317338acfaf288499894d70046e49a7b922c810e4a7 = $this->env->getExtension("native_profiler");
        $__internal_e7434f2d7f6127d976b74317338acfaf288499894d70046e49a7b922c810e4a7->enter($__internal_e7434f2d7f6127d976b74317338acfaf288499894d70046e49a7b922c810e4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7434f2d7f6127d976b74317338acfaf288499894d70046e49a7b922c810e4a7->leave($__internal_e7434f2d7f6127d976b74317338acfaf288499894d70046e49a7b922c810e4a7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d9ddf378cf94194c11f58e64a3429a7f531c4bfb4289f855ccbf79afa640aa1 = $this->env->getExtension("native_profiler");
        $__internal_0d9ddf378cf94194c11f58e64a3429a7f531c4bfb4289f855ccbf79afa640aa1->enter($__internal_0d9ddf378cf94194c11f58e64a3429a7f531c4bfb4289f855ccbf79afa640aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d9ddf378cf94194c11f58e64a3429a7f531c4bfb4289f855ccbf79afa640aa1->leave($__internal_0d9ddf378cf94194c11f58e64a3429a7f531c4bfb4289f855ccbf79afa640aa1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
