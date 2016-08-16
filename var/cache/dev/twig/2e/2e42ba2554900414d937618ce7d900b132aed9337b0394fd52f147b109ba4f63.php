<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f3026d447259f0b4887f80ed7a1c1504af723ce4df8b857e6d798b7566e2fe25 extends Twig_Template
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
        $__internal_3086508da3300c21f9c98fcd39a3bbe03a03735f947ad56e1859957e9790ab93 = $this->env->getExtension("native_profiler");
        $__internal_3086508da3300c21f9c98fcd39a3bbe03a03735f947ad56e1859957e9790ab93->enter($__internal_3086508da3300c21f9c98fcd39a3bbe03a03735f947ad56e1859957e9790ab93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3086508da3300c21f9c98fcd39a3bbe03a03735f947ad56e1859957e9790ab93->leave($__internal_3086508da3300c21f9c98fcd39a3bbe03a03735f947ad56e1859957e9790ab93_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_424e8a6ae64dacb6d7710dbba0ae4e2a636f43b97368d56cc9883075df405a0d = $this->env->getExtension("native_profiler");
        $__internal_424e8a6ae64dacb6d7710dbba0ae4e2a636f43b97368d56cc9883075df405a0d->enter($__internal_424e8a6ae64dacb6d7710dbba0ae4e2a636f43b97368d56cc9883075df405a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_424e8a6ae64dacb6d7710dbba0ae4e2a636f43b97368d56cc9883075df405a0d->leave($__internal_424e8a6ae64dacb6d7710dbba0ae4e2a636f43b97368d56cc9883075df405a0d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_18421eb7b621651446a9b2602987c9aa5868eab84a5919950e5d9236325b397b = $this->env->getExtension("native_profiler");
        $__internal_18421eb7b621651446a9b2602987c9aa5868eab84a5919950e5d9236325b397b->enter($__internal_18421eb7b621651446a9b2602987c9aa5868eab84a5919950e5d9236325b397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_18421eb7b621651446a9b2602987c9aa5868eab84a5919950e5d9236325b397b->leave($__internal_18421eb7b621651446a9b2602987c9aa5868eab84a5919950e5d9236325b397b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1bd269923805bd8c44cb9dddf086ed74333e35eb682d32d1b75ee907799b6462 = $this->env->getExtension("native_profiler");
        $__internal_1bd269923805bd8c44cb9dddf086ed74333e35eb682d32d1b75ee907799b6462->enter($__internal_1bd269923805bd8c44cb9dddf086ed74333e35eb682d32d1b75ee907799b6462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1bd269923805bd8c44cb9dddf086ed74333e35eb682d32d1b75ee907799b6462->leave($__internal_1bd269923805bd8c44cb9dddf086ed74333e35eb682d32d1b75ee907799b6462_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
