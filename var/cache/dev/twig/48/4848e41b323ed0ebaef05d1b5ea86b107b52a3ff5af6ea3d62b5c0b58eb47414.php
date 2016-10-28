<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_da54af5bc35d9e3aefc09767d42a334cc037fe6c2bf934c416a2dca532ccc81a extends Twig_Template
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
        $__internal_fe935197fccc51929fbd727b0a57c3f701a354b0cd136cd9df3349b7c59332bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe935197fccc51929fbd727b0a57c3f701a354b0cd136cd9df3349b7c59332bc->enter($__internal_fe935197fccc51929fbd727b0a57c3f701a354b0cd136cd9df3349b7c59332bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fe935197fccc51929fbd727b0a57c3f701a354b0cd136cd9df3349b7c59332bc->leave($__internal_fe935197fccc51929fbd727b0a57c3f701a354b0cd136cd9df3349b7c59332bc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c714a733f5453ae21692f35ae7eb08971aa6c2c69fcb2383680f448e56ebe743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c714a733f5453ae21692f35ae7eb08971aa6c2c69fcb2383680f448e56ebe743->enter($__internal_c714a733f5453ae21692f35ae7eb08971aa6c2c69fcb2383680f448e56ebe743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c714a733f5453ae21692f35ae7eb08971aa6c2c69fcb2383680f448e56ebe743->leave($__internal_c714a733f5453ae21692f35ae7eb08971aa6c2c69fcb2383680f448e56ebe743_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9c9a4cbf9789ac653aa6f07b20538c1a7be5950aa9ff2cc1053f9cb55d9e2b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9a4cbf9789ac653aa6f07b20538c1a7be5950aa9ff2cc1053f9cb55d9e2b26->enter($__internal_9c9a4cbf9789ac653aa6f07b20538c1a7be5950aa9ff2cc1053f9cb55d9e2b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9c9a4cbf9789ac653aa6f07b20538c1a7be5950aa9ff2cc1053f9cb55d9e2b26->leave($__internal_9c9a4cbf9789ac653aa6f07b20538c1a7be5950aa9ff2cc1053f9cb55d9e2b26_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aa9651eee38499f0b6e7a3ecebfe427358dfd4cce0cc3937e8ea8283e97e7916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9651eee38499f0b6e7a3ecebfe427358dfd4cce0cc3937e8ea8283e97e7916->enter($__internal_aa9651eee38499f0b6e7a3ecebfe427358dfd4cce0cc3937e8ea8283e97e7916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aa9651eee38499f0b6e7a3ecebfe427358dfd4cce0cc3937e8ea8283e97e7916->leave($__internal_aa9651eee38499f0b6e7a3ecebfe427358dfd4cce0cc3937e8ea8283e97e7916_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
