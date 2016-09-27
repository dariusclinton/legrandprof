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
        $__internal_6fea509652195b7583c4c3aac302e1fe22b809e92a64fdceb7a5f17edd7928f3 = $this->env->getExtension("native_profiler");
        $__internal_6fea509652195b7583c4c3aac302e1fe22b809e92a64fdceb7a5f17edd7928f3->enter($__internal_6fea509652195b7583c4c3aac302e1fe22b809e92a64fdceb7a5f17edd7928f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6fea509652195b7583c4c3aac302e1fe22b809e92a64fdceb7a5f17edd7928f3->leave($__internal_6fea509652195b7583c4c3aac302e1fe22b809e92a64fdceb7a5f17edd7928f3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aa69a7e0fbee9f8b07ca43a957451a4109bee9570683a186dcf911fc97da20f4 = $this->env->getExtension("native_profiler");
        $__internal_aa69a7e0fbee9f8b07ca43a957451a4109bee9570683a186dcf911fc97da20f4->enter($__internal_aa69a7e0fbee9f8b07ca43a957451a4109bee9570683a186dcf911fc97da20f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_aa69a7e0fbee9f8b07ca43a957451a4109bee9570683a186dcf911fc97da20f4->leave($__internal_aa69a7e0fbee9f8b07ca43a957451a4109bee9570683a186dcf911fc97da20f4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_30d5eb89f79a6f9df15a5aa01ad01ddf908d52e3ee37dd541cf0be627426cc68 = $this->env->getExtension("native_profiler");
        $__internal_30d5eb89f79a6f9df15a5aa01ad01ddf908d52e3ee37dd541cf0be627426cc68->enter($__internal_30d5eb89f79a6f9df15a5aa01ad01ddf908d52e3ee37dd541cf0be627426cc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_30d5eb89f79a6f9df15a5aa01ad01ddf908d52e3ee37dd541cf0be627426cc68->leave($__internal_30d5eb89f79a6f9df15a5aa01ad01ddf908d52e3ee37dd541cf0be627426cc68_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2b43dfb3af56e64adf8731e81c3ba5f7899f4a586d171c8469a7390ec4d1c721 = $this->env->getExtension("native_profiler");
        $__internal_2b43dfb3af56e64adf8731e81c3ba5f7899f4a586d171c8469a7390ec4d1c721->enter($__internal_2b43dfb3af56e64adf8731e81c3ba5f7899f4a586d171c8469a7390ec4d1c721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2b43dfb3af56e64adf8731e81c3ba5f7899f4a586d171c8469a7390ec4d1c721->leave($__internal_2b43dfb3af56e64adf8731e81c3ba5f7899f4a586d171c8469a7390ec4d1c721_prof);

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
