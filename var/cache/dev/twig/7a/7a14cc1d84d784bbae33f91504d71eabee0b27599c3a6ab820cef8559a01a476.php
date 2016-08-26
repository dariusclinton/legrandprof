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
        $__internal_f04128ace0c72fbf921f8dcce5c440bfb8e4ecc3ac57dd1ce4dd8cf72f11ef45 = $this->env->getExtension("native_profiler");
        $__internal_f04128ace0c72fbf921f8dcce5c440bfb8e4ecc3ac57dd1ce4dd8cf72f11ef45->enter($__internal_f04128ace0c72fbf921f8dcce5c440bfb8e4ecc3ac57dd1ce4dd8cf72f11ef45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f04128ace0c72fbf921f8dcce5c440bfb8e4ecc3ac57dd1ce4dd8cf72f11ef45->leave($__internal_f04128ace0c72fbf921f8dcce5c440bfb8e4ecc3ac57dd1ce4dd8cf72f11ef45_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e7f2a55cde9a843eb834a4e57470e8eaf8663b4efe5f98869f35d4c29961335 = $this->env->getExtension("native_profiler");
        $__internal_1e7f2a55cde9a843eb834a4e57470e8eaf8663b4efe5f98869f35d4c29961335->enter($__internal_1e7f2a55cde9a843eb834a4e57470e8eaf8663b4efe5f98869f35d4c29961335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e7f2a55cde9a843eb834a4e57470e8eaf8663b4efe5f98869f35d4c29961335->leave($__internal_1e7f2a55cde9a843eb834a4e57470e8eaf8663b4efe5f98869f35d4c29961335_prof);

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
