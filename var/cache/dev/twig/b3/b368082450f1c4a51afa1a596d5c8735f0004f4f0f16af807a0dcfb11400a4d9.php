<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_51ab9805b8091f065e4d7514a5d6b1f7e98186476f1409be8aec14f2662c93ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62199d251d9bd0adaf9f8854f48be9c3cc4d2b1c3fa38db698c65926fb88a876 = $this->env->getExtension("native_profiler");
        $__internal_62199d251d9bd0adaf9f8854f48be9c3cc4d2b1c3fa38db698c65926fb88a876->enter($__internal_62199d251d9bd0adaf9f8854f48be9c3cc4d2b1c3fa38db698c65926fb88a876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62199d251d9bd0adaf9f8854f48be9c3cc4d2b1c3fa38db698c65926fb88a876->leave($__internal_62199d251d9bd0adaf9f8854f48be9c3cc4d2b1c3fa38db698c65926fb88a876_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d5d50b401274bfe6657a04711dc53f71c90b4ec5d69f732db0401731a919f49 = $this->env->getExtension("native_profiler");
        $__internal_9d5d50b401274bfe6657a04711dc53f71c90b4ec5d69f732db0401731a919f49->enter($__internal_9d5d50b401274bfe6657a04711dc53f71c90b4ec5d69f732db0401731a919f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9d5d50b401274bfe6657a04711dc53f71c90b4ec5d69f732db0401731a919f49->leave($__internal_9d5d50b401274bfe6657a04711dc53f71c90b4ec5d69f732db0401731a919f49_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_30d3d44ccfadfa7a788415cfcdbaba56cc0f16d2c1435851db6589b5c6187231 = $this->env->getExtension("native_profiler");
        $__internal_30d3d44ccfadfa7a788415cfcdbaba56cc0f16d2c1435851db6589b5c6187231->enter($__internal_30d3d44ccfadfa7a788415cfcdbaba56cc0f16d2c1435851db6589b5c6187231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_30d3d44ccfadfa7a788415cfcdbaba56cc0f16d2c1435851db6589b5c6187231->leave($__internal_30d3d44ccfadfa7a788415cfcdbaba56cc0f16d2c1435851db6589b5c6187231_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e08d26c0a5c07be6f63ccd04f13f8a0e2adcc4f9df45da724c4dda3b72eaaa0a = $this->env->getExtension("native_profiler");
        $__internal_e08d26c0a5c07be6f63ccd04f13f8a0e2adcc4f9df45da724c4dda3b72eaaa0a->enter($__internal_e08d26c0a5c07be6f63ccd04f13f8a0e2adcc4f9df45da724c4dda3b72eaaa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_e08d26c0a5c07be6f63ccd04f13f8a0e2adcc4f9df45da724c4dda3b72eaaa0a->leave($__internal_e08d26c0a5c07be6f63ccd04f13f8a0e2adcc4f9df45da724c4dda3b72eaaa0a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  79 => 12,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
    {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}
    <div class=\"bg-grey dashboard\">
        {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
    </div>
{% endblock fos_user_content %}
";
    }
}
