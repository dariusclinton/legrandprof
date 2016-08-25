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
        $__internal_d1e221b53f612413d729f5d689429dffc76fb298b7721b8fafe4d8e793f57963 = $this->env->getExtension("native_profiler");
        $__internal_d1e221b53f612413d729f5d689429dffc76fb298b7721b8fafe4d8e793f57963->enter($__internal_d1e221b53f612413d729f5d689429dffc76fb298b7721b8fafe4d8e793f57963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d1e221b53f612413d729f5d689429dffc76fb298b7721b8fafe4d8e793f57963->leave($__internal_d1e221b53f612413d729f5d689429dffc76fb298b7721b8fafe4d8e793f57963_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cda1253ab02223b313ca1a0fd417dc8e25531cd098da3b60cbe1c3d628e78662 = $this->env->getExtension("native_profiler");
        $__internal_cda1253ab02223b313ca1a0fd417dc8e25531cd098da3b60cbe1c3d628e78662->enter($__internal_cda1253ab02223b313ca1a0fd417dc8e25531cd098da3b60cbe1c3d628e78662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cda1253ab02223b313ca1a0fd417dc8e25531cd098da3b60cbe1c3d628e78662->leave($__internal_cda1253ab02223b313ca1a0fd417dc8e25531cd098da3b60cbe1c3d628e78662_prof);

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
