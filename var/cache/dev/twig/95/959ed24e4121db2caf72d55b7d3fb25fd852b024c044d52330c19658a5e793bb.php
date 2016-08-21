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
        $__internal_f2629fece8bf12ea128421838de7d71478611f6dc2ee5407dc532406d44a2e42 = $this->env->getExtension("native_profiler");
        $__internal_f2629fece8bf12ea128421838de7d71478611f6dc2ee5407dc532406d44a2e42->enter($__internal_f2629fece8bf12ea128421838de7d71478611f6dc2ee5407dc532406d44a2e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f2629fece8bf12ea128421838de7d71478611f6dc2ee5407dc532406d44a2e42->leave($__internal_f2629fece8bf12ea128421838de7d71478611f6dc2ee5407dc532406d44a2e42_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_11198924d9a40c465b70db178625d1e15f42c6aec1e93ffef0b42a457897c0ab = $this->env->getExtension("native_profiler");
        $__internal_11198924d9a40c465b70db178625d1e15f42c6aec1e93ffef0b42a457897c0ab->enter($__internal_11198924d9a40c465b70db178625d1e15f42c6aec1e93ffef0b42a457897c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_11198924d9a40c465b70db178625d1e15f42c6aec1e93ffef0b42a457897c0ab->leave($__internal_11198924d9a40c465b70db178625d1e15f42c6aec1e93ffef0b42a457897c0ab_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_df086fad007cdff7c021b17e3206825223f686f17cd30d87fb694e366cb66452 = $this->env->getExtension("native_profiler");
        $__internal_df086fad007cdff7c021b17e3206825223f686f17cd30d87fb694e366cb66452->enter($__internal_df086fad007cdff7c021b17e3206825223f686f17cd30d87fb694e366cb66452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_df086fad007cdff7c021b17e3206825223f686f17cd30d87fb694e366cb66452->leave($__internal_df086fad007cdff7c021b17e3206825223f686f17cd30d87fb694e366cb66452_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_25f6cee122b7b58005af9944d34cdc98a7d83146082d519ebc2149862f826d01 = $this->env->getExtension("native_profiler");
        $__internal_25f6cee122b7b58005af9944d34cdc98a7d83146082d519ebc2149862f826d01->enter($__internal_25f6cee122b7b58005af9944d34cdc98a7d83146082d519ebc2149862f826d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_25f6cee122b7b58005af9944d34cdc98a7d83146082d519ebc2149862f826d01->leave($__internal_25f6cee122b7b58005af9944d34cdc98a7d83146082d519ebc2149862f826d01_prof);

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
