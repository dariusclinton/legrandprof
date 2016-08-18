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
        $__internal_df5db7a58767a800a37e0269d5c65e1876910ac6c7f5ca569f17f0b74a646b60 = $this->env->getExtension("native_profiler");
        $__internal_df5db7a58767a800a37e0269d5c65e1876910ac6c7f5ca569f17f0b74a646b60->enter($__internal_df5db7a58767a800a37e0269d5c65e1876910ac6c7f5ca569f17f0b74a646b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_df5db7a58767a800a37e0269d5c65e1876910ac6c7f5ca569f17f0b74a646b60->leave($__internal_df5db7a58767a800a37e0269d5c65e1876910ac6c7f5ca569f17f0b74a646b60_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dd6cf4a86d665e9ebde34a96850bf0760b249e330fd703b3dc1e93989767ea0d = $this->env->getExtension("native_profiler");
        $__internal_dd6cf4a86d665e9ebde34a96850bf0760b249e330fd703b3dc1e93989767ea0d->enter($__internal_dd6cf4a86d665e9ebde34a96850bf0760b249e330fd703b3dc1e93989767ea0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dd6cf4a86d665e9ebde34a96850bf0760b249e330fd703b3dc1e93989767ea0d->leave($__internal_dd6cf4a86d665e9ebde34a96850bf0760b249e330fd703b3dc1e93989767ea0d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2c3d206c4bbe8a846cbb08f7c65d342735906752662c0b6e88d323ceddaf450f = $this->env->getExtension("native_profiler");
        $__internal_2c3d206c4bbe8a846cbb08f7c65d342735906752662c0b6e88d323ceddaf450f->enter($__internal_2c3d206c4bbe8a846cbb08f7c65d342735906752662c0b6e88d323ceddaf450f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2c3d206c4bbe8a846cbb08f7c65d342735906752662c0b6e88d323ceddaf450f->leave($__internal_2c3d206c4bbe8a846cbb08f7c65d342735906752662c0b6e88d323ceddaf450f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dc66b88bf763f97b8aa01d2d5c0aa3c60694f9eac301e4412527083428f613f7 = $this->env->getExtension("native_profiler");
        $__internal_dc66b88bf763f97b8aa01d2d5c0aa3c60694f9eac301e4412527083428f613f7->enter($__internal_dc66b88bf763f97b8aa01d2d5c0aa3c60694f9eac301e4412527083428f613f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc66b88bf763f97b8aa01d2d5c0aa3c60694f9eac301e4412527083428f613f7->leave($__internal_dc66b88bf763f97b8aa01d2d5c0aa3c60694f9eac301e4412527083428f613f7_prof);

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
