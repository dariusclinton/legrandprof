<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f2a5de01ba010fcd15bc6462fc40360a950993ec82b749ee7b4235f1a273d293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3d6940d3aeceb40333bf628683e8bd31ddfa5440b2c212c44b8a864603a569b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d6940d3aeceb40333bf628683e8bd31ddfa5440b2c212c44b8a864603a569b->enter($__internal_f3d6940d3aeceb40333bf628683e8bd31ddfa5440b2c212c44b8a864603a569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d6940d3aeceb40333bf628683e8bd31ddfa5440b2c212c44b8a864603a569b->leave($__internal_f3d6940d3aeceb40333bf628683e8bd31ddfa5440b2c212c44b8a864603a569b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5852b7f9124a0f2602d7d3bd2d90738f52eba0dbdfd50818cd46a8374ee929b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5852b7f9124a0f2602d7d3bd2d90738f52eba0dbdfd50818cd46a8374ee929b->enter($__internal_d5852b7f9124a0f2602d7d3bd2d90738f52eba0dbdfd50818cd46a8374ee929b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_d5852b7f9124a0f2602d7d3bd2d90738f52eba0dbdfd50818cd46a8374ee929b->leave($__internal_d5852b7f9124a0f2602d7d3bd2d90738f52eba0dbdfd50818cd46a8374ee929b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
