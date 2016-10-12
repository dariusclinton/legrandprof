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
        $__internal_6fb9f25f42603001f39efba09a1d8c06ea5e6f7dd711c67f379eb288c49fc4c2 = $this->env->getExtension("native_profiler");
        $__internal_6fb9f25f42603001f39efba09a1d8c06ea5e6f7dd711c67f379eb288c49fc4c2->enter($__internal_6fb9f25f42603001f39efba09a1d8c06ea5e6f7dd711c67f379eb288c49fc4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_6fb9f25f42603001f39efba09a1d8c06ea5e6f7dd711c67f379eb288c49fc4c2->leave($__internal_6fb9f25f42603001f39efba09a1d8c06ea5e6f7dd711c67f379eb288c49fc4c2_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a2c6042a9fa24d4de4e9646ba629d55292e24e3e0a1cd257d9e05ecadcd3c0bc = $this->env->getExtension("native_profiler");
        $__internal_a2c6042a9fa24d4de4e9646ba629d55292e24e3e0a1cd257d9e05ecadcd3c0bc->enter($__internal_a2c6042a9fa24d4de4e9646ba629d55292e24e3e0a1cd257d9e05ecadcd3c0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_a2c6042a9fa24d4de4e9646ba629d55292e24e3e0a1cd257d9e05ecadcd3c0bc->leave($__internal_a2c6042a9fa24d4de4e9646ba629d55292e24e3e0a1cd257d9e05ecadcd3c0bc_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_00fa1a8f3bb02f3f1cda467ee1eddf45fc83eea4ebc6705bb7b5f571a6b304b8 = $this->env->getExtension("native_profiler");
        $__internal_00fa1a8f3bb02f3f1cda467ee1eddf45fc83eea4ebc6705bb7b5f571a6b304b8->enter($__internal_00fa1a8f3bb02f3f1cda467ee1eddf45fc83eea4ebc6705bb7b5f571a6b304b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_00fa1a8f3bb02f3f1cda467ee1eddf45fc83eea4ebc6705bb7b5f571a6b304b8->leave($__internal_00fa1a8f3bb02f3f1cda467ee1eddf45fc83eea4ebc6705bb7b5f571a6b304b8_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d939604ae3ee87e281fbd24241ddb33deb5a60d715694e79229c3cfc423d492 = $this->env->getExtension("native_profiler");
        $__internal_0d939604ae3ee87e281fbd24241ddb33deb5a60d715694e79229c3cfc423d492->enter($__internal_0d939604ae3ee87e281fbd24241ddb33deb5a60d715694e79229c3cfc423d492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0d939604ae3ee87e281fbd24241ddb33deb5a60d715694e79229c3cfc423d492->leave($__internal_0d939604ae3ee87e281fbd24241ddb33deb5a60d715694e79229c3cfc423d492_prof);

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
