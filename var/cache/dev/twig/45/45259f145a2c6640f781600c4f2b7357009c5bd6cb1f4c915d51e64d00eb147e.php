<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_d00973375285d1b4d043e78dd55ef1aadb20d5e7b659b8d62bedd79e875b6ddd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b547d8b9b435faa0626d7e496046933c08cc37e9397cb152b1569879855c17 = $this->env->getExtension("native_profiler");
        $__internal_46b547d8b9b435faa0626d7e496046933c08cc37e9397cb152b1569879855c17->enter($__internal_46b547d8b9b435faa0626d7e496046933c08cc37e9397cb152b1569879855c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b547d8b9b435faa0626d7e496046933c08cc37e9397cb152b1569879855c17->leave($__internal_46b547d8b9b435faa0626d7e496046933c08cc37e9397cb152b1569879855c17_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ac1cffe6c3965f854985f2f2feb5a57ef96e9bfdfeebd46ca44f4b00d72f6e26 = $this->env->getExtension("native_profiler");
        $__internal_ac1cffe6c3965f854985f2f2feb5a57ef96e9bfdfeebd46ca44f4b00d72f6e26->enter($__internal_ac1cffe6c3965f854985f2f2feb5a57ef96e9bfdfeebd46ca44f4b00d72f6e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_ac1cffe6c3965f854985f2f2feb5a57ef96e9bfdfeebd46ca44f4b00d72f6e26->leave($__internal_ac1cffe6c3965f854985f2f2feb5a57ef96e9bfdfeebd46ca44f4b00d72f6e26_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}