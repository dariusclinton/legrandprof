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
        $__internal_7668f27fb7aa10f009d2cb11bc8553308dbc60148d34e0a81437e53fffbe0943 = $this->env->getExtension("native_profiler");
        $__internal_7668f27fb7aa10f009d2cb11bc8553308dbc60148d34e0a81437e53fffbe0943->enter($__internal_7668f27fb7aa10f009d2cb11bc8553308dbc60148d34e0a81437e53fffbe0943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7668f27fb7aa10f009d2cb11bc8553308dbc60148d34e0a81437e53fffbe0943->leave($__internal_7668f27fb7aa10f009d2cb11bc8553308dbc60148d34e0a81437e53fffbe0943_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc5564e74c989a4782dd1123176fb9c752b2de4cfae28e2cfe7bf1d34093eeb3 = $this->env->getExtension("native_profiler");
        $__internal_fc5564e74c989a4782dd1123176fb9c752b2de4cfae28e2cfe7bf1d34093eeb3->enter($__internal_fc5564e74c989a4782dd1123176fb9c752b2de4cfae28e2cfe7bf1d34093eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fc5564e74c989a4782dd1123176fb9c752b2de4cfae28e2cfe7bf1d34093eeb3->leave($__internal_fc5564e74c989a4782dd1123176fb9c752b2de4cfae28e2cfe7bf1d34093eeb3_prof);

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
