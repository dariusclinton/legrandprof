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
        $__internal_06a0f4d19495482a3536ba1d42b5a6641bf4d65e2adc8b510e717244751dd434 = $this->env->getExtension("native_profiler");
        $__internal_06a0f4d19495482a3536ba1d42b5a6641bf4d65e2adc8b510e717244751dd434->enter($__internal_06a0f4d19495482a3536ba1d42b5a6641bf4d65e2adc8b510e717244751dd434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_06a0f4d19495482a3536ba1d42b5a6641bf4d65e2adc8b510e717244751dd434->leave($__internal_06a0f4d19495482a3536ba1d42b5a6641bf4d65e2adc8b510e717244751dd434_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_73e33518df8b9c2617db1a063bef3c2e3d2c22bd87112fb925b60d3e60d84546 = $this->env->getExtension("native_profiler");
        $__internal_73e33518df8b9c2617db1a063bef3c2e3d2c22bd87112fb925b60d3e60d84546->enter($__internal_73e33518df8b9c2617db1a063bef3c2e3d2c22bd87112fb925b60d3e60d84546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_73e33518df8b9c2617db1a063bef3c2e3d2c22bd87112fb925b60d3e60d84546->leave($__internal_73e33518df8b9c2617db1a063bef3c2e3d2c22bd87112fb925b60d3e60d84546_prof);

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
