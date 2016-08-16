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
        $__internal_e8d2c84c5f31b3b8b50d9f914e939005557564611d092edbb9cfff04ecf74297 = $this->env->getExtension("native_profiler");
        $__internal_e8d2c84c5f31b3b8b50d9f914e939005557564611d092edbb9cfff04ecf74297->enter($__internal_e8d2c84c5f31b3b8b50d9f914e939005557564611d092edbb9cfff04ecf74297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d2c84c5f31b3b8b50d9f914e939005557564611d092edbb9cfff04ecf74297->leave($__internal_e8d2c84c5f31b3b8b50d9f914e939005557564611d092edbb9cfff04ecf74297_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_144f2c5569d37b2a2109f48c8892462d5c017e7cc3b35577a31c1c70c0703e3d = $this->env->getExtension("native_profiler");
        $__internal_144f2c5569d37b2a2109f48c8892462d5c017e7cc3b35577a31c1c70c0703e3d->enter($__internal_144f2c5569d37b2a2109f48c8892462d5c017e7cc3b35577a31c1c70c0703e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_144f2c5569d37b2a2109f48c8892462d5c017e7cc3b35577a31c1c70c0703e3d->leave($__internal_144f2c5569d37b2a2109f48c8892462d5c017e7cc3b35577a31c1c70c0703e3d_prof);

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
