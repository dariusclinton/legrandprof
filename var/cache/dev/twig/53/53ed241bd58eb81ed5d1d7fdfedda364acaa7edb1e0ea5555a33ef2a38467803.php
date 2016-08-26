<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5157624dd1fed23d585bc0aa41f4c2ac82430c0814efc019f571a5c5094b1db1 extends Twig_Template
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
        $__internal_d3e7796c71cf2efabf9016aa19558368dc2fdc19238a9977890a745d9f9a3c32 = $this->env->getExtension("native_profiler");
        $__internal_d3e7796c71cf2efabf9016aa19558368dc2fdc19238a9977890a745d9f9a3c32->enter($__internal_d3e7796c71cf2efabf9016aa19558368dc2fdc19238a9977890a745d9f9a3c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_text', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3e7796c71cf2efabf9016aa19558368dc2fdc19238a9977890a745d9f9a3c32->leave($__internal_d3e7796c71cf2efabf9016aa19558368dc2fdc19238a9977890a745d9f9a3c32_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_260711c588b55260d4b9d264b154aa594c90f18f7bf415c3d29431a7af175083 = $this->env->getExtension("native_profiler");
        $__internal_260711c588b55260d4b9d264b154aa594c90f18f7bf415c3d29431a7af175083->enter($__internal_260711c588b55260d4b9d264b154aa594c90f18f7bf415c3d29431a7af175083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "  ";
        // line 5
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_260711c588b55260d4b9d264b154aa594c90f18f7bf415c3d29431a7af175083->leave($__internal_260711c588b55260d4b9d264b154aa594c90f18f7bf415c3d29431a7af175083_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4de2f0915f737d8e174e587238d9c65f91cf7d7fedd99eb7debca6cbe55a35ba = $this->env->getExtension("native_profiler");
        $__internal_4de2f0915f737d8e174e587238d9c65f91cf7d7fedd99eb7debca6cbe55a35ba->enter($__internal_4de2f0915f737d8e174e587238d9c65f91cf7d7fedd99eb7debca6cbe55a35ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo "  ";
        // line 11
        echo "  ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
  ";
        
        $__internal_4de2f0915f737d8e174e587238d9c65f91cf7d7fedd99eb7debca6cbe55a35ba->leave($__internal_4de2f0915f737d8e174e587238d9c65f91cf7d7fedd99eb7debca6cbe55a35ba_prof);

    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_72bead40f6582e79d2f550280ddc71bcbabc2fb43034f5ab5d39393939b12bd8 = $this->env->getExtension("native_profiler");
        $__internal_72bead40f6582e79d2f550280ddc71bcbabc2fb43034f5ab5d39393939b12bd8->enter($__internal_72bead40f6582e79d2f550280ddc71bcbabc2fb43034f5ab5d39393939b12bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_72bead40f6582e79d2f550280ddc71bcbabc2fb43034f5ab5d39393939b12bd8->leave($__internal_72bead40f6582e79d2f550280ddc71bcbabc2fb43034f5ab5d39393939b12bd8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  71 => 11,  69 => 10,  63 => 9,  53 => 5,  51 => 4,  45 => 3,  38 => 15,  35 => 14,  33 => 9,  30 => 8,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block subject %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/*   {% autoescape false %}*/
/*   {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/*   {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}{% endblock %}*/
/* */
