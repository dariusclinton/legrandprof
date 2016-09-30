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
        $__internal_525c73300bbc4c12d37d3ca8e86fc790cee6401aac5c4e51bbaf3cd0e59f2f5d = $this->env->getExtension("native_profiler");
        $__internal_525c73300bbc4c12d37d3ca8e86fc790cee6401aac5c4e51bbaf3cd0e59f2f5d->enter($__internal_525c73300bbc4c12d37d3ca8e86fc790cee6401aac5c4e51bbaf3cd0e59f2f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_525c73300bbc4c12d37d3ca8e86fc790cee6401aac5c4e51bbaf3cd0e59f2f5d->leave($__internal_525c73300bbc4c12d37d3ca8e86fc790cee6401aac5c4e51bbaf3cd0e59f2f5d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b28e58dc703f74ddba32a302ecd283e71c12849bcfbfa4e6a48119167e4eb266 = $this->env->getExtension("native_profiler");
        $__internal_b28e58dc703f74ddba32a302ecd283e71c12849bcfbfa4e6a48119167e4eb266->enter($__internal_b28e58dc703f74ddba32a302ecd283e71c12849bcfbfa4e6a48119167e4eb266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b28e58dc703f74ddba32a302ecd283e71c12849bcfbfa4e6a48119167e4eb266->leave($__internal_b28e58dc703f74ddba32a302ecd283e71c12849bcfbfa4e6a48119167e4eb266_prof);

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
