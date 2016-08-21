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
        $__internal_3c00b6d044d18158b91d606b84cbd5da36a77694d215ac58a176373fd6bc41a5 = $this->env->getExtension("native_profiler");
        $__internal_3c00b6d044d18158b91d606b84cbd5da36a77694d215ac58a176373fd6bc41a5->enter($__internal_3c00b6d044d18158b91d606b84cbd5da36a77694d215ac58a176373fd6bc41a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c00b6d044d18158b91d606b84cbd5da36a77694d215ac58a176373fd6bc41a5->leave($__internal_3c00b6d044d18158b91d606b84cbd5da36a77694d215ac58a176373fd6bc41a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e4613e457dd2080cbfd1dbdd9ad497096e4e610baf79eedd44a4de96684b903 = $this->env->getExtension("native_profiler");
        $__internal_1e4613e457dd2080cbfd1dbdd9ad497096e4e610baf79eedd44a4de96684b903->enter($__internal_1e4613e457dd2080cbfd1dbdd9ad497096e4e610baf79eedd44a4de96684b903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_1e4613e457dd2080cbfd1dbdd9ad497096e4e610baf79eedd44a4de96684b903->leave($__internal_1e4613e457dd2080cbfd1dbdd9ad497096e4e610baf79eedd44a4de96684b903_prof);

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
