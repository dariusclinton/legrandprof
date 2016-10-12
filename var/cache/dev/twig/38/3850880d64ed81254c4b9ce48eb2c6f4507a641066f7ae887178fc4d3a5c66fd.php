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
        $__internal_230647a9b2cf6630b6e7c28e51016dffa65740019ad72585cffb8e68f68522b0 = $this->env->getExtension("native_profiler");
        $__internal_230647a9b2cf6630b6e7c28e51016dffa65740019ad72585cffb8e68f68522b0->enter($__internal_230647a9b2cf6630b6e7c28e51016dffa65740019ad72585cffb8e68f68522b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_230647a9b2cf6630b6e7c28e51016dffa65740019ad72585cffb8e68f68522b0->leave($__internal_230647a9b2cf6630b6e7c28e51016dffa65740019ad72585cffb8e68f68522b0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a771f11bf7e4f93142c9fb1c7dd48d0e8ebdf9219e4ffdd0c3634cbbe33d7c38 = $this->env->getExtension("native_profiler");
        $__internal_a771f11bf7e4f93142c9fb1c7dd48d0e8ebdf9219e4ffdd0c3634cbbe33d7c38->enter($__internal_a771f11bf7e4f93142c9fb1c7dd48d0e8ebdf9219e4ffdd0c3634cbbe33d7c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a771f11bf7e4f93142c9fb1c7dd48d0e8ebdf9219e4ffdd0c3634cbbe33d7c38->leave($__internal_a771f11bf7e4f93142c9fb1c7dd48d0e8ebdf9219e4ffdd0c3634cbbe33d7c38_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_eccef1fd316465acc99b6d12e0293679d245364b7bb2720556315b7ea28c7429 = $this->env->getExtension("native_profiler");
        $__internal_eccef1fd316465acc99b6d12e0293679d245364b7bb2720556315b7ea28c7429->enter($__internal_eccef1fd316465acc99b6d12e0293679d245364b7bb2720556315b7ea28c7429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eccef1fd316465acc99b6d12e0293679d245364b7bb2720556315b7ea28c7429->leave($__internal_eccef1fd316465acc99b6d12e0293679d245364b7bb2720556315b7ea28c7429_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e11a5d6650212acc1a5c949849d24cb6a0930b9a9a3ea679dd53c2852345f5b6 = $this->env->getExtension("native_profiler");
        $__internal_e11a5d6650212acc1a5c949849d24cb6a0930b9a9a3ea679dd53c2852345f5b6->enter($__internal_e11a5d6650212acc1a5c949849d24cb6a0930b9a9a3ea679dd53c2852345f5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e11a5d6650212acc1a5c949849d24cb6a0930b9a9a3ea679dd53c2852345f5b6->leave($__internal_e11a5d6650212acc1a5c949849d24cb6a0930b9a9a3ea679dd53c2852345f5b6_prof);

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
