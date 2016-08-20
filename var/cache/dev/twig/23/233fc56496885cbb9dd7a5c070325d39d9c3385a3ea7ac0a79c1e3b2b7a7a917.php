<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a68c2b58d2abb85a6ac70f5fda3b1ec34cd0ed57b34ee6d7df1118ef3eca3954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_7f1735c4b09912a94a4b2f891151b1e0bd69d98b99b158d5bbabd757f0f5ca41 = $this->env->getExtension("native_profiler");
        $__internal_7f1735c4b09912a94a4b2f891151b1e0bd69d98b99b158d5bbabd757f0f5ca41->enter($__internal_7f1735c4b09912a94a4b2f891151b1e0bd69d98b99b158d5bbabd757f0f5ca41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f1735c4b09912a94a4b2f891151b1e0bd69d98b99b158d5bbabd757f0f5ca41->leave($__internal_7f1735c4b09912a94a4b2f891151b1e0bd69d98b99b158d5bbabd757f0f5ca41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52041ec83fe05da431cb04ff6a82fc082d1b41ea4a34dbbd008a047cab3af254 = $this->env->getExtension("native_profiler");
        $__internal_52041ec83fe05da431cb04ff6a82fc082d1b41ea4a34dbbd008a047cab3af254->enter($__internal_52041ec83fe05da431cb04ff6a82fc082d1b41ea4a34dbbd008a047cab3af254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_52041ec83fe05da431cb04ff6a82fc082d1b41ea4a34dbbd008a047cab3af254->leave($__internal_52041ec83fe05da431cb04ff6a82fc082d1b41ea4a34dbbd008a047cab3af254_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
