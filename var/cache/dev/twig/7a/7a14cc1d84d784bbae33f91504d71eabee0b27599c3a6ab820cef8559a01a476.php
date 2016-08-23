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
        $__internal_23041ad0a301fcb787075c2483816840580c8b39a50ba0e9f6853cb6524e1bdb = $this->env->getExtension("native_profiler");
        $__internal_23041ad0a301fcb787075c2483816840580c8b39a50ba0e9f6853cb6524e1bdb->enter($__internal_23041ad0a301fcb787075c2483816840580c8b39a50ba0e9f6853cb6524e1bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_23041ad0a301fcb787075c2483816840580c8b39a50ba0e9f6853cb6524e1bdb->leave($__internal_23041ad0a301fcb787075c2483816840580c8b39a50ba0e9f6853cb6524e1bdb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_03fa9c3b511b4e12dc8e64a71dfd46221fff9e0cee8ee70f24ac7ea402cac012 = $this->env->getExtension("native_profiler");
        $__internal_03fa9c3b511b4e12dc8e64a71dfd46221fff9e0cee8ee70f24ac7ea402cac012->enter($__internal_03fa9c3b511b4e12dc8e64a71dfd46221fff9e0cee8ee70f24ac7ea402cac012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_03fa9c3b511b4e12dc8e64a71dfd46221fff9e0cee8ee70f24ac7ea402cac012->leave($__internal_03fa9c3b511b4e12dc8e64a71dfd46221fff9e0cee8ee70f24ac7ea402cac012_prof);

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
