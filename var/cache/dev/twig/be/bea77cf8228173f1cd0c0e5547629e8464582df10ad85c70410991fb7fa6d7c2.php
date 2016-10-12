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
        $__internal_9dc62dc1eed2b3ef848fcaccde8b4c68ee167c5e2ac16fd546d434d0c631ec75 = $this->env->getExtension("native_profiler");
        $__internal_9dc62dc1eed2b3ef848fcaccde8b4c68ee167c5e2ac16fd546d434d0c631ec75->enter($__internal_9dc62dc1eed2b3ef848fcaccde8b4c68ee167c5e2ac16fd546d434d0c631ec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9dc62dc1eed2b3ef848fcaccde8b4c68ee167c5e2ac16fd546d434d0c631ec75->leave($__internal_9dc62dc1eed2b3ef848fcaccde8b4c68ee167c5e2ac16fd546d434d0c631ec75_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7540410ccdcda1900a5d602b5547ec7cf4be348d1fc6f7ba1b7bed706368d6a6 = $this->env->getExtension("native_profiler");
        $__internal_7540410ccdcda1900a5d602b5547ec7cf4be348d1fc6f7ba1b7bed706368d6a6->enter($__internal_7540410ccdcda1900a5d602b5547ec7cf4be348d1fc6f7ba1b7bed706368d6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7540410ccdcda1900a5d602b5547ec7cf4be348d1fc6f7ba1b7bed706368d6a6->leave($__internal_7540410ccdcda1900a5d602b5547ec7cf4be348d1fc6f7ba1b7bed706368d6a6_prof);

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
