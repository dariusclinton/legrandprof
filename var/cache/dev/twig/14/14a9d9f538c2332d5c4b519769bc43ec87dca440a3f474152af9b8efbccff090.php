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
        $__internal_8ecbcd15b29a1d7903bd4cf5b08ee97adaccc5230d601e32a4fc9dba208b6795 = $this->env->getExtension("native_profiler");
        $__internal_8ecbcd15b29a1d7903bd4cf5b08ee97adaccc5230d601e32a4fc9dba208b6795->enter($__internal_8ecbcd15b29a1d7903bd4cf5b08ee97adaccc5230d601e32a4fc9dba208b6795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8ecbcd15b29a1d7903bd4cf5b08ee97adaccc5230d601e32a4fc9dba208b6795->leave($__internal_8ecbcd15b29a1d7903bd4cf5b08ee97adaccc5230d601e32a4fc9dba208b6795_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_77238edaddecf52ea1e102ec4386fa66d506087a88772dd3556d16c5610b7248 = $this->env->getExtension("native_profiler");
        $__internal_77238edaddecf52ea1e102ec4386fa66d506087a88772dd3556d16c5610b7248->enter($__internal_77238edaddecf52ea1e102ec4386fa66d506087a88772dd3556d16c5610b7248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_77238edaddecf52ea1e102ec4386fa66d506087a88772dd3556d16c5610b7248->leave($__internal_77238edaddecf52ea1e102ec4386fa66d506087a88772dd3556d16c5610b7248_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_687a087a8a6ab16ed0542ea336b0407c2c5f958cc552f082d98e87294abeb71a = $this->env->getExtension("native_profiler");
        $__internal_687a087a8a6ab16ed0542ea336b0407c2c5f958cc552f082d98e87294abeb71a->enter($__internal_687a087a8a6ab16ed0542ea336b0407c2c5f958cc552f082d98e87294abeb71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_687a087a8a6ab16ed0542ea336b0407c2c5f958cc552f082d98e87294abeb71a->leave($__internal_687a087a8a6ab16ed0542ea336b0407c2c5f958cc552f082d98e87294abeb71a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3bf8ed635b670c1ced0a3670f05fb18c98a55d41fae6445798411894e782d45f = $this->env->getExtension("native_profiler");
        $__internal_3bf8ed635b670c1ced0a3670f05fb18c98a55d41fae6445798411894e782d45f->enter($__internal_3bf8ed635b670c1ced0a3670f05fb18c98a55d41fae6445798411894e782d45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3bf8ed635b670c1ced0a3670f05fb18c98a55d41fae6445798411894e782d45f->leave($__internal_3bf8ed635b670c1ced0a3670f05fb18c98a55d41fae6445798411894e782d45f_prof);

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
