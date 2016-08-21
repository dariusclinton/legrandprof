<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_65bf60ec878b87bf7aa5bd6fc1e5adfda07d0a44e500f8e95091af386b0d1be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d1ba47461afdd97900a0f82bdb2ed417beb791aa0acede2c2e4684b253924c0e = $this->env->getExtension("native_profiler");
        $__internal_d1ba47461afdd97900a0f82bdb2ed417beb791aa0acede2c2e4684b253924c0e->enter($__internal_d1ba47461afdd97900a0f82bdb2ed417beb791aa0acede2c2e4684b253924c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ba47461afdd97900a0f82bdb2ed417beb791aa0acede2c2e4684b253924c0e->leave($__internal_d1ba47461afdd97900a0f82bdb2ed417beb791aa0acede2c2e4684b253924c0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62d3fc82a0c8db6c0aba4516dd2a5b62c4cea62ccb0e773aafa33c2d147e22eb = $this->env->getExtension("native_profiler");
        $__internal_62d3fc82a0c8db6c0aba4516dd2a5b62c4cea62ccb0e773aafa33c2d147e22eb->enter($__internal_62d3fc82a0c8db6c0aba4516dd2a5b62c4cea62ccb0e773aafa33c2d147e22eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_62d3fc82a0c8db6c0aba4516dd2a5b62c4cea62ccb0e773aafa33c2d147e22eb->leave($__internal_62d3fc82a0c8db6c0aba4516dd2a5b62c4cea62ccb0e773aafa33c2d147e22eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
