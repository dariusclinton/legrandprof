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
        $__internal_3a326758230f4e2eda8d7b8dc61c0b7a4734abe2b39a899e1f589949d41204ef = $this->env->getExtension("native_profiler");
        $__internal_3a326758230f4e2eda8d7b8dc61c0b7a4734abe2b39a899e1f589949d41204ef->enter($__internal_3a326758230f4e2eda8d7b8dc61c0b7a4734abe2b39a899e1f589949d41204ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3a326758230f4e2eda8d7b8dc61c0b7a4734abe2b39a899e1f589949d41204ef->leave($__internal_3a326758230f4e2eda8d7b8dc61c0b7a4734abe2b39a899e1f589949d41204ef_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_093dcf3052c07ecb168e5f089dc0a3c09f46370ef91b7b67d58b0a6db631e0cb = $this->env->getExtension("native_profiler");
        $__internal_093dcf3052c07ecb168e5f089dc0a3c09f46370ef91b7b67d58b0a6db631e0cb->enter($__internal_093dcf3052c07ecb168e5f089dc0a3c09f46370ef91b7b67d58b0a6db631e0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_093dcf3052c07ecb168e5f089dc0a3c09f46370ef91b7b67d58b0a6db631e0cb->leave($__internal_093dcf3052c07ecb168e5f089dc0a3c09f46370ef91b7b67d58b0a6db631e0cb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fdf10d81cbff63bcdf7ba3281ed39b87526a3747f001abdb5883a2a882594618 = $this->env->getExtension("native_profiler");
        $__internal_fdf10d81cbff63bcdf7ba3281ed39b87526a3747f001abdb5883a2a882594618->enter($__internal_fdf10d81cbff63bcdf7ba3281ed39b87526a3747f001abdb5883a2a882594618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fdf10d81cbff63bcdf7ba3281ed39b87526a3747f001abdb5883a2a882594618->leave($__internal_fdf10d81cbff63bcdf7ba3281ed39b87526a3747f001abdb5883a2a882594618_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_139614fd375513a132c66974a0937f946393fe3430cc94cb9e50d39a45afbecc = $this->env->getExtension("native_profiler");
        $__internal_139614fd375513a132c66974a0937f946393fe3430cc94cb9e50d39a45afbecc->enter($__internal_139614fd375513a132c66974a0937f946393fe3430cc94cb9e50d39a45afbecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_139614fd375513a132c66974a0937f946393fe3430cc94cb9e50d39a45afbecc->leave($__internal_139614fd375513a132c66974a0937f946393fe3430cc94cb9e50d39a45afbecc_prof);

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
