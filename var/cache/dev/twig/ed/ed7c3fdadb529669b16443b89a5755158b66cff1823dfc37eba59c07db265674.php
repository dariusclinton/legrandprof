<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be1e132bae8340ed2a0182bfd29fdc26ce89f6f4aa09f54257e84ea80981a725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a272efad511702551a733e7d127c943aa44000e169b411ffbae714d94d529325 = $this->env->getExtension("native_profiler");
        $__internal_a272efad511702551a733e7d127c943aa44000e169b411ffbae714d94d529325->enter($__internal_a272efad511702551a733e7d127c943aa44000e169b411ffbae714d94d529325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a272efad511702551a733e7d127c943aa44000e169b411ffbae714d94d529325->leave($__internal_a272efad511702551a733e7d127c943aa44000e169b411ffbae714d94d529325_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70dce78de83250a4f04a9a187b5910d1e047d177c88ba96932e1067c3cba617f = $this->env->getExtension("native_profiler");
        $__internal_70dce78de83250a4f04a9a187b5910d1e047d177c88ba96932e1067c3cba617f->enter($__internal_70dce78de83250a4f04a9a187b5910d1e047d177c88ba96932e1067c3cba617f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_70dce78de83250a4f04a9a187b5910d1e047d177c88ba96932e1067c3cba617f->leave($__internal_70dce78de83250a4f04a9a187b5910d1e047d177c88ba96932e1067c3cba617f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
