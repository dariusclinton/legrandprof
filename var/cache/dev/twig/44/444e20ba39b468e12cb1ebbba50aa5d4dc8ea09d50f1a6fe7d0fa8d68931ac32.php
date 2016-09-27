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
        $__internal_87925174553f09e3cf7457234516b1ed130cccc8ef62ed14f1ed5c97ba0035cd = $this->env->getExtension("native_profiler");
        $__internal_87925174553f09e3cf7457234516b1ed130cccc8ef62ed14f1ed5c97ba0035cd->enter($__internal_87925174553f09e3cf7457234516b1ed130cccc8ef62ed14f1ed5c97ba0035cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_87925174553f09e3cf7457234516b1ed130cccc8ef62ed14f1ed5c97ba0035cd->leave($__internal_87925174553f09e3cf7457234516b1ed130cccc8ef62ed14f1ed5c97ba0035cd_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_91cc00334a64a5cd35847ae783a48afd14938d9d337a55586c1832d246162ef8 = $this->env->getExtension("native_profiler");
        $__internal_91cc00334a64a5cd35847ae783a48afd14938d9d337a55586c1832d246162ef8->enter($__internal_91cc00334a64a5cd35847ae783a48afd14938d9d337a55586c1832d246162ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_91cc00334a64a5cd35847ae783a48afd14938d9d337a55586c1832d246162ef8->leave($__internal_91cc00334a64a5cd35847ae783a48afd14938d9d337a55586c1832d246162ef8_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fd399aa0b41733951e4df41c94f8e591f10ffbc912f9a7d7cea8aa4faf2cf7c3 = $this->env->getExtension("native_profiler");
        $__internal_fd399aa0b41733951e4df41c94f8e591f10ffbc912f9a7d7cea8aa4faf2cf7c3->enter($__internal_fd399aa0b41733951e4df41c94f8e591f10ffbc912f9a7d7cea8aa4faf2cf7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_fd399aa0b41733951e4df41c94f8e591f10ffbc912f9a7d7cea8aa4faf2cf7c3->leave($__internal_fd399aa0b41733951e4df41c94f8e591f10ffbc912f9a7d7cea8aa4faf2cf7c3_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bfb86cbbb8b29040712eb512941c0cd686005bd5cda5a0a88589bbcdd9dc2d2a = $this->env->getExtension("native_profiler");
        $__internal_bfb86cbbb8b29040712eb512941c0cd686005bd5cda5a0a88589bbcdd9dc2d2a->enter($__internal_bfb86cbbb8b29040712eb512941c0cd686005bd5cda5a0a88589bbcdd9dc2d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bfb86cbbb8b29040712eb512941c0cd686005bd5cda5a0a88589bbcdd9dc2d2a->leave($__internal_bfb86cbbb8b29040712eb512941c0cd686005bd5cda5a0a88589bbcdd9dc2d2a_prof);

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
