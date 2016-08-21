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
        $__internal_9e49e5ac231a3ca7518a59689c87b474f9418ca703f15144519a1e2fc6dfcab1 = $this->env->getExtension("native_profiler");
        $__internal_9e49e5ac231a3ca7518a59689c87b474f9418ca703f15144519a1e2fc6dfcab1->enter($__internal_9e49e5ac231a3ca7518a59689c87b474f9418ca703f15144519a1e2fc6dfcab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e49e5ac231a3ca7518a59689c87b474f9418ca703f15144519a1e2fc6dfcab1->leave($__internal_9e49e5ac231a3ca7518a59689c87b474f9418ca703f15144519a1e2fc6dfcab1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b150f1e94e5f0fac675e8b4802eab6a9d96dc530fad2c2605127abbeeaebd883 = $this->env->getExtension("native_profiler");
        $__internal_b150f1e94e5f0fac675e8b4802eab6a9d96dc530fad2c2605127abbeeaebd883->enter($__internal_b150f1e94e5f0fac675e8b4802eab6a9d96dc530fad2c2605127abbeeaebd883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b150f1e94e5f0fac675e8b4802eab6a9d96dc530fad2c2605127abbeeaebd883->leave($__internal_b150f1e94e5f0fac675e8b4802eab6a9d96dc530fad2c2605127abbeeaebd883_prof);

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
