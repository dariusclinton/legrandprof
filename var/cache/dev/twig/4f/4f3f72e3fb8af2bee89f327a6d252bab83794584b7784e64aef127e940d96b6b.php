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
        $__internal_4951c3db60621f396b452f5ab3f05b1dbee7170b99a9aca4b36e6be09313d0f1 = $this->env->getExtension("native_profiler");
        $__internal_4951c3db60621f396b452f5ab3f05b1dbee7170b99a9aca4b36e6be09313d0f1->enter($__internal_4951c3db60621f396b452f5ab3f05b1dbee7170b99a9aca4b36e6be09313d0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4951c3db60621f396b452f5ab3f05b1dbee7170b99a9aca4b36e6be09313d0f1->leave($__internal_4951c3db60621f396b452f5ab3f05b1dbee7170b99a9aca4b36e6be09313d0f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea35191b15d3b93fa9e4f62e81507d72835fb3f9b01f443b42148bd2314f3dae = $this->env->getExtension("native_profiler");
        $__internal_ea35191b15d3b93fa9e4f62e81507d72835fb3f9b01f443b42148bd2314f3dae->enter($__internal_ea35191b15d3b93fa9e4f62e81507d72835fb3f9b01f443b42148bd2314f3dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ea35191b15d3b93fa9e4f62e81507d72835fb3f9b01f443b42148bd2314f3dae->leave($__internal_ea35191b15d3b93fa9e4f62e81507d72835fb3f9b01f443b42148bd2314f3dae_prof);

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
