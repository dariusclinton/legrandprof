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
        $__internal_29ed6325e64b5a44f395c71bcbca2e5bc572e1589530f05b6ef3bdebfe78c7bf = $this->env->getExtension("native_profiler");
        $__internal_29ed6325e64b5a44f395c71bcbca2e5bc572e1589530f05b6ef3bdebfe78c7bf->enter($__internal_29ed6325e64b5a44f395c71bcbca2e5bc572e1589530f05b6ef3bdebfe78c7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_29ed6325e64b5a44f395c71bcbca2e5bc572e1589530f05b6ef3bdebfe78c7bf->leave($__internal_29ed6325e64b5a44f395c71bcbca2e5bc572e1589530f05b6ef3bdebfe78c7bf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8b0c347cd3fab2c1b24e0aa195887dbca2a6f1e5aee7a0fc22d558171f575cda = $this->env->getExtension("native_profiler");
        $__internal_8b0c347cd3fab2c1b24e0aa195887dbca2a6f1e5aee7a0fc22d558171f575cda->enter($__internal_8b0c347cd3fab2c1b24e0aa195887dbca2a6f1e5aee7a0fc22d558171f575cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8b0c347cd3fab2c1b24e0aa195887dbca2a6f1e5aee7a0fc22d558171f575cda->leave($__internal_8b0c347cd3fab2c1b24e0aa195887dbca2a6f1e5aee7a0fc22d558171f575cda_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_53c15d66e731ae779bb3c6838abbad774393ee8fe2c18c46eb3083eb20337e57 = $this->env->getExtension("native_profiler");
        $__internal_53c15d66e731ae779bb3c6838abbad774393ee8fe2c18c46eb3083eb20337e57->enter($__internal_53c15d66e731ae779bb3c6838abbad774393ee8fe2c18c46eb3083eb20337e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_53c15d66e731ae779bb3c6838abbad774393ee8fe2c18c46eb3083eb20337e57->leave($__internal_53c15d66e731ae779bb3c6838abbad774393ee8fe2c18c46eb3083eb20337e57_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7a28215b18fc3e09ebbaebf3d5705c72c2519ecb8dad5cb2f2883c4f14eadf94 = $this->env->getExtension("native_profiler");
        $__internal_7a28215b18fc3e09ebbaebf3d5705c72c2519ecb8dad5cb2f2883c4f14eadf94->enter($__internal_7a28215b18fc3e09ebbaebf3d5705c72c2519ecb8dad5cb2f2883c4f14eadf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7a28215b18fc3e09ebbaebf3d5705c72c2519ecb8dad5cb2f2883c4f14eadf94->leave($__internal_7a28215b18fc3e09ebbaebf3d5705c72c2519ecb8dad5cb2f2883c4f14eadf94_prof);

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
