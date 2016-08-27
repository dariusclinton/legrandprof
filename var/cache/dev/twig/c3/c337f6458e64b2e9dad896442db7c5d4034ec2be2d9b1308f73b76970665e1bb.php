<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3d2574fcb41d093ffb89a54df4fe379566191610c21ee683b823d8d3c8f96f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_2d977c0d716bc9b527dff2555240a6a39c73aff9963b81b30e29bbde85d2c66b = $this->env->getExtension("native_profiler");
        $__internal_2d977c0d716bc9b527dff2555240a6a39c73aff9963b81b30e29bbde85d2c66b->enter($__internal_2d977c0d716bc9b527dff2555240a6a39c73aff9963b81b30e29bbde85d2c66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d977c0d716bc9b527dff2555240a6a39c73aff9963b81b30e29bbde85d2c66b->leave($__internal_2d977c0d716bc9b527dff2555240a6a39c73aff9963b81b30e29bbde85d2c66b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51c5ecf848342ee26f6960ea635be2f1ee1c5243e0a75104d5cc4a4718998c2e = $this->env->getExtension("native_profiler");
        $__internal_51c5ecf848342ee26f6960ea635be2f1ee1c5243e0a75104d5cc4a4718998c2e->enter($__internal_51c5ecf848342ee26f6960ea635be2f1ee1c5243e0a75104d5cc4a4718998c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_51c5ecf848342ee26f6960ea635be2f1ee1c5243e0a75104d5cc4a4718998c2e->leave($__internal_51c5ecf848342ee26f6960ea635be2f1ee1c5243e0a75104d5cc4a4718998c2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
