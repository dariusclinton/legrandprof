<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b2da100027ad2c80aff66fe8c43d7acd5fc639b2de787732c4e4de55a407e6b5 extends Twig_Template
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
        $__internal_bdcb06f531b3a5d8b13c1e4f7f7f14329039ad43da1a09ce58646cdea7e605d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcb06f531b3a5d8b13c1e4f7f7f14329039ad43da1a09ce58646cdea7e605d1->enter($__internal_bdcb06f531b3a5d8b13c1e4f7f7f14329039ad43da1a09ce58646cdea7e605d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bdcb06f531b3a5d8b13c1e4f7f7f14329039ad43da1a09ce58646cdea7e605d1->leave($__internal_bdcb06f531b3a5d8b13c1e4f7f7f14329039ad43da1a09ce58646cdea7e605d1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_73585d5c2e6d75acf282f4bcf99ae19460fe2f62c432c411169f21abb35660cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73585d5c2e6d75acf282f4bcf99ae19460fe2f62c432c411169f21abb35660cf->enter($__internal_73585d5c2e6d75acf282f4bcf99ae19460fe2f62c432c411169f21abb35660cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_73585d5c2e6d75acf282f4bcf99ae19460fe2f62c432c411169f21abb35660cf->leave($__internal_73585d5c2e6d75acf282f4bcf99ae19460fe2f62c432c411169f21abb35660cf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cedb4b27f9de5758b06702d93cdbe4d4d1fe1bcf7dddcb267c830786a2f2e5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedb4b27f9de5758b06702d93cdbe4d4d1fe1bcf7dddcb267c830786a2f2e5b3->enter($__internal_cedb4b27f9de5758b06702d93cdbe4d4d1fe1bcf7dddcb267c830786a2f2e5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cedb4b27f9de5758b06702d93cdbe4d4d1fe1bcf7dddcb267c830786a2f2e5b3->leave($__internal_cedb4b27f9de5758b06702d93cdbe4d4d1fe1bcf7dddcb267c830786a2f2e5b3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e9c9cc398a08da77fcd4a1b246a934156e4e782e7edfb4556d427a3df4d56f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c9cc398a08da77fcd4a1b246a934156e4e782e7edfb4556d427a3df4d56f4c->enter($__internal_e9c9cc398a08da77fcd4a1b246a934156e4e782e7edfb4556d427a3df4d56f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e9c9cc398a08da77fcd4a1b246a934156e4e782e7edfb4556d427a3df4d56f4c->leave($__internal_e9c9cc398a08da77fcd4a1b246a934156e4e782e7edfb4556d427a3df4d56f4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
