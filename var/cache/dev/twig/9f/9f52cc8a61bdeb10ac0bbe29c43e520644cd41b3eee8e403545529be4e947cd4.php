<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_2f8fbaf710013e8b7850f0a63a6199542affff8a36bbbc8f9c973ca105a5d95b = $this->env->getExtension("native_profiler");
        $__internal_2f8fbaf710013e8b7850f0a63a6199542affff8a36bbbc8f9c973ca105a5d95b->enter($__internal_2f8fbaf710013e8b7850f0a63a6199542affff8a36bbbc8f9c973ca105a5d95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f8fbaf710013e8b7850f0a63a6199542affff8a36bbbc8f9c973ca105a5d95b->leave($__internal_2f8fbaf710013e8b7850f0a63a6199542affff8a36bbbc8f9c973ca105a5d95b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_731eb3c2df3259b2bfd4d2cc6f834a40eea505e4edd3a4131114f5c64bebf330 = $this->env->getExtension("native_profiler");
        $__internal_731eb3c2df3259b2bfd4d2cc6f834a40eea505e4edd3a4131114f5c64bebf330->enter($__internal_731eb3c2df3259b2bfd4d2cc6f834a40eea505e4edd3a4131114f5c64bebf330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_731eb3c2df3259b2bfd4d2cc6f834a40eea505e4edd3a4131114f5c64bebf330->leave($__internal_731eb3c2df3259b2bfd4d2cc6f834a40eea505e4edd3a4131114f5c64bebf330_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
