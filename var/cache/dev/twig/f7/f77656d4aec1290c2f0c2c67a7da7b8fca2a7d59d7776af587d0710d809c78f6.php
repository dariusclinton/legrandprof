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
        $__internal_bb4638d90446299d004c0820ccbedb3be0e75a0fdc8d7b1489246d8dfc605d47 = $this->env->getExtension("native_profiler");
        $__internal_bb4638d90446299d004c0820ccbedb3be0e75a0fdc8d7b1489246d8dfc605d47->enter($__internal_bb4638d90446299d004c0820ccbedb3be0e75a0fdc8d7b1489246d8dfc605d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_bb4638d90446299d004c0820ccbedb3be0e75a0fdc8d7b1489246d8dfc605d47->leave($__internal_bb4638d90446299d004c0820ccbedb3be0e75a0fdc8d7b1489246d8dfc605d47_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ee2bc0961cdb7fb6871dd648505d068edf59bc248e5cae823f18d321dfdd78fd = $this->env->getExtension("native_profiler");
        $__internal_ee2bc0961cdb7fb6871dd648505d068edf59bc248e5cae823f18d321dfdd78fd->enter($__internal_ee2bc0961cdb7fb6871dd648505d068edf59bc248e5cae823f18d321dfdd78fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_ee2bc0961cdb7fb6871dd648505d068edf59bc248e5cae823f18d321dfdd78fd->leave($__internal_ee2bc0961cdb7fb6871dd648505d068edf59bc248e5cae823f18d321dfdd78fd_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_da9880268bf9d40745b41edd6710b833df1854d37ebf13d732448bf12bc03cf6 = $this->env->getExtension("native_profiler");
        $__internal_da9880268bf9d40745b41edd6710b833df1854d37ebf13d732448bf12bc03cf6->enter($__internal_da9880268bf9d40745b41edd6710b833df1854d37ebf13d732448bf12bc03cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_da9880268bf9d40745b41edd6710b833df1854d37ebf13d732448bf12bc03cf6->leave($__internal_da9880268bf9d40745b41edd6710b833df1854d37ebf13d732448bf12bc03cf6_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_30b4e813edcd19f640db0925ecd4b58c9ea1c3ebe45b002b67618f86a9233f41 = $this->env->getExtension("native_profiler");
        $__internal_30b4e813edcd19f640db0925ecd4b58c9ea1c3ebe45b002b67618f86a9233f41->enter($__internal_30b4e813edcd19f640db0925ecd4b58c9ea1c3ebe45b002b67618f86a9233f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_30b4e813edcd19f640db0925ecd4b58c9ea1c3ebe45b002b67618f86a9233f41->leave($__internal_30b4e813edcd19f640db0925ecd4b58c9ea1c3ebe45b002b67618f86a9233f41_prof);

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
