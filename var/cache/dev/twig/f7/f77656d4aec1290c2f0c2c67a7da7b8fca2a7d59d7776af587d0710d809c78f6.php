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
        $__internal_d7091afeade6f48e5c8bb74f954b558d52ccc732bbf4f5a7520cf8cd08089961 = $this->env->getExtension("native_profiler");
        $__internal_d7091afeade6f48e5c8bb74f954b558d52ccc732bbf4f5a7520cf8cd08089961->enter($__internal_d7091afeade6f48e5c8bb74f954b558d52ccc732bbf4f5a7520cf8cd08089961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_d7091afeade6f48e5c8bb74f954b558d52ccc732bbf4f5a7520cf8cd08089961->leave($__internal_d7091afeade6f48e5c8bb74f954b558d52ccc732bbf4f5a7520cf8cd08089961_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_013a79d508e382e95e72ab5635d6faf5c603c8a8092fe335146077b803007311 = $this->env->getExtension("native_profiler");
        $__internal_013a79d508e382e95e72ab5635d6faf5c603c8a8092fe335146077b803007311->enter($__internal_013a79d508e382e95e72ab5635d6faf5c603c8a8092fe335146077b803007311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_013a79d508e382e95e72ab5635d6faf5c603c8a8092fe335146077b803007311->leave($__internal_013a79d508e382e95e72ab5635d6faf5c603c8a8092fe335146077b803007311_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_8432a75970950d1b4141781c0050197f0036e39a75526c54702d1c4e0f4bb7be = $this->env->getExtension("native_profiler");
        $__internal_8432a75970950d1b4141781c0050197f0036e39a75526c54702d1c4e0f4bb7be->enter($__internal_8432a75970950d1b4141781c0050197f0036e39a75526c54702d1c4e0f4bb7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_8432a75970950d1b4141781c0050197f0036e39a75526c54702d1c4e0f4bb7be->leave($__internal_8432a75970950d1b4141781c0050197f0036e39a75526c54702d1c4e0f4bb7be_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_e087b4bd8c8f530b9afdd5c303b86a96e5b522f50aa4c69f88b66dd96d0775d5 = $this->env->getExtension("native_profiler");
        $__internal_e087b4bd8c8f530b9afdd5c303b86a96e5b522f50aa4c69f88b66dd96d0775d5->enter($__internal_e087b4bd8c8f530b9afdd5c303b86a96e5b522f50aa4c69f88b66dd96d0775d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_e087b4bd8c8f530b9afdd5c303b86a96e5b522f50aa4c69f88b66dd96d0775d5->leave($__internal_e087b4bd8c8f530b9afdd5c303b86a96e5b522f50aa4c69f88b66dd96d0775d5_prof);

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
