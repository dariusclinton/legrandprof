<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1d5eba1ba4d69b655a865364eaf37379d4e5772c785ba4964f0dd300e497ad8e = $this->env->getExtension("native_profiler");
        $__internal_1d5eba1ba4d69b655a865364eaf37379d4e5772c785ba4964f0dd300e497ad8e->enter($__internal_1d5eba1ba4d69b655a865364eaf37379d4e5772c785ba4964f0dd300e497ad8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5eba1ba4d69b655a865364eaf37379d4e5772c785ba4964f0dd300e497ad8e->leave($__internal_1d5eba1ba4d69b655a865364eaf37379d4e5772c785ba4964f0dd300e497ad8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fc695f90975e7080563ec8c9f6bdc340e9b2e4bcda23b7b48661121ffa469c6 = $this->env->getExtension("native_profiler");
        $__internal_8fc695f90975e7080563ec8c9f6bdc340e9b2e4bcda23b7b48661121ffa469c6->enter($__internal_8fc695f90975e7080563ec8c9f6bdc340e9b2e4bcda23b7b48661121ffa469c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8fc695f90975e7080563ec8c9f6bdc340e9b2e4bcda23b7b48661121ffa469c6->leave($__internal_8fc695f90975e7080563ec8c9f6bdc340e9b2e4bcda23b7b48661121ffa469c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
