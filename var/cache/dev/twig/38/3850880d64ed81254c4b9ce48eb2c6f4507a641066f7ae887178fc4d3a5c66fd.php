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
        $__internal_044b78442dc36cf2cbe8412217b8490836226de55e076d675ff990ad566f76d5 = $this->env->getExtension("native_profiler");
        $__internal_044b78442dc36cf2cbe8412217b8490836226de55e076d675ff990ad566f76d5->enter($__internal_044b78442dc36cf2cbe8412217b8490836226de55e076d675ff990ad566f76d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_044b78442dc36cf2cbe8412217b8490836226de55e076d675ff990ad566f76d5->leave($__internal_044b78442dc36cf2cbe8412217b8490836226de55e076d675ff990ad566f76d5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5dbef022cf5a4ed32203dbf6a8886a49c324f2776c98e93a7aa7bdac7e05d1f4 = $this->env->getExtension("native_profiler");
        $__internal_5dbef022cf5a4ed32203dbf6a8886a49c324f2776c98e93a7aa7bdac7e05d1f4->enter($__internal_5dbef022cf5a4ed32203dbf6a8886a49c324f2776c98e93a7aa7bdac7e05d1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5dbef022cf5a4ed32203dbf6a8886a49c324f2776c98e93a7aa7bdac7e05d1f4->leave($__internal_5dbef022cf5a4ed32203dbf6a8886a49c324f2776c98e93a7aa7bdac7e05d1f4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_11b7ad9fbb4a528e02fe0de98ae79dac5ce702e859b9f5e3b02672b5d504db13 = $this->env->getExtension("native_profiler");
        $__internal_11b7ad9fbb4a528e02fe0de98ae79dac5ce702e859b9f5e3b02672b5d504db13->enter($__internal_11b7ad9fbb4a528e02fe0de98ae79dac5ce702e859b9f5e3b02672b5d504db13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_11b7ad9fbb4a528e02fe0de98ae79dac5ce702e859b9f5e3b02672b5d504db13->leave($__internal_11b7ad9fbb4a528e02fe0de98ae79dac5ce702e859b9f5e3b02672b5d504db13_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_37de6749efa397a0a5303980156792280ce970f4ef3f34e280f8af8d2372d361 = $this->env->getExtension("native_profiler");
        $__internal_37de6749efa397a0a5303980156792280ce970f4ef3f34e280f8af8d2372d361->enter($__internal_37de6749efa397a0a5303980156792280ce970f4ef3f34e280f8af8d2372d361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_37de6749efa397a0a5303980156792280ce970f4ef3f34e280f8af8d2372d361->leave($__internal_37de6749efa397a0a5303980156792280ce970f4ef3f34e280f8af8d2372d361_prof);

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
