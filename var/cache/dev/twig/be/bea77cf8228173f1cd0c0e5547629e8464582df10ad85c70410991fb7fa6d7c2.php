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
        $__internal_1c0ecdef3e95039c4fa5bee4bccc7513b47da54e88c7b3e2442076e3a08529ca = $this->env->getExtension("native_profiler");
        $__internal_1c0ecdef3e95039c4fa5bee4bccc7513b47da54e88c7b3e2442076e3a08529ca->enter($__internal_1c0ecdef3e95039c4fa5bee4bccc7513b47da54e88c7b3e2442076e3a08529ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1c0ecdef3e95039c4fa5bee4bccc7513b47da54e88c7b3e2442076e3a08529ca->leave($__internal_1c0ecdef3e95039c4fa5bee4bccc7513b47da54e88c7b3e2442076e3a08529ca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf194d9e101c20d4eca2ca4ca70f036c76060501f0970574dae3414e81351ca0 = $this->env->getExtension("native_profiler");
        $__internal_bf194d9e101c20d4eca2ca4ca70f036c76060501f0970574dae3414e81351ca0->enter($__internal_bf194d9e101c20d4eca2ca4ca70f036c76060501f0970574dae3414e81351ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bf194d9e101c20d4eca2ca4ca70f036c76060501f0970574dae3414e81351ca0->leave($__internal_bf194d9e101c20d4eca2ca4ca70f036c76060501f0970574dae3414e81351ca0_prof);

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
