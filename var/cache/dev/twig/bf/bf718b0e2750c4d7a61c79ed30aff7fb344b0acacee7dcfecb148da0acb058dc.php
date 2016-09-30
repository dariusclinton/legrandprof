<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_9356332193063902e3a3be80d22ee17bea76de800561fe63d1ecf7ec890a5942 extends Twig_Template
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
        $__internal_93159cea5ed6f8d19cbd27180f654e8737793788c72ff81607d5dbcdfe9418a5 = $this->env->getExtension("native_profiler");
        $__internal_93159cea5ed6f8d19cbd27180f654e8737793788c72ff81607d5dbcdfe9418a5->enter($__internal_93159cea5ed6f8d19cbd27180f654e8737793788c72ff81607d5dbcdfe9418a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_93159cea5ed6f8d19cbd27180f654e8737793788c72ff81607d5dbcdfe9418a5->leave($__internal_93159cea5ed6f8d19cbd27180f654e8737793788c72ff81607d5dbcdfe9418a5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9b384077a45c4fe9596855c06e0b39354221951f25bf5b001cdbc9aa87a9ca77 = $this->env->getExtension("native_profiler");
        $__internal_9b384077a45c4fe9596855c06e0b39354221951f25bf5b001cdbc9aa87a9ca77->enter($__internal_9b384077a45c4fe9596855c06e0b39354221951f25bf5b001cdbc9aa87a9ca77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9b384077a45c4fe9596855c06e0b39354221951f25bf5b001cdbc9aa87a9ca77->leave($__internal_9b384077a45c4fe9596855c06e0b39354221951f25bf5b001cdbc9aa87a9ca77_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ddf3afbb6d2c6c2c7b9b93f3f2371bd4cdd5301fd9749c58108115b830b5bde1 = $this->env->getExtension("native_profiler");
        $__internal_ddf3afbb6d2c6c2c7b9b93f3f2371bd4cdd5301fd9749c58108115b830b5bde1->enter($__internal_ddf3afbb6d2c6c2c7b9b93f3f2371bd4cdd5301fd9749c58108115b830b5bde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ddf3afbb6d2c6c2c7b9b93f3f2371bd4cdd5301fd9749c58108115b830b5bde1->leave($__internal_ddf3afbb6d2c6c2c7b9b93f3f2371bd4cdd5301fd9749c58108115b830b5bde1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ff010d05c883a70f36b5b318bade803338d7256a1173f18a75b505a7d770108b = $this->env->getExtension("native_profiler");
        $__internal_ff010d05c883a70f36b5b318bade803338d7256a1173f18a75b505a7d770108b->enter($__internal_ff010d05c883a70f36b5b318bade803338d7256a1173f18a75b505a7d770108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ff010d05c883a70f36b5b318bade803338d7256a1173f18a75b505a7d770108b->leave($__internal_ff010d05c883a70f36b5b318bade803338d7256a1173f18a75b505a7d770108b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
