<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ed1635f31659db5a27da36bd60bc355274982c19f5bcb639dc8c1048eb3f8213 extends Twig_Template
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
        $__internal_5f2fe3141dbde5377dbcc0a6d50752b8bb90058c7ca0d55e57b031053dc44eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2fe3141dbde5377dbcc0a6d50752b8bb90058c7ca0d55e57b031053dc44eb3->enter($__internal_5f2fe3141dbde5377dbcc0a6d50752b8bb90058c7ca0d55e57b031053dc44eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5f2fe3141dbde5377dbcc0a6d50752b8bb90058c7ca0d55e57b031053dc44eb3->leave($__internal_5f2fe3141dbde5377dbcc0a6d50752b8bb90058c7ca0d55e57b031053dc44eb3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3d21b1e5bee7bf2efa41cc36188e9cc92f81302f4958b5bb2cbabc03d3b6a8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d21b1e5bee7bf2efa41cc36188e9cc92f81302f4958b5bb2cbabc03d3b6a8a0->enter($__internal_3d21b1e5bee7bf2efa41cc36188e9cc92f81302f4958b5bb2cbabc03d3b6a8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d21b1e5bee7bf2efa41cc36188e9cc92f81302f4958b5bb2cbabc03d3b6a8a0->leave($__internal_3d21b1e5bee7bf2efa41cc36188e9cc92f81302f4958b5bb2cbabc03d3b6a8a0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_abdb8a677f94ddfa5e20294eb65596bf205a8e6e0e3b071344e44afcf7c63d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdb8a677f94ddfa5e20294eb65596bf205a8e6e0e3b071344e44afcf7c63d56->enter($__internal_abdb8a677f94ddfa5e20294eb65596bf205a8e6e0e3b071344e44afcf7c63d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abdb8a677f94ddfa5e20294eb65596bf205a8e6e0e3b071344e44afcf7c63d56->leave($__internal_abdb8a677f94ddfa5e20294eb65596bf205a8e6e0e3b071344e44afcf7c63d56_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ef6936a76dd95bf453a12422adb3f20183a1ad512bfc4292abb4491da2280697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6936a76dd95bf453a12422adb3f20183a1ad512bfc4292abb4491da2280697->enter($__internal_ef6936a76dd95bf453a12422adb3f20183a1ad512bfc4292abb4491da2280697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ef6936a76dd95bf453a12422adb3f20183a1ad512bfc4292abb4491da2280697->leave($__internal_ef6936a76dd95bf453a12422adb3f20183a1ad512bfc4292abb4491da2280697_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
