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
        $__internal_f28f3e1825a16ef37ae4552f9066ac52af9d505ddfd8342488796c2a05dd057d = $this->env->getExtension("native_profiler");
        $__internal_f28f3e1825a16ef37ae4552f9066ac52af9d505ddfd8342488796c2a05dd057d->enter($__internal_f28f3e1825a16ef37ae4552f9066ac52af9d505ddfd8342488796c2a05dd057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_f28f3e1825a16ef37ae4552f9066ac52af9d505ddfd8342488796c2a05dd057d->leave($__internal_f28f3e1825a16ef37ae4552f9066ac52af9d505ddfd8342488796c2a05dd057d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_834be4d1d96dd1c874c771c4379b0cc30d53db6adb41f574874e19c3635fef87 = $this->env->getExtension("native_profiler");
        $__internal_834be4d1d96dd1c874c771c4379b0cc30d53db6adb41f574874e19c3635fef87->enter($__internal_834be4d1d96dd1c874c771c4379b0cc30d53db6adb41f574874e19c3635fef87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_834be4d1d96dd1c874c771c4379b0cc30d53db6adb41f574874e19c3635fef87->leave($__internal_834be4d1d96dd1c874c771c4379b0cc30d53db6adb41f574874e19c3635fef87_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_9c1cfae2dec02c0ab1d1abdbfcce8b5a5a3a1dad0de71b22f77111919303dcd5 = $this->env->getExtension("native_profiler");
        $__internal_9c1cfae2dec02c0ab1d1abdbfcce8b5a5a3a1dad0de71b22f77111919303dcd5->enter($__internal_9c1cfae2dec02c0ab1d1abdbfcce8b5a5a3a1dad0de71b22f77111919303dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_9c1cfae2dec02c0ab1d1abdbfcce8b5a5a3a1dad0de71b22f77111919303dcd5->leave($__internal_9c1cfae2dec02c0ab1d1abdbfcce8b5a5a3a1dad0de71b22f77111919303dcd5_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_bf419bd0104a3199384637b179ce1311d0ad9bdcaba26d610a6f13bf4561f7d6 = $this->env->getExtension("native_profiler");
        $__internal_bf419bd0104a3199384637b179ce1311d0ad9bdcaba26d610a6f13bf4561f7d6->enter($__internal_bf419bd0104a3199384637b179ce1311d0ad9bdcaba26d610a6f13bf4561f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_bf419bd0104a3199384637b179ce1311d0ad9bdcaba26d610a6f13bf4561f7d6->leave($__internal_bf419bd0104a3199384637b179ce1311d0ad9bdcaba26d610a6f13bf4561f7d6_prof);

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
