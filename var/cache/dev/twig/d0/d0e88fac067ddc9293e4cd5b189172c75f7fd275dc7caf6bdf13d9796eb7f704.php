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
        $__internal_b55439fcff457b050b3871221b00ba4d71f22e5b04b682f2b59e90e76823730d = $this->env->getExtension("native_profiler");
        $__internal_b55439fcff457b050b3871221b00ba4d71f22e5b04b682f2b59e90e76823730d->enter($__internal_b55439fcff457b050b3871221b00ba4d71f22e5b04b682f2b59e90e76823730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b55439fcff457b050b3871221b00ba4d71f22e5b04b682f2b59e90e76823730d->leave($__internal_b55439fcff457b050b3871221b00ba4d71f22e5b04b682f2b59e90e76823730d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d58186b3d5231161f4f3f22c332cdd59642698ebbbbd220dc1bd1f943519c853 = $this->env->getExtension("native_profiler");
        $__internal_d58186b3d5231161f4f3f22c332cdd59642698ebbbbd220dc1bd1f943519c853->enter($__internal_d58186b3d5231161f4f3f22c332cdd59642698ebbbbd220dc1bd1f943519c853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d58186b3d5231161f4f3f22c332cdd59642698ebbbbd220dc1bd1f943519c853->leave($__internal_d58186b3d5231161f4f3f22c332cdd59642698ebbbbd220dc1bd1f943519c853_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_629d84384016791c7c63d01f0e7f041e5edf0f6f65188415a4eff02ae5c92d42 = $this->env->getExtension("native_profiler");
        $__internal_629d84384016791c7c63d01f0e7f041e5edf0f6f65188415a4eff02ae5c92d42->enter($__internal_629d84384016791c7c63d01f0e7f041e5edf0f6f65188415a4eff02ae5c92d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_629d84384016791c7c63d01f0e7f041e5edf0f6f65188415a4eff02ae5c92d42->leave($__internal_629d84384016791c7c63d01f0e7f041e5edf0f6f65188415a4eff02ae5c92d42_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_647270c2beb4356694b7ce8acd9e51daa4f0743251bd459df191bbf188a79fe8 = $this->env->getExtension("native_profiler");
        $__internal_647270c2beb4356694b7ce8acd9e51daa4f0743251bd459df191bbf188a79fe8->enter($__internal_647270c2beb4356694b7ce8acd9e51daa4f0743251bd459df191bbf188a79fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_647270c2beb4356694b7ce8acd9e51daa4f0743251bd459df191bbf188a79fe8->leave($__internal_647270c2beb4356694b7ce8acd9e51daa4f0743251bd459df191bbf188a79fe8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb73bf42410592b9fe52f0311dfbf8cf9cae516d0dad356c60b151bb5deb1706 = $this->env->getExtension("native_profiler");
        $__internal_eb73bf42410592b9fe52f0311dfbf8cf9cae516d0dad356c60b151bb5deb1706->enter($__internal_eb73bf42410592b9fe52f0311dfbf8cf9cae516d0dad356c60b151bb5deb1706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb73bf42410592b9fe52f0311dfbf8cf9cae516d0dad356c60b151bb5deb1706->leave($__internal_eb73bf42410592b9fe52f0311dfbf8cf9cae516d0dad356c60b151bb5deb1706_prof);

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
