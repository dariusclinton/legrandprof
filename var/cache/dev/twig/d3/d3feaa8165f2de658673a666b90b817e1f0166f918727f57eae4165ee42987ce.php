<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_9d69b791462272ceed385abdf275bb455019ec153c13074770f2cf8c6dec0267 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83fd8ef43d9fd138f22262d5e45509380b02da12a0a94c7a3654c1bf27f72f52 = $this->env->getExtension("native_profiler");
        $__internal_83fd8ef43d9fd138f22262d5e45509380b02da12a0a94c7a3654c1bf27f72f52->enter($__internal_83fd8ef43d9fd138f22262d5e45509380b02da12a0a94c7a3654c1bf27f72f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83fd8ef43d9fd138f22262d5e45509380b02da12a0a94c7a3654c1bf27f72f52->leave($__internal_83fd8ef43d9fd138f22262d5e45509380b02da12a0a94c7a3654c1bf27f72f52_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2f8959d7a33c214364a507bf28897edc65148ef9265cb3c6d32c6146a2a922f4 = $this->env->getExtension("native_profiler");
        $__internal_2f8959d7a33c214364a507bf28897edc65148ef9265cb3c6d32c6146a2a922f4->enter($__internal_2f8959d7a33c214364a507bf28897edc65148ef9265cb3c6d32c6146a2a922f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_2f8959d7a33c214364a507bf28897edc65148ef9265cb3c6d32c6146a2a922f4->leave($__internal_2f8959d7a33c214364a507bf28897edc65148ef9265cb3c6d32c6146a2a922f4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
";
    }
}
