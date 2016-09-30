<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6048cbd3a26dac7cd710c4ed71ee4a96460882edef410594863dac425eedaed8 extends Twig_Template
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
        $__internal_3ee8dbed5f3beeb7f2a06807aec4b470a075b94b739a172a8dc866c2969697dd = $this->env->getExtension("native_profiler");
        $__internal_3ee8dbed5f3beeb7f2a06807aec4b470a075b94b739a172a8dc866c2969697dd->enter($__internal_3ee8dbed5f3beeb7f2a06807aec4b470a075b94b739a172a8dc866c2969697dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3ee8dbed5f3beeb7f2a06807aec4b470a075b94b739a172a8dc866c2969697dd->leave($__internal_3ee8dbed5f3beeb7f2a06807aec4b470a075b94b739a172a8dc866c2969697dd_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_16c98e0aa22b15dec3922a93021527fdd4779e5c48bff2d7b10f7447ec58638a = $this->env->getExtension("native_profiler");
        $__internal_16c98e0aa22b15dec3922a93021527fdd4779e5c48bff2d7b10f7447ec58638a->enter($__internal_16c98e0aa22b15dec3922a93021527fdd4779e5c48bff2d7b10f7447ec58638a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_16c98e0aa22b15dec3922a93021527fdd4779e5c48bff2d7b10f7447ec58638a->leave($__internal_16c98e0aa22b15dec3922a93021527fdd4779e5c48bff2d7b10f7447ec58638a_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_383be1c9650ff0a7ad5a6512033c59b168242141dfc598925e00030b5d7e83d5 = $this->env->getExtension("native_profiler");
        $__internal_383be1c9650ff0a7ad5a6512033c59b168242141dfc598925e00030b5d7e83d5->enter($__internal_383be1c9650ff0a7ad5a6512033c59b168242141dfc598925e00030b5d7e83d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_383be1c9650ff0a7ad5a6512033c59b168242141dfc598925e00030b5d7e83d5->leave($__internal_383be1c9650ff0a7ad5a6512033c59b168242141dfc598925e00030b5d7e83d5_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4c723cf196cab254c59199e04a2dee0029333867bf5117341339ffbd8309653f = $this->env->getExtension("native_profiler");
        $__internal_4c723cf196cab254c59199e04a2dee0029333867bf5117341339ffbd8309653f->enter($__internal_4c723cf196cab254c59199e04a2dee0029333867bf5117341339ffbd8309653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4c723cf196cab254c59199e04a2dee0029333867bf5117341339ffbd8309653f->leave($__internal_4c723cf196cab254c59199e04a2dee0029333867bf5117341339ffbd8309653f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
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
