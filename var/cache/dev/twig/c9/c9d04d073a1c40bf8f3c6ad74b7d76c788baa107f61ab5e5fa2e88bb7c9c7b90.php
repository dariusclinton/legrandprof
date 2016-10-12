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
        $__internal_421873d7fa9c0260c6735e9817b62432821f4b2256e8601ca4332dc4e83c43fd = $this->env->getExtension("native_profiler");
        $__internal_421873d7fa9c0260c6735e9817b62432821f4b2256e8601ca4332dc4e83c43fd->enter($__internal_421873d7fa9c0260c6735e9817b62432821f4b2256e8601ca4332dc4e83c43fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_421873d7fa9c0260c6735e9817b62432821f4b2256e8601ca4332dc4e83c43fd->leave($__internal_421873d7fa9c0260c6735e9817b62432821f4b2256e8601ca4332dc4e83c43fd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_706eb6147b9226f8a5cff8de778d0d22e90157bf990d4270ea03e85423943685 = $this->env->getExtension("native_profiler");
        $__internal_706eb6147b9226f8a5cff8de778d0d22e90157bf990d4270ea03e85423943685->enter($__internal_706eb6147b9226f8a5cff8de778d0d22e90157bf990d4270ea03e85423943685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_706eb6147b9226f8a5cff8de778d0d22e90157bf990d4270ea03e85423943685->leave($__internal_706eb6147b9226f8a5cff8de778d0d22e90157bf990d4270ea03e85423943685_prof);

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
