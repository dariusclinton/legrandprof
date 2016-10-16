<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8b02bcd5e9ec801b298d89fd284aa660d3d5e82fb298cfe6e8beb9b1cb966719 extends Twig_Template
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
        $__internal_8c7936ea92a6c8e680dfd418d8d750881fa17efd48ba0228cb4bd3a2562d5da4 = $this->env->getExtension("native_profiler");
        $__internal_8c7936ea92a6c8e680dfd418d8d750881fa17efd48ba0228cb4bd3a2562d5da4->enter($__internal_8c7936ea92a6c8e680dfd418d8d750881fa17efd48ba0228cb4bd3a2562d5da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8c7936ea92a6c8e680dfd418d8d750881fa17efd48ba0228cb4bd3a2562d5da4->leave($__internal_8c7936ea92a6c8e680dfd418d8d750881fa17efd48ba0228cb4bd3a2562d5da4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_32816fd14f4c74f17da0abf0a71f2a633df3a5365a24288dbad93bead84f7949 = $this->env->getExtension("native_profiler");
        $__internal_32816fd14f4c74f17da0abf0a71f2a633df3a5365a24288dbad93bead84f7949->enter($__internal_32816fd14f4c74f17da0abf0a71f2a633df3a5365a24288dbad93bead84f7949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_32816fd14f4c74f17da0abf0a71f2a633df3a5365a24288dbad93bead84f7949->leave($__internal_32816fd14f4c74f17da0abf0a71f2a633df3a5365a24288dbad93bead84f7949_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_42b29116af01e20d1adf5c4ff3f0b856ce9d6e003b0bc45a8df97cebcf17ee8e = $this->env->getExtension("native_profiler");
        $__internal_42b29116af01e20d1adf5c4ff3f0b856ce9d6e003b0bc45a8df97cebcf17ee8e->enter($__internal_42b29116af01e20d1adf5c4ff3f0b856ce9d6e003b0bc45a8df97cebcf17ee8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_42b29116af01e20d1adf5c4ff3f0b856ce9d6e003b0bc45a8df97cebcf17ee8e->leave($__internal_42b29116af01e20d1adf5c4ff3f0b856ce9d6e003b0bc45a8df97cebcf17ee8e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_060a80aa03be0bacdf6068c4aadb5083462f57d7869dcf587742fac9b4a5bbde = $this->env->getExtension("native_profiler");
        $__internal_060a80aa03be0bacdf6068c4aadb5083462f57d7869dcf587742fac9b4a5bbde->enter($__internal_060a80aa03be0bacdf6068c4aadb5083462f57d7869dcf587742fac9b4a5bbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_060a80aa03be0bacdf6068c4aadb5083462f57d7869dcf587742fac9b4a5bbde->leave($__internal_060a80aa03be0bacdf6068c4aadb5083462f57d7869dcf587742fac9b4a5bbde_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
