<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_189311b2811e49ff004569d778ad1190a7b457ac2d49258255a74586baaba34a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f14509580833f2c8cc56c244580d4359a916640bae3340a55747328423e12f03 = $this->env->getExtension("native_profiler");
        $__internal_f14509580833f2c8cc56c244580d4359a916640bae3340a55747328423e12f03->enter($__internal_f14509580833f2c8cc56c244580d4359a916640bae3340a55747328423e12f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_f14509580833f2c8cc56c244580d4359a916640bae3340a55747328423e12f03->leave($__internal_f14509580833f2c8cc56c244580d4359a916640bae3340a55747328423e12f03_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_746a5c5780cfd8a8592e8c617774c4977d8ddb0ac37f8e9f2f785a33bebdcf08 = $this->env->getExtension("native_profiler");
        $__internal_746a5c5780cfd8a8592e8c617774c4977d8ddb0ac37f8e9f2f785a33bebdcf08->enter($__internal_746a5c5780cfd8a8592e8c617774c4977d8ddb0ac37f8e9f2f785a33bebdcf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_746a5c5780cfd8a8592e8c617774c4977d8ddb0ac37f8e9f2f785a33bebdcf08->leave($__internal_746a5c5780cfd8a8592e8c617774c4977d8ddb0ac37f8e9f2f785a33bebdcf08_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_181bb7fb7eaaaedb492912126dfb4c3a3e8a58b1eee5c27a40e86a62bf5328b8 = $this->env->getExtension("native_profiler");
        $__internal_181bb7fb7eaaaedb492912126dfb4c3a3e8a58b1eee5c27a40e86a62bf5328b8->enter($__internal_181bb7fb7eaaaedb492912126dfb4c3a3e8a58b1eee5c27a40e86a62bf5328b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_181bb7fb7eaaaedb492912126dfb4c3a3e8a58b1eee5c27a40e86a62bf5328b8->leave($__internal_181bb7fb7eaaaedb492912126dfb4c3a3e8a58b1eee5c27a40e86a62bf5328b8_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_106d6bfc73f01120d38cddf6496a5e8712a021c49b525ed5dc29c07b6297e905 = $this->env->getExtension("native_profiler");
        $__internal_106d6bfc73f01120d38cddf6496a5e8712a021c49b525ed5dc29c07b6297e905->enter($__internal_106d6bfc73f01120d38cddf6496a5e8712a021c49b525ed5dc29c07b6297e905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_106d6bfc73f01120d38cddf6496a5e8712a021c49b525ed5dc29c07b6297e905->leave($__internal_106d6bfc73f01120d38cddf6496a5e8712a021c49b525ed5dc29c07b6297e905_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
";
    }
}
