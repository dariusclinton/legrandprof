<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_8b84f0700c87a209d9b14409797815b33132862e9bdb6b9ce0e384f9eefb7840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_402a10f522b4e57cc1f4bd10dbce7b0e8d9e75ed4027ee2fd6b4f51589cb0c3b = $this->env->getExtension("native_profiler");
        $__internal_402a10f522b4e57cc1f4bd10dbce7b0e8d9e75ed4027ee2fd6b4f51589cb0c3b->enter($__internal_402a10f522b4e57cc1f4bd10dbce7b0e8d9e75ed4027ee2fd6b4f51589cb0c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_402a10f522b4e57cc1f4bd10dbce7b0e8d9e75ed4027ee2fd6b4f51589cb0c3b->leave($__internal_402a10f522b4e57cc1f4bd10dbce7b0e8d9e75ed4027ee2fd6b4f51589cb0c3b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe20e3ba9410a319a1217f67be4b9d649f91cc7b061d46b87f6bd9e1670f226e = $this->env->getExtension("native_profiler");
        $__internal_fe20e3ba9410a319a1217f67be4b9d649f91cc7b061d46b87f6bd9e1670f226e->enter($__internal_fe20e3ba9410a319a1217f67be4b9d649f91cc7b061d46b87f6bd9e1670f226e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fe20e3ba9410a319a1217f67be4b9d649f91cc7b061d46b87f6bd9e1670f226e->leave($__internal_fe20e3ba9410a319a1217f67be4b9d649f91cc7b061d46b87f6bd9e1670f226e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
