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
        $__internal_241fe275c997113c2b1ad79ca2d3b16d101a81c5bdc41ce88baaed13f93e1304 = $this->env->getExtension("native_profiler");
        $__internal_241fe275c997113c2b1ad79ca2d3b16d101a81c5bdc41ce88baaed13f93e1304->enter($__internal_241fe275c997113c2b1ad79ca2d3b16d101a81c5bdc41ce88baaed13f93e1304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_241fe275c997113c2b1ad79ca2d3b16d101a81c5bdc41ce88baaed13f93e1304->leave($__internal_241fe275c997113c2b1ad79ca2d3b16d101a81c5bdc41ce88baaed13f93e1304_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dd5817a5342389511f1a6242266df0c571c193ea694f1bec752780125d36d86f = $this->env->getExtension("native_profiler");
        $__internal_dd5817a5342389511f1a6242266df0c571c193ea694f1bec752780125d36d86f->enter($__internal_dd5817a5342389511f1a6242266df0c571c193ea694f1bec752780125d36d86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_dd5817a5342389511f1a6242266df0c571c193ea694f1bec752780125d36d86f->leave($__internal_dd5817a5342389511f1a6242266df0c571c193ea694f1bec752780125d36d86f_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_6afb3e2e457447000f4735bd7ba58c60f391fc84ce7e7a11897481f7cef97fa9 = $this->env->getExtension("native_profiler");
        $__internal_6afb3e2e457447000f4735bd7ba58c60f391fc84ce7e7a11897481f7cef97fa9->enter($__internal_6afb3e2e457447000f4735bd7ba58c60f391fc84ce7e7a11897481f7cef97fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_6afb3e2e457447000f4735bd7ba58c60f391fc84ce7e7a11897481f7cef97fa9->leave($__internal_6afb3e2e457447000f4735bd7ba58c60f391fc84ce7e7a11897481f7cef97fa9_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_a05109e26d0916befc7aa92b632ae693854c91da8f6a1d24e6b5f87e4f3643c9 = $this->env->getExtension("native_profiler");
        $__internal_a05109e26d0916befc7aa92b632ae693854c91da8f6a1d24e6b5f87e4f3643c9->enter($__internal_a05109e26d0916befc7aa92b632ae693854c91da8f6a1d24e6b5f87e4f3643c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_a05109e26d0916befc7aa92b632ae693854c91da8f6a1d24e6b5f87e4f3643c9->leave($__internal_a05109e26d0916befc7aa92b632ae693854c91da8f6a1d24e6b5f87e4f3643c9_prof);

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
