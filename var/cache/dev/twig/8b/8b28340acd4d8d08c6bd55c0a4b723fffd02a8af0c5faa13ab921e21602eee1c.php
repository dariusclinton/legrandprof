<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2a00b1dac2c61a734ba3034bd7813c4ce86417a5f2788a98b4230a1dff6fda7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_523128583aab6af212715c30a398368f7b7f9e9628a99e7bd9fddfcca7055c47 = $this->env->getExtension("native_profiler");
        $__internal_523128583aab6af212715c30a398368f7b7f9e9628a99e7bd9fddfcca7055c47->enter($__internal_523128583aab6af212715c30a398368f7b7f9e9628a99e7bd9fddfcca7055c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523128583aab6af212715c30a398368f7b7f9e9628a99e7bd9fddfcca7055c47->leave($__internal_523128583aab6af212715c30a398368f7b7f9e9628a99e7bd9fddfcca7055c47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38a772986919bbd99c00d6e121b50084e46bcaddef51a5b84f8985a5eaeef361 = $this->env->getExtension("native_profiler");
        $__internal_38a772986919bbd99c00d6e121b50084e46bcaddef51a5b84f8985a5eaeef361->enter($__internal_38a772986919bbd99c00d6e121b50084e46bcaddef51a5b84f8985a5eaeef361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_38a772986919bbd99c00d6e121b50084e46bcaddef51a5b84f8985a5eaeef361->leave($__internal_38a772986919bbd99c00d6e121b50084e46bcaddef51a5b84f8985a5eaeef361_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
