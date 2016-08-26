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
        $__internal_bca0be1cd8ba32b472e53bb7d9774ce9c28f7ca81961ae54a6d1b3f0727ec93d = $this->env->getExtension("native_profiler");
        $__internal_bca0be1cd8ba32b472e53bb7d9774ce9c28f7ca81961ae54a6d1b3f0727ec93d->enter($__internal_bca0be1cd8ba32b472e53bb7d9774ce9c28f7ca81961ae54a6d1b3f0727ec93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bca0be1cd8ba32b472e53bb7d9774ce9c28f7ca81961ae54a6d1b3f0727ec93d->leave($__internal_bca0be1cd8ba32b472e53bb7d9774ce9c28f7ca81961ae54a6d1b3f0727ec93d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f93d5a3d2256d314b88b30045b1036ee9a730136bfe669b04472b0d64b57f2f7 = $this->env->getExtension("native_profiler");
        $__internal_f93d5a3d2256d314b88b30045b1036ee9a730136bfe669b04472b0d64b57f2f7->enter($__internal_f93d5a3d2256d314b88b30045b1036ee9a730136bfe669b04472b0d64b57f2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f93d5a3d2256d314b88b30045b1036ee9a730136bfe669b04472b0d64b57f2f7->leave($__internal_f93d5a3d2256d314b88b30045b1036ee9a730136bfe669b04472b0d64b57f2f7_prof);

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
