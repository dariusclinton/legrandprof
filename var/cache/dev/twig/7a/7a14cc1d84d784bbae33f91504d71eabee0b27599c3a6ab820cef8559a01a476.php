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
        $__internal_39a2d84963f84379f98b0ebcfc44dc9df168c01b0e5439f26408367d6aa5a4c0 = $this->env->getExtension("native_profiler");
        $__internal_39a2d84963f84379f98b0ebcfc44dc9df168c01b0e5439f26408367d6aa5a4c0->enter($__internal_39a2d84963f84379f98b0ebcfc44dc9df168c01b0e5439f26408367d6aa5a4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_39a2d84963f84379f98b0ebcfc44dc9df168c01b0e5439f26408367d6aa5a4c0->leave($__internal_39a2d84963f84379f98b0ebcfc44dc9df168c01b0e5439f26408367d6aa5a4c0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4564c5aafe9c7ac920cb4562635c18986b15a2cd317af6656aa9d6ac9621c71a = $this->env->getExtension("native_profiler");
        $__internal_4564c5aafe9c7ac920cb4562635c18986b15a2cd317af6656aa9d6ac9621c71a->enter($__internal_4564c5aafe9c7ac920cb4562635c18986b15a2cd317af6656aa9d6ac9621c71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4564c5aafe9c7ac920cb4562635c18986b15a2cd317af6656aa9d6ac9621c71a->leave($__internal_4564c5aafe9c7ac920cb4562635c18986b15a2cd317af6656aa9d6ac9621c71a_prof);

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
