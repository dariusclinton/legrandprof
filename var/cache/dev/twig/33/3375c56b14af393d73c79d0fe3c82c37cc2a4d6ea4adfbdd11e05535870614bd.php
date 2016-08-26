<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_5cbe8760f0a86cb56860408594f9a76725c90852fe1fa79ae9990062fad78e5c = $this->env->getExtension("native_profiler");
        $__internal_5cbe8760f0a86cb56860408594f9a76725c90852fe1fa79ae9990062fad78e5c->enter($__internal_5cbe8760f0a86cb56860408594f9a76725c90852fe1fa79ae9990062fad78e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cbe8760f0a86cb56860408594f9a76725c90852fe1fa79ae9990062fad78e5c->leave($__internal_5cbe8760f0a86cb56860408594f9a76725c90852fe1fa79ae9990062fad78e5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d1d61366ee7bf1d926b830bbc22deaa02ce1e0a7aefcd09ca84c99b3e422a00 = $this->env->getExtension("native_profiler");
        $__internal_6d1d61366ee7bf1d926b830bbc22deaa02ce1e0a7aefcd09ca84c99b3e422a00->enter($__internal_6d1d61366ee7bf1d926b830bbc22deaa02ce1e0a7aefcd09ca84c99b3e422a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_6d1d61366ee7bf1d926b830bbc22deaa02ce1e0a7aefcd09ca84c99b3e422a00->leave($__internal_6d1d61366ee7bf1d926b830bbc22deaa02ce1e0a7aefcd09ca84c99b3e422a00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
