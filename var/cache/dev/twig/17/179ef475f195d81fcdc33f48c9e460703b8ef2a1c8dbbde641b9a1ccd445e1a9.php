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
        $__internal_53af32e74118190ec404113d8bb317c50658b54474b6fbb69926f0d41ea7ce36 = $this->env->getExtension("native_profiler");
        $__internal_53af32e74118190ec404113d8bb317c50658b54474b6fbb69926f0d41ea7ce36->enter($__internal_53af32e74118190ec404113d8bb317c50658b54474b6fbb69926f0d41ea7ce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_53af32e74118190ec404113d8bb317c50658b54474b6fbb69926f0d41ea7ce36->leave($__internal_53af32e74118190ec404113d8bb317c50658b54474b6fbb69926f0d41ea7ce36_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7a007fe33af57cbd12a6aee17cd7773cfb9b8e7aab98ceb491a7e78be59a1f67 = $this->env->getExtension("native_profiler");
        $__internal_7a007fe33af57cbd12a6aee17cd7773cfb9b8e7aab98ceb491a7e78be59a1f67->enter($__internal_7a007fe33af57cbd12a6aee17cd7773cfb9b8e7aab98ceb491a7e78be59a1f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7a007fe33af57cbd12a6aee17cd7773cfb9b8e7aab98ceb491a7e78be59a1f67->leave($__internal_7a007fe33af57cbd12a6aee17cd7773cfb9b8e7aab98ceb491a7e78be59a1f67_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_842b5d207cbfb793faee6dde457a3934d95703016faaf4e51a70bd2084edf0d2 = $this->env->getExtension("native_profiler");
        $__internal_842b5d207cbfb793faee6dde457a3934d95703016faaf4e51a70bd2084edf0d2->enter($__internal_842b5d207cbfb793faee6dde457a3934d95703016faaf4e51a70bd2084edf0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_842b5d207cbfb793faee6dde457a3934d95703016faaf4e51a70bd2084edf0d2->leave($__internal_842b5d207cbfb793faee6dde457a3934d95703016faaf4e51a70bd2084edf0d2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a5d586ce4d9a31a14c1e37e4ed019df5a550ccca4c711314b15ca587a8408158 = $this->env->getExtension("native_profiler");
        $__internal_a5d586ce4d9a31a14c1e37e4ed019df5a550ccca4c711314b15ca587a8408158->enter($__internal_a5d586ce4d9a31a14c1e37e4ed019df5a550ccca4c711314b15ca587a8408158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a5d586ce4d9a31a14c1e37e4ed019df5a550ccca4c711314b15ca587a8408158->leave($__internal_a5d586ce4d9a31a14c1e37e4ed019df5a550ccca4c711314b15ca587a8408158_prof);

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
