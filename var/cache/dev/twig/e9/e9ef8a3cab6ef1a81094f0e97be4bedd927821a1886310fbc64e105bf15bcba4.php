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
        $__internal_283ed64347a299e8b2e001512fb39d567522c1cd390b0dbea2559179a465e471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283ed64347a299e8b2e001512fb39d567522c1cd390b0dbea2559179a465e471->enter($__internal_283ed64347a299e8b2e001512fb39d567522c1cd390b0dbea2559179a465e471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283ed64347a299e8b2e001512fb39d567522c1cd390b0dbea2559179a465e471->leave($__internal_283ed64347a299e8b2e001512fb39d567522c1cd390b0dbea2559179a465e471_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_2f860ba6787fca0235ac1c14f9e433bb987f34f725151390d09192a55feaf263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f860ba6787fca0235ac1c14f9e433bb987f34f725151390d09192a55feaf263->enter($__internal_2f860ba6787fca0235ac1c14f9e433bb987f34f725151390d09192a55feaf263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_2f860ba6787fca0235ac1c14f9e433bb987f34f725151390d09192a55feaf263->leave($__internal_2f860ba6787fca0235ac1c14f9e433bb987f34f725151390d09192a55feaf263_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_8fb59ba575c40b4ccfc9efd659e00982324d50037989c2083943c8614db86ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb59ba575c40b4ccfc9efd659e00982324d50037989c2083943c8614db86ab1->enter($__internal_8fb59ba575c40b4ccfc9efd659e00982324d50037989c2083943c8614db86ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_8fb59ba575c40b4ccfc9efd659e00982324d50037989c2083943c8614db86ab1->leave($__internal_8fb59ba575c40b4ccfc9efd659e00982324d50037989c2083943c8614db86ab1_prof);

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
