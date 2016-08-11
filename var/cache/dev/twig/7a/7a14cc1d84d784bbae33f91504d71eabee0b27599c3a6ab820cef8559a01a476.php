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
        $__internal_adebfd33d304e9aca6f9b41c93e576d617b8e05d52bd26dc6ee3b799f1a706f6 = $this->env->getExtension("native_profiler");
        $__internal_adebfd33d304e9aca6f9b41c93e576d617b8e05d52bd26dc6ee3b799f1a706f6->enter($__internal_adebfd33d304e9aca6f9b41c93e576d617b8e05d52bd26dc6ee3b799f1a706f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_adebfd33d304e9aca6f9b41c93e576d617b8e05d52bd26dc6ee3b799f1a706f6->leave($__internal_adebfd33d304e9aca6f9b41c93e576d617b8e05d52bd26dc6ee3b799f1a706f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e04e658253189ca15f546257268b72245f5ea0164190e7c909e5d4b93ea2e37 = $this->env->getExtension("native_profiler");
        $__internal_9e04e658253189ca15f546257268b72245f5ea0164190e7c909e5d4b93ea2e37->enter($__internal_9e04e658253189ca15f546257268b72245f5ea0164190e7c909e5d4b93ea2e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e04e658253189ca15f546257268b72245f5ea0164190e7c909e5d4b93ea2e37->leave($__internal_9e04e658253189ca15f546257268b72245f5ea0164190e7c909e5d4b93ea2e37_prof);

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
