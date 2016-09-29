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
        $__internal_d96dc76195c066b4a61051f99b4c82e32fca279e6be1df533e00066e0092b918 = $this->env->getExtension("native_profiler");
        $__internal_d96dc76195c066b4a61051f99b4c82e32fca279e6be1df533e00066e0092b918->enter($__internal_d96dc76195c066b4a61051f99b4c82e32fca279e6be1df533e00066e0092b918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d96dc76195c066b4a61051f99b4c82e32fca279e6be1df533e00066e0092b918->leave($__internal_d96dc76195c066b4a61051f99b4c82e32fca279e6be1df533e00066e0092b918_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b629da564d6e56988b68b6a083cfac69f5cfec4e446b7062b85c81aa8711e950 = $this->env->getExtension("native_profiler");
        $__internal_b629da564d6e56988b68b6a083cfac69f5cfec4e446b7062b85c81aa8711e950->enter($__internal_b629da564d6e56988b68b6a083cfac69f5cfec4e446b7062b85c81aa8711e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b629da564d6e56988b68b6a083cfac69f5cfec4e446b7062b85c81aa8711e950->leave($__internal_b629da564d6e56988b68b6a083cfac69f5cfec4e446b7062b85c81aa8711e950_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9c67e88aa53977eb5005c4165f00016b3e6a33d86ced3bbaaf91bfc79ba2dcb6 = $this->env->getExtension("native_profiler");
        $__internal_9c67e88aa53977eb5005c4165f00016b3e6a33d86ced3bbaaf91bfc79ba2dcb6->enter($__internal_9c67e88aa53977eb5005c4165f00016b3e6a33d86ced3bbaaf91bfc79ba2dcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9c67e88aa53977eb5005c4165f00016b3e6a33d86ced3bbaaf91bfc79ba2dcb6->leave($__internal_9c67e88aa53977eb5005c4165f00016b3e6a33d86ced3bbaaf91bfc79ba2dcb6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5b4fc50550f0f08eaee502234375ff740f017bb1c64d7b91ecc2458126104e04 = $this->env->getExtension("native_profiler");
        $__internal_5b4fc50550f0f08eaee502234375ff740f017bb1c64d7b91ecc2458126104e04->enter($__internal_5b4fc50550f0f08eaee502234375ff740f017bb1c64d7b91ecc2458126104e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5b4fc50550f0f08eaee502234375ff740f017bb1c64d7b91ecc2458126104e04->leave($__internal_5b4fc50550f0f08eaee502234375ff740f017bb1c64d7b91ecc2458126104e04_prof);

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
