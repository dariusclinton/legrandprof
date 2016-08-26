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
        $__internal_a0784f3f0b7d2110229110dbec9f9b0d6c201f3e214965ebad831ac780c264f8 = $this->env->getExtension("native_profiler");
        $__internal_a0784f3f0b7d2110229110dbec9f9b0d6c201f3e214965ebad831ac780c264f8->enter($__internal_a0784f3f0b7d2110229110dbec9f9b0d6c201f3e214965ebad831ac780c264f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a0784f3f0b7d2110229110dbec9f9b0d6c201f3e214965ebad831ac780c264f8->leave($__internal_a0784f3f0b7d2110229110dbec9f9b0d6c201f3e214965ebad831ac780c264f8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1af10bfeb31abfe3bff109e76cfcbb532b5d4bc2497ed5674d8fb8d7e6f6287e = $this->env->getExtension("native_profiler");
        $__internal_1af10bfeb31abfe3bff109e76cfcbb532b5d4bc2497ed5674d8fb8d7e6f6287e->enter($__internal_1af10bfeb31abfe3bff109e76cfcbb532b5d4bc2497ed5674d8fb8d7e6f6287e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1af10bfeb31abfe3bff109e76cfcbb532b5d4bc2497ed5674d8fb8d7e6f6287e->leave($__internal_1af10bfeb31abfe3bff109e76cfcbb532b5d4bc2497ed5674d8fb8d7e6f6287e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1e8f0444ad695409babe56b8819effffb68cb74d82b3cc5f29b3c39cd8a243c9 = $this->env->getExtension("native_profiler");
        $__internal_1e8f0444ad695409babe56b8819effffb68cb74d82b3cc5f29b3c39cd8a243c9->enter($__internal_1e8f0444ad695409babe56b8819effffb68cb74d82b3cc5f29b3c39cd8a243c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1e8f0444ad695409babe56b8819effffb68cb74d82b3cc5f29b3c39cd8a243c9->leave($__internal_1e8f0444ad695409babe56b8819effffb68cb74d82b3cc5f29b3c39cd8a243c9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_74ae66edc327287ddd3767860cc4ab7f5e94b5db1240481927e253644d62c8f5 = $this->env->getExtension("native_profiler");
        $__internal_74ae66edc327287ddd3767860cc4ab7f5e94b5db1240481927e253644d62c8f5->enter($__internal_74ae66edc327287ddd3767860cc4ab7f5e94b5db1240481927e253644d62c8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_74ae66edc327287ddd3767860cc4ab7f5e94b5db1240481927e253644d62c8f5->leave($__internal_74ae66edc327287ddd3767860cc4ab7f5e94b5db1240481927e253644d62c8f5_prof);

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
