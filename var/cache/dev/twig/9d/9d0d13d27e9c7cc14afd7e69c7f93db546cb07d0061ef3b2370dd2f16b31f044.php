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
        $__internal_2f6d8c92a7e2ef1a517272f8c120d74db4614a84f03b5b04e87e74f2c7aba4a3 = $this->env->getExtension("native_profiler");
        $__internal_2f6d8c92a7e2ef1a517272f8c120d74db4614a84f03b5b04e87e74f2c7aba4a3->enter($__internal_2f6d8c92a7e2ef1a517272f8c120d74db4614a84f03b5b04e87e74f2c7aba4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6d8c92a7e2ef1a517272f8c120d74db4614a84f03b5b04e87e74f2c7aba4a3->leave($__internal_2f6d8c92a7e2ef1a517272f8c120d74db4614a84f03b5b04e87e74f2c7aba4a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e07c02d91f49cc9871ef6cf303ab86e6a3f17b74a66c7b3d8c2a46e02a930ab = $this->env->getExtension("native_profiler");
        $__internal_3e07c02d91f49cc9871ef6cf303ab86e6a3f17b74a66c7b3d8c2a46e02a930ab->enter($__internal_3e07c02d91f49cc9871ef6cf303ab86e6a3f17b74a66c7b3d8c2a46e02a930ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3e07c02d91f49cc9871ef6cf303ab86e6a3f17b74a66c7b3d8c2a46e02a930ab->leave($__internal_3e07c02d91f49cc9871ef6cf303ab86e6a3f17b74a66c7b3d8c2a46e02a930ab_prof);

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
