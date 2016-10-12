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
        $__internal_199879388a927edb9afcfb1ef913eb369643af9cc8a1adc5c14c0b21d997366c = $this->env->getExtension("native_profiler");
        $__internal_199879388a927edb9afcfb1ef913eb369643af9cc8a1adc5c14c0b21d997366c->enter($__internal_199879388a927edb9afcfb1ef913eb369643af9cc8a1adc5c14c0b21d997366c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_199879388a927edb9afcfb1ef913eb369643af9cc8a1adc5c14c0b21d997366c->leave($__internal_199879388a927edb9afcfb1ef913eb369643af9cc8a1adc5c14c0b21d997366c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_106cbd98eec531565e8e953d75c3c7d76dc53303796d271bbd9aa5e89fa1a517 = $this->env->getExtension("native_profiler");
        $__internal_106cbd98eec531565e8e953d75c3c7d76dc53303796d271bbd9aa5e89fa1a517->enter($__internal_106cbd98eec531565e8e953d75c3c7d76dc53303796d271bbd9aa5e89fa1a517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_106cbd98eec531565e8e953d75c3c7d76dc53303796d271bbd9aa5e89fa1a517->leave($__internal_106cbd98eec531565e8e953d75c3c7d76dc53303796d271bbd9aa5e89fa1a517_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_218cb1596b99f8092f2e60661811338c618b6376d431f6b10340b79e517e4080 = $this->env->getExtension("native_profiler");
        $__internal_218cb1596b99f8092f2e60661811338c618b6376d431f6b10340b79e517e4080->enter($__internal_218cb1596b99f8092f2e60661811338c618b6376d431f6b10340b79e517e4080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_218cb1596b99f8092f2e60661811338c618b6376d431f6b10340b79e517e4080->leave($__internal_218cb1596b99f8092f2e60661811338c618b6376d431f6b10340b79e517e4080_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_62de5c5c2639b7023fea3cdbb8c9de9ad2e46e3770398420a1c3ca931e5a418e = $this->env->getExtension("native_profiler");
        $__internal_62de5c5c2639b7023fea3cdbb8c9de9ad2e46e3770398420a1c3ca931e5a418e->enter($__internal_62de5c5c2639b7023fea3cdbb8c9de9ad2e46e3770398420a1c3ca931e5a418e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_62de5c5c2639b7023fea3cdbb8c9de9ad2e46e3770398420a1c3ca931e5a418e->leave($__internal_62de5c5c2639b7023fea3cdbb8c9de9ad2e46e3770398420a1c3ca931e5a418e_prof);

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
