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
        $__internal_9b11af1272b60b5f99562d94e8ee5a3ea743e77e1cb7296809614653fca92b36 = $this->env->getExtension("native_profiler");
        $__internal_9b11af1272b60b5f99562d94e8ee5a3ea743e77e1cb7296809614653fca92b36->enter($__internal_9b11af1272b60b5f99562d94e8ee5a3ea743e77e1cb7296809614653fca92b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b11af1272b60b5f99562d94e8ee5a3ea743e77e1cb7296809614653fca92b36->leave($__internal_9b11af1272b60b5f99562d94e8ee5a3ea743e77e1cb7296809614653fca92b36_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2c7775138ecb175605473aba32396b5ba68abc5cee4c87d57a646b108d7b311 = $this->env->getExtension("native_profiler");
        $__internal_c2c7775138ecb175605473aba32396b5ba68abc5cee4c87d57a646b108d7b311->enter($__internal_c2c7775138ecb175605473aba32396b5ba68abc5cee4c87d57a646b108d7b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c2c7775138ecb175605473aba32396b5ba68abc5cee4c87d57a646b108d7b311->leave($__internal_c2c7775138ecb175605473aba32396b5ba68abc5cee4c87d57a646b108d7b311_prof);

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
