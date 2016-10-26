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
        $__internal_6e34fc9da373ab84985e5b2e3514bfe805c872ff6e5424e3784ab9e61fcc1ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e34fc9da373ab84985e5b2e3514bfe805c872ff6e5424e3784ab9e61fcc1ef0->enter($__internal_6e34fc9da373ab84985e5b2e3514bfe805c872ff6e5424e3784ab9e61fcc1ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_6e34fc9da373ab84985e5b2e3514bfe805c872ff6e5424e3784ab9e61fcc1ef0->leave($__internal_6e34fc9da373ab84985e5b2e3514bfe805c872ff6e5424e3784ab9e61fcc1ef0_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_6024c44f5a9c647cb9a4b3c399415a4b16f1c081503ceb562e68d84bacdf6bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6024c44f5a9c647cb9a4b3c399415a4b16f1c081503ceb562e68d84bacdf6bf3->enter($__internal_6024c44f5a9c647cb9a4b3c399415a4b16f1c081503ceb562e68d84bacdf6bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_6024c44f5a9c647cb9a4b3c399415a4b16f1c081503ceb562e68d84bacdf6bf3->leave($__internal_6024c44f5a9c647cb9a4b3c399415a4b16f1c081503ceb562e68d84bacdf6bf3_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_69d670486dd2fa0c00e3c41c8090ad68f96b68f6f622bb0c707e8a127a174f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d670486dd2fa0c00e3c41c8090ad68f96b68f6f622bb0c707e8a127a174f88->enter($__internal_69d670486dd2fa0c00e3c41c8090ad68f96b68f6f622bb0c707e8a127a174f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_69d670486dd2fa0c00e3c41c8090ad68f96b68f6f622bb0c707e8a127a174f88->leave($__internal_69d670486dd2fa0c00e3c41c8090ad68f96b68f6f622bb0c707e8a127a174f88_prof);

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
