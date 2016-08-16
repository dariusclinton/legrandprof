<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea1010ea581a864e9fe1aa0bc32435a0fdaa2da2559efa6e1c104ca220be309e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c93016fa4be7514664738b57a13eb7f9cc84c8f45fcb62ebf6646c6ebf773d11 = $this->env->getExtension("native_profiler");
        $__internal_c93016fa4be7514664738b57a13eb7f9cc84c8f45fcb62ebf6646c6ebf773d11->enter($__internal_c93016fa4be7514664738b57a13eb7f9cc84c8f45fcb62ebf6646c6ebf773d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c93016fa4be7514664738b57a13eb7f9cc84c8f45fcb62ebf6646c6ebf773d11->leave($__internal_c93016fa4be7514664738b57a13eb7f9cc84c8f45fcb62ebf6646c6ebf773d11_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c2556be530081880b59d665814d446ba0a7b839cdb42730f9c017ccd8e03d8d = $this->env->getExtension("native_profiler");
        $__internal_8c2556be530081880b59d665814d446ba0a7b839cdb42730f9c017ccd8e03d8d->enter($__internal_8c2556be530081880b59d665814d446ba0a7b839cdb42730f9c017ccd8e03d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8c2556be530081880b59d665814d446ba0a7b839cdb42730f9c017ccd8e03d8d->leave($__internal_8c2556be530081880b59d665814d446ba0a7b839cdb42730f9c017ccd8e03d8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
