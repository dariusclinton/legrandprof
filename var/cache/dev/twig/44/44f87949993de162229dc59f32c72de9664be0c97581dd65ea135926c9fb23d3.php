<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_f62dc96d408c5467e571bb683362c9c1f9fb4d82d053df446ca90f4609ddae3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22c0b0f531ef74b9aef55332c8f91b2dc5724cdf919752516c20e828d8b3fc48 = $this->env->getExtension("native_profiler");
        $__internal_22c0b0f531ef74b9aef55332c8f91b2dc5724cdf919752516c20e828d8b3fc48->enter($__internal_22c0b0f531ef74b9aef55332c8f91b2dc5724cdf919752516c20e828d8b3fc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c0b0f531ef74b9aef55332c8f91b2dc5724cdf919752516c20e828d8b3fc48->leave($__internal_22c0b0f531ef74b9aef55332c8f91b2dc5724cdf919752516c20e828d8b3fc48_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d4e88cbeff8bbd3fb5d9f1b92700064babb3cd954e2883e3481e057d07756930 = $this->env->getExtension("native_profiler");
        $__internal_d4e88cbeff8bbd3fb5d9f1b92700064babb3cd954e2883e3481e057d07756930->enter($__internal_d4e88cbeff8bbd3fb5d9f1b92700064babb3cd954e2883e3481e057d07756930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_d4e88cbeff8bbd3fb5d9f1b92700064babb3cd954e2883e3481e057d07756930->leave($__internal_d4e88cbeff8bbd3fb5d9f1b92700064babb3cd954e2883e3481e057d07756930_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
";
    }
}
