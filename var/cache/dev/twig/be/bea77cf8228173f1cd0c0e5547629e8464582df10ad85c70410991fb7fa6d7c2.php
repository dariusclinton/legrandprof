<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4b70311a881a43fbf2685565253f1f833de0330b12124d0e62c2246e2c92f104 extends Twig_Template
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
        $__internal_41723ce53af5a6c288bad04ad4d23dab63e59831272a08d21d5a183f99c0b679 = $this->env->getExtension("native_profiler");
        $__internal_41723ce53af5a6c288bad04ad4d23dab63e59831272a08d21d5a183f99c0b679->enter($__internal_41723ce53af5a6c288bad04ad4d23dab63e59831272a08d21d5a183f99c0b679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_41723ce53af5a6c288bad04ad4d23dab63e59831272a08d21d5a183f99c0b679->leave($__internal_41723ce53af5a6c288bad04ad4d23dab63e59831272a08d21d5a183f99c0b679_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_51ed16fe4207f0924ada81e4961aca354b02544a8f255c7156d168554d0789d7 = $this->env->getExtension("native_profiler");
        $__internal_51ed16fe4207f0924ada81e4961aca354b02544a8f255c7156d168554d0789d7->enter($__internal_51ed16fe4207f0924ada81e4961aca354b02544a8f255c7156d168554d0789d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_51ed16fe4207f0924ada81e4961aca354b02544a8f255c7156d168554d0789d7->leave($__internal_51ed16fe4207f0924ada81e4961aca354b02544a8f255c7156d168554d0789d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
