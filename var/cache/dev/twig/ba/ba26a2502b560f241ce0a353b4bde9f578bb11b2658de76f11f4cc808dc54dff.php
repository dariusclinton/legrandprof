<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_39ffd9a3f43aa6c6b16f0d9c0afe7f2a40ac57464c4f0217865219b8124e6208 extends Twig_Template
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
        $__internal_20b2d0eeff0b07cf695f497ecbc55b26dcc217fa5fd066b7da34097632149c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b2d0eeff0b07cf695f497ecbc55b26dcc217fa5fd066b7da34097632149c36->enter($__internal_20b2d0eeff0b07cf695f497ecbc55b26dcc217fa5fd066b7da34097632149c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20b2d0eeff0b07cf695f497ecbc55b26dcc217fa5fd066b7da34097632149c36->leave($__internal_20b2d0eeff0b07cf695f497ecbc55b26dcc217fa5fd066b7da34097632149c36_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bf57a29533dbe8c77c93c6c6d0e586b520b3b7b13d4e25cebe67cb9d8f5002f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf57a29533dbe8c77c93c6c6d0e586b520b3b7b13d4e25cebe67cb9d8f5002f4->enter($__internal_bf57a29533dbe8c77c93c6c6d0e586b520b3b7b13d4e25cebe67cb9d8f5002f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_bf57a29533dbe8c77c93c6c6d0e586b520b3b7b13d4e25cebe67cb9d8f5002f4->leave($__internal_bf57a29533dbe8c77c93c6c6d0e586b520b3b7b13d4e25cebe67cb9d8f5002f4_prof);

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
