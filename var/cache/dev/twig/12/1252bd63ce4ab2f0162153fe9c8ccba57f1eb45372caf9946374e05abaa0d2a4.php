<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_9cd6a0d2c1a177223ec53ea3e095ff68876204abb4f4b4298a3f8729427d6f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7bc1323c1af0e12ec89361f9b0fd09a7de9f04ad44d4da2b10ca0c76b34d63ea = $this->env->getExtension("native_profiler");
        $__internal_7bc1323c1af0e12ec89361f9b0fd09a7de9f04ad44d4da2b10ca0c76b34d63ea->enter($__internal_7bc1323c1af0e12ec89361f9b0fd09a7de9f04ad44d4da2b10ca0c76b34d63ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc1323c1af0e12ec89361f9b0fd09a7de9f04ad44d4da2b10ca0c76b34d63ea->leave($__internal_7bc1323c1af0e12ec89361f9b0fd09a7de9f04ad44d4da2b10ca0c76b34d63ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b25ab4099a912a6c0d3f1f1e8ec5da5b51e8805f396f71e06a060c618276d422 = $this->env->getExtension("native_profiler");
        $__internal_b25ab4099a912a6c0d3f1f1e8ec5da5b51e8805f396f71e06a060c618276d422->enter($__internal_b25ab4099a912a6c0d3f1f1e8ec5da5b51e8805f396f71e06a060c618276d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b25ab4099a912a6c0d3f1f1e8ec5da5b51e8805f396f71e06a060c618276d422->leave($__internal_b25ab4099a912a6c0d3f1f1e8ec5da5b51e8805f396f71e06a060c618276d422_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
