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
        $__internal_58bc404b0279e5fcb4392588347803121c2b414c47ea1bee43548509047cf5ce = $this->env->getExtension("native_profiler");
        $__internal_58bc404b0279e5fcb4392588347803121c2b414c47ea1bee43548509047cf5ce->enter($__internal_58bc404b0279e5fcb4392588347803121c2b414c47ea1bee43548509047cf5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58bc404b0279e5fcb4392588347803121c2b414c47ea1bee43548509047cf5ce->leave($__internal_58bc404b0279e5fcb4392588347803121c2b414c47ea1bee43548509047cf5ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3826dd03200f2510a5433c2065631e7e34356e458a88a7fdb095e28dd5e543ad = $this->env->getExtension("native_profiler");
        $__internal_3826dd03200f2510a5433c2065631e7e34356e458a88a7fdb095e28dd5e543ad->enter($__internal_3826dd03200f2510a5433c2065631e7e34356e458a88a7fdb095e28dd5e543ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3826dd03200f2510a5433c2065631e7e34356e458a88a7fdb095e28dd5e543ad->leave($__internal_3826dd03200f2510a5433c2065631e7e34356e458a88a7fdb095e28dd5e543ad_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_04d2afb2ba216695ba1a4911a20e3b3d50c458552b192f4e00ddaaa377222c41 = $this->env->getExtension("native_profiler");
        $__internal_04d2afb2ba216695ba1a4911a20e3b3d50c458552b192f4e00ddaaa377222c41->enter($__internal_04d2afb2ba216695ba1a4911a20e3b3d50c458552b192f4e00ddaaa377222c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_04d2afb2ba216695ba1a4911a20e3b3d50c458552b192f4e00ddaaa377222c41->leave($__internal_04d2afb2ba216695ba1a4911a20e3b3d50c458552b192f4e00ddaaa377222c41_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_858b4bacee0adc3f2f7dbb1073cb92fcb8dceba68d26568dc804ddd4806b7a42 = $this->env->getExtension("native_profiler");
        $__internal_858b4bacee0adc3f2f7dbb1073cb92fcb8dceba68d26568dc804ddd4806b7a42->enter($__internal_858b4bacee0adc3f2f7dbb1073cb92fcb8dceba68d26568dc804ddd4806b7a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_858b4bacee0adc3f2f7dbb1073cb92fcb8dceba68d26568dc804ddd4806b7a42->leave($__internal_858b4bacee0adc3f2f7dbb1073cb92fcb8dceba68d26568dc804ddd4806b7a42_prof);

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
