<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_630d2f4ea5b8f51d04b8fbc9c6313b2a89fa7cff89612d2edde27d6e624cc15e extends Twig_Template
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
        $__internal_c96683c1939bd5f47f3b5a45ca8abf3944fd7ae27eedbc072de7e24b44ce9a39 = $this->env->getExtension("native_profiler");
        $__internal_c96683c1939bd5f47f3b5a45ca8abf3944fd7ae27eedbc072de7e24b44ce9a39->enter($__internal_c96683c1939bd5f47f3b5a45ca8abf3944fd7ae27eedbc072de7e24b44ce9a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96683c1939bd5f47f3b5a45ca8abf3944fd7ae27eedbc072de7e24b44ce9a39->leave($__internal_c96683c1939bd5f47f3b5a45ca8abf3944fd7ae27eedbc072de7e24b44ce9a39_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_588e8b15d045de6be90b6fb00b8ca951bd121d32f8d9e536d67781b4344d8557 = $this->env->getExtension("native_profiler");
        $__internal_588e8b15d045de6be90b6fb00b8ca951bd121d32f8d9e536d67781b4344d8557->enter($__internal_588e8b15d045de6be90b6fb00b8ca951bd121d32f8d9e536d67781b4344d8557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_588e8b15d045de6be90b6fb00b8ca951bd121d32f8d9e536d67781b4344d8557->leave($__internal_588e8b15d045de6be90b6fb00b8ca951bd121d32f8d9e536d67781b4344d8557_prof);

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
