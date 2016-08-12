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
        $__internal_c7d21c4981073e2964b8188a0d24202c4bcedb7ac1214bfc8a8d302be0b5c9e2 = $this->env->getExtension("native_profiler");
        $__internal_c7d21c4981073e2964b8188a0d24202c4bcedb7ac1214bfc8a8d302be0b5c9e2->enter($__internal_c7d21c4981073e2964b8188a0d24202c4bcedb7ac1214bfc8a8d302be0b5c9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c7d21c4981073e2964b8188a0d24202c4bcedb7ac1214bfc8a8d302be0b5c9e2->leave($__internal_c7d21c4981073e2964b8188a0d24202c4bcedb7ac1214bfc8a8d302be0b5c9e2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccb9f0c9f959dd1ea53eee09ee9cf631f37e722d69f021fe3d3fe664d1550593 = $this->env->getExtension("native_profiler");
        $__internal_ccb9f0c9f959dd1ea53eee09ee9cf631f37e722d69f021fe3d3fe664d1550593->enter($__internal_ccb9f0c9f959dd1ea53eee09ee9cf631f37e722d69f021fe3d3fe664d1550593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ccb9f0c9f959dd1ea53eee09ee9cf631f37e722d69f021fe3d3fe664d1550593->leave($__internal_ccb9f0c9f959dd1ea53eee09ee9cf631f37e722d69f021fe3d3fe664d1550593_prof);

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
