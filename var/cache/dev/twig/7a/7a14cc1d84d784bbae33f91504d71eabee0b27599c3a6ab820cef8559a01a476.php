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
        $__internal_f14686da2d024709b2a96b08ef0b0d3ea974a273cae17eb3d651adfd98d9d713 = $this->env->getExtension("native_profiler");
        $__internal_f14686da2d024709b2a96b08ef0b0d3ea974a273cae17eb3d651adfd98d9d713->enter($__internal_f14686da2d024709b2a96b08ef0b0d3ea974a273cae17eb3d651adfd98d9d713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f14686da2d024709b2a96b08ef0b0d3ea974a273cae17eb3d651adfd98d9d713->leave($__internal_f14686da2d024709b2a96b08ef0b0d3ea974a273cae17eb3d651adfd98d9d713_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b28ee1908c8911c5fa26dec38d0f2abc85757eba713fd07697e633e1437eccd = $this->env->getExtension("native_profiler");
        $__internal_0b28ee1908c8911c5fa26dec38d0f2abc85757eba713fd07697e633e1437eccd->enter($__internal_0b28ee1908c8911c5fa26dec38d0f2abc85757eba713fd07697e633e1437eccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0b28ee1908c8911c5fa26dec38d0f2abc85757eba713fd07697e633e1437eccd->leave($__internal_0b28ee1908c8911c5fa26dec38d0f2abc85757eba713fd07697e633e1437eccd_prof);

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
