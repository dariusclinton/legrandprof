<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_9356332193063902e3a3be80d22ee17bea76de800561fe63d1ecf7ec890a5942 extends Twig_Template
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
        $__internal_808234afd0e686ebb797c64f117684709f0bbb33cd7005f586c6db6a03cd4d71 = $this->env->getExtension("native_profiler");
        $__internal_808234afd0e686ebb797c64f117684709f0bbb33cd7005f586c6db6a03cd4d71->enter($__internal_808234afd0e686ebb797c64f117684709f0bbb33cd7005f586c6db6a03cd4d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_808234afd0e686ebb797c64f117684709f0bbb33cd7005f586c6db6a03cd4d71->leave($__internal_808234afd0e686ebb797c64f117684709f0bbb33cd7005f586c6db6a03cd4d71_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_69a7b4e22842d66b62c76079422e757d769910b5943814f9220c7d507d02ada6 = $this->env->getExtension("native_profiler");
        $__internal_69a7b4e22842d66b62c76079422e757d769910b5943814f9220c7d507d02ada6->enter($__internal_69a7b4e22842d66b62c76079422e757d769910b5943814f9220c7d507d02ada6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_69a7b4e22842d66b62c76079422e757d769910b5943814f9220c7d507d02ada6->leave($__internal_69a7b4e22842d66b62c76079422e757d769910b5943814f9220c7d507d02ada6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_19681e124de39dcbfb4ac971a78b9a4c6328d5242035c097441d20b72d328787 = $this->env->getExtension("native_profiler");
        $__internal_19681e124de39dcbfb4ac971a78b9a4c6328d5242035c097441d20b72d328787->enter($__internal_19681e124de39dcbfb4ac971a78b9a4c6328d5242035c097441d20b72d328787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_19681e124de39dcbfb4ac971a78b9a4c6328d5242035c097441d20b72d328787->leave($__internal_19681e124de39dcbfb4ac971a78b9a4c6328d5242035c097441d20b72d328787_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d76bdb803859e427a784449cec58e92ea9a964d24344729589dd9ba658161ca3 = $this->env->getExtension("native_profiler");
        $__internal_d76bdb803859e427a784449cec58e92ea9a964d24344729589dd9ba658161ca3->enter($__internal_d76bdb803859e427a784449cec58e92ea9a964d24344729589dd9ba658161ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d76bdb803859e427a784449cec58e92ea9a964d24344729589dd9ba658161ca3->leave($__internal_d76bdb803859e427a784449cec58e92ea9a964d24344729589dd9ba658161ca3_prof);

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
