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
        $__internal_904883c0413b59bd6c0477d1e5b7266820f5bc1ad831160073f6469cf2480485 = $this->env->getExtension("native_profiler");
        $__internal_904883c0413b59bd6c0477d1e5b7266820f5bc1ad831160073f6469cf2480485->enter($__internal_904883c0413b59bd6c0477d1e5b7266820f5bc1ad831160073f6469cf2480485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_904883c0413b59bd6c0477d1e5b7266820f5bc1ad831160073f6469cf2480485->leave($__internal_904883c0413b59bd6c0477d1e5b7266820f5bc1ad831160073f6469cf2480485_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b91f568fdc83203fc731819311628cd6767a51f46deaf59bacd7e7d819e6f117 = $this->env->getExtension("native_profiler");
        $__internal_b91f568fdc83203fc731819311628cd6767a51f46deaf59bacd7e7d819e6f117->enter($__internal_b91f568fdc83203fc731819311628cd6767a51f46deaf59bacd7e7d819e6f117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_b91f568fdc83203fc731819311628cd6767a51f46deaf59bacd7e7d819e6f117->leave($__internal_b91f568fdc83203fc731819311628cd6767a51f46deaf59bacd7e7d819e6f117_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_11f188a112b52b1ec3ea0aeaf53a217311f0793fb69935f1c6527df565a3893a = $this->env->getExtension("native_profiler");
        $__internal_11f188a112b52b1ec3ea0aeaf53a217311f0793fb69935f1c6527df565a3893a->enter($__internal_11f188a112b52b1ec3ea0aeaf53a217311f0793fb69935f1c6527df565a3893a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_11f188a112b52b1ec3ea0aeaf53a217311f0793fb69935f1c6527df565a3893a->leave($__internal_11f188a112b52b1ec3ea0aeaf53a217311f0793fb69935f1c6527df565a3893a_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_35eb9ff51005b6907dba7dd8b2a478e94727fe661109c6f94dffb06af66db683 = $this->env->getExtension("native_profiler");
        $__internal_35eb9ff51005b6907dba7dd8b2a478e94727fe661109c6f94dffb06af66db683->enter($__internal_35eb9ff51005b6907dba7dd8b2a478e94727fe661109c6f94dffb06af66db683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_35eb9ff51005b6907dba7dd8b2a478e94727fe661109c6f94dffb06af66db683->leave($__internal_35eb9ff51005b6907dba7dd8b2a478e94727fe661109c6f94dffb06af66db683_prof);

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
