<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_293d4284ea683d09cc87e95dfe52324e7c8ab98c6add430a0fa1d80924e41e41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8a227df7fc77efa3f9f2e542b416a53bd04241f7e3c8e2d58bdfd2eec2ad920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a227df7fc77efa3f9f2e542b416a53bd04241f7e3c8e2d58bdfd2eec2ad920->enter($__internal_a8a227df7fc77efa3f9f2e542b416a53bd04241f7e3c8e2d58bdfd2eec2ad920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a227df7fc77efa3f9f2e542b416a53bd04241f7e3c8e2d58bdfd2eec2ad920->leave($__internal_a8a227df7fc77efa3f9f2e542b416a53bd04241f7e3c8e2d58bdfd2eec2ad920_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3e10aebc07885bea398b386b14e99a73adc6c4eb036b5f65469a985579b00190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e10aebc07885bea398b386b14e99a73adc6c4eb036b5f65469a985579b00190->enter($__internal_3e10aebc07885bea398b386b14e99a73adc6c4eb036b5f65469a985579b00190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_3e10aebc07885bea398b386b14e99a73adc6c4eb036b5f65469a985579b00190->leave($__internal_3e10aebc07885bea398b386b14e99a73adc6c4eb036b5f65469a985579b00190_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
