<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2b8185aa0aa754706ca74344c6c1c6a7cd8dd27d5f04f9bfa71f869574632312 extends Twig_Template
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
        $__internal_51260ecd640fa001005d8b4ac0d71ecbf6254f144af9ee4dd4ae13879074aa31 = $this->env->getExtension("native_profiler");
        $__internal_51260ecd640fa001005d8b4ac0d71ecbf6254f144af9ee4dd4ae13879074aa31->enter($__internal_51260ecd640fa001005d8b4ac0d71ecbf6254f144af9ee4dd4ae13879074aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_51260ecd640fa001005d8b4ac0d71ecbf6254f144af9ee4dd4ae13879074aa31->leave($__internal_51260ecd640fa001005d8b4ac0d71ecbf6254f144af9ee4dd4ae13879074aa31_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1c54c840fe044c8027412b6bb86f6d1371e73822a43b5a5d0afb91124409345 = $this->env->getExtension("native_profiler");
        $__internal_b1c54c840fe044c8027412b6bb86f6d1371e73822a43b5a5d0afb91124409345->enter($__internal_b1c54c840fe044c8027412b6bb86f6d1371e73822a43b5a5d0afb91124409345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b1c54c840fe044c8027412b6bb86f6d1371e73822a43b5a5d0afb91124409345->leave($__internal_b1c54c840fe044c8027412b6bb86f6d1371e73822a43b5a5d0afb91124409345_prof);

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
