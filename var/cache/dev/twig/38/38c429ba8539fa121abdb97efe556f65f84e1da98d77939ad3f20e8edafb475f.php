<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_13ccbbbb4945504011a8d3f7a6e9a7102870a8363f6bd5e3905056df10af6e41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_062e4827add92d61a90a55f44834307ecd9a7e60e938cd9f6069359580695d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062e4827add92d61a90a55f44834307ecd9a7e60e938cd9f6069359580695d1d->enter($__internal_062e4827add92d61a90a55f44834307ecd9a7e60e938cd9f6069359580695d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_062e4827add92d61a90a55f44834307ecd9a7e60e938cd9f6069359580695d1d->leave($__internal_062e4827add92d61a90a55f44834307ecd9a7e60e938cd9f6069359580695d1d_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_a065fc275c9157cbd62aa1c7f88b631b6d0cd4ae94cd476fe6cf7b6e3de9c750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a065fc275c9157cbd62aa1c7f88b631b6d0cd4ae94cd476fe6cf7b6e3de9c750->enter($__internal_a065fc275c9157cbd62aa1c7f88b631b6d0cd4ae94cd476fe6cf7b6e3de9c750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_a065fc275c9157cbd62aa1c7f88b631b6d0cd4ae94cd476fe6cf7b6e3de9c750->leave($__internal_a065fc275c9157cbd62aa1c7f88b631b6d0cd4ae94cd476fe6cf7b6e3de9c750_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_c46c981f2f9c4b9c1f32e6449c4a3e7dae72876d2d598a99f2f17e26bafcf455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46c981f2f9c4b9c1f32e6449c4a3e7dae72876d2d598a99f2f17e26bafcf455->enter($__internal_c46c981f2f9c4b9c1f32e6449c4a3e7dae72876d2d598a99f2f17e26bafcf455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_c46c981f2f9c4b9c1f32e6449c4a3e7dae72876d2d598a99f2f17e26bafcf455->leave($__internal_c46c981f2f9c4b9c1f32e6449c4a3e7dae72876d2d598a99f2f17e26bafcf455_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
";
    }
}
