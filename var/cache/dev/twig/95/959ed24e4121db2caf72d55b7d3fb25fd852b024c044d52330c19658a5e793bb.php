<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_93659deeabdab52df81158fdad1a11a2e0484dcef4f91c75406af85b4f10ddb3 extends Twig_Template
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
        $__internal_75345e4a1c4120c6fa7696fff7728419aae2cfc7e00f8361a556a24914c5e9cd = $this->env->getExtension("native_profiler");
        $__internal_75345e4a1c4120c6fa7696fff7728419aae2cfc7e00f8361a556a24914c5e9cd->enter($__internal_75345e4a1c4120c6fa7696fff7728419aae2cfc7e00f8361a556a24914c5e9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_75345e4a1c4120c6fa7696fff7728419aae2cfc7e00f8361a556a24914c5e9cd->leave($__internal_75345e4a1c4120c6fa7696fff7728419aae2cfc7e00f8361a556a24914c5e9cd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9f67112d6c1f1805556e4786a2a6eaa6eb30632e438dc38b5e377b6e53b82cbb = $this->env->getExtension("native_profiler");
        $__internal_9f67112d6c1f1805556e4786a2a6eaa6eb30632e438dc38b5e377b6e53b82cbb->enter($__internal_9f67112d6c1f1805556e4786a2a6eaa6eb30632e438dc38b5e377b6e53b82cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9f67112d6c1f1805556e4786a2a6eaa6eb30632e438dc38b5e377b6e53b82cbb->leave($__internal_9f67112d6c1f1805556e4786a2a6eaa6eb30632e438dc38b5e377b6e53b82cbb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a1746e6b3eff793caade3bb0e6727b147e159964079d47ec9e6368aa9acd44ab = $this->env->getExtension("native_profiler");
        $__internal_a1746e6b3eff793caade3bb0e6727b147e159964079d47ec9e6368aa9acd44ab->enter($__internal_a1746e6b3eff793caade3bb0e6727b147e159964079d47ec9e6368aa9acd44ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a1746e6b3eff793caade3bb0e6727b147e159964079d47ec9e6368aa9acd44ab->leave($__internal_a1746e6b3eff793caade3bb0e6727b147e159964079d47ec9e6368aa9acd44ab_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1088676c94f19b6fc7c9f854d4e57bdb4f030cb683bae9bf31bbae1fb7435cbe = $this->env->getExtension("native_profiler");
        $__internal_1088676c94f19b6fc7c9f854d4e57bdb4f030cb683bae9bf31bbae1fb7435cbe->enter($__internal_1088676c94f19b6fc7c9f854d4e57bdb4f030cb683bae9bf31bbae1fb7435cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1088676c94f19b6fc7c9f854d4e57bdb4f030cb683bae9bf31bbae1fb7435cbe->leave($__internal_1088676c94f19b6fc7c9f854d4e57bdb4f030cb683bae9bf31bbae1fb7435cbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
