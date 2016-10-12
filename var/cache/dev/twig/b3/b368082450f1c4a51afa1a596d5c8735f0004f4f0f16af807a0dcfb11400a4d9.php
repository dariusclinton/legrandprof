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
        $__internal_a9d09f307de740e8578db45049b3805bd375e18061585545fd9871965a178302 = $this->env->getExtension("native_profiler");
        $__internal_a9d09f307de740e8578db45049b3805bd375e18061585545fd9871965a178302->enter($__internal_a9d09f307de740e8578db45049b3805bd375e18061585545fd9871965a178302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d09f307de740e8578db45049b3805bd375e18061585545fd9871965a178302->leave($__internal_a9d09f307de740e8578db45049b3805bd375e18061585545fd9871965a178302_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a20c46cc25411f3433a28e278ae645f7adc1e6e5b630c096282caee95511d61 = $this->env->getExtension("native_profiler");
        $__internal_8a20c46cc25411f3433a28e278ae645f7adc1e6e5b630c096282caee95511d61->enter($__internal_8a20c46cc25411f3433a28e278ae645f7adc1e6e5b630c096282caee95511d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8a20c46cc25411f3433a28e278ae645f7adc1e6e5b630c096282caee95511d61->leave($__internal_8a20c46cc25411f3433a28e278ae645f7adc1e6e5b630c096282caee95511d61_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_3cb7e6944e812e58e39db5737a64415b2fd06197ae078527c64e455fbb1eeeaa = $this->env->getExtension("native_profiler");
        $__internal_3cb7e6944e812e58e39db5737a64415b2fd06197ae078527c64e455fbb1eeeaa->enter($__internal_3cb7e6944e812e58e39db5737a64415b2fd06197ae078527c64e455fbb1eeeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_3cb7e6944e812e58e39db5737a64415b2fd06197ae078527c64e455fbb1eeeaa->leave($__internal_3cb7e6944e812e58e39db5737a64415b2fd06197ae078527c64e455fbb1eeeaa_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e96e5597895a854108c7540d4f22719f4adb233b7662a79962b5dccab2b1d218 = $this->env->getExtension("native_profiler");
        $__internal_e96e5597895a854108c7540d4f22719f4adb233b7662a79962b5dccab2b1d218->enter($__internal_e96e5597895a854108c7540d4f22719f4adb233b7662a79962b5dccab2b1d218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_e96e5597895a854108c7540d4f22719f4adb233b7662a79962b5dccab2b1d218->leave($__internal_e96e5597895a854108c7540d4f22719f4adb233b7662a79962b5dccab2b1d218_prof);

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
