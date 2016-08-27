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
        $__internal_484021251470de0adb02e47bd2658f11135a7b729be182374b3814cc340248a8 = $this->env->getExtension("native_profiler");
        $__internal_484021251470de0adb02e47bd2658f11135a7b729be182374b3814cc340248a8->enter($__internal_484021251470de0adb02e47bd2658f11135a7b729be182374b3814cc340248a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_484021251470de0adb02e47bd2658f11135a7b729be182374b3814cc340248a8->leave($__internal_484021251470de0adb02e47bd2658f11135a7b729be182374b3814cc340248a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5070cdeda9c946251525ae8a29d335db58d5ed29e27dd45418b37718f305fb6 = $this->env->getExtension("native_profiler");
        $__internal_c5070cdeda9c946251525ae8a29d335db58d5ed29e27dd45418b37718f305fb6->enter($__internal_c5070cdeda9c946251525ae8a29d335db58d5ed29e27dd45418b37718f305fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c5070cdeda9c946251525ae8a29d335db58d5ed29e27dd45418b37718f305fb6->leave($__internal_c5070cdeda9c946251525ae8a29d335db58d5ed29e27dd45418b37718f305fb6_prof);

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
