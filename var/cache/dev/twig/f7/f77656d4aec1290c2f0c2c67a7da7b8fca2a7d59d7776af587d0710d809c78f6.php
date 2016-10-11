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
        $__internal_b4e343377421be1cef02d071f7b6af5e965fd24b40e584ec0073f44a8b7bceee = $this->env->getExtension("native_profiler");
        $__internal_b4e343377421be1cef02d071f7b6af5e965fd24b40e584ec0073f44a8b7bceee->enter($__internal_b4e343377421be1cef02d071f7b6af5e965fd24b40e584ec0073f44a8b7bceee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_b4e343377421be1cef02d071f7b6af5e965fd24b40e584ec0073f44a8b7bceee->leave($__internal_b4e343377421be1cef02d071f7b6af5e965fd24b40e584ec0073f44a8b7bceee_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_97f8abd678d3ef5cce9a78947b6b4433e12acea2714503ee3674405959d2a772 = $this->env->getExtension("native_profiler");
        $__internal_97f8abd678d3ef5cce9a78947b6b4433e12acea2714503ee3674405959d2a772->enter($__internal_97f8abd678d3ef5cce9a78947b6b4433e12acea2714503ee3674405959d2a772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_97f8abd678d3ef5cce9a78947b6b4433e12acea2714503ee3674405959d2a772->leave($__internal_97f8abd678d3ef5cce9a78947b6b4433e12acea2714503ee3674405959d2a772_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_01d4aa905c1f287d1363532f1eb05c788afb673e6545f2786d1248e163f53aa0 = $this->env->getExtension("native_profiler");
        $__internal_01d4aa905c1f287d1363532f1eb05c788afb673e6545f2786d1248e163f53aa0->enter($__internal_01d4aa905c1f287d1363532f1eb05c788afb673e6545f2786d1248e163f53aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_01d4aa905c1f287d1363532f1eb05c788afb673e6545f2786d1248e163f53aa0->leave($__internal_01d4aa905c1f287d1363532f1eb05c788afb673e6545f2786d1248e163f53aa0_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_91180a4bf7a33fcfbbab0862f1440779c46cd7f95e3f757eb95467475cb25960 = $this->env->getExtension("native_profiler");
        $__internal_91180a4bf7a33fcfbbab0862f1440779c46cd7f95e3f757eb95467475cb25960->enter($__internal_91180a4bf7a33fcfbbab0862f1440779c46cd7f95e3f757eb95467475cb25960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_91180a4bf7a33fcfbbab0862f1440779c46cd7f95e3f757eb95467475cb25960->leave($__internal_91180a4bf7a33fcfbbab0862f1440779c46cd7f95e3f757eb95467475cb25960_prof);

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
