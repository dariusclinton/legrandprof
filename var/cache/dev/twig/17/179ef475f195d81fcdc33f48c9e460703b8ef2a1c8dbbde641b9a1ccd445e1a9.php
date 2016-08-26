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
        $__internal_f574ea96ae9714da357aad41502a3d39147aef30173887df8112f22becc3b88e = $this->env->getExtension("native_profiler");
        $__internal_f574ea96ae9714da357aad41502a3d39147aef30173887df8112f22becc3b88e->enter($__internal_f574ea96ae9714da357aad41502a3d39147aef30173887df8112f22becc3b88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f574ea96ae9714da357aad41502a3d39147aef30173887df8112f22becc3b88e->leave($__internal_f574ea96ae9714da357aad41502a3d39147aef30173887df8112f22becc3b88e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b0d7e155a5d1bdda7f5fa5f8a3010675251e36ab98e0f46385067e1e6aa4e4e = $this->env->getExtension("native_profiler");
        $__internal_3b0d7e155a5d1bdda7f5fa5f8a3010675251e36ab98e0f46385067e1e6aa4e4e->enter($__internal_3b0d7e155a5d1bdda7f5fa5f8a3010675251e36ab98e0f46385067e1e6aa4e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3b0d7e155a5d1bdda7f5fa5f8a3010675251e36ab98e0f46385067e1e6aa4e4e->leave($__internal_3b0d7e155a5d1bdda7f5fa5f8a3010675251e36ab98e0f46385067e1e6aa4e4e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c76cacb32ecfdc36341f0a460d70a774cf2ec28e3feacbd3bddde154dd634cf1 = $this->env->getExtension("native_profiler");
        $__internal_c76cacb32ecfdc36341f0a460d70a774cf2ec28e3feacbd3bddde154dd634cf1->enter($__internal_c76cacb32ecfdc36341f0a460d70a774cf2ec28e3feacbd3bddde154dd634cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c76cacb32ecfdc36341f0a460d70a774cf2ec28e3feacbd3bddde154dd634cf1->leave($__internal_c76cacb32ecfdc36341f0a460d70a774cf2ec28e3feacbd3bddde154dd634cf1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dfe18da977ceb4e0f11ac8191b5a59141bf1bd2521a4f39e5d92299fb2081a92 = $this->env->getExtension("native_profiler");
        $__internal_dfe18da977ceb4e0f11ac8191b5a59141bf1bd2521a4f39e5d92299fb2081a92->enter($__internal_dfe18da977ceb4e0f11ac8191b5a59141bf1bd2521a4f39e5d92299fb2081a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dfe18da977ceb4e0f11ac8191b5a59141bf1bd2521a4f39e5d92299fb2081a92->leave($__internal_dfe18da977ceb4e0f11ac8191b5a59141bf1bd2521a4f39e5d92299fb2081a92_prof);

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
