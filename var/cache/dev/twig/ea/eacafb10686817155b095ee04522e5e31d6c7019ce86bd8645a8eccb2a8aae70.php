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
        $__internal_edbeb3a170ff0eeca9aebc5cb5ea55e1f5072ffe74e9a4096f5d4a58d8ee4065 = $this->env->getExtension("native_profiler");
        $__internal_edbeb3a170ff0eeca9aebc5cb5ea55e1f5072ffe74e9a4096f5d4a58d8ee4065->enter($__internal_edbeb3a170ff0eeca9aebc5cb5ea55e1f5072ffe74e9a4096f5d4a58d8ee4065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edbeb3a170ff0eeca9aebc5cb5ea55e1f5072ffe74e9a4096f5d4a58d8ee4065->leave($__internal_edbeb3a170ff0eeca9aebc5cb5ea55e1f5072ffe74e9a4096f5d4a58d8ee4065_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_69c8cf2eeb0d91ea18e36f8dfa9c6ec2f442d92016eb80bcfd3badb5bd624b77 = $this->env->getExtension("native_profiler");
        $__internal_69c8cf2eeb0d91ea18e36f8dfa9c6ec2f442d92016eb80bcfd3badb5bd624b77->enter($__internal_69c8cf2eeb0d91ea18e36f8dfa9c6ec2f442d92016eb80bcfd3badb5bd624b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_69c8cf2eeb0d91ea18e36f8dfa9c6ec2f442d92016eb80bcfd3badb5bd624b77->leave($__internal_69c8cf2eeb0d91ea18e36f8dfa9c6ec2f442d92016eb80bcfd3badb5bd624b77_prof);

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
