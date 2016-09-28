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
        $__internal_2b63d10137e0c4752b49b209227e414725bf365c06bf48ddc9a531cf3b32acdb = $this->env->getExtension("native_profiler");
        $__internal_2b63d10137e0c4752b49b209227e414725bf365c06bf48ddc9a531cf3b32acdb->enter($__internal_2b63d10137e0c4752b49b209227e414725bf365c06bf48ddc9a531cf3b32acdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b63d10137e0c4752b49b209227e414725bf365c06bf48ddc9a531cf3b32acdb->leave($__internal_2b63d10137e0c4752b49b209227e414725bf365c06bf48ddc9a531cf3b32acdb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac896fc33cd901d0c1d4f67574531468ae3b14ff623f8efdd5b3c9636298a7b = $this->env->getExtension("native_profiler");
        $__internal_5ac896fc33cd901d0c1d4f67574531468ae3b14ff623f8efdd5b3c9636298a7b->enter($__internal_5ac896fc33cd901d0c1d4f67574531468ae3b14ff623f8efdd5b3c9636298a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5ac896fc33cd901d0c1d4f67574531468ae3b14ff623f8efdd5b3c9636298a7b->leave($__internal_5ac896fc33cd901d0c1d4f67574531468ae3b14ff623f8efdd5b3c9636298a7b_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_751094a5183d1e9600c100158357800dcf83d6f5fedcc382a2fe123764164e10 = $this->env->getExtension("native_profiler");
        $__internal_751094a5183d1e9600c100158357800dcf83d6f5fedcc382a2fe123764164e10->enter($__internal_751094a5183d1e9600c100158357800dcf83d6f5fedcc382a2fe123764164e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_751094a5183d1e9600c100158357800dcf83d6f5fedcc382a2fe123764164e10->leave($__internal_751094a5183d1e9600c100158357800dcf83d6f5fedcc382a2fe123764164e10_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad6521fd9dc76f28ece8ec28a269910c26902d80cdafb9d11effbd411b258ffd = $this->env->getExtension("native_profiler");
        $__internal_ad6521fd9dc76f28ece8ec28a269910c26902d80cdafb9d11effbd411b258ffd->enter($__internal_ad6521fd9dc76f28ece8ec28a269910c26902d80cdafb9d11effbd411b258ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_ad6521fd9dc76f28ece8ec28a269910c26902d80cdafb9d11effbd411b258ffd->leave($__internal_ad6521fd9dc76f28ece8ec28a269910c26902d80cdafb9d11effbd411b258ffd_prof);

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
