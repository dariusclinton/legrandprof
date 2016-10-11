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
        $__internal_add5ee83fc49b51e8d4385e2e6fd6d812ab91a6214bb3008063fb7dfa081a0b6 = $this->env->getExtension("native_profiler");
        $__internal_add5ee83fc49b51e8d4385e2e6fd6d812ab91a6214bb3008063fb7dfa081a0b6->enter($__internal_add5ee83fc49b51e8d4385e2e6fd6d812ab91a6214bb3008063fb7dfa081a0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_add5ee83fc49b51e8d4385e2e6fd6d812ab91a6214bb3008063fb7dfa081a0b6->leave($__internal_add5ee83fc49b51e8d4385e2e6fd6d812ab91a6214bb3008063fb7dfa081a0b6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ee38d1e9a66c5637ad82b55422b0e790cf99688e519cc662457522f55385d60 = $this->env->getExtension("native_profiler");
        $__internal_9ee38d1e9a66c5637ad82b55422b0e790cf99688e519cc662457522f55385d60->enter($__internal_9ee38d1e9a66c5637ad82b55422b0e790cf99688e519cc662457522f55385d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9ee38d1e9a66c5637ad82b55422b0e790cf99688e519cc662457522f55385d60->leave($__internal_9ee38d1e9a66c5637ad82b55422b0e790cf99688e519cc662457522f55385d60_prof);

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
