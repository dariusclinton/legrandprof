<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_a4282e5ae96d232fa3b766194a6fdf02a9485085648b4d8ab99aa11e940191f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87810bd75471610d10257b2b8dfc80fe15d2fc4646717d79d77fe65cc43d339e = $this->env->getExtension("native_profiler");
        $__internal_87810bd75471610d10257b2b8dfc80fe15d2fc4646717d79d77fe65cc43d339e->enter($__internal_87810bd75471610d10257b2b8dfc80fe15d2fc4646717d79d77fe65cc43d339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87810bd75471610d10257b2b8dfc80fe15d2fc4646717d79d77fe65cc43d339e->leave($__internal_87810bd75471610d10257b2b8dfc80fe15d2fc4646717d79d77fe65cc43d339e_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_bb8b09139bca70730b05449be94f9e4e9f035fdf9ce44136c5864a7bd15f8989 = $this->env->getExtension("native_profiler");
        $__internal_bb8b09139bca70730b05449be94f9e4e9f035fdf9ce44136c5864a7bd15f8989->enter($__internal_bb8b09139bca70730b05449be94f9e4e9f035fdf9ce44136c5864a7bd15f8989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_bb8b09139bca70730b05449be94f9e4e9f035fdf9ce44136c5864a7bd15f8989->leave($__internal_bb8b09139bca70730b05449be94f9e4e9f035fdf9ce44136c5864a7bd15f8989_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
";
    }
}
