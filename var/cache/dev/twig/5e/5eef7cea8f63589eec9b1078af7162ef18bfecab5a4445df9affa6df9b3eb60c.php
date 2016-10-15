<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_e70586d98d6658affc377d1bf29b044e86025336ec4c9cce4345b99d7066debe extends Twig_Template
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
        $__internal_a5fadf0fc8a8591c8ba2bee6341855d9792bb18a39c54940d488e81c6bcea729 = $this->env->getExtension("native_profiler");
        $__internal_a5fadf0fc8a8591c8ba2bee6341855d9792bb18a39c54940d488e81c6bcea729->enter($__internal_a5fadf0fc8a8591c8ba2bee6341855d9792bb18a39c54940d488e81c6bcea729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5fadf0fc8a8591c8ba2bee6341855d9792bb18a39c54940d488e81c6bcea729->leave($__internal_a5fadf0fc8a8591c8ba2bee6341855d9792bb18a39c54940d488e81c6bcea729_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bf3d735024bd458c83a76eb9b71dd05868dd434980d3630ec609f1a21eb93799 = $this->env->getExtension("native_profiler");
        $__internal_bf3d735024bd458c83a76eb9b71dd05868dd434980d3630ec609f1a21eb93799->enter($__internal_bf3d735024bd458c83a76eb9b71dd05868dd434980d3630ec609f1a21eb93799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_bf3d735024bd458c83a76eb9b71dd05868dd434980d3630ec609f1a21eb93799->leave($__internal_bf3d735024bd458c83a76eb9b71dd05868dd434980d3630ec609f1a21eb93799_prof);

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
