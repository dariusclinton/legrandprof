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
        $__internal_d51ffa5370f94c782698b66e74bd255c5d3c2bbce718353531882f806af14038 = $this->env->getExtension("native_profiler");
        $__internal_d51ffa5370f94c782698b66e74bd255c5d3c2bbce718353531882f806af14038->enter($__internal_d51ffa5370f94c782698b66e74bd255c5d3c2bbce718353531882f806af14038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d51ffa5370f94c782698b66e74bd255c5d3c2bbce718353531882f806af14038->leave($__internal_d51ffa5370f94c782698b66e74bd255c5d3c2bbce718353531882f806af14038_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a3057573ef4cb0392f024f135ac921213a4b77699455da1de2cf18a3373fbe5 = $this->env->getExtension("native_profiler");
        $__internal_6a3057573ef4cb0392f024f135ac921213a4b77699455da1de2cf18a3373fbe5->enter($__internal_6a3057573ef4cb0392f024f135ac921213a4b77699455da1de2cf18a3373fbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6a3057573ef4cb0392f024f135ac921213a4b77699455da1de2cf18a3373fbe5->leave($__internal_6a3057573ef4cb0392f024f135ac921213a4b77699455da1de2cf18a3373fbe5_prof);

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
