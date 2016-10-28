<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_a56928a3404eec9750bee8734ac5085ebe63e3517507cc7fe9576105d856fdda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_86cb831bf2a585a97b0fdb524ecd9c815413716548fe1d09fed3a3ec370440fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cb831bf2a585a97b0fdb524ecd9c815413716548fe1d09fed3a3ec370440fc->enter($__internal_86cb831bf2a585a97b0fdb524ecd9c815413716548fe1d09fed3a3ec370440fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86cb831bf2a585a97b0fdb524ecd9c815413716548fe1d09fed3a3ec370440fc->leave($__internal_86cb831bf2a585a97b0fdb524ecd9c815413716548fe1d09fed3a3ec370440fc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c6f8d0a961f965c02fc4816b405e316b4af910d1be1724232ab47ec2a008e554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f8d0a961f965c02fc4816b405e316b4af910d1be1724232ab47ec2a008e554->enter($__internal_c6f8d0a961f965c02fc4816b405e316b4af910d1be1724232ab47ec2a008e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_c6f8d0a961f965c02fc4816b405e316b4af910d1be1724232ab47ec2a008e554->leave($__internal_c6f8d0a961f965c02fc4816b405e316b4af910d1be1724232ab47ec2a008e554_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
