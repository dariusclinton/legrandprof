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
        $__internal_a707ee4454fba19b5aa7c7034340da0606af9ebe7d695977d6a843f9108e061a = $this->env->getExtension("native_profiler");
        $__internal_a707ee4454fba19b5aa7c7034340da0606af9ebe7d695977d6a843f9108e061a->enter($__internal_a707ee4454fba19b5aa7c7034340da0606af9ebe7d695977d6a843f9108e061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a707ee4454fba19b5aa7c7034340da0606af9ebe7d695977d6a843f9108e061a->leave($__internal_a707ee4454fba19b5aa7c7034340da0606af9ebe7d695977d6a843f9108e061a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_917bad089f5ca7e47b8cb7def97187f4a2c2355c0479e14bdce0f0d95f255636 = $this->env->getExtension("native_profiler");
        $__internal_917bad089f5ca7e47b8cb7def97187f4a2c2355c0479e14bdce0f0d95f255636->enter($__internal_917bad089f5ca7e47b8cb7def97187f4a2c2355c0479e14bdce0f0d95f255636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_917bad089f5ca7e47b8cb7def97187f4a2c2355c0479e14bdce0f0d95f255636->leave($__internal_917bad089f5ca7e47b8cb7def97187f4a2c2355c0479e14bdce0f0d95f255636_prof);

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
