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
        $__internal_9663b82356a687e69db528548ca89c2fede95c3c8773fad0dec7d12e141bd77e = $this->env->getExtension("native_profiler");
        $__internal_9663b82356a687e69db528548ca89c2fede95c3c8773fad0dec7d12e141bd77e->enter($__internal_9663b82356a687e69db528548ca89c2fede95c3c8773fad0dec7d12e141bd77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9663b82356a687e69db528548ca89c2fede95c3c8773fad0dec7d12e141bd77e->leave($__internal_9663b82356a687e69db528548ca89c2fede95c3c8773fad0dec7d12e141bd77e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a10daa892a8252e4b04744c43cf213f43c75a7f49135aa6c1b5bdb1e9367a634 = $this->env->getExtension("native_profiler");
        $__internal_a10daa892a8252e4b04744c43cf213f43c75a7f49135aa6c1b5bdb1e9367a634->enter($__internal_a10daa892a8252e4b04744c43cf213f43c75a7f49135aa6c1b5bdb1e9367a634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a10daa892a8252e4b04744c43cf213f43c75a7f49135aa6c1b5bdb1e9367a634->leave($__internal_a10daa892a8252e4b04744c43cf213f43c75a7f49135aa6c1b5bdb1e9367a634_prof);

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
