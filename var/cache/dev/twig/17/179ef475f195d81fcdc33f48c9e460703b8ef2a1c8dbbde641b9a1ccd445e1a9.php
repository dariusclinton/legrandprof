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
        $__internal_2c78dc9975846e3879a4f3c98f6e7a0106b6173cd9a9876176ed17ca4bff1140 = $this->env->getExtension("native_profiler");
        $__internal_2c78dc9975846e3879a4f3c98f6e7a0106b6173cd9a9876176ed17ca4bff1140->enter($__internal_2c78dc9975846e3879a4f3c98f6e7a0106b6173cd9a9876176ed17ca4bff1140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2c78dc9975846e3879a4f3c98f6e7a0106b6173cd9a9876176ed17ca4bff1140->leave($__internal_2c78dc9975846e3879a4f3c98f6e7a0106b6173cd9a9876176ed17ca4bff1140_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_83037dbc5554e458567b3ee15037a0e9e9294dce7eca3ed40229854571afd0ac = $this->env->getExtension("native_profiler");
        $__internal_83037dbc5554e458567b3ee15037a0e9e9294dce7eca3ed40229854571afd0ac->enter($__internal_83037dbc5554e458567b3ee15037a0e9e9294dce7eca3ed40229854571afd0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_83037dbc5554e458567b3ee15037a0e9e9294dce7eca3ed40229854571afd0ac->leave($__internal_83037dbc5554e458567b3ee15037a0e9e9294dce7eca3ed40229854571afd0ac_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c0312fa8460b776f174f415c18a5b17b7001fb0ca5395c965dba4f87a24c0509 = $this->env->getExtension("native_profiler");
        $__internal_c0312fa8460b776f174f415c18a5b17b7001fb0ca5395c965dba4f87a24c0509->enter($__internal_c0312fa8460b776f174f415c18a5b17b7001fb0ca5395c965dba4f87a24c0509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c0312fa8460b776f174f415c18a5b17b7001fb0ca5395c965dba4f87a24c0509->leave($__internal_c0312fa8460b776f174f415c18a5b17b7001fb0ca5395c965dba4f87a24c0509_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ad581bc4d065c4a3bd72846553527491d1814e44260434db8655a33302567264 = $this->env->getExtension("native_profiler");
        $__internal_ad581bc4d065c4a3bd72846553527491d1814e44260434db8655a33302567264->enter($__internal_ad581bc4d065c4a3bd72846553527491d1814e44260434db8655a33302567264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ad581bc4d065c4a3bd72846553527491d1814e44260434db8655a33302567264->leave($__internal_ad581bc4d065c4a3bd72846553527491d1814e44260434db8655a33302567264_prof);

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
