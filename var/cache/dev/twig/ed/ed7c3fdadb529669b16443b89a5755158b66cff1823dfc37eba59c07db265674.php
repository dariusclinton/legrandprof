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
        $__internal_2696a5b308faaa02bd619e8bdca1ea2e3312fbbfea5a5139f7cd31caf8ce8821 = $this->env->getExtension("native_profiler");
        $__internal_2696a5b308faaa02bd619e8bdca1ea2e3312fbbfea5a5139f7cd31caf8ce8821->enter($__internal_2696a5b308faaa02bd619e8bdca1ea2e3312fbbfea5a5139f7cd31caf8ce8821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2696a5b308faaa02bd619e8bdca1ea2e3312fbbfea5a5139f7cd31caf8ce8821->leave($__internal_2696a5b308faaa02bd619e8bdca1ea2e3312fbbfea5a5139f7cd31caf8ce8821_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e7253769a2cf8d657781411f83f97337bbb2d899cfe054effb16c30a6c5d002 = $this->env->getExtension("native_profiler");
        $__internal_6e7253769a2cf8d657781411f83f97337bbb2d899cfe054effb16c30a6c5d002->enter($__internal_6e7253769a2cf8d657781411f83f97337bbb2d899cfe054effb16c30a6c5d002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6e7253769a2cf8d657781411f83f97337bbb2d899cfe054effb16c30a6c5d002->leave($__internal_6e7253769a2cf8d657781411f83f97337bbb2d899cfe054effb16c30a6c5d002_prof);

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
