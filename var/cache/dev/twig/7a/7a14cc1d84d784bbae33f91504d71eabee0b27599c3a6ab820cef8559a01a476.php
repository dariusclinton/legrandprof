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
        $__internal_7f07f0100660286e754f068450add3525d22e5246bdfb14371f934e1d7b48ab3 = $this->env->getExtension("native_profiler");
        $__internal_7f07f0100660286e754f068450add3525d22e5246bdfb14371f934e1d7b48ab3->enter($__internal_7f07f0100660286e754f068450add3525d22e5246bdfb14371f934e1d7b48ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7f07f0100660286e754f068450add3525d22e5246bdfb14371f934e1d7b48ab3->leave($__internal_7f07f0100660286e754f068450add3525d22e5246bdfb14371f934e1d7b48ab3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_03d8ed7335e03901c4a695cccff16cb74d3d71c11f64fa412694888035bc9fe5 = $this->env->getExtension("native_profiler");
        $__internal_03d8ed7335e03901c4a695cccff16cb74d3d71c11f64fa412694888035bc9fe5->enter($__internal_03d8ed7335e03901c4a695cccff16cb74d3d71c11f64fa412694888035bc9fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_03d8ed7335e03901c4a695cccff16cb74d3d71c11f64fa412694888035bc9fe5->leave($__internal_03d8ed7335e03901c4a695cccff16cb74d3d71c11f64fa412694888035bc9fe5_prof);

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
