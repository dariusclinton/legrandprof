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
        $__internal_8495c3c7c34a0e0705c8714833bb14b0126976ce25081eac3e2189c4a92a159e = $this->env->getExtension("native_profiler");
        $__internal_8495c3c7c34a0e0705c8714833bb14b0126976ce25081eac3e2189c4a92a159e->enter($__internal_8495c3c7c34a0e0705c8714833bb14b0126976ce25081eac3e2189c4a92a159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8495c3c7c34a0e0705c8714833bb14b0126976ce25081eac3e2189c4a92a159e->leave($__internal_8495c3c7c34a0e0705c8714833bb14b0126976ce25081eac3e2189c4a92a159e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc9c4b10328cd5925ac0ac7dd3d7fb1292d8e9cff6052d32bdd90499bea95a2e = $this->env->getExtension("native_profiler");
        $__internal_cc9c4b10328cd5925ac0ac7dd3d7fb1292d8e9cff6052d32bdd90499bea95a2e->enter($__internal_cc9c4b10328cd5925ac0ac7dd3d7fb1292d8e9cff6052d32bdd90499bea95a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_cc9c4b10328cd5925ac0ac7dd3d7fb1292d8e9cff6052d32bdd90499bea95a2e->leave($__internal_cc9c4b10328cd5925ac0ac7dd3d7fb1292d8e9cff6052d32bdd90499bea95a2e_prof);

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
