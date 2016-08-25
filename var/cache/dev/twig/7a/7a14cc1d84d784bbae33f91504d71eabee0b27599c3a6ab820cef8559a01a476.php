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
        $__internal_55206e4a79cac5edea6fd79d8a3b9fdf90f884912e7b29291b0cb0fa33c4fc5c = $this->env->getExtension("native_profiler");
        $__internal_55206e4a79cac5edea6fd79d8a3b9fdf90f884912e7b29291b0cb0fa33c4fc5c->enter($__internal_55206e4a79cac5edea6fd79d8a3b9fdf90f884912e7b29291b0cb0fa33c4fc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_55206e4a79cac5edea6fd79d8a3b9fdf90f884912e7b29291b0cb0fa33c4fc5c->leave($__internal_55206e4a79cac5edea6fd79d8a3b9fdf90f884912e7b29291b0cb0fa33c4fc5c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33693f868ee7cc2b0098d1c33136409c0ba94acc6d6c6f8ee291637867122be8 = $this->env->getExtension("native_profiler");
        $__internal_33693f868ee7cc2b0098d1c33136409c0ba94acc6d6c6f8ee291637867122be8->enter($__internal_33693f868ee7cc2b0098d1c33136409c0ba94acc6d6c6f8ee291637867122be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33693f868ee7cc2b0098d1c33136409c0ba94acc6d6c6f8ee291637867122be8->leave($__internal_33693f868ee7cc2b0098d1c33136409c0ba94acc6d6c6f8ee291637867122be8_prof);

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
