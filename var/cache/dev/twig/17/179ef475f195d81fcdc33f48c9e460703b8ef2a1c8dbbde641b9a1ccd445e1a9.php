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
        $__internal_c5709df0398346e7da54c433fb25e8ffc0455b854e9dde891fabad1e4c17501c = $this->env->getExtension("native_profiler");
        $__internal_c5709df0398346e7da54c433fb25e8ffc0455b854e9dde891fabad1e4c17501c->enter($__internal_c5709df0398346e7da54c433fb25e8ffc0455b854e9dde891fabad1e4c17501c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c5709df0398346e7da54c433fb25e8ffc0455b854e9dde891fabad1e4c17501c->leave($__internal_c5709df0398346e7da54c433fb25e8ffc0455b854e9dde891fabad1e4c17501c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0c99298f481bd90643381c38a6d9dbe49e9420b70608d5e01a870711509b1f09 = $this->env->getExtension("native_profiler");
        $__internal_0c99298f481bd90643381c38a6d9dbe49e9420b70608d5e01a870711509b1f09->enter($__internal_0c99298f481bd90643381c38a6d9dbe49e9420b70608d5e01a870711509b1f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0c99298f481bd90643381c38a6d9dbe49e9420b70608d5e01a870711509b1f09->leave($__internal_0c99298f481bd90643381c38a6d9dbe49e9420b70608d5e01a870711509b1f09_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3e6b3972825bb9bf4f08b3d85b9e772959d4f917c5a5b2a40190495a8490f6bd = $this->env->getExtension("native_profiler");
        $__internal_3e6b3972825bb9bf4f08b3d85b9e772959d4f917c5a5b2a40190495a8490f6bd->enter($__internal_3e6b3972825bb9bf4f08b3d85b9e772959d4f917c5a5b2a40190495a8490f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3e6b3972825bb9bf4f08b3d85b9e772959d4f917c5a5b2a40190495a8490f6bd->leave($__internal_3e6b3972825bb9bf4f08b3d85b9e772959d4f917c5a5b2a40190495a8490f6bd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5882eaf8a0de8a288cecff5fb1754e70d9b154b70bd0ed39a8b2a94e9d3b12a5 = $this->env->getExtension("native_profiler");
        $__internal_5882eaf8a0de8a288cecff5fb1754e70d9b154b70bd0ed39a8b2a94e9d3b12a5->enter($__internal_5882eaf8a0de8a288cecff5fb1754e70d9b154b70bd0ed39a8b2a94e9d3b12a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5882eaf8a0de8a288cecff5fb1754e70d9b154b70bd0ed39a8b2a94e9d3b12a5->leave($__internal_5882eaf8a0de8a288cecff5fb1754e70d9b154b70bd0ed39a8b2a94e9d3b12a5_prof);

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
