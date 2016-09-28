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
        $__internal_6e3572707f84e555a2b695f81ecaf5f3ba91f350772cdc0b34feab6412f3cf9b = $this->env->getExtension("native_profiler");
        $__internal_6e3572707f84e555a2b695f81ecaf5f3ba91f350772cdc0b34feab6412f3cf9b->enter($__internal_6e3572707f84e555a2b695f81ecaf5f3ba91f350772cdc0b34feab6412f3cf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6e3572707f84e555a2b695f81ecaf5f3ba91f350772cdc0b34feab6412f3cf9b->leave($__internal_6e3572707f84e555a2b695f81ecaf5f3ba91f350772cdc0b34feab6412f3cf9b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6458ce59111e1e04a6ff1441076a704cd6cb147b7a3b5e9c7f65f85622d2058d = $this->env->getExtension("native_profiler");
        $__internal_6458ce59111e1e04a6ff1441076a704cd6cb147b7a3b5e9c7f65f85622d2058d->enter($__internal_6458ce59111e1e04a6ff1441076a704cd6cb147b7a3b5e9c7f65f85622d2058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6458ce59111e1e04a6ff1441076a704cd6cb147b7a3b5e9c7f65f85622d2058d->leave($__internal_6458ce59111e1e04a6ff1441076a704cd6cb147b7a3b5e9c7f65f85622d2058d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a030b817de5237fcdec62eef029402bc774b656eebe5281ca86893c404247b28 = $this->env->getExtension("native_profiler");
        $__internal_a030b817de5237fcdec62eef029402bc774b656eebe5281ca86893c404247b28->enter($__internal_a030b817de5237fcdec62eef029402bc774b656eebe5281ca86893c404247b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a030b817de5237fcdec62eef029402bc774b656eebe5281ca86893c404247b28->leave($__internal_a030b817de5237fcdec62eef029402bc774b656eebe5281ca86893c404247b28_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_37de1ee4413f63654c3f7994c2c0fd81c2b1cf2ebe50578cd73f3ba059c4838f = $this->env->getExtension("native_profiler");
        $__internal_37de1ee4413f63654c3f7994c2c0fd81c2b1cf2ebe50578cd73f3ba059c4838f->enter($__internal_37de1ee4413f63654c3f7994c2c0fd81c2b1cf2ebe50578cd73f3ba059c4838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_37de1ee4413f63654c3f7994c2c0fd81c2b1cf2ebe50578cd73f3ba059c4838f->leave($__internal_37de1ee4413f63654c3f7994c2c0fd81c2b1cf2ebe50578cd73f3ba059c4838f_prof);

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
