<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_aa7176bdea5347a7f36a272839ceabb3f1e1f9b05472c449498f5ca940dc892a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a09845bdef69f9c2859ba179e0a5ea79da2d98f017597a09718c54b1ec26b5fd = $this->env->getExtension("native_profiler");
        $__internal_a09845bdef69f9c2859ba179e0a5ea79da2d98f017597a09718c54b1ec26b5fd->enter($__internal_a09845bdef69f9c2859ba179e0a5ea79da2d98f017597a09718c54b1ec26b5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a09845bdef69f9c2859ba179e0a5ea79da2d98f017597a09718c54b1ec26b5fd->leave($__internal_a09845bdef69f9c2859ba179e0a5ea79da2d98f017597a09718c54b1ec26b5fd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9f1425f876ab745bb4eac45ba4654399dc8cab5b233e9d7857739b1147d64130 = $this->env->getExtension("native_profiler");
        $__internal_9f1425f876ab745bb4eac45ba4654399dc8cab5b233e9d7857739b1147d64130->enter($__internal_9f1425f876ab745bb4eac45ba4654399dc8cab5b233e9d7857739b1147d64130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_9f1425f876ab745bb4eac45ba4654399dc8cab5b233e9d7857739b1147d64130->leave($__internal_9f1425f876ab745bb4eac45ba4654399dc8cab5b233e9d7857739b1147d64130_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
