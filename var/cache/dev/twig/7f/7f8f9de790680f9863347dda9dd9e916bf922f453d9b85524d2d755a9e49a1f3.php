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
        $__internal_15e2871e207c867544300f8f965a250a3d34bcf9220619e0a029e7a496e3beea = $this->env->getExtension("native_profiler");
        $__internal_15e2871e207c867544300f8f965a250a3d34bcf9220619e0a029e7a496e3beea->enter($__internal_15e2871e207c867544300f8f965a250a3d34bcf9220619e0a029e7a496e3beea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e2871e207c867544300f8f965a250a3d34bcf9220619e0a029e7a496e3beea->leave($__internal_15e2871e207c867544300f8f965a250a3d34bcf9220619e0a029e7a496e3beea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30d8723f5b713e8a51fd9c80d9d137793055ab67beb26cd41570c8759d0b022c = $this->env->getExtension("native_profiler");
        $__internal_30d8723f5b713e8a51fd9c80d9d137793055ab67beb26cd41570c8759d0b022c->enter($__internal_30d8723f5b713e8a51fd9c80d9d137793055ab67beb26cd41570c8759d0b022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_30d8723f5b713e8a51fd9c80d9d137793055ab67beb26cd41570c8759d0b022c->leave($__internal_30d8723f5b713e8a51fd9c80d9d137793055ab67beb26cd41570c8759d0b022c_prof);

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
