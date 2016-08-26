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
        $__internal_7124a93c3d542e9ee4e14c68a4e8d9c245f7140ddb111b0636aba1a55c7ca20c = $this->env->getExtension("native_profiler");
        $__internal_7124a93c3d542e9ee4e14c68a4e8d9c245f7140ddb111b0636aba1a55c7ca20c->enter($__internal_7124a93c3d542e9ee4e14c68a4e8d9c245f7140ddb111b0636aba1a55c7ca20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7124a93c3d542e9ee4e14c68a4e8d9c245f7140ddb111b0636aba1a55c7ca20c->leave($__internal_7124a93c3d542e9ee4e14c68a4e8d9c245f7140ddb111b0636aba1a55c7ca20c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_944462a93ae33acaa2ffda2e0e60ba3b0b92c562a541e6ae369587a25cd4a6f7 = $this->env->getExtension("native_profiler");
        $__internal_944462a93ae33acaa2ffda2e0e60ba3b0b92c562a541e6ae369587a25cd4a6f7->enter($__internal_944462a93ae33acaa2ffda2e0e60ba3b0b92c562a541e6ae369587a25cd4a6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_944462a93ae33acaa2ffda2e0e60ba3b0b92c562a541e6ae369587a25cd4a6f7->leave($__internal_944462a93ae33acaa2ffda2e0e60ba3b0b92c562a541e6ae369587a25cd4a6f7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b9992d2fe258c1d148f9514b1a3a4299e151da04888f345a692ebd91b51f1056 = $this->env->getExtension("native_profiler");
        $__internal_b9992d2fe258c1d148f9514b1a3a4299e151da04888f345a692ebd91b51f1056->enter($__internal_b9992d2fe258c1d148f9514b1a3a4299e151da04888f345a692ebd91b51f1056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b9992d2fe258c1d148f9514b1a3a4299e151da04888f345a692ebd91b51f1056->leave($__internal_b9992d2fe258c1d148f9514b1a3a4299e151da04888f345a692ebd91b51f1056_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6dfbd8c5e17d7536929e2833257f936e7ccb045ef654487f72fb2e49a1f26bb4 = $this->env->getExtension("native_profiler");
        $__internal_6dfbd8c5e17d7536929e2833257f936e7ccb045ef654487f72fb2e49a1f26bb4->enter($__internal_6dfbd8c5e17d7536929e2833257f936e7ccb045ef654487f72fb2e49a1f26bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6dfbd8c5e17d7536929e2833257f936e7ccb045ef654487f72fb2e49a1f26bb4->leave($__internal_6dfbd8c5e17d7536929e2833257f936e7ccb045ef654487f72fb2e49a1f26bb4_prof);

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
