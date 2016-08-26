<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e3b6f24e444bf886ec53293b4a63b53f11bd74ebb2cd59edae68a3b385d93fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23bfedee498b8995e101ec52398a742d67fdf7cf2fba5bd6d8b59553e9ae65b7 = $this->env->getExtension("native_profiler");
        $__internal_23bfedee498b8995e101ec52398a742d67fdf7cf2fba5bd6d8b59553e9ae65b7->enter($__internal_23bfedee498b8995e101ec52398a742d67fdf7cf2fba5bd6d8b59553e9ae65b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23bfedee498b8995e101ec52398a742d67fdf7cf2fba5bd6d8b59553e9ae65b7->leave($__internal_23bfedee498b8995e101ec52398a742d67fdf7cf2fba5bd6d8b59553e9ae65b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3254462113759ca30e2a920fed2ef1235cf4909cf0421c66ce6be4b088d0a39 = $this->env->getExtension("native_profiler");
        $__internal_c3254462113759ca30e2a920fed2ef1235cf4909cf0421c66ce6be4b088d0a39->enter($__internal_c3254462113759ca30e2a920fed2ef1235cf4909cf0421c66ce6be4b088d0a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_c3254462113759ca30e2a920fed2ef1235cf4909cf0421c66ce6be4b088d0a39->leave($__internal_c3254462113759ca30e2a920fed2ef1235cf4909cf0421c66ce6be4b088d0a39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
