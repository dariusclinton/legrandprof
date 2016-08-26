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
        $__internal_d84b6aa2ed55dc2a4eeb5db200d80da3528a233ea1c1c6fd81f3e433d151dce5 = $this->env->getExtension("native_profiler");
        $__internal_d84b6aa2ed55dc2a4eeb5db200d80da3528a233ea1c1c6fd81f3e433d151dce5->enter($__internal_d84b6aa2ed55dc2a4eeb5db200d80da3528a233ea1c1c6fd81f3e433d151dce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d84b6aa2ed55dc2a4eeb5db200d80da3528a233ea1c1c6fd81f3e433d151dce5->leave($__internal_d84b6aa2ed55dc2a4eeb5db200d80da3528a233ea1c1c6fd81f3e433d151dce5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21c2f3a2f8d4cff4a2029f5f5b551f6ee4aecc9ce301b9b26c25e3551c7878dd = $this->env->getExtension("native_profiler");
        $__internal_21c2f3a2f8d4cff4a2029f5f5b551f6ee4aecc9ce301b9b26c25e3551c7878dd->enter($__internal_21c2f3a2f8d4cff4a2029f5f5b551f6ee4aecc9ce301b9b26c25e3551c7878dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_21c2f3a2f8d4cff4a2029f5f5b551f6ee4aecc9ce301b9b26c25e3551c7878dd->leave($__internal_21c2f3a2f8d4cff4a2029f5f5b551f6ee4aecc9ce301b9b26c25e3551c7878dd_prof);

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
