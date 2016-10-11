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
        $__internal_e2f0b791ff3a43b4b5bc6fa5a30bc9c5d75b2f1e8a91ebd5a8a49c7993fb5d9c = $this->env->getExtension("native_profiler");
        $__internal_e2f0b791ff3a43b4b5bc6fa5a30bc9c5d75b2f1e8a91ebd5a8a49c7993fb5d9c->enter($__internal_e2f0b791ff3a43b4b5bc6fa5a30bc9c5d75b2f1e8a91ebd5a8a49c7993fb5d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f0b791ff3a43b4b5bc6fa5a30bc9c5d75b2f1e8a91ebd5a8a49c7993fb5d9c->leave($__internal_e2f0b791ff3a43b4b5bc6fa5a30bc9c5d75b2f1e8a91ebd5a8a49c7993fb5d9c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2d2c5ad668ac836a65bb55fed156c5d37c2f630679725b02c34ea75ebc6f0642 = $this->env->getExtension("native_profiler");
        $__internal_2d2c5ad668ac836a65bb55fed156c5d37c2f630679725b02c34ea75ebc6f0642->enter($__internal_2d2c5ad668ac836a65bb55fed156c5d37c2f630679725b02c34ea75ebc6f0642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_2d2c5ad668ac836a65bb55fed156c5d37c2f630679725b02c34ea75ebc6f0642->leave($__internal_2d2c5ad668ac836a65bb55fed156c5d37c2f630679725b02c34ea75ebc6f0642_prof);

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
