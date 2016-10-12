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
        $__internal_88ef09e9f20d83bf022b0d61f637faf9bef411b906a306f276b1952906d97dd5 = $this->env->getExtension("native_profiler");
        $__internal_88ef09e9f20d83bf022b0d61f637faf9bef411b906a306f276b1952906d97dd5->enter($__internal_88ef09e9f20d83bf022b0d61f637faf9bef411b906a306f276b1952906d97dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_88ef09e9f20d83bf022b0d61f637faf9bef411b906a306f276b1952906d97dd5->leave($__internal_88ef09e9f20d83bf022b0d61f637faf9bef411b906a306f276b1952906d97dd5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5ae7e9d754eb0b23e116d8418301c69fb6ea97aeff0e507c4098f761926f0eaa = $this->env->getExtension("native_profiler");
        $__internal_5ae7e9d754eb0b23e116d8418301c69fb6ea97aeff0e507c4098f761926f0eaa->enter($__internal_5ae7e9d754eb0b23e116d8418301c69fb6ea97aeff0e507c4098f761926f0eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5ae7e9d754eb0b23e116d8418301c69fb6ea97aeff0e507c4098f761926f0eaa->leave($__internal_5ae7e9d754eb0b23e116d8418301c69fb6ea97aeff0e507c4098f761926f0eaa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e7691b4dea9856017a9546a23b0f286bd059b761af896d7525468fd2fb0165ec = $this->env->getExtension("native_profiler");
        $__internal_e7691b4dea9856017a9546a23b0f286bd059b761af896d7525468fd2fb0165ec->enter($__internal_e7691b4dea9856017a9546a23b0f286bd059b761af896d7525468fd2fb0165ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e7691b4dea9856017a9546a23b0f286bd059b761af896d7525468fd2fb0165ec->leave($__internal_e7691b4dea9856017a9546a23b0f286bd059b761af896d7525468fd2fb0165ec_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_94beeaa587dbc50f4224abfb9f86c401c6b561a3c5169ec2aa7c34decd3b6a51 = $this->env->getExtension("native_profiler");
        $__internal_94beeaa587dbc50f4224abfb9f86c401c6b561a3c5169ec2aa7c34decd3b6a51->enter($__internal_94beeaa587dbc50f4224abfb9f86c401c6b561a3c5169ec2aa7c34decd3b6a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_94beeaa587dbc50f4224abfb9f86c401c6b561a3c5169ec2aa7c34decd3b6a51->leave($__internal_94beeaa587dbc50f4224abfb9f86c401c6b561a3c5169ec2aa7c34decd3b6a51_prof);

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
