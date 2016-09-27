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
        $__internal_045464533345125512bbf26443af383465fe79d9d2df23911272a938dd8d8d35 = $this->env->getExtension("native_profiler");
        $__internal_045464533345125512bbf26443af383465fe79d9d2df23911272a938dd8d8d35->enter($__internal_045464533345125512bbf26443af383465fe79d9d2df23911272a938dd8d8d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_045464533345125512bbf26443af383465fe79d9d2df23911272a938dd8d8d35->leave($__internal_045464533345125512bbf26443af383465fe79d9d2df23911272a938dd8d8d35_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a2040d2647e0db01426ee5f54d9c2dc62e7346f3e691c44640748118d5c68bec = $this->env->getExtension("native_profiler");
        $__internal_a2040d2647e0db01426ee5f54d9c2dc62e7346f3e691c44640748118d5c68bec->enter($__internal_a2040d2647e0db01426ee5f54d9c2dc62e7346f3e691c44640748118d5c68bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_a2040d2647e0db01426ee5f54d9c2dc62e7346f3e691c44640748118d5c68bec->leave($__internal_a2040d2647e0db01426ee5f54d9c2dc62e7346f3e691c44640748118d5c68bec_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_bd8cce30504f56aab5a5ee0724e11e206ba7ec1b9db6a1abfb8c693496f67a58 = $this->env->getExtension("native_profiler");
        $__internal_bd8cce30504f56aab5a5ee0724e11e206ba7ec1b9db6a1abfb8c693496f67a58->enter($__internal_bd8cce30504f56aab5a5ee0724e11e206ba7ec1b9db6a1abfb8c693496f67a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_bd8cce30504f56aab5a5ee0724e11e206ba7ec1b9db6a1abfb8c693496f67a58->leave($__internal_bd8cce30504f56aab5a5ee0724e11e206ba7ec1b9db6a1abfb8c693496f67a58_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_33d59b2d891cfa2689813434719b4d9676af3dc3426847f5d7ac71c098231cec = $this->env->getExtension("native_profiler");
        $__internal_33d59b2d891cfa2689813434719b4d9676af3dc3426847f5d7ac71c098231cec->enter($__internal_33d59b2d891cfa2689813434719b4d9676af3dc3426847f5d7ac71c098231cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_33d59b2d891cfa2689813434719b4d9676af3dc3426847f5d7ac71c098231cec->leave($__internal_33d59b2d891cfa2689813434719b4d9676af3dc3426847f5d7ac71c098231cec_prof);

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
