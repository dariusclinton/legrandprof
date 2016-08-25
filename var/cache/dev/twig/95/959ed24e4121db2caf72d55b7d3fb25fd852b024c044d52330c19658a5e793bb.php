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
        $__internal_d3ed8891d767e1f325d715c90f9078181477d58bc6b24512c27f18ca7166c364 = $this->env->getExtension("native_profiler");
        $__internal_d3ed8891d767e1f325d715c90f9078181477d58bc6b24512c27f18ca7166c364->enter($__internal_d3ed8891d767e1f325d715c90f9078181477d58bc6b24512c27f18ca7166c364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3ed8891d767e1f325d715c90f9078181477d58bc6b24512c27f18ca7166c364->leave($__internal_d3ed8891d767e1f325d715c90f9078181477d58bc6b24512c27f18ca7166c364_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_243e920ee3f11a2831b92676c012e0e6d2a8e43228634644459c299e2fdf3639 = $this->env->getExtension("native_profiler");
        $__internal_243e920ee3f11a2831b92676c012e0e6d2a8e43228634644459c299e2fdf3639->enter($__internal_243e920ee3f11a2831b92676c012e0e6d2a8e43228634644459c299e2fdf3639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_243e920ee3f11a2831b92676c012e0e6d2a8e43228634644459c299e2fdf3639->leave($__internal_243e920ee3f11a2831b92676c012e0e6d2a8e43228634644459c299e2fdf3639_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_15d58c2e728f3830d3b5e992c3be46304fd81b14fbd6231db0fbcd241876d057 = $this->env->getExtension("native_profiler");
        $__internal_15d58c2e728f3830d3b5e992c3be46304fd81b14fbd6231db0fbcd241876d057->enter($__internal_15d58c2e728f3830d3b5e992c3be46304fd81b14fbd6231db0fbcd241876d057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_15d58c2e728f3830d3b5e992c3be46304fd81b14fbd6231db0fbcd241876d057->leave($__internal_15d58c2e728f3830d3b5e992c3be46304fd81b14fbd6231db0fbcd241876d057_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2670e0594dbc05852136c68edae4020bb84ecb19c2e1056c4e9a14385b139a33 = $this->env->getExtension("native_profiler");
        $__internal_2670e0594dbc05852136c68edae4020bb84ecb19c2e1056c4e9a14385b139a33->enter($__internal_2670e0594dbc05852136c68edae4020bb84ecb19c2e1056c4e9a14385b139a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2670e0594dbc05852136c68edae4020bb84ecb19c2e1056c4e9a14385b139a33->leave($__internal_2670e0594dbc05852136c68edae4020bb84ecb19c2e1056c4e9a14385b139a33_prof);

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
