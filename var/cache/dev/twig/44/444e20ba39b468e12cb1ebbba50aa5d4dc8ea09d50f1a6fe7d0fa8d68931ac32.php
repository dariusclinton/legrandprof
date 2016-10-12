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
        $__internal_6f104876563484192b6811ec05d6d8e8fbe843baed12479390d46d513256ccdc = $this->env->getExtension("native_profiler");
        $__internal_6f104876563484192b6811ec05d6d8e8fbe843baed12479390d46d513256ccdc->enter($__internal_6f104876563484192b6811ec05d6d8e8fbe843baed12479390d46d513256ccdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_6f104876563484192b6811ec05d6d8e8fbe843baed12479390d46d513256ccdc->leave($__internal_6f104876563484192b6811ec05d6d8e8fbe843baed12479390d46d513256ccdc_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_29b310782675fd1905704bcbfacce617fd462f43417ba44e05a30d919bd27140 = $this->env->getExtension("native_profiler");
        $__internal_29b310782675fd1905704bcbfacce617fd462f43417ba44e05a30d919bd27140->enter($__internal_29b310782675fd1905704bcbfacce617fd462f43417ba44e05a30d919bd27140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_29b310782675fd1905704bcbfacce617fd462f43417ba44e05a30d919bd27140->leave($__internal_29b310782675fd1905704bcbfacce617fd462f43417ba44e05a30d919bd27140_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5164e3f58e8e651a787ff876bce0eb7cb98895c2b276a69a9fe22c072fde4d6c = $this->env->getExtension("native_profiler");
        $__internal_5164e3f58e8e651a787ff876bce0eb7cb98895c2b276a69a9fe22c072fde4d6c->enter($__internal_5164e3f58e8e651a787ff876bce0eb7cb98895c2b276a69a9fe22c072fde4d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_5164e3f58e8e651a787ff876bce0eb7cb98895c2b276a69a9fe22c072fde4d6c->leave($__internal_5164e3f58e8e651a787ff876bce0eb7cb98895c2b276a69a9fe22c072fde4d6c_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7dc8a55b3d868e23357fe98faa54177c4f39615cabfe6ef522212b2fbadfb5ce = $this->env->getExtension("native_profiler");
        $__internal_7dc8a55b3d868e23357fe98faa54177c4f39615cabfe6ef522212b2fbadfb5ce->enter($__internal_7dc8a55b3d868e23357fe98faa54177c4f39615cabfe6ef522212b2fbadfb5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7dc8a55b3d868e23357fe98faa54177c4f39615cabfe6ef522212b2fbadfb5ce->leave($__internal_7dc8a55b3d868e23357fe98faa54177c4f39615cabfe6ef522212b2fbadfb5ce_prof);

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
