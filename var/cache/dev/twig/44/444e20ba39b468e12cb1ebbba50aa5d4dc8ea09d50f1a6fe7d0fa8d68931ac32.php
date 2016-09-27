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
        $__internal_a5db5865ad56158c28abd397189f7de448cea0107cdeaa707ab0a022df9a72a1 = $this->env->getExtension("native_profiler");
        $__internal_a5db5865ad56158c28abd397189f7de448cea0107cdeaa707ab0a022df9a72a1->enter($__internal_a5db5865ad56158c28abd397189f7de448cea0107cdeaa707ab0a022df9a72a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_a5db5865ad56158c28abd397189f7de448cea0107cdeaa707ab0a022df9a72a1->leave($__internal_a5db5865ad56158c28abd397189f7de448cea0107cdeaa707ab0a022df9a72a1_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d69a2de3ddccb5046d6fddc42f1cc14ce56be1a74cd35eae7010e36953ce250e = $this->env->getExtension("native_profiler");
        $__internal_d69a2de3ddccb5046d6fddc42f1cc14ce56be1a74cd35eae7010e36953ce250e->enter($__internal_d69a2de3ddccb5046d6fddc42f1cc14ce56be1a74cd35eae7010e36953ce250e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_d69a2de3ddccb5046d6fddc42f1cc14ce56be1a74cd35eae7010e36953ce250e->leave($__internal_d69a2de3ddccb5046d6fddc42f1cc14ce56be1a74cd35eae7010e36953ce250e_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d24ae3ccad6e8f3ed8387dfefb0b4b2e78d531c275d18d3a338e645677393eac = $this->env->getExtension("native_profiler");
        $__internal_d24ae3ccad6e8f3ed8387dfefb0b4b2e78d531c275d18d3a338e645677393eac->enter($__internal_d24ae3ccad6e8f3ed8387dfefb0b4b2e78d531c275d18d3a338e645677393eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_d24ae3ccad6e8f3ed8387dfefb0b4b2e78d531c275d18d3a338e645677393eac->leave($__internal_d24ae3ccad6e8f3ed8387dfefb0b4b2e78d531c275d18d3a338e645677393eac_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_958b05f9577711d169ed7d35fee9335631f60aa9b18fe9c6873c31c0c2de4ef7 = $this->env->getExtension("native_profiler");
        $__internal_958b05f9577711d169ed7d35fee9335631f60aa9b18fe9c6873c31c0c2de4ef7->enter($__internal_958b05f9577711d169ed7d35fee9335631f60aa9b18fe9c6873c31c0c2de4ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_958b05f9577711d169ed7d35fee9335631f60aa9b18fe9c6873c31c0c2de4ef7->leave($__internal_958b05f9577711d169ed7d35fee9335631f60aa9b18fe9c6873c31c0c2de4ef7_prof);

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
