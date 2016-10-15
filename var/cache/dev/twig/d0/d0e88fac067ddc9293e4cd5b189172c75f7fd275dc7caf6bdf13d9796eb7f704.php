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
        $__internal_32d473fd21730434b3acd1615915e354aff6837b23a0cf0c3fdb546076c6f011 = $this->env->getExtension("native_profiler");
        $__internal_32d473fd21730434b3acd1615915e354aff6837b23a0cf0c3fdb546076c6f011->enter($__internal_32d473fd21730434b3acd1615915e354aff6837b23a0cf0c3fdb546076c6f011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_32d473fd21730434b3acd1615915e354aff6837b23a0cf0c3fdb546076c6f011->leave($__internal_32d473fd21730434b3acd1615915e354aff6837b23a0cf0c3fdb546076c6f011_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d0714b5d26d3cc30481aecc37a93056ca65af1db591974c465025fac8c83143 = $this->env->getExtension("native_profiler");
        $__internal_8d0714b5d26d3cc30481aecc37a93056ca65af1db591974c465025fac8c83143->enter($__internal_8d0714b5d26d3cc30481aecc37a93056ca65af1db591974c465025fac8c83143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8d0714b5d26d3cc30481aecc37a93056ca65af1db591974c465025fac8c83143->leave($__internal_8d0714b5d26d3cc30481aecc37a93056ca65af1db591974c465025fac8c83143_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7abaff26d3e408a35a3c4464820dfece7a025df0e67235f6f3e9f61e9639f90e = $this->env->getExtension("native_profiler");
        $__internal_7abaff26d3e408a35a3c4464820dfece7a025df0e67235f6f3e9f61e9639f90e->enter($__internal_7abaff26d3e408a35a3c4464820dfece7a025df0e67235f6f3e9f61e9639f90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7abaff26d3e408a35a3c4464820dfece7a025df0e67235f6f3e9f61e9639f90e->leave($__internal_7abaff26d3e408a35a3c4464820dfece7a025df0e67235f6f3e9f61e9639f90e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4114aa601d9d75f119badbdfa10b001ef617be9ececd7f7f31eb22510243d065 = $this->env->getExtension("native_profiler");
        $__internal_4114aa601d9d75f119badbdfa10b001ef617be9ececd7f7f31eb22510243d065->enter($__internal_4114aa601d9d75f119badbdfa10b001ef617be9ececd7f7f31eb22510243d065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4114aa601d9d75f119badbdfa10b001ef617be9ececd7f7f31eb22510243d065->leave($__internal_4114aa601d9d75f119badbdfa10b001ef617be9ececd7f7f31eb22510243d065_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4956c5691c6437ec3e37b315e6e3d876cf4a79fb3703b424d37ae427a7c5f572 = $this->env->getExtension("native_profiler");
        $__internal_4956c5691c6437ec3e37b315e6e3d876cf4a79fb3703b424d37ae427a7c5f572->enter($__internal_4956c5691c6437ec3e37b315e6e3d876cf4a79fb3703b424d37ae427a7c5f572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4956c5691c6437ec3e37b315e6e3d876cf4a79fb3703b424d37ae427a7c5f572->leave($__internal_4956c5691c6437ec3e37b315e6e3d876cf4a79fb3703b424d37ae427a7c5f572_prof);

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
