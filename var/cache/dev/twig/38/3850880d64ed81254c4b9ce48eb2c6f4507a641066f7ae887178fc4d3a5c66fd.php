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
        $__internal_971746c9e641e0c0b3db01822fdb1b9c2cdb49735595aee9c5e95e1ec85201d6 = $this->env->getExtension("native_profiler");
        $__internal_971746c9e641e0c0b3db01822fdb1b9c2cdb49735595aee9c5e95e1ec85201d6->enter($__internal_971746c9e641e0c0b3db01822fdb1b9c2cdb49735595aee9c5e95e1ec85201d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_971746c9e641e0c0b3db01822fdb1b9c2cdb49735595aee9c5e95e1ec85201d6->leave($__internal_971746c9e641e0c0b3db01822fdb1b9c2cdb49735595aee9c5e95e1ec85201d6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8a83ab9995c7d55fec65c3731779fcf8412152f9f339a23bb3f6823c2aa8f064 = $this->env->getExtension("native_profiler");
        $__internal_8a83ab9995c7d55fec65c3731779fcf8412152f9f339a23bb3f6823c2aa8f064->enter($__internal_8a83ab9995c7d55fec65c3731779fcf8412152f9f339a23bb3f6823c2aa8f064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8a83ab9995c7d55fec65c3731779fcf8412152f9f339a23bb3f6823c2aa8f064->leave($__internal_8a83ab9995c7d55fec65c3731779fcf8412152f9f339a23bb3f6823c2aa8f064_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f46392971c8e002f4fc907c14372e8212d9840d66b042f59fd6bfbd69789dbf7 = $this->env->getExtension("native_profiler");
        $__internal_f46392971c8e002f4fc907c14372e8212d9840d66b042f59fd6bfbd69789dbf7->enter($__internal_f46392971c8e002f4fc907c14372e8212d9840d66b042f59fd6bfbd69789dbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f46392971c8e002f4fc907c14372e8212d9840d66b042f59fd6bfbd69789dbf7->leave($__internal_f46392971c8e002f4fc907c14372e8212d9840d66b042f59fd6bfbd69789dbf7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8de6e954f3bd86059a4ec092ac6adf1ee6185b61b6dc976767c4616b6376df7c = $this->env->getExtension("native_profiler");
        $__internal_8de6e954f3bd86059a4ec092ac6adf1ee6185b61b6dc976767c4616b6376df7c->enter($__internal_8de6e954f3bd86059a4ec092ac6adf1ee6185b61b6dc976767c4616b6376df7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8de6e954f3bd86059a4ec092ac6adf1ee6185b61b6dc976767c4616b6376df7c->leave($__internal_8de6e954f3bd86059a4ec092ac6adf1ee6185b61b6dc976767c4616b6376df7c_prof);

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
