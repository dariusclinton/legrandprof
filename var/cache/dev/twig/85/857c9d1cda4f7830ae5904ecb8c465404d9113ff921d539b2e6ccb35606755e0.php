<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b2da100027ad2c80aff66fe8c43d7acd5fc639b2de787732c4e4de55a407e6b5 extends Twig_Template
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
        $__internal_1ee65461e725100538454d92326a9b19bfcccf124834a7c72e38e5916ea86758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee65461e725100538454d92326a9b19bfcccf124834a7c72e38e5916ea86758->enter($__internal_1ee65461e725100538454d92326a9b19bfcccf124834a7c72e38e5916ea86758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1ee65461e725100538454d92326a9b19bfcccf124834a7c72e38e5916ea86758->leave($__internal_1ee65461e725100538454d92326a9b19bfcccf124834a7c72e38e5916ea86758_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ce569214318baed61cbc28b0022119569bfe59288bb683146bf4594a6d7ac433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce569214318baed61cbc28b0022119569bfe59288bb683146bf4594a6d7ac433->enter($__internal_ce569214318baed61cbc28b0022119569bfe59288bb683146bf4594a6d7ac433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ce569214318baed61cbc28b0022119569bfe59288bb683146bf4594a6d7ac433->leave($__internal_ce569214318baed61cbc28b0022119569bfe59288bb683146bf4594a6d7ac433_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d0fa228777c908e918ed9fae2080d59cb392dec25420d439653b58c437f6b356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fa228777c908e918ed9fae2080d59cb392dec25420d439653b58c437f6b356->enter($__internal_d0fa228777c908e918ed9fae2080d59cb392dec25420d439653b58c437f6b356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0fa228777c908e918ed9fae2080d59cb392dec25420d439653b58c437f6b356->leave($__internal_d0fa228777c908e918ed9fae2080d59cb392dec25420d439653b58c437f6b356_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_579b5ec98900dbe2dcc2dfa0b7d05da96e2c8bc93a4e064cf396f7eb4f8b8161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579b5ec98900dbe2dcc2dfa0b7d05da96e2c8bc93a4e064cf396f7eb4f8b8161->enter($__internal_579b5ec98900dbe2dcc2dfa0b7d05da96e2c8bc93a4e064cf396f7eb4f8b8161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_579b5ec98900dbe2dcc2dfa0b7d05da96e2c8bc93a4e064cf396f7eb4f8b8161->leave($__internal_579b5ec98900dbe2dcc2dfa0b7d05da96e2c8bc93a4e064cf396f7eb4f8b8161_prof);

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
