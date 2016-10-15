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
        $__internal_4d26fc468a90d8a623b28e872c775972abba17efe3b2fbbd0bcf4911e195f701 = $this->env->getExtension("native_profiler");
        $__internal_4d26fc468a90d8a623b28e872c775972abba17efe3b2fbbd0bcf4911e195f701->enter($__internal_4d26fc468a90d8a623b28e872c775972abba17efe3b2fbbd0bcf4911e195f701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_4d26fc468a90d8a623b28e872c775972abba17efe3b2fbbd0bcf4911e195f701->leave($__internal_4d26fc468a90d8a623b28e872c775972abba17efe3b2fbbd0bcf4911e195f701_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_135b7090c1a2f88797622588db8c42dce1e0afa9c88347dd162783c912ab67db = $this->env->getExtension("native_profiler");
        $__internal_135b7090c1a2f88797622588db8c42dce1e0afa9c88347dd162783c912ab67db->enter($__internal_135b7090c1a2f88797622588db8c42dce1e0afa9c88347dd162783c912ab67db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_135b7090c1a2f88797622588db8c42dce1e0afa9c88347dd162783c912ab67db->leave($__internal_135b7090c1a2f88797622588db8c42dce1e0afa9c88347dd162783c912ab67db_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3ae85d04927cd5cc459d7a2b75a58ae27b31db51b542352fd76a53711bf984ac = $this->env->getExtension("native_profiler");
        $__internal_3ae85d04927cd5cc459d7a2b75a58ae27b31db51b542352fd76a53711bf984ac->enter($__internal_3ae85d04927cd5cc459d7a2b75a58ae27b31db51b542352fd76a53711bf984ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_3ae85d04927cd5cc459d7a2b75a58ae27b31db51b542352fd76a53711bf984ac->leave($__internal_3ae85d04927cd5cc459d7a2b75a58ae27b31db51b542352fd76a53711bf984ac_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e32fa238851fbae2e4bd584dcd208c7282681fde6a162db8b3a2ac7042203bef = $this->env->getExtension("native_profiler");
        $__internal_e32fa238851fbae2e4bd584dcd208c7282681fde6a162db8b3a2ac7042203bef->enter($__internal_e32fa238851fbae2e4bd584dcd208c7282681fde6a162db8b3a2ac7042203bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e32fa238851fbae2e4bd584dcd208c7282681fde6a162db8b3a2ac7042203bef->leave($__internal_e32fa238851fbae2e4bd584dcd208c7282681fde6a162db8b3a2ac7042203bef_prof);

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
