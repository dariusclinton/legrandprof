<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_a5772d8cfc78a7097f1c6221601ac658706d60da850cf9ef321ddc759d3d5e28 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3898733ab94f5b622959cf6c42c557d3f9213f5a8028cb37bfccba72c5b176e8 = $this->env->getExtension("native_profiler");
        $__internal_3898733ab94f5b622959cf6c42c557d3f9213f5a8028cb37bfccba72c5b176e8->enter($__internal_3898733ab94f5b622959cf6c42c557d3f9213f5a8028cb37bfccba72c5b176e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3898733ab94f5b622959cf6c42c557d3f9213f5a8028cb37bfccba72c5b176e8->leave($__internal_3898733ab94f5b622959cf6c42c557d3f9213f5a8028cb37bfccba72c5b176e8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aa5892876e8b8889637f3ee596cead56eb719d4e6fcf64757c79ef3fd8c5e0f6 = $this->env->getExtension("native_profiler");
        $__internal_aa5892876e8b8889637f3ee596cead56eb719d4e6fcf64757c79ef3fd8c5e0f6->enter($__internal_aa5892876e8b8889637f3ee596cead56eb719d4e6fcf64757c79ef3fd8c5e0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_aa5892876e8b8889637f3ee596cead56eb719d4e6fcf64757c79ef3fd8c5e0f6->leave($__internal_aa5892876e8b8889637f3ee596cead56eb719d4e6fcf64757c79ef3fd8c5e0f6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
