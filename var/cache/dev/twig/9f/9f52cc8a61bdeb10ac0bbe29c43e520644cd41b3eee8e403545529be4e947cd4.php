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
        $__internal_c82abae61a4fc860865385cf75969f1660f62aeeb8198106584e0d3606928f5a = $this->env->getExtension("native_profiler");
        $__internal_c82abae61a4fc860865385cf75969f1660f62aeeb8198106584e0d3606928f5a->enter($__internal_c82abae61a4fc860865385cf75969f1660f62aeeb8198106584e0d3606928f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c82abae61a4fc860865385cf75969f1660f62aeeb8198106584e0d3606928f5a->leave($__internal_c82abae61a4fc860865385cf75969f1660f62aeeb8198106584e0d3606928f5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eae98ff34dea5959663cba55cacec01f7c3a1aa931ebed21a7314e3a6269f968 = $this->env->getExtension("native_profiler");
        $__internal_eae98ff34dea5959663cba55cacec01f7c3a1aa931ebed21a7314e3a6269f968->enter($__internal_eae98ff34dea5959663cba55cacec01f7c3a1aa931ebed21a7314e3a6269f968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_eae98ff34dea5959663cba55cacec01f7c3a1aa931ebed21a7314e3a6269f968->leave($__internal_eae98ff34dea5959663cba55cacec01f7c3a1aa931ebed21a7314e3a6269f968_prof);

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
