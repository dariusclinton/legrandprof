<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_f92612dfd8332aaae6879a53e83d53bf8fc12f0db5a1bbca30eb5967a45aa042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_3d55993f4a30d81a072b6ce81468822e7268412df5eada96d4c23ce6a7931617 = $this->env->getExtension("native_profiler");
        $__internal_3d55993f4a30d81a072b6ce81468822e7268412df5eada96d4c23ce6a7931617->enter($__internal_3d55993f4a30d81a072b6ce81468822e7268412df5eada96d4c23ce6a7931617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d55993f4a30d81a072b6ce81468822e7268412df5eada96d4c23ce6a7931617->leave($__internal_3d55993f4a30d81a072b6ce81468822e7268412df5eada96d4c23ce6a7931617_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bc6cd12aa0c73cdef84aab9388e811251cb180479f9dca7c1ae7788f92ea782b = $this->env->getExtension("native_profiler");
        $__internal_bc6cd12aa0c73cdef84aab9388e811251cb180479f9dca7c1ae7788f92ea782b->enter($__internal_bc6cd12aa0c73cdef84aab9388e811251cb180479f9dca7c1ae7788f92ea782b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_bc6cd12aa0c73cdef84aab9388e811251cb180479f9dca7c1ae7788f92ea782b->leave($__internal_bc6cd12aa0c73cdef84aab9388e811251cb180479f9dca7c1ae7788f92ea782b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}
