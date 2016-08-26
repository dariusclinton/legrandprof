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
        $__internal_98c0420533f446b70b4a269c4d1a8d99b54dee77d572df9f54bdb69261fd8aa5 = $this->env->getExtension("native_profiler");
        $__internal_98c0420533f446b70b4a269c4d1a8d99b54dee77d572df9f54bdb69261fd8aa5->enter($__internal_98c0420533f446b70b4a269c4d1a8d99b54dee77d572df9f54bdb69261fd8aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_98c0420533f446b70b4a269c4d1a8d99b54dee77d572df9f54bdb69261fd8aa5->leave($__internal_98c0420533f446b70b4a269c4d1a8d99b54dee77d572df9f54bdb69261fd8aa5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_273f625e9f14e27286aa5990e90289174b2e2dff4844fb9960351f5de17dbc5f = $this->env->getExtension("native_profiler");
        $__internal_273f625e9f14e27286aa5990e90289174b2e2dff4844fb9960351f5de17dbc5f->enter($__internal_273f625e9f14e27286aa5990e90289174b2e2dff4844fb9960351f5de17dbc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_273f625e9f14e27286aa5990e90289174b2e2dff4844fb9960351f5de17dbc5f->leave($__internal_273f625e9f14e27286aa5990e90289174b2e2dff4844fb9960351f5de17dbc5f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c2bd2701c9b558bdbf5400ed3f8340ee5144918fbf9a5d014c4ea8fc89ee7089 = $this->env->getExtension("native_profiler");
        $__internal_c2bd2701c9b558bdbf5400ed3f8340ee5144918fbf9a5d014c4ea8fc89ee7089->enter($__internal_c2bd2701c9b558bdbf5400ed3f8340ee5144918fbf9a5d014c4ea8fc89ee7089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c2bd2701c9b558bdbf5400ed3f8340ee5144918fbf9a5d014c4ea8fc89ee7089->leave($__internal_c2bd2701c9b558bdbf5400ed3f8340ee5144918fbf9a5d014c4ea8fc89ee7089_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e9ef640797760c45a5cedff83575ed5e9d7de086e23027c3e6cc3d1e4d0d4711 = $this->env->getExtension("native_profiler");
        $__internal_e9ef640797760c45a5cedff83575ed5e9d7de086e23027c3e6cc3d1e4d0d4711->enter($__internal_e9ef640797760c45a5cedff83575ed5e9d7de086e23027c3e6cc3d1e4d0d4711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e9ef640797760c45a5cedff83575ed5e9d7de086e23027c3e6cc3d1e4d0d4711->leave($__internal_e9ef640797760c45a5cedff83575ed5e9d7de086e23027c3e6cc3d1e4d0d4711_prof);

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
