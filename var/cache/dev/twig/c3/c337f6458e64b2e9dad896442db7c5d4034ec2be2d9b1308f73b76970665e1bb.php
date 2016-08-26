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
        $__internal_fe984f14e80346d86bb925d53be36f012d9b3f3286cfdd6dff18a8ae230dd640 = $this->env->getExtension("native_profiler");
        $__internal_fe984f14e80346d86bb925d53be36f012d9b3f3286cfdd6dff18a8ae230dd640->enter($__internal_fe984f14e80346d86bb925d53be36f012d9b3f3286cfdd6dff18a8ae230dd640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe984f14e80346d86bb925d53be36f012d9b3f3286cfdd6dff18a8ae230dd640->leave($__internal_fe984f14e80346d86bb925d53be36f012d9b3f3286cfdd6dff18a8ae230dd640_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56877db0958100bb0b1b21653d532484c9b26e74ed79eccad0731b7c7993e977 = $this->env->getExtension("native_profiler");
        $__internal_56877db0958100bb0b1b21653d532484c9b26e74ed79eccad0731b7c7993e977->enter($__internal_56877db0958100bb0b1b21653d532484c9b26e74ed79eccad0731b7c7993e977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_56877db0958100bb0b1b21653d532484c9b26e74ed79eccad0731b7c7993e977->leave($__internal_56877db0958100bb0b1b21653d532484c9b26e74ed79eccad0731b7c7993e977_prof);

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
