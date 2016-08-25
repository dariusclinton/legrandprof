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
        $__internal_76c74d07d626bb34bc5ed074e4fe1c5911446fe9dd60d297fc6465b8e9a4e4b0 = $this->env->getExtension("native_profiler");
        $__internal_76c74d07d626bb34bc5ed074e4fe1c5911446fe9dd60d297fc6465b8e9a4e4b0->enter($__internal_76c74d07d626bb34bc5ed074e4fe1c5911446fe9dd60d297fc6465b8e9a4e4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76c74d07d626bb34bc5ed074e4fe1c5911446fe9dd60d297fc6465b8e9a4e4b0->leave($__internal_76c74d07d626bb34bc5ed074e4fe1c5911446fe9dd60d297fc6465b8e9a4e4b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1866636367a7483058ee6c847b8fb52dfad32b9af86100972ae4e7484b4a3dd = $this->env->getExtension("native_profiler");
        $__internal_a1866636367a7483058ee6c847b8fb52dfad32b9af86100972ae4e7484b4a3dd->enter($__internal_a1866636367a7483058ee6c847b8fb52dfad32b9af86100972ae4e7484b4a3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a1866636367a7483058ee6c847b8fb52dfad32b9af86100972ae4e7484b4a3dd->leave($__internal_a1866636367a7483058ee6c847b8fb52dfad32b9af86100972ae4e7484b4a3dd_prof);

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
