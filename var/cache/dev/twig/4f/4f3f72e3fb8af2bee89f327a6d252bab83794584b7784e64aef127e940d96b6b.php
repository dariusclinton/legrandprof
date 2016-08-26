<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_86a935adb1bdc7f5667babde57bac0c8d0799aa6e744917caae4b9314b8784ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_6587f35ef9c2222f3c778631f545e200fe1a8218d397511366866107d89cb145 = $this->env->getExtension("native_profiler");
        $__internal_6587f35ef9c2222f3c778631f545e200fe1a8218d397511366866107d89cb145->enter($__internal_6587f35ef9c2222f3c778631f545e200fe1a8218d397511366866107d89cb145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6587f35ef9c2222f3c778631f545e200fe1a8218d397511366866107d89cb145->leave($__internal_6587f35ef9c2222f3c778631f545e200fe1a8218d397511366866107d89cb145_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be575374bb1fb6d2a44aa11e39fe1744db51b090307acff6d89ea8a1480944d8 = $this->env->getExtension("native_profiler");
        $__internal_be575374bb1fb6d2a44aa11e39fe1744db51b090307acff6d89ea8a1480944d8->enter($__internal_be575374bb1fb6d2a44aa11e39fe1744db51b090307acff6d89ea8a1480944d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_be575374bb1fb6d2a44aa11e39fe1744db51b090307acff6d89ea8a1480944d8->leave($__internal_be575374bb1fb6d2a44aa11e39fe1744db51b090307acff6d89ea8a1480944d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
