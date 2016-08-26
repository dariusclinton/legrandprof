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
        $__internal_ac089c513ceab0ab490718a156d808c7f06af3f46cde3709b2dbb10a543ad9a8 = $this->env->getExtension("native_profiler");
        $__internal_ac089c513ceab0ab490718a156d808c7f06af3f46cde3709b2dbb10a543ad9a8->enter($__internal_ac089c513ceab0ab490718a156d808c7f06af3f46cde3709b2dbb10a543ad9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ac089c513ceab0ab490718a156d808c7f06af3f46cde3709b2dbb10a543ad9a8->leave($__internal_ac089c513ceab0ab490718a156d808c7f06af3f46cde3709b2dbb10a543ad9a8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_54c019f2adeaee1c3ed6a598b6a6f1cc0dfd92031f30e241bac678fafeece5b4 = $this->env->getExtension("native_profiler");
        $__internal_54c019f2adeaee1c3ed6a598b6a6f1cc0dfd92031f30e241bac678fafeece5b4->enter($__internal_54c019f2adeaee1c3ed6a598b6a6f1cc0dfd92031f30e241bac678fafeece5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_54c019f2adeaee1c3ed6a598b6a6f1cc0dfd92031f30e241bac678fafeece5b4->leave($__internal_54c019f2adeaee1c3ed6a598b6a6f1cc0dfd92031f30e241bac678fafeece5b4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_27228cf5803c0bc8befc6731ad2d546f03e4e08edddbc48f8b11bbd54494c69b = $this->env->getExtension("native_profiler");
        $__internal_27228cf5803c0bc8befc6731ad2d546f03e4e08edddbc48f8b11bbd54494c69b->enter($__internal_27228cf5803c0bc8befc6731ad2d546f03e4e08edddbc48f8b11bbd54494c69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_27228cf5803c0bc8befc6731ad2d546f03e4e08edddbc48f8b11bbd54494c69b->leave($__internal_27228cf5803c0bc8befc6731ad2d546f03e4e08edddbc48f8b11bbd54494c69b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d402d8c75aa81321db79742c05ed23e4452de02cac687d8a153465aeb23c0460 = $this->env->getExtension("native_profiler");
        $__internal_d402d8c75aa81321db79742c05ed23e4452de02cac687d8a153465aeb23c0460->enter($__internal_d402d8c75aa81321db79742c05ed23e4452de02cac687d8a153465aeb23c0460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d402d8c75aa81321db79742c05ed23e4452de02cac687d8a153465aeb23c0460->leave($__internal_d402d8c75aa81321db79742c05ed23e4452de02cac687d8a153465aeb23c0460_prof);

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
