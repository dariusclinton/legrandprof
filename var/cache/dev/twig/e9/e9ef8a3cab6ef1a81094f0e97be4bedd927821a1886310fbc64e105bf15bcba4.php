<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_80b60c8cd7bae2413fbe7f4abc9016e5f2bc632d175271652392295bd677176a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a71e0b1eb63e9b10e38468508b5a23ea5d1d68a241821fdfd6a03c2c4e7c163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a71e0b1eb63e9b10e38468508b5a23ea5d1d68a241821fdfd6a03c2c4e7c163->enter($__internal_5a71e0b1eb63e9b10e38468508b5a23ea5d1d68a241821fdfd6a03c2c4e7c163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a71e0b1eb63e9b10e38468508b5a23ea5d1d68a241821fdfd6a03c2c4e7c163->leave($__internal_5a71e0b1eb63e9b10e38468508b5a23ea5d1d68a241821fdfd6a03c2c4e7c163_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_dab5bd6ae7e069879e6edb2f61a321b7331bdf8441542086abc6d31483716697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab5bd6ae7e069879e6edb2f61a321b7331bdf8441542086abc6d31483716697->enter($__internal_dab5bd6ae7e069879e6edb2f61a321b7331bdf8441542086abc6d31483716697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_dab5bd6ae7e069879e6edb2f61a321b7331bdf8441542086abc6d31483716697->leave($__internal_dab5bd6ae7e069879e6edb2f61a321b7331bdf8441542086abc6d31483716697_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_cfa8e0bce8b4c8b4550c5076cf79a85091e36b477e4e68f660a53dd5d41f031d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa8e0bce8b4c8b4550c5076cf79a85091e36b477e4e68f660a53dd5d41f031d->enter($__internal_cfa8e0bce8b4c8b4550c5076cf79a85091e36b477e4e68f660a53dd5d41f031d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_cfa8e0bce8b4c8b4550c5076cf79a85091e36b477e4e68f660a53dd5d41f031d->leave($__internal_cfa8e0bce8b4c8b4550c5076cf79a85091e36b477e4e68f660a53dd5d41f031d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_title %}
    {{ admin.trans(name) }}
{% endblock %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
";
    }
}
