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
        $__internal_53ddbca7d7389afbb65cac79fbd21f3f056d7158510bb4cb60b5b5845050cff2 = $this->env->getExtension("native_profiler");
        $__internal_53ddbca7d7389afbb65cac79fbd21f3f056d7158510bb4cb60b5b5845050cff2->enter($__internal_53ddbca7d7389afbb65cac79fbd21f3f056d7158510bb4cb60b5b5845050cff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_53ddbca7d7389afbb65cac79fbd21f3f056d7158510bb4cb60b5b5845050cff2->leave($__internal_53ddbca7d7389afbb65cac79fbd21f3f056d7158510bb4cb60b5b5845050cff2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cd63d195570a1d7fa6733b0c6469f0b8a81498cb04b2bd0e7a3a18db61f394cb = $this->env->getExtension("native_profiler");
        $__internal_cd63d195570a1d7fa6733b0c6469f0b8a81498cb04b2bd0e7a3a18db61f394cb->enter($__internal_cd63d195570a1d7fa6733b0c6469f0b8a81498cb04b2bd0e7a3a18db61f394cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cd63d195570a1d7fa6733b0c6469f0b8a81498cb04b2bd0e7a3a18db61f394cb->leave($__internal_cd63d195570a1d7fa6733b0c6469f0b8a81498cb04b2bd0e7a3a18db61f394cb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6b2bc54873b4cefd0a7534e395ab98effc1b36db60a96952fc7ffdbe7049e25e = $this->env->getExtension("native_profiler");
        $__internal_6b2bc54873b4cefd0a7534e395ab98effc1b36db60a96952fc7ffdbe7049e25e->enter($__internal_6b2bc54873b4cefd0a7534e395ab98effc1b36db60a96952fc7ffdbe7049e25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6b2bc54873b4cefd0a7534e395ab98effc1b36db60a96952fc7ffdbe7049e25e->leave($__internal_6b2bc54873b4cefd0a7534e395ab98effc1b36db60a96952fc7ffdbe7049e25e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_120673175491ee747268002f25c974abccf30f0f84389638f6650859b933cc36 = $this->env->getExtension("native_profiler");
        $__internal_120673175491ee747268002f25c974abccf30f0f84389638f6650859b933cc36->enter($__internal_120673175491ee747268002f25c974abccf30f0f84389638f6650859b933cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_120673175491ee747268002f25c974abccf30f0f84389638f6650859b933cc36->leave($__internal_120673175491ee747268002f25c974abccf30f0f84389638f6650859b933cc36_prof);

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
