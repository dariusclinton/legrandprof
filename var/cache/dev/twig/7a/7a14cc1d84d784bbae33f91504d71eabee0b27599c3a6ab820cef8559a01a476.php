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
        $__internal_f099ae8c52092de46e08eb49171f41652c03252a7a92852df7f4dd703a478f5e = $this->env->getExtension("native_profiler");
        $__internal_f099ae8c52092de46e08eb49171f41652c03252a7a92852df7f4dd703a478f5e->enter($__internal_f099ae8c52092de46e08eb49171f41652c03252a7a92852df7f4dd703a478f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f099ae8c52092de46e08eb49171f41652c03252a7a92852df7f4dd703a478f5e->leave($__internal_f099ae8c52092de46e08eb49171f41652c03252a7a92852df7f4dd703a478f5e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6518fa757d67ab6e8b3d965c64ab001db87f3bb5241ab7c4ac15f6be9b1badd = $this->env->getExtension("native_profiler");
        $__internal_b6518fa757d67ab6e8b3d965c64ab001db87f3bb5241ab7c4ac15f6be9b1badd->enter($__internal_b6518fa757d67ab6e8b3d965c64ab001db87f3bb5241ab7c4ac15f6be9b1badd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b6518fa757d67ab6e8b3d965c64ab001db87f3bb5241ab7c4ac15f6be9b1badd->leave($__internal_b6518fa757d67ab6e8b3d965c64ab001db87f3bb5241ab7c4ac15f6be9b1badd_prof);

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
