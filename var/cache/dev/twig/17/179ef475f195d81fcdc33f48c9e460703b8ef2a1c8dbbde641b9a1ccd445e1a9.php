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
        $__internal_3cd4ade92f9a79cb1870128933c3b651982e35b50e38721241e03b79cfb8d1c5 = $this->env->getExtension("native_profiler");
        $__internal_3cd4ade92f9a79cb1870128933c3b651982e35b50e38721241e03b79cfb8d1c5->enter($__internal_3cd4ade92f9a79cb1870128933c3b651982e35b50e38721241e03b79cfb8d1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3cd4ade92f9a79cb1870128933c3b651982e35b50e38721241e03b79cfb8d1c5->leave($__internal_3cd4ade92f9a79cb1870128933c3b651982e35b50e38721241e03b79cfb8d1c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d0e1422919e9af6d5817c590c98398cdff20b650631659f1692f3812bd3d01bb = $this->env->getExtension("native_profiler");
        $__internal_d0e1422919e9af6d5817c590c98398cdff20b650631659f1692f3812bd3d01bb->enter($__internal_d0e1422919e9af6d5817c590c98398cdff20b650631659f1692f3812bd3d01bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0e1422919e9af6d5817c590c98398cdff20b650631659f1692f3812bd3d01bb->leave($__internal_d0e1422919e9af6d5817c590c98398cdff20b650631659f1692f3812bd3d01bb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f7318b0fcfac04df809c5215beb0fa6f8846a5cd57428e263584f83fa6318eb7 = $this->env->getExtension("native_profiler");
        $__internal_f7318b0fcfac04df809c5215beb0fa6f8846a5cd57428e263584f83fa6318eb7->enter($__internal_f7318b0fcfac04df809c5215beb0fa6f8846a5cd57428e263584f83fa6318eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f7318b0fcfac04df809c5215beb0fa6f8846a5cd57428e263584f83fa6318eb7->leave($__internal_f7318b0fcfac04df809c5215beb0fa6f8846a5cd57428e263584f83fa6318eb7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4bf36d6a3a9bc03f53def3c78a33c3f268a4d53012c9dad9e96e79311f1421c1 = $this->env->getExtension("native_profiler");
        $__internal_4bf36d6a3a9bc03f53def3c78a33c3f268a4d53012c9dad9e96e79311f1421c1->enter($__internal_4bf36d6a3a9bc03f53def3c78a33c3f268a4d53012c9dad9e96e79311f1421c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4bf36d6a3a9bc03f53def3c78a33c3f268a4d53012c9dad9e96e79311f1421c1->leave($__internal_4bf36d6a3a9bc03f53def3c78a33c3f268a4d53012c9dad9e96e79311f1421c1_prof);

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
