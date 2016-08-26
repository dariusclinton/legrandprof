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
        $__internal_f6d2618111b18de13c1253e922b8db88309dabf84abcecf4c9f69c21cd54605d = $this->env->getExtension("native_profiler");
        $__internal_f6d2618111b18de13c1253e922b8db88309dabf84abcecf4c9f69c21cd54605d->enter($__internal_f6d2618111b18de13c1253e922b8db88309dabf84abcecf4c9f69c21cd54605d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d2618111b18de13c1253e922b8db88309dabf84abcecf4c9f69c21cd54605d->leave($__internal_f6d2618111b18de13c1253e922b8db88309dabf84abcecf4c9f69c21cd54605d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc834e105475e3e6404b86a63ee4c5b4cd281a18128197d3578ffded06542b4b = $this->env->getExtension("native_profiler");
        $__internal_dc834e105475e3e6404b86a63ee4c5b4cd281a18128197d3578ffded06542b4b->enter($__internal_dc834e105475e3e6404b86a63ee4c5b4cd281a18128197d3578ffded06542b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_dc834e105475e3e6404b86a63ee4c5b4cd281a18128197d3578ffded06542b4b->leave($__internal_dc834e105475e3e6404b86a63ee4c5b4cd281a18128197d3578ffded06542b4b_prof);

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
