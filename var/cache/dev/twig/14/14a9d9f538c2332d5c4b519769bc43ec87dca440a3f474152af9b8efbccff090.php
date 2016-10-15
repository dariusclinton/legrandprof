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
        $__internal_eb87f31aadb0e5c44050f007438a1de9b9bf72eea0cf292e25a135858da42ffb = $this->env->getExtension("native_profiler");
        $__internal_eb87f31aadb0e5c44050f007438a1de9b9bf72eea0cf292e25a135858da42ffb->enter($__internal_eb87f31aadb0e5c44050f007438a1de9b9bf72eea0cf292e25a135858da42ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_eb87f31aadb0e5c44050f007438a1de9b9bf72eea0cf292e25a135858da42ffb->leave($__internal_eb87f31aadb0e5c44050f007438a1de9b9bf72eea0cf292e25a135858da42ffb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_92dc25966b4dbbaadc9cd6b583dc6b6d5cadb792da271d4ceae5667d7412d9b8 = $this->env->getExtension("native_profiler");
        $__internal_92dc25966b4dbbaadc9cd6b583dc6b6d5cadb792da271d4ceae5667d7412d9b8->enter($__internal_92dc25966b4dbbaadc9cd6b583dc6b6d5cadb792da271d4ceae5667d7412d9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_92dc25966b4dbbaadc9cd6b583dc6b6d5cadb792da271d4ceae5667d7412d9b8->leave($__internal_92dc25966b4dbbaadc9cd6b583dc6b6d5cadb792da271d4ceae5667d7412d9b8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ac0d2d22d7bb6bed7bdb165953eabd94e8beb6d6fc19aa2ed3118c247556af50 = $this->env->getExtension("native_profiler");
        $__internal_ac0d2d22d7bb6bed7bdb165953eabd94e8beb6d6fc19aa2ed3118c247556af50->enter($__internal_ac0d2d22d7bb6bed7bdb165953eabd94e8beb6d6fc19aa2ed3118c247556af50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ac0d2d22d7bb6bed7bdb165953eabd94e8beb6d6fc19aa2ed3118c247556af50->leave($__internal_ac0d2d22d7bb6bed7bdb165953eabd94e8beb6d6fc19aa2ed3118c247556af50_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_07dae99b48500c091f22667ab5012f2b6219ed7c22a354e7bf79d23bb8eadf0f = $this->env->getExtension("native_profiler");
        $__internal_07dae99b48500c091f22667ab5012f2b6219ed7c22a354e7bf79d23bb8eadf0f->enter($__internal_07dae99b48500c091f22667ab5012f2b6219ed7c22a354e7bf79d23bb8eadf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_07dae99b48500c091f22667ab5012f2b6219ed7c22a354e7bf79d23bb8eadf0f->leave($__internal_07dae99b48500c091f22667ab5012f2b6219ed7c22a354e7bf79d23bb8eadf0f_prof);

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
