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
        $__internal_a8c29f9634b6b5397645a94de10f68efc90fbabc753b5f87af3fb3192003e357 = $this->env->getExtension("native_profiler");
        $__internal_a8c29f9634b6b5397645a94de10f68efc90fbabc753b5f87af3fb3192003e357->enter($__internal_a8c29f9634b6b5397645a94de10f68efc90fbabc753b5f87af3fb3192003e357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c29f9634b6b5397645a94de10f68efc90fbabc753b5f87af3fb3192003e357->leave($__internal_a8c29f9634b6b5397645a94de10f68efc90fbabc753b5f87af3fb3192003e357_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fc2f99ec1b68321863f40f9b5215f3304b2872a0cf642af6a9589ce2e6da5d0 = $this->env->getExtension("native_profiler");
        $__internal_2fc2f99ec1b68321863f40f9b5215f3304b2872a0cf642af6a9589ce2e6da5d0->enter($__internal_2fc2f99ec1b68321863f40f9b5215f3304b2872a0cf642af6a9589ce2e6da5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2fc2f99ec1b68321863f40f9b5215f3304b2872a0cf642af6a9589ce2e6da5d0->leave($__internal_2fc2f99ec1b68321863f40f9b5215f3304b2872a0cf642af6a9589ce2e6da5d0_prof);

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
