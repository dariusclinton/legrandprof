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
        $__internal_64d8c1a916f91e74ea4618f71ac141f05da0ec72665d5a16f2d422921214b181 = $this->env->getExtension("native_profiler");
        $__internal_64d8c1a916f91e74ea4618f71ac141f05da0ec72665d5a16f2d422921214b181->enter($__internal_64d8c1a916f91e74ea4618f71ac141f05da0ec72665d5a16f2d422921214b181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d8c1a916f91e74ea4618f71ac141f05da0ec72665d5a16f2d422921214b181->leave($__internal_64d8c1a916f91e74ea4618f71ac141f05da0ec72665d5a16f2d422921214b181_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcd9c934deea2fb5882b200d6cf852f7ffbd30fa778c658233e8bde72622617d = $this->env->getExtension("native_profiler");
        $__internal_bcd9c934deea2fb5882b200d6cf852f7ffbd30fa778c658233e8bde72622617d->enter($__internal_bcd9c934deea2fb5882b200d6cf852f7ffbd30fa778c658233e8bde72622617d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bcd9c934deea2fb5882b200d6cf852f7ffbd30fa778c658233e8bde72622617d->leave($__internal_bcd9c934deea2fb5882b200d6cf852f7ffbd30fa778c658233e8bde72622617d_prof);

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
