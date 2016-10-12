<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8b02bcd5e9ec801b298d89fd284aa660d3d5e82fb298cfe6e8beb9b1cb966719 extends Twig_Template
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
        $__internal_07e8cd4df12f445acff10776e00d8bfa66f38e8b4578aadc30617454d462c21a = $this->env->getExtension("native_profiler");
        $__internal_07e8cd4df12f445acff10776e00d8bfa66f38e8b4578aadc30617454d462c21a->enter($__internal_07e8cd4df12f445acff10776e00d8bfa66f38e8b4578aadc30617454d462c21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_07e8cd4df12f445acff10776e00d8bfa66f38e8b4578aadc30617454d462c21a->leave($__internal_07e8cd4df12f445acff10776e00d8bfa66f38e8b4578aadc30617454d462c21a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b58cc2441dc7946e7b54f58e2d2338e049aef42aaf365ccf0df0a68252feeafc = $this->env->getExtension("native_profiler");
        $__internal_b58cc2441dc7946e7b54f58e2d2338e049aef42aaf365ccf0df0a68252feeafc->enter($__internal_b58cc2441dc7946e7b54f58e2d2338e049aef42aaf365ccf0df0a68252feeafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b58cc2441dc7946e7b54f58e2d2338e049aef42aaf365ccf0df0a68252feeafc->leave($__internal_b58cc2441dc7946e7b54f58e2d2338e049aef42aaf365ccf0df0a68252feeafc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_78942a39bc4e57bcc35d375248793f42dd683097c21ebc2825db80bdb52ae84e = $this->env->getExtension("native_profiler");
        $__internal_78942a39bc4e57bcc35d375248793f42dd683097c21ebc2825db80bdb52ae84e->enter($__internal_78942a39bc4e57bcc35d375248793f42dd683097c21ebc2825db80bdb52ae84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_78942a39bc4e57bcc35d375248793f42dd683097c21ebc2825db80bdb52ae84e->leave($__internal_78942a39bc4e57bcc35d375248793f42dd683097c21ebc2825db80bdb52ae84e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4cdb822c4085e598da2e75fa399f8e9e9245f671f8f21fae7c925ddb56ac2551 = $this->env->getExtension("native_profiler");
        $__internal_4cdb822c4085e598da2e75fa399f8e9e9245f671f8f21fae7c925ddb56ac2551->enter($__internal_4cdb822c4085e598da2e75fa399f8e9e9245f671f8f21fae7c925ddb56ac2551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4cdb822c4085e598da2e75fa399f8e9e9245f671f8f21fae7c925ddb56ac2551->leave($__internal_4cdb822c4085e598da2e75fa399f8e9e9245f671f8f21fae7c925ddb56ac2551_prof);

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
