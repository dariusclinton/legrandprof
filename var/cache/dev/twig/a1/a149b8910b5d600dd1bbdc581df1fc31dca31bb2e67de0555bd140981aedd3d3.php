<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_1469c304f6a2810cf5ea812b0633d8244f83c5fd7fd293b4ad249627f7b5d93b extends Twig_Template
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
        $__internal_396c0294eea9dfd936f6b5e5d26fa918871bca440adbaf7697b5fb8421a4df69 = $this->env->getExtension("native_profiler");
        $__internal_396c0294eea9dfd936f6b5e5d26fa918871bca440adbaf7697b5fb8421a4df69->enter($__internal_396c0294eea9dfd936f6b5e5d26fa918871bca440adbaf7697b5fb8421a4df69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_396c0294eea9dfd936f6b5e5d26fa918871bca440adbaf7697b5fb8421a4df69->leave($__internal_396c0294eea9dfd936f6b5e5d26fa918871bca440adbaf7697b5fb8421a4df69_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_6c28632ae57a7434b2c4fd1a4daf90d9774bf5d2a3e077241cdad4c168440c82 = $this->env->getExtension("native_profiler");
        $__internal_6c28632ae57a7434b2c4fd1a4daf90d9774bf5d2a3e077241cdad4c168440c82->enter($__internal_6c28632ae57a7434b2c4fd1a4daf90d9774bf5d2a3e077241cdad4c168440c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_6c28632ae57a7434b2c4fd1a4daf90d9774bf5d2a3e077241cdad4c168440c82->leave($__internal_6c28632ae57a7434b2c4fd1a4daf90d9774bf5d2a3e077241cdad4c168440c82_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_8b47ddcab6418dc2c43253de23225abb3600e39f0ed5a9dcf1e46b01d7fa98eb = $this->env->getExtension("native_profiler");
        $__internal_8b47ddcab6418dc2c43253de23225abb3600e39f0ed5a9dcf1e46b01d7fa98eb->enter($__internal_8b47ddcab6418dc2c43253de23225abb3600e39f0ed5a9dcf1e46b01d7fa98eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_8b47ddcab6418dc2c43253de23225abb3600e39f0ed5a9dcf1e46b01d7fa98eb->leave($__internal_8b47ddcab6418dc2c43253de23225abb3600e39f0ed5a9dcf1e46b01d7fa98eb_prof);

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
