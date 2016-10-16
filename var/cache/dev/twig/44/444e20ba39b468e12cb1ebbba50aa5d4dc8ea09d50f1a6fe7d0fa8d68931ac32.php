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
        $__internal_49314c276ac38cc4bf0f357851ed9555e11c5a3177f8ac19598aff13af320986 = $this->env->getExtension("native_profiler");
        $__internal_49314c276ac38cc4bf0f357851ed9555e11c5a3177f8ac19598aff13af320986->enter($__internal_49314c276ac38cc4bf0f357851ed9555e11c5a3177f8ac19598aff13af320986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_49314c276ac38cc4bf0f357851ed9555e11c5a3177f8ac19598aff13af320986->leave($__internal_49314c276ac38cc4bf0f357851ed9555e11c5a3177f8ac19598aff13af320986_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_88bd0b3a71d1bb966b8490e15339e85d6ecf14f56dc9b63b80856510e02b068b = $this->env->getExtension("native_profiler");
        $__internal_88bd0b3a71d1bb966b8490e15339e85d6ecf14f56dc9b63b80856510e02b068b->enter($__internal_88bd0b3a71d1bb966b8490e15339e85d6ecf14f56dc9b63b80856510e02b068b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_88bd0b3a71d1bb966b8490e15339e85d6ecf14f56dc9b63b80856510e02b068b->leave($__internal_88bd0b3a71d1bb966b8490e15339e85d6ecf14f56dc9b63b80856510e02b068b_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d8320a78d010613c0faffc885bf0f3a6c7fdc8962aadacd1f325ba8f65b64611 = $this->env->getExtension("native_profiler");
        $__internal_d8320a78d010613c0faffc885bf0f3a6c7fdc8962aadacd1f325ba8f65b64611->enter($__internal_d8320a78d010613c0faffc885bf0f3a6c7fdc8962aadacd1f325ba8f65b64611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array())), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_d8320a78d010613c0faffc885bf0f3a6c7fdc8962aadacd1f325ba8f65b64611->leave($__internal_d8320a78d010613c0faffc885bf0f3a6c7fdc8962aadacd1f325ba8f65b64611_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8f2730d79b3ab9fd652254d4ceff31d4afafc2ca8185684ae4026dd3c7a7e926 = $this->env->getExtension("native_profiler");
        $__internal_8f2730d79b3ab9fd652254d4ceff31d4afafc2ca8185684ae4026dd3c7a7e926->enter($__internal_8f2730d79b3ab9fd652254d4ceff31d4afafc2ca8185684ae4026dd3c7a7e926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8f2730d79b3ab9fd652254d4ceff31d4afafc2ca8185684ae4026dd3c7a7e926->leave($__internal_8f2730d79b3ab9fd652254d4ceff31d4afafc2ca8185684ae4026dd3c7a7e926_prof);

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
  {{ 'registration.email.subject'|trans({'%username%': user.prenoms, '%confirmationUrl%': confirmationUrl}) }}
  {% endautoescape %}
{% endblock %}

{% block body_text %}
  {% autoescape false %}
  {{ 'registration.email.message'|trans({'%username%': user.prenoms | upper, '%confirmationUrl%': confirmationUrl}) }}
  {% endautoescape %}
{% endblock %}

{% block body_html %}{% endblock %}
";
    }
}
