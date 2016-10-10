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
        $__internal_5d8944a38ec1ddcfd6a7c2f511ec57296e8f1c96902fa6f975c52edf7b662d30 = $this->env->getExtension("native_profiler");
        $__internal_5d8944a38ec1ddcfd6a7c2f511ec57296e8f1c96902fa6f975c52edf7b662d30->enter($__internal_5d8944a38ec1ddcfd6a7c2f511ec57296e8f1c96902fa6f975c52edf7b662d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5d8944a38ec1ddcfd6a7c2f511ec57296e8f1c96902fa6f975c52edf7b662d30->leave($__internal_5d8944a38ec1ddcfd6a7c2f511ec57296e8f1c96902fa6f975c52edf7b662d30_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d5e1313a4fcb3a5dc3b760249660a004102ff253bea34294836ec770f34a2a15 = $this->env->getExtension("native_profiler");
        $__internal_d5e1313a4fcb3a5dc3b760249660a004102ff253bea34294836ec770f34a2a15->enter($__internal_d5e1313a4fcb3a5dc3b760249660a004102ff253bea34294836ec770f34a2a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d5e1313a4fcb3a5dc3b760249660a004102ff253bea34294836ec770f34a2a15->leave($__internal_d5e1313a4fcb3a5dc3b760249660a004102ff253bea34294836ec770f34a2a15_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e8da1a57bf6bbf1c30d035dc63b81defbe61c28e4f456afdeb3d43d04823cfc8 = $this->env->getExtension("native_profiler");
        $__internal_e8da1a57bf6bbf1c30d035dc63b81defbe61c28e4f456afdeb3d43d04823cfc8->enter($__internal_e8da1a57bf6bbf1c30d035dc63b81defbe61c28e4f456afdeb3d43d04823cfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e8da1a57bf6bbf1c30d035dc63b81defbe61c28e4f456afdeb3d43d04823cfc8->leave($__internal_e8da1a57bf6bbf1c30d035dc63b81defbe61c28e4f456afdeb3d43d04823cfc8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8c113e01e9ab0afb8461365ea3ecd7b5b98bdf4fe2f068c721f220c0a7fc8d64 = $this->env->getExtension("native_profiler");
        $__internal_8c113e01e9ab0afb8461365ea3ecd7b5b98bdf4fe2f068c721f220c0a7fc8d64->enter($__internal_8c113e01e9ab0afb8461365ea3ecd7b5b98bdf4fe2f068c721f220c0a7fc8d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8c113e01e9ab0afb8461365ea3ecd7b5b98bdf4fe2f068c721f220c0a7fc8d64->leave($__internal_8c113e01e9ab0afb8461365ea3ecd7b5b98bdf4fe2f068c721f220c0a7fc8d64_prof);

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
