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
        $__internal_6d4938c623d5105861316496a8e8217851c9dd4d084d3145e98eb89965931a26 = $this->env->getExtension("native_profiler");
        $__internal_6d4938c623d5105861316496a8e8217851c9dd4d084d3145e98eb89965931a26->enter($__internal_6d4938c623d5105861316496a8e8217851c9dd4d084d3145e98eb89965931a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4938c623d5105861316496a8e8217851c9dd4d084d3145e98eb89965931a26->leave($__internal_6d4938c623d5105861316496a8e8217851c9dd4d084d3145e98eb89965931a26_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_65921f49bbebb2d2a01ef2edead93bef0874f3b4843143d8910f1588b83c68be = $this->env->getExtension("native_profiler");
        $__internal_65921f49bbebb2d2a01ef2edead93bef0874f3b4843143d8910f1588b83c68be->enter($__internal_65921f49bbebb2d2a01ef2edead93bef0874f3b4843143d8910f1588b83c68be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_65921f49bbebb2d2a01ef2edead93bef0874f3b4843143d8910f1588b83c68be->leave($__internal_65921f49bbebb2d2a01ef2edead93bef0874f3b4843143d8910f1588b83c68be_prof);

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
