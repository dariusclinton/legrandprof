<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6e65b62ede2bb5764409f4dbbc5c6c5845b409605ca8acd8cbefe76fa64afda8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_9f5b9d32b9e9ad42607044656bcce9370f2c0575ab63d83ca06e15f1f58a1f0d = $this->env->getExtension("native_profiler");
        $__internal_9f5b9d32b9e9ad42607044656bcce9370f2c0575ab63d83ca06e15f1f58a1f0d->enter($__internal_9f5b9d32b9e9ad42607044656bcce9370f2c0575ab63d83ca06e15f1f58a1f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5b9d32b9e9ad42607044656bcce9370f2c0575ab63d83ca06e15f1f58a1f0d->leave($__internal_9f5b9d32b9e9ad42607044656bcce9370f2c0575ab63d83ca06e15f1f58a1f0d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c366edca6524fb1d2a39455c5f22cfa288888b97e09a5a29cc97e7e1852ef30 = $this->env->getExtension("native_profiler");
        $__internal_2c366edca6524fb1d2a39455c5f22cfa288888b97e09a5a29cc97e7e1852ef30->enter($__internal_2c366edca6524fb1d2a39455c5f22cfa288888b97e09a5a29cc97e7e1852ef30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2c366edca6524fb1d2a39455c5f22cfa288888b97e09a5a29cc97e7e1852ef30->leave($__internal_2c366edca6524fb1d2a39455c5f22cfa288888b97e09a5a29cc97e7e1852ef30_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
