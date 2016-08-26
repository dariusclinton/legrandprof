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
        $__internal_5e5f144ae40289441de14d662f8952a768c7ff1594cb4339cf0f41db95c51814 = $this->env->getExtension("native_profiler");
        $__internal_5e5f144ae40289441de14d662f8952a768c7ff1594cb4339cf0f41db95c51814->enter($__internal_5e5f144ae40289441de14d662f8952a768c7ff1594cb4339cf0f41db95c51814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5f144ae40289441de14d662f8952a768c7ff1594cb4339cf0f41db95c51814->leave($__internal_5e5f144ae40289441de14d662f8952a768c7ff1594cb4339cf0f41db95c51814_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60885151af17598be5af0e3fb7d9b37db66939ec0a84ee6361d90396e0bf1b2e = $this->env->getExtension("native_profiler");
        $__internal_60885151af17598be5af0e3fb7d9b37db66939ec0a84ee6361d90396e0bf1b2e->enter($__internal_60885151af17598be5af0e3fb7d9b37db66939ec0a84ee6361d90396e0bf1b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_60885151af17598be5af0e3fb7d9b37db66939ec0a84ee6361d90396e0bf1b2e->leave($__internal_60885151af17598be5af0e3fb7d9b37db66939ec0a84ee6361d90396e0bf1b2e_prof);

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
