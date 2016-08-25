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
        $__internal_d4377afb63b56bc9cb9727f387b4ecb0fc8cb32cf90e19b85f29da035b5c302b = $this->env->getExtension("native_profiler");
        $__internal_d4377afb63b56bc9cb9727f387b4ecb0fc8cb32cf90e19b85f29da035b5c302b->enter($__internal_d4377afb63b56bc9cb9727f387b4ecb0fc8cb32cf90e19b85f29da035b5c302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d4377afb63b56bc9cb9727f387b4ecb0fc8cb32cf90e19b85f29da035b5c302b->leave($__internal_d4377afb63b56bc9cb9727f387b4ecb0fc8cb32cf90e19b85f29da035b5c302b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3c52bf6ed27e79b591bd43d0764e75c68848d4f4be0bf1370f2d704e29e2db66 = $this->env->getExtension("native_profiler");
        $__internal_3c52bf6ed27e79b591bd43d0764e75c68848d4f4be0bf1370f2d704e29e2db66->enter($__internal_3c52bf6ed27e79b591bd43d0764e75c68848d4f4be0bf1370f2d704e29e2db66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3c52bf6ed27e79b591bd43d0764e75c68848d4f4be0bf1370f2d704e29e2db66->leave($__internal_3c52bf6ed27e79b591bd43d0764e75c68848d4f4be0bf1370f2d704e29e2db66_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8bf56220630a380db9417410375496af34d41e0a9f63e7d5c2ddcb6acf44eda5 = $this->env->getExtension("native_profiler");
        $__internal_8bf56220630a380db9417410375496af34d41e0a9f63e7d5c2ddcb6acf44eda5->enter($__internal_8bf56220630a380db9417410375496af34d41e0a9f63e7d5c2ddcb6acf44eda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8bf56220630a380db9417410375496af34d41e0a9f63e7d5c2ddcb6acf44eda5->leave($__internal_8bf56220630a380db9417410375496af34d41e0a9f63e7d5c2ddcb6acf44eda5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_63ab34ca2e924d23fd108d62eac3d96f52c9d56e311b304aef66d68732fc8092 = $this->env->getExtension("native_profiler");
        $__internal_63ab34ca2e924d23fd108d62eac3d96f52c9d56e311b304aef66d68732fc8092->enter($__internal_63ab34ca2e924d23fd108d62eac3d96f52c9d56e311b304aef66d68732fc8092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_63ab34ca2e924d23fd108d62eac3d96f52c9d56e311b304aef66d68732fc8092->leave($__internal_63ab34ca2e924d23fd108d62eac3d96f52c9d56e311b304aef66d68732fc8092_prof);

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
