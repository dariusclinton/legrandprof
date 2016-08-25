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
        $__internal_915477082cad722608a3978794fc79539e4a9d671a59faf3c9a5b7cd023bf818 = $this->env->getExtension("native_profiler");
        $__internal_915477082cad722608a3978794fc79539e4a9d671a59faf3c9a5b7cd023bf818->enter($__internal_915477082cad722608a3978794fc79539e4a9d671a59faf3c9a5b7cd023bf818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_915477082cad722608a3978794fc79539e4a9d671a59faf3c9a5b7cd023bf818->leave($__internal_915477082cad722608a3978794fc79539e4a9d671a59faf3c9a5b7cd023bf818_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed4fa7feac08175112ebca98d3ff3a65d6dc79fd9d7330bbc2e0a5a7f77c8bd3 = $this->env->getExtension("native_profiler");
        $__internal_ed4fa7feac08175112ebca98d3ff3a65d6dc79fd9d7330bbc2e0a5a7f77c8bd3->enter($__internal_ed4fa7feac08175112ebca98d3ff3a65d6dc79fd9d7330bbc2e0a5a7f77c8bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ed4fa7feac08175112ebca98d3ff3a65d6dc79fd9d7330bbc2e0a5a7f77c8bd3->leave($__internal_ed4fa7feac08175112ebca98d3ff3a65d6dc79fd9d7330bbc2e0a5a7f77c8bd3_prof);

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
