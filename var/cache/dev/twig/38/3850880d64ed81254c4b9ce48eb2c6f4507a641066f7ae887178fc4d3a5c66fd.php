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
        $__internal_a89636b4e6a7d8c3786560073f9e05b3e0c6454fbea79ebd58ec69041f7c0124 = $this->env->getExtension("native_profiler");
        $__internal_a89636b4e6a7d8c3786560073f9e05b3e0c6454fbea79ebd58ec69041f7c0124->enter($__internal_a89636b4e6a7d8c3786560073f9e05b3e0c6454fbea79ebd58ec69041f7c0124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a89636b4e6a7d8c3786560073f9e05b3e0c6454fbea79ebd58ec69041f7c0124->leave($__internal_a89636b4e6a7d8c3786560073f9e05b3e0c6454fbea79ebd58ec69041f7c0124_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_067e7fa01a370734a6ef600d0e2f15becbeef49991358170a03821e15b937b19 = $this->env->getExtension("native_profiler");
        $__internal_067e7fa01a370734a6ef600d0e2f15becbeef49991358170a03821e15b937b19->enter($__internal_067e7fa01a370734a6ef600d0e2f15becbeef49991358170a03821e15b937b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_067e7fa01a370734a6ef600d0e2f15becbeef49991358170a03821e15b937b19->leave($__internal_067e7fa01a370734a6ef600d0e2f15becbeef49991358170a03821e15b937b19_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_600dd774d5c82ac85afac4ff276a0e019ba92ed4b8b681cc186c11a00884f59e = $this->env->getExtension("native_profiler");
        $__internal_600dd774d5c82ac85afac4ff276a0e019ba92ed4b8b681cc186c11a00884f59e->enter($__internal_600dd774d5c82ac85afac4ff276a0e019ba92ed4b8b681cc186c11a00884f59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_600dd774d5c82ac85afac4ff276a0e019ba92ed4b8b681cc186c11a00884f59e->leave($__internal_600dd774d5c82ac85afac4ff276a0e019ba92ed4b8b681cc186c11a00884f59e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bee763e61fc5984731854baa9d20427dabe41ce9a0ca4db785d64b02a1b71c73 = $this->env->getExtension("native_profiler");
        $__internal_bee763e61fc5984731854baa9d20427dabe41ce9a0ca4db785d64b02a1b71c73->enter($__internal_bee763e61fc5984731854baa9d20427dabe41ce9a0ca4db785d64b02a1b71c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bee763e61fc5984731854baa9d20427dabe41ce9a0ca4db785d64b02a1b71c73->leave($__internal_bee763e61fc5984731854baa9d20427dabe41ce9a0ca4db785d64b02a1b71c73_prof);

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
