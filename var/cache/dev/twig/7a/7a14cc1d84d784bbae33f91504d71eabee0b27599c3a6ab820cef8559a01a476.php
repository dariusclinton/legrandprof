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
        $__internal_e679dc6b8658ee13e612092c96947bd7541acef65ce22d90262cfbce3972759d = $this->env->getExtension("native_profiler");
        $__internal_e679dc6b8658ee13e612092c96947bd7541acef65ce22d90262cfbce3972759d->enter($__internal_e679dc6b8658ee13e612092c96947bd7541acef65ce22d90262cfbce3972759d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e679dc6b8658ee13e612092c96947bd7541acef65ce22d90262cfbce3972759d->leave($__internal_e679dc6b8658ee13e612092c96947bd7541acef65ce22d90262cfbce3972759d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_db501a4f74bd1d1f8cdffb3d3f21dc9768b74f09f7214ad8e029d65e4f4ce0f7 = $this->env->getExtension("native_profiler");
        $__internal_db501a4f74bd1d1f8cdffb3d3f21dc9768b74f09f7214ad8e029d65e4f4ce0f7->enter($__internal_db501a4f74bd1d1f8cdffb3d3f21dc9768b74f09f7214ad8e029d65e4f4ce0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_db501a4f74bd1d1f8cdffb3d3f21dc9768b74f09f7214ad8e029d65e4f4ce0f7->leave($__internal_db501a4f74bd1d1f8cdffb3d3f21dc9768b74f09f7214ad8e029d65e4f4ce0f7_prof);

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
