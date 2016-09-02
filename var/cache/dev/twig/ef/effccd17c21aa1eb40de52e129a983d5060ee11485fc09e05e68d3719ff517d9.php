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
        $__internal_85f3f3c13b286166bdbacc9bb6bfc8a05bbab7017dbd05b4fe84ce6eec763ba1 = $this->env->getExtension("native_profiler");
        $__internal_85f3f3c13b286166bdbacc9bb6bfc8a05bbab7017dbd05b4fe84ce6eec763ba1->enter($__internal_85f3f3c13b286166bdbacc9bb6bfc8a05bbab7017dbd05b4fe84ce6eec763ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85f3f3c13b286166bdbacc9bb6bfc8a05bbab7017dbd05b4fe84ce6eec763ba1->leave($__internal_85f3f3c13b286166bdbacc9bb6bfc8a05bbab7017dbd05b4fe84ce6eec763ba1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c2157a51c6b310f83d62d446ee6bf83facd5f11ab174f0ab7b1c0ee9376dbdc = $this->env->getExtension("native_profiler");
        $__internal_2c2157a51c6b310f83d62d446ee6bf83facd5f11ab174f0ab7b1c0ee9376dbdc->enter($__internal_2c2157a51c6b310f83d62d446ee6bf83facd5f11ab174f0ab7b1c0ee9376dbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_2c2157a51c6b310f83d62d446ee6bf83facd5f11ab174f0ab7b1c0ee9376dbdc->leave($__internal_2c2157a51c6b310f83d62d446ee6bf83facd5f11ab174f0ab7b1c0ee9376dbdc_prof);

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
