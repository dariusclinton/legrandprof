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
        $__internal_4104d4b249ea44297d809f761045fc011ad858949debf63f393bce6d27a406b2 = $this->env->getExtension("native_profiler");
        $__internal_4104d4b249ea44297d809f761045fc011ad858949debf63f393bce6d27a406b2->enter($__internal_4104d4b249ea44297d809f761045fc011ad858949debf63f393bce6d27a406b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4104d4b249ea44297d809f761045fc011ad858949debf63f393bce6d27a406b2->leave($__internal_4104d4b249ea44297d809f761045fc011ad858949debf63f393bce6d27a406b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2f9dacefba7007510b5cde24e4f4a141696173b37f780cb9a8f9f6dd9c126f10 = $this->env->getExtension("native_profiler");
        $__internal_2f9dacefba7007510b5cde24e4f4a141696173b37f780cb9a8f9f6dd9c126f10->enter($__internal_2f9dacefba7007510b5cde24e4f4a141696173b37f780cb9a8f9f6dd9c126f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2f9dacefba7007510b5cde24e4f4a141696173b37f780cb9a8f9f6dd9c126f10->leave($__internal_2f9dacefba7007510b5cde24e4f4a141696173b37f780cb9a8f9f6dd9c126f10_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9412a007b0b39e08604f8939fde14c3a8c0b1a2d1162e75b1611faa027e380fe = $this->env->getExtension("native_profiler");
        $__internal_9412a007b0b39e08604f8939fde14c3a8c0b1a2d1162e75b1611faa027e380fe->enter($__internal_9412a007b0b39e08604f8939fde14c3a8c0b1a2d1162e75b1611faa027e380fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9412a007b0b39e08604f8939fde14c3a8c0b1a2d1162e75b1611faa027e380fe->leave($__internal_9412a007b0b39e08604f8939fde14c3a8c0b1a2d1162e75b1611faa027e380fe_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_63fdda1fb97e2ef3f7e9c3397ccf4e9ecb6c202ab036c3c661019b3ae38bb92e = $this->env->getExtension("native_profiler");
        $__internal_63fdda1fb97e2ef3f7e9c3397ccf4e9ecb6c202ab036c3c661019b3ae38bb92e->enter($__internal_63fdda1fb97e2ef3f7e9c3397ccf4e9ecb6c202ab036c3c661019b3ae38bb92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_63fdda1fb97e2ef3f7e9c3397ccf4e9ecb6c202ab036c3c661019b3ae38bb92e->leave($__internal_63fdda1fb97e2ef3f7e9c3397ccf4e9ecb6c202ab036c3c661019b3ae38bb92e_prof);

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
