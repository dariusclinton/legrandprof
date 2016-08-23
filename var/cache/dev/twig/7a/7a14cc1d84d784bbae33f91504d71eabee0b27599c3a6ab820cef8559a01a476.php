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
        $__internal_c54d604f391c7d49dd303aac2c74c40a4dedbb7b2d606a4986b60a41f6fcb595 = $this->env->getExtension("native_profiler");
        $__internal_c54d604f391c7d49dd303aac2c74c40a4dedbb7b2d606a4986b60a41f6fcb595->enter($__internal_c54d604f391c7d49dd303aac2c74c40a4dedbb7b2d606a4986b60a41f6fcb595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c54d604f391c7d49dd303aac2c74c40a4dedbb7b2d606a4986b60a41f6fcb595->leave($__internal_c54d604f391c7d49dd303aac2c74c40a4dedbb7b2d606a4986b60a41f6fcb595_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_620e9796ed94f0912c90550c2e4c9e44ac65908e421a7bfb26ccca2edb51929c = $this->env->getExtension("native_profiler");
        $__internal_620e9796ed94f0912c90550c2e4c9e44ac65908e421a7bfb26ccca2edb51929c->enter($__internal_620e9796ed94f0912c90550c2e4c9e44ac65908e421a7bfb26ccca2edb51929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_620e9796ed94f0912c90550c2e4c9e44ac65908e421a7bfb26ccca2edb51929c->leave($__internal_620e9796ed94f0912c90550c2e4c9e44ac65908e421a7bfb26ccca2edb51929c_prof);

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
