<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eea506abac938b2bc1f83b35652d5b8de17b3a9d5efca398d2b7637fe6d56355 = $this->env->getExtension("native_profiler");
        $__internal_eea506abac938b2bc1f83b35652d5b8de17b3a9d5efca398d2b7637fe6d56355->enter($__internal_eea506abac938b2bc1f83b35652d5b8de17b3a9d5efca398d2b7637fe6d56355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea506abac938b2bc1f83b35652d5b8de17b3a9d5efca398d2b7637fe6d56355->leave($__internal_eea506abac938b2bc1f83b35652d5b8de17b3a9d5efca398d2b7637fe6d56355_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d9d45073c0fdb3b517c565e15cf7170b0752732d09a26d506e480e605f25544 = $this->env->getExtension("native_profiler");
        $__internal_9d9d45073c0fdb3b517c565e15cf7170b0752732d09a26d506e480e605f25544->enter($__internal_9d9d45073c0fdb3b517c565e15cf7170b0752732d09a26d506e480e605f25544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_9d9d45073c0fdb3b517c565e15cf7170b0752732d09a26d506e480e605f25544->leave($__internal_9d9d45073c0fdb3b517c565e15cf7170b0752732d09a26d506e480e605f25544_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
