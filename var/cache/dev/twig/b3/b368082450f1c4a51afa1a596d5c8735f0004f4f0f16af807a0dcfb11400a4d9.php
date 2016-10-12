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
        $__internal_090571c9e6bfda90f052c3f2a630f457920a6a1b7c0e0dc4fc8aa7dab7d5e2e2 = $this->env->getExtension("native_profiler");
        $__internal_090571c9e6bfda90f052c3f2a630f457920a6a1b7c0e0dc4fc8aa7dab7d5e2e2->enter($__internal_090571c9e6bfda90f052c3f2a630f457920a6a1b7c0e0dc4fc8aa7dab7d5e2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090571c9e6bfda90f052c3f2a630f457920a6a1b7c0e0dc4fc8aa7dab7d5e2e2->leave($__internal_090571c9e6bfda90f052c3f2a630f457920a6a1b7c0e0dc4fc8aa7dab7d5e2e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e575e01c687d2e5f54c7b50bc196066bd96d2142d6ef44ecb2fe6e3c4bf2f38e = $this->env->getExtension("native_profiler");
        $__internal_e575e01c687d2e5f54c7b50bc196066bd96d2142d6ef44ecb2fe6e3c4bf2f38e->enter($__internal_e575e01c687d2e5f54c7b50bc196066bd96d2142d6ef44ecb2fe6e3c4bf2f38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e575e01c687d2e5f54c7b50bc196066bd96d2142d6ef44ecb2fe6e3c4bf2f38e->leave($__internal_e575e01c687d2e5f54c7b50bc196066bd96d2142d6ef44ecb2fe6e3c4bf2f38e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_d2f4d886157e2094bcbac880c79ce40694d6d97455c070489ff2a1bd165fb450 = $this->env->getExtension("native_profiler");
        $__internal_d2f4d886157e2094bcbac880c79ce40694d6d97455c070489ff2a1bd165fb450->enter($__internal_d2f4d886157e2094bcbac880c79ce40694d6d97455c070489ff2a1bd165fb450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_d2f4d886157e2094bcbac880c79ce40694d6d97455c070489ff2a1bd165fb450->leave($__internal_d2f4d886157e2094bcbac880c79ce40694d6d97455c070489ff2a1bd165fb450_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_563bc5435f7348893f8324cbe4d3135a0c0782bf6925b0d3261dfeaff7cb217d = $this->env->getExtension("native_profiler");
        $__internal_563bc5435f7348893f8324cbe4d3135a0c0782bf6925b0d3261dfeaff7cb217d->enter($__internal_563bc5435f7348893f8324cbe4d3135a0c0782bf6925b0d3261dfeaff7cb217d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_563bc5435f7348893f8324cbe4d3135a0c0782bf6925b0d3261dfeaff7cb217d->leave($__internal_563bc5435f7348893f8324cbe4d3135a0c0782bf6925b0d3261dfeaff7cb217d_prof);

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
