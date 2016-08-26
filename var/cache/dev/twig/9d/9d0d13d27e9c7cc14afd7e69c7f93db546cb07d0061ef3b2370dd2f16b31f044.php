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
        $__internal_d9a3e0858271f360720c363160ca6a4cc1070fc079c776384590193c8546c5f7 = $this->env->getExtension("native_profiler");
        $__internal_d9a3e0858271f360720c363160ca6a4cc1070fc079c776384590193c8546c5f7->enter($__internal_d9a3e0858271f360720c363160ca6a4cc1070fc079c776384590193c8546c5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a3e0858271f360720c363160ca6a4cc1070fc079c776384590193c8546c5f7->leave($__internal_d9a3e0858271f360720c363160ca6a4cc1070fc079c776384590193c8546c5f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f111e3f382d86cd3fffb3804e8f6af9e76ca03739de17b3506ae3b12e1655cb4 = $this->env->getExtension("native_profiler");
        $__internal_f111e3f382d86cd3fffb3804e8f6af9e76ca03739de17b3506ae3b12e1655cb4->enter($__internal_f111e3f382d86cd3fffb3804e8f6af9e76ca03739de17b3506ae3b12e1655cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_f111e3f382d86cd3fffb3804e8f6af9e76ca03739de17b3506ae3b12e1655cb4->leave($__internal_f111e3f382d86cd3fffb3804e8f6af9e76ca03739de17b3506ae3b12e1655cb4_prof);

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
