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
        $__internal_cdd382a4e6b85bc8336de6ddc7535b61b8fb1f53f7330d8e7f57921639e9ac31 = $this->env->getExtension("native_profiler");
        $__internal_cdd382a4e6b85bc8336de6ddc7535b61b8fb1f53f7330d8e7f57921639e9ac31->enter($__internal_cdd382a4e6b85bc8336de6ddc7535b61b8fb1f53f7330d8e7f57921639e9ac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cdd382a4e6b85bc8336de6ddc7535b61b8fb1f53f7330d8e7f57921639e9ac31->leave($__internal_cdd382a4e6b85bc8336de6ddc7535b61b8fb1f53f7330d8e7f57921639e9ac31_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a33a97e2d80c0fa69615c0922f7edcd2a8ce6d36c0e2e53d091ea9730d691c0 = $this->env->getExtension("native_profiler");
        $__internal_2a33a97e2d80c0fa69615c0922f7edcd2a8ce6d36c0e2e53d091ea9730d691c0->enter($__internal_2a33a97e2d80c0fa69615c0922f7edcd2a8ce6d36c0e2e53d091ea9730d691c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2a33a97e2d80c0fa69615c0922f7edcd2a8ce6d36c0e2e53d091ea9730d691c0->leave($__internal_2a33a97e2d80c0fa69615c0922f7edcd2a8ce6d36c0e2e53d091ea9730d691c0_prof);

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
