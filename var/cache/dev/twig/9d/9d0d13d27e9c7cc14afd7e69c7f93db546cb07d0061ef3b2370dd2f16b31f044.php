<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6e65b62ede2bb5764409f4dbbc5c6c5845b409605ca8acd8cbefe76fa64afda8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_b2a9bb814bea2b3dd15288d159f9ae54d76c55e71a8fa7bbb1cd074e99ba9884 = $this->env->getExtension("native_profiler");
        $__internal_b2a9bb814bea2b3dd15288d159f9ae54d76c55e71a8fa7bbb1cd074e99ba9884->enter($__internal_b2a9bb814bea2b3dd15288d159f9ae54d76c55e71a8fa7bbb1cd074e99ba9884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2a9bb814bea2b3dd15288d159f9ae54d76c55e71a8fa7bbb1cd074e99ba9884->leave($__internal_b2a9bb814bea2b3dd15288d159f9ae54d76c55e71a8fa7bbb1cd074e99ba9884_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e65376ca92cef22029db6fed728a969519e10db55ea4e77912bb0520b5d892e = $this->env->getExtension("native_profiler");
        $__internal_3e65376ca92cef22029db6fed728a969519e10db55ea4e77912bb0520b5d892e->enter($__internal_3e65376ca92cef22029db6fed728a969519e10db55ea4e77912bb0520b5d892e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3e65376ca92cef22029db6fed728a969519e10db55ea4e77912bb0520b5d892e->leave($__internal_3e65376ca92cef22029db6fed728a969519e10db55ea4e77912bb0520b5d892e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
