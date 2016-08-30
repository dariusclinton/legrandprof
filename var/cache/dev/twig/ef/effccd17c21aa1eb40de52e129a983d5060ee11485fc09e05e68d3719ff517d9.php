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
        $__internal_01ffd390324a47618a8b9662fcf915b77414f6f3116a78b52c1572c1eac1a1af = $this->env->getExtension("native_profiler");
        $__internal_01ffd390324a47618a8b9662fcf915b77414f6f3116a78b52c1572c1eac1a1af->enter($__internal_01ffd390324a47618a8b9662fcf915b77414f6f3116a78b52c1572c1eac1a1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01ffd390324a47618a8b9662fcf915b77414f6f3116a78b52c1572c1eac1a1af->leave($__internal_01ffd390324a47618a8b9662fcf915b77414f6f3116a78b52c1572c1eac1a1af_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e699bbb99312208ed5ba03df8e1d3eb59aa6376056de7798ced2ff7b6960cc6c = $this->env->getExtension("native_profiler");
        $__internal_e699bbb99312208ed5ba03df8e1d3eb59aa6376056de7798ced2ff7b6960cc6c->enter($__internal_e699bbb99312208ed5ba03df8e1d3eb59aa6376056de7798ced2ff7b6960cc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_e699bbb99312208ed5ba03df8e1d3eb59aa6376056de7798ced2ff7b6960cc6c->leave($__internal_e699bbb99312208ed5ba03df8e1d3eb59aa6376056de7798ced2ff7b6960cc6c_prof);

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
