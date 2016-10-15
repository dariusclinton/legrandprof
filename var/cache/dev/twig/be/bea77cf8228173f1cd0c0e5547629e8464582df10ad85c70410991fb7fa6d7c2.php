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
        $__internal_79002274f269419a2168fa62bad827cf25ca64e6b9432c9bac4a494be3581236 = $this->env->getExtension("native_profiler");
        $__internal_79002274f269419a2168fa62bad827cf25ca64e6b9432c9bac4a494be3581236->enter($__internal_79002274f269419a2168fa62bad827cf25ca64e6b9432c9bac4a494be3581236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_79002274f269419a2168fa62bad827cf25ca64e6b9432c9bac4a494be3581236->leave($__internal_79002274f269419a2168fa62bad827cf25ca64e6b9432c9bac4a494be3581236_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_901d1514775b8b124c45188a1ae9f9ba2eb78f7e3067233f842581add09963fe = $this->env->getExtension("native_profiler");
        $__internal_901d1514775b8b124c45188a1ae9f9ba2eb78f7e3067233f842581add09963fe->enter($__internal_901d1514775b8b124c45188a1ae9f9ba2eb78f7e3067233f842581add09963fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_901d1514775b8b124c45188a1ae9f9ba2eb78f7e3067233f842581add09963fe->leave($__internal_901d1514775b8b124c45188a1ae9f9ba2eb78f7e3067233f842581add09963fe_prof);

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
