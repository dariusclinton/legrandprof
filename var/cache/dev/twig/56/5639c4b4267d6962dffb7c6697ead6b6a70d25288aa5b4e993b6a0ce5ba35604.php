<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_80464fbf5868c0c8865ff25d806c3d60bd8e2ff3da8e6d052d8dd565e21d7503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_8667077083a1b83ea898569486a9c8c0d37ee896d769658944d3b472018bb521 = $this->env->getExtension("native_profiler");
        $__internal_8667077083a1b83ea898569486a9c8c0d37ee896d769658944d3b472018bb521->enter($__internal_8667077083a1b83ea898569486a9c8c0d37ee896d769658944d3b472018bb521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8667077083a1b83ea898569486a9c8c0d37ee896d769658944d3b472018bb521->leave($__internal_8667077083a1b83ea898569486a9c8c0d37ee896d769658944d3b472018bb521_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b90785467bad35438990c47d85f3277c6fe69bebf949385e40803685181ede23 = $this->env->getExtension("native_profiler");
        $__internal_b90785467bad35438990c47d85f3277c6fe69bebf949385e40803685181ede23->enter($__internal_b90785467bad35438990c47d85f3277c6fe69bebf949385e40803685181ede23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b90785467bad35438990c47d85f3277c6fe69bebf949385e40803685181ede23->leave($__internal_b90785467bad35438990c47d85f3277c6fe69bebf949385e40803685181ede23_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
