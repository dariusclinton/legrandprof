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
        $__internal_a82c6b49d9045eb05bab0f88b47dccba39ce49eaa2e31352db7b39a406e5363e = $this->env->getExtension("native_profiler");
        $__internal_a82c6b49d9045eb05bab0f88b47dccba39ce49eaa2e31352db7b39a406e5363e->enter($__internal_a82c6b49d9045eb05bab0f88b47dccba39ce49eaa2e31352db7b39a406e5363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82c6b49d9045eb05bab0f88b47dccba39ce49eaa2e31352db7b39a406e5363e->leave($__internal_a82c6b49d9045eb05bab0f88b47dccba39ce49eaa2e31352db7b39a406e5363e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_833ac286e8727d87f4e1e07c4c1a416277bcaf1e63cc26a8397ef2370ece8f99 = $this->env->getExtension("native_profiler");
        $__internal_833ac286e8727d87f4e1e07c4c1a416277bcaf1e63cc26a8397ef2370ece8f99->enter($__internal_833ac286e8727d87f4e1e07c4c1a416277bcaf1e63cc26a8397ef2370ece8f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_833ac286e8727d87f4e1e07c4c1a416277bcaf1e63cc26a8397ef2370ece8f99->leave($__internal_833ac286e8727d87f4e1e07c4c1a416277bcaf1e63cc26a8397ef2370ece8f99_prof);

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
