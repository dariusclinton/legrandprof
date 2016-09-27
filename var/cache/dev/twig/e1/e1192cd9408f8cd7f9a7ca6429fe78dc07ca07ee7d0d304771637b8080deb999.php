<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_c5e64528cd41957f9ba337e59c482f89b6d61fba40bf0171f7fb848d1b4fb219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_38bfe8255aa259086c7141ab15576c7f31229288e1d98ffcc41ccc99bc07eca5 = $this->env->getExtension("native_profiler");
        $__internal_38bfe8255aa259086c7141ab15576c7f31229288e1d98ffcc41ccc99bc07eca5->enter($__internal_38bfe8255aa259086c7141ab15576c7f31229288e1d98ffcc41ccc99bc07eca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38bfe8255aa259086c7141ab15576c7f31229288e1d98ffcc41ccc99bc07eca5->leave($__internal_38bfe8255aa259086c7141ab15576c7f31229288e1d98ffcc41ccc99bc07eca5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b588078043b331975a1ea3261a7d0598d836c580ee00cf6f15a86352ff656449 = $this->env->getExtension("native_profiler");
        $__internal_b588078043b331975a1ea3261a7d0598d836c580ee00cf6f15a86352ff656449->enter($__internal_b588078043b331975a1ea3261a7d0598d836c580ee00cf6f15a86352ff656449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b588078043b331975a1ea3261a7d0598d836c580ee00cf6f15a86352ff656449->leave($__internal_b588078043b331975a1ea3261a7d0598d836c580ee00cf6f15a86352ff656449_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
";
    }
}
