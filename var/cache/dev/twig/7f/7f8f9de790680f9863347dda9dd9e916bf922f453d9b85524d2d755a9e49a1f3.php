<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a9726e6d020e42e487c531aea7c293bf9878ac3d55d1fba467f08e4b556d14a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e7776a30d6ca9b06238264db4171247b99e054e25e5f20fe2b0ee33287b245bb = $this->env->getExtension("native_profiler");
        $__internal_e7776a30d6ca9b06238264db4171247b99e054e25e5f20fe2b0ee33287b245bb->enter($__internal_e7776a30d6ca9b06238264db4171247b99e054e25e5f20fe2b0ee33287b245bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7776a30d6ca9b06238264db4171247b99e054e25e5f20fe2b0ee33287b245bb->leave($__internal_e7776a30d6ca9b06238264db4171247b99e054e25e5f20fe2b0ee33287b245bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e040a74a0e395b9804a72133b0bdf2ccbf1e98691d34ea457475cc53c050256 = $this->env->getExtension("native_profiler");
        $__internal_8e040a74a0e395b9804a72133b0bdf2ccbf1e98691d34ea457475cc53c050256->enter($__internal_8e040a74a0e395b9804a72133b0bdf2ccbf1e98691d34ea457475cc53c050256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8e040a74a0e395b9804a72133b0bdf2ccbf1e98691d34ea457475cc53c050256->leave($__internal_8e040a74a0e395b9804a72133b0bdf2ccbf1e98691d34ea457475cc53c050256_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
