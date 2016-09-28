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
        $__internal_564137198027f39b986f064f8f5129963558b662ccf45f74bcfe621295c63310 = $this->env->getExtension("native_profiler");
        $__internal_564137198027f39b986f064f8f5129963558b662ccf45f74bcfe621295c63310->enter($__internal_564137198027f39b986f064f8f5129963558b662ccf45f74bcfe621295c63310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_564137198027f39b986f064f8f5129963558b662ccf45f74bcfe621295c63310->leave($__internal_564137198027f39b986f064f8f5129963558b662ccf45f74bcfe621295c63310_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_232061a3e9062aa5f5d3d45ff88a554e35a3707336b6481a600e846ab96c410b = $this->env->getExtension("native_profiler");
        $__internal_232061a3e9062aa5f5d3d45ff88a554e35a3707336b6481a600e846ab96c410b->enter($__internal_232061a3e9062aa5f5d3d45ff88a554e35a3707336b6481a600e846ab96c410b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_232061a3e9062aa5f5d3d45ff88a554e35a3707336b6481a600e846ab96c410b->leave($__internal_232061a3e9062aa5f5d3d45ff88a554e35a3707336b6481a600e846ab96c410b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f0f0b08e57b41e8e40a9b54123c08844c0f6859f1c01b42f247531d8c856e02e = $this->env->getExtension("native_profiler");
        $__internal_f0f0b08e57b41e8e40a9b54123c08844c0f6859f1c01b42f247531d8c856e02e->enter($__internal_f0f0b08e57b41e8e40a9b54123c08844c0f6859f1c01b42f247531d8c856e02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f0f0b08e57b41e8e40a9b54123c08844c0f6859f1c01b42f247531d8c856e02e->leave($__internal_f0f0b08e57b41e8e40a9b54123c08844c0f6859f1c01b42f247531d8c856e02e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_36bbb2040efe1ebf53444852e936954f743ecc5ef7b21eaabfc031157c439c85 = $this->env->getExtension("native_profiler");
        $__internal_36bbb2040efe1ebf53444852e936954f743ecc5ef7b21eaabfc031157c439c85->enter($__internal_36bbb2040efe1ebf53444852e936954f743ecc5ef7b21eaabfc031157c439c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_36bbb2040efe1ebf53444852e936954f743ecc5ef7b21eaabfc031157c439c85->leave($__internal_36bbb2040efe1ebf53444852e936954f743ecc5ef7b21eaabfc031157c439c85_prof);

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
