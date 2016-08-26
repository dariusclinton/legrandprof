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
        $__internal_25c376ead0cf3adc8da9c2666c4bf2bd48ce2bba0c3a074c4811e8eab0ea8764 = $this->env->getExtension("native_profiler");
        $__internal_25c376ead0cf3adc8da9c2666c4bf2bd48ce2bba0c3a074c4811e8eab0ea8764->enter($__internal_25c376ead0cf3adc8da9c2666c4bf2bd48ce2bba0c3a074c4811e8eab0ea8764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_25c376ead0cf3adc8da9c2666c4bf2bd48ce2bba0c3a074c4811e8eab0ea8764->leave($__internal_25c376ead0cf3adc8da9c2666c4bf2bd48ce2bba0c3a074c4811e8eab0ea8764_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_323d91a83807fe763308586e5e0f03cd13a6d1ae1629b784f30e82ece3db616b = $this->env->getExtension("native_profiler");
        $__internal_323d91a83807fe763308586e5e0f03cd13a6d1ae1629b784f30e82ece3db616b->enter($__internal_323d91a83807fe763308586e5e0f03cd13a6d1ae1629b784f30e82ece3db616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_323d91a83807fe763308586e5e0f03cd13a6d1ae1629b784f30e82ece3db616b->leave($__internal_323d91a83807fe763308586e5e0f03cd13a6d1ae1629b784f30e82ece3db616b_prof);

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
