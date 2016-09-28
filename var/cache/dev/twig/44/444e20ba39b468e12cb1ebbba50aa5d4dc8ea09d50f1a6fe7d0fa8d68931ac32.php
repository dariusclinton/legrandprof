<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6048cbd3a26dac7cd710c4ed71ee4a96460882edef410594863dac425eedaed8 extends Twig_Template
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
        $__internal_dda155aada35071b648bdb9930a77e3bff62b2779d821b4989c665bd7df2ca31 = $this->env->getExtension("native_profiler");
        $__internal_dda155aada35071b648bdb9930a77e3bff62b2779d821b4989c665bd7df2ca31->enter($__internal_dda155aada35071b648bdb9930a77e3bff62b2779d821b4989c665bd7df2ca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dda155aada35071b648bdb9930a77e3bff62b2779d821b4989c665bd7df2ca31->leave($__internal_dda155aada35071b648bdb9930a77e3bff62b2779d821b4989c665bd7df2ca31_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ae7cb7e35f1e6625c4a95bd409bd4b7d07541c71e0c67e20246e6b9c4b541c32 = $this->env->getExtension("native_profiler");
        $__internal_ae7cb7e35f1e6625c4a95bd409bd4b7d07541c71e0c67e20246e6b9c4b541c32->enter($__internal_ae7cb7e35f1e6625c4a95bd409bd4b7d07541c71e0c67e20246e6b9c4b541c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_ae7cb7e35f1e6625c4a95bd409bd4b7d07541c71e0c67e20246e6b9c4b541c32->leave($__internal_ae7cb7e35f1e6625c4a95bd409bd4b7d07541c71e0c67e20246e6b9c4b541c32_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cb6479804474dc99528986ad24ca0eaf11f9eba7fcef24a27f446cdfb4c3b2dc = $this->env->getExtension("native_profiler");
        $__internal_cb6479804474dc99528986ad24ca0eaf11f9eba7fcef24a27f446cdfb4c3b2dc->enter($__internal_cb6479804474dc99528986ad24ca0eaf11f9eba7fcef24a27f446cdfb4c3b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_cb6479804474dc99528986ad24ca0eaf11f9eba7fcef24a27f446cdfb4c3b2dc->leave($__internal_cb6479804474dc99528986ad24ca0eaf11f9eba7fcef24a27f446cdfb4c3b2dc_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f80836620292b731842c8f8ae710db3c9f15f1637d77a7cbd1dd4d80cb5971ba = $this->env->getExtension("native_profiler");
        $__internal_f80836620292b731842c8f8ae710db3c9f15f1637d77a7cbd1dd4d80cb5971ba->enter($__internal_f80836620292b731842c8f8ae710db3c9f15f1637d77a7cbd1dd4d80cb5971ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f80836620292b731842c8f8ae710db3c9f15f1637d77a7cbd1dd4d80cb5971ba->leave($__internal_f80836620292b731842c8f8ae710db3c9f15f1637d77a7cbd1dd4d80cb5971ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
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
