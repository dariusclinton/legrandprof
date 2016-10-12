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
        $__internal_2a09c253d93f3f4e32180f18e70e8ac6fb84f4406941e3efc0efe3ad20c104d7 = $this->env->getExtension("native_profiler");
        $__internal_2a09c253d93f3f4e32180f18e70e8ac6fb84f4406941e3efc0efe3ad20c104d7->enter($__internal_2a09c253d93f3f4e32180f18e70e8ac6fb84f4406941e3efc0efe3ad20c104d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2a09c253d93f3f4e32180f18e70e8ac6fb84f4406941e3efc0efe3ad20c104d7->leave($__internal_2a09c253d93f3f4e32180f18e70e8ac6fb84f4406941e3efc0efe3ad20c104d7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a99aba45abc82b7037af9a1bd44584f5a8ca6f5619c91ae98029ceea33158aba = $this->env->getExtension("native_profiler");
        $__internal_a99aba45abc82b7037af9a1bd44584f5a8ca6f5619c91ae98029ceea33158aba->enter($__internal_a99aba45abc82b7037af9a1bd44584f5a8ca6f5619c91ae98029ceea33158aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a99aba45abc82b7037af9a1bd44584f5a8ca6f5619c91ae98029ceea33158aba->leave($__internal_a99aba45abc82b7037af9a1bd44584f5a8ca6f5619c91ae98029ceea33158aba_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9143c5cb85c3d7047abe69cdc2661ab3bea75bd0e1f42dc4b0880f007730dcd2 = $this->env->getExtension("native_profiler");
        $__internal_9143c5cb85c3d7047abe69cdc2661ab3bea75bd0e1f42dc4b0880f007730dcd2->enter($__internal_9143c5cb85c3d7047abe69cdc2661ab3bea75bd0e1f42dc4b0880f007730dcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9143c5cb85c3d7047abe69cdc2661ab3bea75bd0e1f42dc4b0880f007730dcd2->leave($__internal_9143c5cb85c3d7047abe69cdc2661ab3bea75bd0e1f42dc4b0880f007730dcd2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1089e28be63e41b9c7adb5cc6d7c06c22ae93859900d791526720894412f803e = $this->env->getExtension("native_profiler");
        $__internal_1089e28be63e41b9c7adb5cc6d7c06c22ae93859900d791526720894412f803e->enter($__internal_1089e28be63e41b9c7adb5cc6d7c06c22ae93859900d791526720894412f803e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1089e28be63e41b9c7adb5cc6d7c06c22ae93859900d791526720894412f803e->leave($__internal_1089e28be63e41b9c7adb5cc6d7c06c22ae93859900d791526720894412f803e_prof);

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
