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
        $__internal_64d3b90beb82c1b0f2ba396b670ae665de3c75dda4e0e94cdf6bcc554f9502e4 = $this->env->getExtension("native_profiler");
        $__internal_64d3b90beb82c1b0f2ba396b670ae665de3c75dda4e0e94cdf6bcc554f9502e4->enter($__internal_64d3b90beb82c1b0f2ba396b670ae665de3c75dda4e0e94cdf6bcc554f9502e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d3b90beb82c1b0f2ba396b670ae665de3c75dda4e0e94cdf6bcc554f9502e4->leave($__internal_64d3b90beb82c1b0f2ba396b670ae665de3c75dda4e0e94cdf6bcc554f9502e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26ab47be8f37d64bac2a7bbc3da9f206d75cee6e53cd6c021604c8b0d68ba11a = $this->env->getExtension("native_profiler");
        $__internal_26ab47be8f37d64bac2a7bbc3da9f206d75cee6e53cd6c021604c8b0d68ba11a->enter($__internal_26ab47be8f37d64bac2a7bbc3da9f206d75cee6e53cd6c021604c8b0d68ba11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_26ab47be8f37d64bac2a7bbc3da9f206d75cee6e53cd6c021604c8b0d68ba11a->leave($__internal_26ab47be8f37d64bac2a7bbc3da9f206d75cee6e53cd6c021604c8b0d68ba11a_prof);

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
