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
        $__internal_44153b3f66fce1e6c9ee9c9eb9cf2b8cdcfb0cd59b7e303e159f87d4ba19bc14 = $this->env->getExtension("native_profiler");
        $__internal_44153b3f66fce1e6c9ee9c9eb9cf2b8cdcfb0cd59b7e303e159f87d4ba19bc14->enter($__internal_44153b3f66fce1e6c9ee9c9eb9cf2b8cdcfb0cd59b7e303e159f87d4ba19bc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44153b3f66fce1e6c9ee9c9eb9cf2b8cdcfb0cd59b7e303e159f87d4ba19bc14->leave($__internal_44153b3f66fce1e6c9ee9c9eb9cf2b8cdcfb0cd59b7e303e159f87d4ba19bc14_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_94c4d3c5ce2c33df6110f0f04caa6ca372364d5d333c87f2b36e6d8b22b963b8 = $this->env->getExtension("native_profiler");
        $__internal_94c4d3c5ce2c33df6110f0f04caa6ca372364d5d333c87f2b36e6d8b22b963b8->enter($__internal_94c4d3c5ce2c33df6110f0f04caa6ca372364d5d333c87f2b36e6d8b22b963b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_94c4d3c5ce2c33df6110f0f04caa6ca372364d5d333c87f2b36e6d8b22b963b8->leave($__internal_94c4d3c5ce2c33df6110f0f04caa6ca372364d5d333c87f2b36e6d8b22b963b8_prof);

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
