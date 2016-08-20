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
        $__internal_9281d094400fb03fbfcc0f7df3939324d64b6aacd6ca57999ed54911073f0379 = $this->env->getExtension("native_profiler");
        $__internal_9281d094400fb03fbfcc0f7df3939324d64b6aacd6ca57999ed54911073f0379->enter($__internal_9281d094400fb03fbfcc0f7df3939324d64b6aacd6ca57999ed54911073f0379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9281d094400fb03fbfcc0f7df3939324d64b6aacd6ca57999ed54911073f0379->leave($__internal_9281d094400fb03fbfcc0f7df3939324d64b6aacd6ca57999ed54911073f0379_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e327aa4beace261f9f4e1ce411b1603539e7e482e9c0685d755ceb8b186baff = $this->env->getExtension("native_profiler");
        $__internal_6e327aa4beace261f9f4e1ce411b1603539e7e482e9c0685d755ceb8b186baff->enter($__internal_6e327aa4beace261f9f4e1ce411b1603539e7e482e9c0685d755ceb8b186baff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e327aa4beace261f9f4e1ce411b1603539e7e482e9c0685d755ceb8b186baff->leave($__internal_6e327aa4beace261f9f4e1ce411b1603539e7e482e9c0685d755ceb8b186baff_prof);

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
