<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d307a7e90ca6c1741aa1061b2c0fe55a6a6a6aea980e344f340b875383ebb623 extends Twig_Template
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
        $__internal_c72064e0238ac9e16237882443dd2369c300d27e75945d37d4c4fcb8908374ad = $this->env->getExtension("native_profiler");
        $__internal_c72064e0238ac9e16237882443dd2369c300d27e75945d37d4c4fcb8908374ad->enter($__internal_c72064e0238ac9e16237882443dd2369c300d27e75945d37d4c4fcb8908374ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c72064e0238ac9e16237882443dd2369c300d27e75945d37d4c4fcb8908374ad->leave($__internal_c72064e0238ac9e16237882443dd2369c300d27e75945d37d4c4fcb8908374ad_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a727445e47d0e4dd0c7f8e5795b5919ccb71f0cca64c51e575a86cf76c74476c = $this->env->getExtension("native_profiler");
        $__internal_a727445e47d0e4dd0c7f8e5795b5919ccb71f0cca64c51e575a86cf76c74476c->enter($__internal_a727445e47d0e4dd0c7f8e5795b5919ccb71f0cca64c51e575a86cf76c74476c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a727445e47d0e4dd0c7f8e5795b5919ccb71f0cca64c51e575a86cf76c74476c->leave($__internal_a727445e47d0e4dd0c7f8e5795b5919ccb71f0cca64c51e575a86cf76c74476c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6c5afeefd8e31cd1c301759adfc0f3a39acec07443cef78f9efe7ffff2bc3283 = $this->env->getExtension("native_profiler");
        $__internal_6c5afeefd8e31cd1c301759adfc0f3a39acec07443cef78f9efe7ffff2bc3283->enter($__internal_6c5afeefd8e31cd1c301759adfc0f3a39acec07443cef78f9efe7ffff2bc3283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6c5afeefd8e31cd1c301759adfc0f3a39acec07443cef78f9efe7ffff2bc3283->leave($__internal_6c5afeefd8e31cd1c301759adfc0f3a39acec07443cef78f9efe7ffff2bc3283_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e9e3b35ba116f20086ab07416d2311ac4b2c3eb560854dbee97ebe8abf8f7016 = $this->env->getExtension("native_profiler");
        $__internal_e9e3b35ba116f20086ab07416d2311ac4b2c3eb560854dbee97ebe8abf8f7016->enter($__internal_e9e3b35ba116f20086ab07416d2311ac4b2c3eb560854dbee97ebe8abf8f7016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e9e3b35ba116f20086ab07416d2311ac4b2c3eb560854dbee97ebe8abf8f7016->leave($__internal_e9e3b35ba116f20086ab07416d2311ac4b2c3eb560854dbee97ebe8abf8f7016_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
