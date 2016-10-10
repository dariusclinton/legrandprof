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
        $__internal_713d77785dc6dc1b3389a7d83da2b9373b63437d5248bddaf38f687ef6ec766c = $this->env->getExtension("native_profiler");
        $__internal_713d77785dc6dc1b3389a7d83da2b9373b63437d5248bddaf38f687ef6ec766c->enter($__internal_713d77785dc6dc1b3389a7d83da2b9373b63437d5248bddaf38f687ef6ec766c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_713d77785dc6dc1b3389a7d83da2b9373b63437d5248bddaf38f687ef6ec766c->leave($__internal_713d77785dc6dc1b3389a7d83da2b9373b63437d5248bddaf38f687ef6ec766c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a2826ea6b774aae32559537678f946d057bf202cf34594893637c29cedc9fc11 = $this->env->getExtension("native_profiler");
        $__internal_a2826ea6b774aae32559537678f946d057bf202cf34594893637c29cedc9fc11->enter($__internal_a2826ea6b774aae32559537678f946d057bf202cf34594893637c29cedc9fc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a2826ea6b774aae32559537678f946d057bf202cf34594893637c29cedc9fc11->leave($__internal_a2826ea6b774aae32559537678f946d057bf202cf34594893637c29cedc9fc11_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cc27a8a1ea53bf58aa74b4c5dc1e4f172887a144b3bbdc77eec01b83e05f6b84 = $this->env->getExtension("native_profiler");
        $__internal_cc27a8a1ea53bf58aa74b4c5dc1e4f172887a144b3bbdc77eec01b83e05f6b84->enter($__internal_cc27a8a1ea53bf58aa74b4c5dc1e4f172887a144b3bbdc77eec01b83e05f6b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cc27a8a1ea53bf58aa74b4c5dc1e4f172887a144b3bbdc77eec01b83e05f6b84->leave($__internal_cc27a8a1ea53bf58aa74b4c5dc1e4f172887a144b3bbdc77eec01b83e05f6b84_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4f5c308c8b6b2f218ef70212d6e1de770fd39f62ac906cd033d39f660690859a = $this->env->getExtension("native_profiler");
        $__internal_4f5c308c8b6b2f218ef70212d6e1de770fd39f62ac906cd033d39f660690859a->enter($__internal_4f5c308c8b6b2f218ef70212d6e1de770fd39f62ac906cd033d39f660690859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f5c308c8b6b2f218ef70212d6e1de770fd39f62ac906cd033d39f660690859a->leave($__internal_4f5c308c8b6b2f218ef70212d6e1de770fd39f62ac906cd033d39f660690859a_prof);

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
