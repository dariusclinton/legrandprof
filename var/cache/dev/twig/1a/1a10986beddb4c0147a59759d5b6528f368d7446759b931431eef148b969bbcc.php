<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_0b9609de6aa7f9e83cb845a2db032a5b177d05c597b4686417e95346be8f9c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2471cbbeb414e52faa431fea0d6c8688cc45488e17ed76879f38243daf1dde3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2471cbbeb414e52faa431fea0d6c8688cc45488e17ed76879f38243daf1dde3a->enter($__internal_2471cbbeb414e52faa431fea0d6c8688cc45488e17ed76879f38243daf1dde3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2471cbbeb414e52faa431fea0d6c8688cc45488e17ed76879f38243daf1dde3a->leave($__internal_2471cbbeb414e52faa431fea0d6c8688cc45488e17ed76879f38243daf1dde3a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9efa1773697c01514887def59ecc0fae144300abec85dc4dc12479d586b968be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efa1773697c01514887def59ecc0fae144300abec85dc4dc12479d586b968be->enter($__internal_9efa1773697c01514887def59ecc0fae144300abec85dc4dc12479d586b968be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_9efa1773697c01514887def59ecc0fae144300abec85dc4dc12479d586b968be->leave($__internal_9efa1773697c01514887def59ecc0fae144300abec85dc4dc12479d586b968be_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

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
