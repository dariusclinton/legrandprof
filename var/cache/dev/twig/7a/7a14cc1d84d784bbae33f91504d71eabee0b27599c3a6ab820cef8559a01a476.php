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
        $__internal_03de15956c34500a71fdd6ce03231a4a920f53444006834354a60c512310aa23 = $this->env->getExtension("native_profiler");
        $__internal_03de15956c34500a71fdd6ce03231a4a920f53444006834354a60c512310aa23->enter($__internal_03de15956c34500a71fdd6ce03231a4a920f53444006834354a60c512310aa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_03de15956c34500a71fdd6ce03231a4a920f53444006834354a60c512310aa23->leave($__internal_03de15956c34500a71fdd6ce03231a4a920f53444006834354a60c512310aa23_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_474c12df5a2c39066cf695a7cb375f5cef5e19a240012a0bc2c96f902a5012c9 = $this->env->getExtension("native_profiler");
        $__internal_474c12df5a2c39066cf695a7cb375f5cef5e19a240012a0bc2c96f902a5012c9->enter($__internal_474c12df5a2c39066cf695a7cb375f5cef5e19a240012a0bc2c96f902a5012c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_474c12df5a2c39066cf695a7cb375f5cef5e19a240012a0bc2c96f902a5012c9->leave($__internal_474c12df5a2c39066cf695a7cb375f5cef5e19a240012a0bc2c96f902a5012c9_prof);

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
