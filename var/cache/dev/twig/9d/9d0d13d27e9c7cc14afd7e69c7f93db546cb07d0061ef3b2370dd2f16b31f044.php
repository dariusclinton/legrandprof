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
        $__internal_b1628900c1ee8a7027601ad97e05be4ba178f56a5d4ff2035a0e00a8ee60dc45 = $this->env->getExtension("native_profiler");
        $__internal_b1628900c1ee8a7027601ad97e05be4ba178f56a5d4ff2035a0e00a8ee60dc45->enter($__internal_b1628900c1ee8a7027601ad97e05be4ba178f56a5d4ff2035a0e00a8ee60dc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1628900c1ee8a7027601ad97e05be4ba178f56a5d4ff2035a0e00a8ee60dc45->leave($__internal_b1628900c1ee8a7027601ad97e05be4ba178f56a5d4ff2035a0e00a8ee60dc45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6aad468b22b8f3a9dfa3862ee404aad3326f257cced6e1cc4a02ffec8e178a6 = $this->env->getExtension("native_profiler");
        $__internal_c6aad468b22b8f3a9dfa3862ee404aad3326f257cced6e1cc4a02ffec8e178a6->enter($__internal_c6aad468b22b8f3a9dfa3862ee404aad3326f257cced6e1cc4a02ffec8e178a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c6aad468b22b8f3a9dfa3862ee404aad3326f257cced6e1cc4a02ffec8e178a6->leave($__internal_c6aad468b22b8f3a9dfa3862ee404aad3326f257cced6e1cc4a02ffec8e178a6_prof);

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
