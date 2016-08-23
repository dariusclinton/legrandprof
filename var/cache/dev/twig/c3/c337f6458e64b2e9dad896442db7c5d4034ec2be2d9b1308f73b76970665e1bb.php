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
        $__internal_41b6152434f4d839d3e92a0a7df607854eff2239dc3b25c2a0959d3c30f2f2d4 = $this->env->getExtension("native_profiler");
        $__internal_41b6152434f4d839d3e92a0a7df607854eff2239dc3b25c2a0959d3c30f2f2d4->enter($__internal_41b6152434f4d839d3e92a0a7df607854eff2239dc3b25c2a0959d3c30f2f2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41b6152434f4d839d3e92a0a7df607854eff2239dc3b25c2a0959d3c30f2f2d4->leave($__internal_41b6152434f4d839d3e92a0a7df607854eff2239dc3b25c2a0959d3c30f2f2d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b10742b9f609d2084e271268f341904428faee4c36cc2378cb7a7bef4517af8 = $this->env->getExtension("native_profiler");
        $__internal_7b10742b9f609d2084e271268f341904428faee4c36cc2378cb7a7bef4517af8->enter($__internal_7b10742b9f609d2084e271268f341904428faee4c36cc2378cb7a7bef4517af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7b10742b9f609d2084e271268f341904428faee4c36cc2378cb7a7bef4517af8->leave($__internal_7b10742b9f609d2084e271268f341904428faee4c36cc2378cb7a7bef4517af8_prof);

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
