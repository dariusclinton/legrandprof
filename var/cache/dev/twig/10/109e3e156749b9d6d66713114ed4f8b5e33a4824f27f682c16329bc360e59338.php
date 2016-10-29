<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_4c6cbcc6d22838621021c07e311fb2be9aa1181702e3bf67e7d7a882f090e10c extends Twig_Template
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
        $__internal_00f362469e4111b6ec604e0ad21df485b402d957bb04430a02620afce8f9d832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f362469e4111b6ec604e0ad21df485b402d957bb04430a02620afce8f9d832->enter($__internal_00f362469e4111b6ec604e0ad21df485b402d957bb04430a02620afce8f9d832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_00f362469e4111b6ec604e0ad21df485b402d957bb04430a02620afce8f9d832->leave($__internal_00f362469e4111b6ec604e0ad21df485b402d957bb04430a02620afce8f9d832_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ad34bab3d0953f3b621212e0a3df8c8d8bbb801f43aed41734f0a39340a0ef4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad34bab3d0953f3b621212e0a3df8c8d8bbb801f43aed41734f0a39340a0ef4e->enter($__internal_ad34bab3d0953f3b621212e0a3df8c8d8bbb801f43aed41734f0a39340a0ef4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_ad34bab3d0953f3b621212e0a3df8c8d8bbb801f43aed41734f0a39340a0ef4e->leave($__internal_ad34bab3d0953f3b621212e0a3df8c8d8bbb801f43aed41734f0a39340a0ef4e_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_27e474dc4da320e098c08f80964d3ddcf952e2a6766c799f439793dac965c7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e474dc4da320e098c08f80964d3ddcf952e2a6766c799f439793dac965c7b9->enter($__internal_27e474dc4da320e098c08f80964d3ddcf952e2a6766c799f439793dac965c7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_27e474dc4da320e098c08f80964d3ddcf952e2a6766c799f439793dac965c7b9->leave($__internal_27e474dc4da320e098c08f80964d3ddcf952e2a6766c799f439793dac965c7b9_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_6e0c1b2e327552504b499b67c6f55cd52e37800898632cff7686ae53f05629eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0c1b2e327552504b499b67c6f55cd52e37800898632cff7686ae53f05629eb->enter($__internal_6e0c1b2e327552504b499b67c6f55cd52e37800898632cff7686ae53f05629eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_6e0c1b2e327552504b499b67c6f55cd52e37800898632cff7686ae53f05629eb->leave($__internal_6e0c1b2e327552504b499b67c6f55cd52e37800898632cff7686ae53f05629eb_prof);

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
