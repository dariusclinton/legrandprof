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
        $__internal_d9998224c76ffe536484f13fe8494e31428e0adb58bed21aa2a071d56a54c591 = $this->env->getExtension("native_profiler");
        $__internal_d9998224c76ffe536484f13fe8494e31428e0adb58bed21aa2a071d56a54c591->enter($__internal_d9998224c76ffe536484f13fe8494e31428e0adb58bed21aa2a071d56a54c591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9998224c76ffe536484f13fe8494e31428e0adb58bed21aa2a071d56a54c591->leave($__internal_d9998224c76ffe536484f13fe8494e31428e0adb58bed21aa2a071d56a54c591_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_892d36cdd9b985cfa40f2d14e1b239fae67903f42059704b5ed881dc0b51043e = $this->env->getExtension("native_profiler");
        $__internal_892d36cdd9b985cfa40f2d14e1b239fae67903f42059704b5ed881dc0b51043e->enter($__internal_892d36cdd9b985cfa40f2d14e1b239fae67903f42059704b5ed881dc0b51043e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_892d36cdd9b985cfa40f2d14e1b239fae67903f42059704b5ed881dc0b51043e->leave($__internal_892d36cdd9b985cfa40f2d14e1b239fae67903f42059704b5ed881dc0b51043e_prof);

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
