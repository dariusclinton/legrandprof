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
        $__internal_12ded5a9d76d838453e56d94acac364de81dd872951cd42d86e0699554a410ad = $this->env->getExtension("native_profiler");
        $__internal_12ded5a9d76d838453e56d94acac364de81dd872951cd42d86e0699554a410ad->enter($__internal_12ded5a9d76d838453e56d94acac364de81dd872951cd42d86e0699554a410ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ded5a9d76d838453e56d94acac364de81dd872951cd42d86e0699554a410ad->leave($__internal_12ded5a9d76d838453e56d94acac364de81dd872951cd42d86e0699554a410ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20626eaa13208dbfe6b2c9f879231a4c5d746e60d71cbb870e8ff268c36f86bf = $this->env->getExtension("native_profiler");
        $__internal_20626eaa13208dbfe6b2c9f879231a4c5d746e60d71cbb870e8ff268c36f86bf->enter($__internal_20626eaa13208dbfe6b2c9f879231a4c5d746e60d71cbb870e8ff268c36f86bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_20626eaa13208dbfe6b2c9f879231a4c5d746e60d71cbb870e8ff268c36f86bf->leave($__internal_20626eaa13208dbfe6b2c9f879231a4c5d746e60d71cbb870e8ff268c36f86bf_prof);

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
