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
        $__internal_450075d4f2cf0f129142a05511b13d342b5c8cff9e3fc3acf239fc892403364e = $this->env->getExtension("native_profiler");
        $__internal_450075d4f2cf0f129142a05511b13d342b5c8cff9e3fc3acf239fc892403364e->enter($__internal_450075d4f2cf0f129142a05511b13d342b5c8cff9e3fc3acf239fc892403364e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_450075d4f2cf0f129142a05511b13d342b5c8cff9e3fc3acf239fc892403364e->leave($__internal_450075d4f2cf0f129142a05511b13d342b5c8cff9e3fc3acf239fc892403364e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b5f02284177820784093a695e12f809c2585708864583e6f31c4fbd27d228c00 = $this->env->getExtension("native_profiler");
        $__internal_b5f02284177820784093a695e12f809c2585708864583e6f31c4fbd27d228c00->enter($__internal_b5f02284177820784093a695e12f809c2585708864583e6f31c4fbd27d228c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_b5f02284177820784093a695e12f809c2585708864583e6f31c4fbd27d228c00->leave($__internal_b5f02284177820784093a695e12f809c2585708864583e6f31c4fbd27d228c00_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_502b962f1545fc516d7088cb22485c8fcde13dfe8e6cd095e6f862e8644f1c7e = $this->env->getExtension("native_profiler");
        $__internal_502b962f1545fc516d7088cb22485c8fcde13dfe8e6cd095e6f862e8644f1c7e->enter($__internal_502b962f1545fc516d7088cb22485c8fcde13dfe8e6cd095e6f862e8644f1c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_502b962f1545fc516d7088cb22485c8fcde13dfe8e6cd095e6f862e8644f1c7e->leave($__internal_502b962f1545fc516d7088cb22485c8fcde13dfe8e6cd095e6f862e8644f1c7e_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_91904d94c04023c53d9d6209ea20d00216f28aa7a1a978cea1e27a2743a98900 = $this->env->getExtension("native_profiler");
        $__internal_91904d94c04023c53d9d6209ea20d00216f28aa7a1a978cea1e27a2743a98900->enter($__internal_91904d94c04023c53d9d6209ea20d00216f28aa7a1a978cea1e27a2743a98900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_91904d94c04023c53d9d6209ea20d00216f28aa7a1a978cea1e27a2743a98900->leave($__internal_91904d94c04023c53d9d6209ea20d00216f28aa7a1a978cea1e27a2743a98900_prof);

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
