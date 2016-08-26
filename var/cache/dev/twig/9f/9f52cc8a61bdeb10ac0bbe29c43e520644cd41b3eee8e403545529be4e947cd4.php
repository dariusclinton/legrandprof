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
        $__internal_975fec1809884f07f2f6e53cf72658ee096d76e29d1473c644aaf83ee67841a3 = $this->env->getExtension("native_profiler");
        $__internal_975fec1809884f07f2f6e53cf72658ee096d76e29d1473c644aaf83ee67841a3->enter($__internal_975fec1809884f07f2f6e53cf72658ee096d76e29d1473c644aaf83ee67841a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975fec1809884f07f2f6e53cf72658ee096d76e29d1473c644aaf83ee67841a3->leave($__internal_975fec1809884f07f2f6e53cf72658ee096d76e29d1473c644aaf83ee67841a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afda3e2d097eae4ea4cd5f13f190df122da0ea3db8007c3f73c1ee1d22a22d64 = $this->env->getExtension("native_profiler");
        $__internal_afda3e2d097eae4ea4cd5f13f190df122da0ea3db8007c3f73c1ee1d22a22d64->enter($__internal_afda3e2d097eae4ea4cd5f13f190df122da0ea3db8007c3f73c1ee1d22a22d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_afda3e2d097eae4ea4cd5f13f190df122da0ea3db8007c3f73c1ee1d22a22d64->leave($__internal_afda3e2d097eae4ea4cd5f13f190df122da0ea3db8007c3f73c1ee1d22a22d64_prof);

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
