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
        $__internal_4ec154d9dbb8b312420d2b4c2d5531fa2d5a10edd6059741ac98d4fbfc731375 = $this->env->getExtension("native_profiler");
        $__internal_4ec154d9dbb8b312420d2b4c2d5531fa2d5a10edd6059741ac98d4fbfc731375->enter($__internal_4ec154d9dbb8b312420d2b4c2d5531fa2d5a10edd6059741ac98d4fbfc731375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4ec154d9dbb8b312420d2b4c2d5531fa2d5a10edd6059741ac98d4fbfc731375->leave($__internal_4ec154d9dbb8b312420d2b4c2d5531fa2d5a10edd6059741ac98d4fbfc731375_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1de7d45f6b2e85a064cd48cf6a9068b837f275df88cb0721820d5893b33b70c1 = $this->env->getExtension("native_profiler");
        $__internal_1de7d45f6b2e85a064cd48cf6a9068b837f275df88cb0721820d5893b33b70c1->enter($__internal_1de7d45f6b2e85a064cd48cf6a9068b837f275df88cb0721820d5893b33b70c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1de7d45f6b2e85a064cd48cf6a9068b837f275df88cb0721820d5893b33b70c1->leave($__internal_1de7d45f6b2e85a064cd48cf6a9068b837f275df88cb0721820d5893b33b70c1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b861d312684be8821022b77588d2451f962379f289295f864d4b8c8b8d676e09 = $this->env->getExtension("native_profiler");
        $__internal_b861d312684be8821022b77588d2451f962379f289295f864d4b8c8b8d676e09->enter($__internal_b861d312684be8821022b77588d2451f962379f289295f864d4b8c8b8d676e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b861d312684be8821022b77588d2451f962379f289295f864d4b8c8b8d676e09->leave($__internal_b861d312684be8821022b77588d2451f962379f289295f864d4b8c8b8d676e09_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_806667941910aa921bee23174faa23bcd0f7d88d5b3f26799fbaa82ec067655b = $this->env->getExtension("native_profiler");
        $__internal_806667941910aa921bee23174faa23bcd0f7d88d5b3f26799fbaa82ec067655b->enter($__internal_806667941910aa921bee23174faa23bcd0f7d88d5b3f26799fbaa82ec067655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_806667941910aa921bee23174faa23bcd0f7d88d5b3f26799fbaa82ec067655b->leave($__internal_806667941910aa921bee23174faa23bcd0f7d88d5b3f26799fbaa82ec067655b_prof);

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
