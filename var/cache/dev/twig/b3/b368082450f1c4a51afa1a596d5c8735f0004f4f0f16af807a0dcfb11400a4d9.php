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
        $__internal_e34f5133d1b4a2c27208fd99038fe7a7c446fb6d3d998a4a4dfdfd3be50ae4f5 = $this->env->getExtension("native_profiler");
        $__internal_e34f5133d1b4a2c27208fd99038fe7a7c446fb6d3d998a4a4dfdfd3be50ae4f5->enter($__internal_e34f5133d1b4a2c27208fd99038fe7a7c446fb6d3d998a4a4dfdfd3be50ae4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34f5133d1b4a2c27208fd99038fe7a7c446fb6d3d998a4a4dfdfd3be50ae4f5->leave($__internal_e34f5133d1b4a2c27208fd99038fe7a7c446fb6d3d998a4a4dfdfd3be50ae4f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6eb703d9714396cc7181bfc93ff05a686e0806de798a3af6954fc55f4fcb40f5 = $this->env->getExtension("native_profiler");
        $__internal_6eb703d9714396cc7181bfc93ff05a686e0806de798a3af6954fc55f4fcb40f5->enter($__internal_6eb703d9714396cc7181bfc93ff05a686e0806de798a3af6954fc55f4fcb40f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6eb703d9714396cc7181bfc93ff05a686e0806de798a3af6954fc55f4fcb40f5->leave($__internal_6eb703d9714396cc7181bfc93ff05a686e0806de798a3af6954fc55f4fcb40f5_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_512476e50760d37f6265601aaa65e8004b7f4ee0e15344bf42b180360b848157 = $this->env->getExtension("native_profiler");
        $__internal_512476e50760d37f6265601aaa65e8004b7f4ee0e15344bf42b180360b848157->enter($__internal_512476e50760d37f6265601aaa65e8004b7f4ee0e15344bf42b180360b848157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_512476e50760d37f6265601aaa65e8004b7f4ee0e15344bf42b180360b848157->leave($__internal_512476e50760d37f6265601aaa65e8004b7f4ee0e15344bf42b180360b848157_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b32ebf01842d36d00f8734818a74455d741b3edcbe0956ae36a04d5438a3bc5 = $this->env->getExtension("native_profiler");
        $__internal_9b32ebf01842d36d00f8734818a74455d741b3edcbe0956ae36a04d5438a3bc5->enter($__internal_9b32ebf01842d36d00f8734818a74455d741b3edcbe0956ae36a04d5438a3bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_9b32ebf01842d36d00f8734818a74455d741b3edcbe0956ae36a04d5438a3bc5->leave($__internal_9b32ebf01842d36d00f8734818a74455d741b3edcbe0956ae36a04d5438a3bc5_prof);

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
