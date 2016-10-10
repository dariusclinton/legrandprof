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
        $__internal_188fdceb51a6f4afa48811c12961069ff3a4e35e6357d0b986b76e91e4d2bb9f = $this->env->getExtension("native_profiler");
        $__internal_188fdceb51a6f4afa48811c12961069ff3a4e35e6357d0b986b76e91e4d2bb9f->enter($__internal_188fdceb51a6f4afa48811c12961069ff3a4e35e6357d0b986b76e91e4d2bb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

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
        
        $__internal_188fdceb51a6f4afa48811c12961069ff3a4e35e6357d0b986b76e91e4d2bb9f->leave($__internal_188fdceb51a6f4afa48811c12961069ff3a4e35e6357d0b986b76e91e4d2bb9f_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c0befb45e3baf44536f9f5b6fce61c182940c91bd51028c746cd74fd901e7c6a = $this->env->getExtension("native_profiler");
        $__internal_c0befb45e3baf44536f9f5b6fce61c182940c91bd51028c746cd74fd901e7c6a->enter($__internal_c0befb45e3baf44536f9f5b6fce61c182940c91bd51028c746cd74fd901e7c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_c0befb45e3baf44536f9f5b6fce61c182940c91bd51028c746cd74fd901e7c6a->leave($__internal_c0befb45e3baf44536f9f5b6fce61c182940c91bd51028c746cd74fd901e7c6a_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7cc48b0a5a256b102c98c2bf13f28ee296116602872a48bcd23f92ec56292a7a = $this->env->getExtension("native_profiler");
        $__internal_7cc48b0a5a256b102c98c2bf13f28ee296116602872a48bcd23f92ec56292a7a->enter($__internal_7cc48b0a5a256b102c98c2bf13f28ee296116602872a48bcd23f92ec56292a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_7cc48b0a5a256b102c98c2bf13f28ee296116602872a48bcd23f92ec56292a7a->leave($__internal_7cc48b0a5a256b102c98c2bf13f28ee296116602872a48bcd23f92ec56292a7a_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a126d84f978b67911c3e547b23d971f5f707f2e9e85883e4376b7c05615e19a9 = $this->env->getExtension("native_profiler");
        $__internal_a126d84f978b67911c3e547b23d971f5f707f2e9e85883e4376b7c05615e19a9->enter($__internal_a126d84f978b67911c3e547b23d971f5f707f2e9e85883e4376b7c05615e19a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a126d84f978b67911c3e547b23d971f5f707f2e9e85883e4376b7c05615e19a9->leave($__internal_a126d84f978b67911c3e547b23d971f5f707f2e9e85883e4376b7c05615e19a9_prof);

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
