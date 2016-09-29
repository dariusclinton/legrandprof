<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_629f2382bb97e49d60d9547deb0c52399da88c16ae50bcb4cf49cd078a1bd7dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_4190ade555f48ace62cdb0f3fcdb06e8e08772636ed59855735c0cffe9dad277 = $this->env->getExtension("native_profiler");
        $__internal_4190ade555f48ace62cdb0f3fcdb06e8e08772636ed59855735c0cffe9dad277->enter($__internal_4190ade555f48ace62cdb0f3fcdb06e8e08772636ed59855735c0cffe9dad277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4190ade555f48ace62cdb0f3fcdb06e8e08772636ed59855735c0cffe9dad277->leave($__internal_4190ade555f48ace62cdb0f3fcdb06e8e08772636ed59855735c0cffe9dad277_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c72286b0c32bb0ff3662a0de5044c70ca9f91073e37c4234576d63ace9af92ad = $this->env->getExtension("native_profiler");
        $__internal_c72286b0c32bb0ff3662a0de5044c70ca9f91073e37c4234576d63ace9af92ad->enter($__internal_c72286b0c32bb0ff3662a0de5044c70ca9f91073e37c4234576d63ace9af92ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_c72286b0c32bb0ff3662a0de5044c70ca9f91073e37c4234576d63ace9af92ad->leave($__internal_c72286b0c32bb0ff3662a0de5044c70ca9f91073e37c4234576d63ace9af92ad_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
