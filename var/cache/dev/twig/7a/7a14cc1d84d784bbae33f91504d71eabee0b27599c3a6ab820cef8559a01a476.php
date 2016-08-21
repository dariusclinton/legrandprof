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
        $__internal_3f3d3da8abecbd73bf5dda0577195af25398821c27be30e8cd03cef3858a373d = $this->env->getExtension("native_profiler");
        $__internal_3f3d3da8abecbd73bf5dda0577195af25398821c27be30e8cd03cef3858a373d->enter($__internal_3f3d3da8abecbd73bf5dda0577195af25398821c27be30e8cd03cef3858a373d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3f3d3da8abecbd73bf5dda0577195af25398821c27be30e8cd03cef3858a373d->leave($__internal_3f3d3da8abecbd73bf5dda0577195af25398821c27be30e8cd03cef3858a373d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_60a0a3161c92dd58acc5d661f3f7f11961e895b153941628f6589edcd9f5c776 = $this->env->getExtension("native_profiler");
        $__internal_60a0a3161c92dd58acc5d661f3f7f11961e895b153941628f6589edcd9f5c776->enter($__internal_60a0a3161c92dd58acc5d661f3f7f11961e895b153941628f6589edcd9f5c776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_60a0a3161c92dd58acc5d661f3f7f11961e895b153941628f6589edcd9f5c776->leave($__internal_60a0a3161c92dd58acc5d661f3f7f11961e895b153941628f6589edcd9f5c776_prof);

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
