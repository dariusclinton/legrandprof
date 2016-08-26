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
        $__internal_eca608cf1e58deceb25c8f6850bcf2bd8d1388b04a7303ffcc87cbfac666d26e = $this->env->getExtension("native_profiler");
        $__internal_eca608cf1e58deceb25c8f6850bcf2bd8d1388b04a7303ffcc87cbfac666d26e->enter($__internal_eca608cf1e58deceb25c8f6850bcf2bd8d1388b04a7303ffcc87cbfac666d26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eca608cf1e58deceb25c8f6850bcf2bd8d1388b04a7303ffcc87cbfac666d26e->leave($__internal_eca608cf1e58deceb25c8f6850bcf2bd8d1388b04a7303ffcc87cbfac666d26e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a15e4cd074c681cfa72cbbc5ef4e49d93749e83f04da9aed53fa66047a6193c9 = $this->env->getExtension("native_profiler");
        $__internal_a15e4cd074c681cfa72cbbc5ef4e49d93749e83f04da9aed53fa66047a6193c9->enter($__internal_a15e4cd074c681cfa72cbbc5ef4e49d93749e83f04da9aed53fa66047a6193c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a15e4cd074c681cfa72cbbc5ef4e49d93749e83f04da9aed53fa66047a6193c9->leave($__internal_a15e4cd074c681cfa72cbbc5ef4e49d93749e83f04da9aed53fa66047a6193c9_prof);

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
