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
        $__internal_e356d365abcd4b4f62ec9bafe6bf2d88492a80aa14d7b1127e776563a8af3f3a = $this->env->getExtension("native_profiler");
        $__internal_e356d365abcd4b4f62ec9bafe6bf2d88492a80aa14d7b1127e776563a8af3f3a->enter($__internal_e356d365abcd4b4f62ec9bafe6bf2d88492a80aa14d7b1127e776563a8af3f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_e356d365abcd4b4f62ec9bafe6bf2d88492a80aa14d7b1127e776563a8af3f3a->leave($__internal_e356d365abcd4b4f62ec9bafe6bf2d88492a80aa14d7b1127e776563a8af3f3a_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_587b7fd00c290f916042b041eabfb28fdb1d1635394665046771c1043d3be641 = $this->env->getExtension("native_profiler");
        $__internal_587b7fd00c290f916042b041eabfb28fdb1d1635394665046771c1043d3be641->enter($__internal_587b7fd00c290f916042b041eabfb28fdb1d1635394665046771c1043d3be641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_587b7fd00c290f916042b041eabfb28fdb1d1635394665046771c1043d3be641->leave($__internal_587b7fd00c290f916042b041eabfb28fdb1d1635394665046771c1043d3be641_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2b6f9088347a1d5cda8d397369038065b105d68c53d3690e4557694e6c26c48 = $this->env->getExtension("native_profiler");
        $__internal_e2b6f9088347a1d5cda8d397369038065b105d68c53d3690e4557694e6c26c48->enter($__internal_e2b6f9088347a1d5cda8d397369038065b105d68c53d3690e4557694e6c26c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenoms", array())), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_e2b6f9088347a1d5cda8d397369038065b105d68c53d3690e4557694e6c26c48->leave($__internal_e2b6f9088347a1d5cda8d397369038065b105d68c53d3690e4557694e6c26c48_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3394cfcf1b6a1567404049a38a42db043d25277f1ef68ec353b76f33bc34a936 = $this->env->getExtension("native_profiler");
        $__internal_3394cfcf1b6a1567404049a38a42db043d25277f1ef68ec353b76f33bc34a936->enter($__internal_3394cfcf1b6a1567404049a38a42db043d25277f1ef68ec353b76f33bc34a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3394cfcf1b6a1567404049a38a42db043d25277f1ef68ec353b76f33bc34a936->leave($__internal_3394cfcf1b6a1567404049a38a42db043d25277f1ef68ec353b76f33bc34a936_prof);

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
  {{ 'registration.email.subject'|trans({'%username%': user.prenoms, '%confirmationUrl%': confirmationUrl}) }}
  {% endautoescape %}
{% endblock %}

{% block body_text %}
  {% autoescape false %}
  {{ 'registration.email.message'|trans({'%username%': user.prenoms | upper, '%confirmationUrl%': confirmationUrl}) }}
  {% endautoescape %}
{% endblock %}

{% block body_html %}{% endblock %}
";
    }
}
