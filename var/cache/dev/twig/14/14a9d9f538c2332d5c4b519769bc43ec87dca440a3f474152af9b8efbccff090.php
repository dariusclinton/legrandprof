<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_087cef8121578a64b4a56ac1e510f9d2cf49aef7bc345dbaf81731057cf5b671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e47e3fc9466e368f863d8a89c2594f6bfe2e96c0aff5db8d67b2f81b77b76347 = $this->env->getExtension("native_profiler");
        $__internal_e47e3fc9466e368f863d8a89c2594f6bfe2e96c0aff5db8d67b2f81b77b76347->enter($__internal_e47e3fc9466e368f863d8a89c2594f6bfe2e96c0aff5db8d67b2f81b77b76347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e47e3fc9466e368f863d8a89c2594f6bfe2e96c0aff5db8d67b2f81b77b76347->leave($__internal_e47e3fc9466e368f863d8a89c2594f6bfe2e96c0aff5db8d67b2f81b77b76347_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_020cb3f2413f7c02d63a5084250c50f9d3530e90bed295852a3543b6ae53328d = $this->env->getExtension("native_profiler");
        $__internal_020cb3f2413f7c02d63a5084250c50f9d3530e90bed295852a3543b6ae53328d->enter($__internal_020cb3f2413f7c02d63a5084250c50f9d3530e90bed295852a3543b6ae53328d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_020cb3f2413f7c02d63a5084250c50f9d3530e90bed295852a3543b6ae53328d->leave($__internal_020cb3f2413f7c02d63a5084250c50f9d3530e90bed295852a3543b6ae53328d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f0ac2b8c9d636a1289c4e610eb4b37efc4ac4b65b3d79e9e1d15b15e444e7fd8 = $this->env->getExtension("native_profiler");
        $__internal_f0ac2b8c9d636a1289c4e610eb4b37efc4ac4b65b3d79e9e1d15b15e444e7fd8->enter($__internal_f0ac2b8c9d636a1289c4e610eb4b37efc4ac4b65b3d79e9e1d15b15e444e7fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f0ac2b8c9d636a1289c4e610eb4b37efc4ac4b65b3d79e9e1d15b15e444e7fd8->leave($__internal_f0ac2b8c9d636a1289c4e610eb4b37efc4ac4b65b3d79e9e1d15b15e444e7fd8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_04ca315f671f4da57f0d5160e01ee760ff655a9266569f984ba709a50bac3e91 = $this->env->getExtension("native_profiler");
        $__internal_04ca315f671f4da57f0d5160e01ee760ff655a9266569f984ba709a50bac3e91->enter($__internal_04ca315f671f4da57f0d5160e01ee760ff655a9266569f984ba709a50bac3e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_04ca315f671f4da57f0d5160e01ee760ff655a9266569f984ba709a50bac3e91->leave($__internal_04ca315f671f4da57f0d5160e01ee760ff655a9266569f984ba709a50bac3e91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
