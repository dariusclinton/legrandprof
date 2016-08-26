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
        $__internal_6f94d1298ce34a7d8d98b95780bc73b51fadd8d2eb47e47d5a84c21d148c2542 = $this->env->getExtension("native_profiler");
        $__internal_6f94d1298ce34a7d8d98b95780bc73b51fadd8d2eb47e47d5a84c21d148c2542->enter($__internal_6f94d1298ce34a7d8d98b95780bc73b51fadd8d2eb47e47d5a84c21d148c2542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6f94d1298ce34a7d8d98b95780bc73b51fadd8d2eb47e47d5a84c21d148c2542->leave($__internal_6f94d1298ce34a7d8d98b95780bc73b51fadd8d2eb47e47d5a84c21d148c2542_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_101bb924cb167a621865efb2f18cf3cae3fdda609fb9453f3c25933f2c80c7f0 = $this->env->getExtension("native_profiler");
        $__internal_101bb924cb167a621865efb2f18cf3cae3fdda609fb9453f3c25933f2c80c7f0->enter($__internal_101bb924cb167a621865efb2f18cf3cae3fdda609fb9453f3c25933f2c80c7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_101bb924cb167a621865efb2f18cf3cae3fdda609fb9453f3c25933f2c80c7f0->leave($__internal_101bb924cb167a621865efb2f18cf3cae3fdda609fb9453f3c25933f2c80c7f0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_36ab211c9deb6b857d692aa4391e7c0a330be487e95913cc4cbe7e4052df3183 = $this->env->getExtension("native_profiler");
        $__internal_36ab211c9deb6b857d692aa4391e7c0a330be487e95913cc4cbe7e4052df3183->enter($__internal_36ab211c9deb6b857d692aa4391e7c0a330be487e95913cc4cbe7e4052df3183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_36ab211c9deb6b857d692aa4391e7c0a330be487e95913cc4cbe7e4052df3183->leave($__internal_36ab211c9deb6b857d692aa4391e7c0a330be487e95913cc4cbe7e4052df3183_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_43df87f1cfa2088a645ffaaff97e9dfc694cc6b040a7ce54fcf7a971b2a27e09 = $this->env->getExtension("native_profiler");
        $__internal_43df87f1cfa2088a645ffaaff97e9dfc694cc6b040a7ce54fcf7a971b2a27e09->enter($__internal_43df87f1cfa2088a645ffaaff97e9dfc694cc6b040a7ce54fcf7a971b2a27e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_43df87f1cfa2088a645ffaaff97e9dfc694cc6b040a7ce54fcf7a971b2a27e09->leave($__internal_43df87f1cfa2088a645ffaaff97e9dfc694cc6b040a7ce54fcf7a971b2a27e09_prof);

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
