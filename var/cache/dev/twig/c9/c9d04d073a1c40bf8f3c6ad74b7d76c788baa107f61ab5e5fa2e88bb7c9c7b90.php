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
        $__internal_d6e1a84f81b8ea1c9a5b71ed8c750b9dbf4f505c37aeda3b92f7d057ea7d68c1 = $this->env->getExtension("native_profiler");
        $__internal_d6e1a84f81b8ea1c9a5b71ed8c750b9dbf4f505c37aeda3b92f7d057ea7d68c1->enter($__internal_d6e1a84f81b8ea1c9a5b71ed8c750b9dbf4f505c37aeda3b92f7d057ea7d68c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e1a84f81b8ea1c9a5b71ed8c750b9dbf4f505c37aeda3b92f7d057ea7d68c1->leave($__internal_d6e1a84f81b8ea1c9a5b71ed8c750b9dbf4f505c37aeda3b92f7d057ea7d68c1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d31759f7eebe88fa82a1ae1da8872682f809b37b4161ef4a6707df03c1aa829f = $this->env->getExtension("native_profiler");
        $__internal_d31759f7eebe88fa82a1ae1da8872682f809b37b4161ef4a6707df03c1aa829f->enter($__internal_d31759f7eebe88fa82a1ae1da8872682f809b37b4161ef4a6707df03c1aa829f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_d31759f7eebe88fa82a1ae1da8872682f809b37b4161ef4a6707df03c1aa829f->leave($__internal_d31759f7eebe88fa82a1ae1da8872682f809b37b4161ef4a6707df03c1aa829f_prof);

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
