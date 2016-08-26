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
        $__internal_de4e74bb4481b7bb8e2a5672475d986e39b4e17be7b0c650e3d9fc70e244de9f = $this->env->getExtension("native_profiler");
        $__internal_de4e74bb4481b7bb8e2a5672475d986e39b4e17be7b0c650e3d9fc70e244de9f->enter($__internal_de4e74bb4481b7bb8e2a5672475d986e39b4e17be7b0c650e3d9fc70e244de9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de4e74bb4481b7bb8e2a5672475d986e39b4e17be7b0c650e3d9fc70e244de9f->leave($__internal_de4e74bb4481b7bb8e2a5672475d986e39b4e17be7b0c650e3d9fc70e244de9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_47590cc59c5c5ed0cb77072532e6f140542b6b45cef2a1ca30c774a511c8eeec = $this->env->getExtension("native_profiler");
        $__internal_47590cc59c5c5ed0cb77072532e6f140542b6b45cef2a1ca30c774a511c8eeec->enter($__internal_47590cc59c5c5ed0cb77072532e6f140542b6b45cef2a1ca30c774a511c8eeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_47590cc59c5c5ed0cb77072532e6f140542b6b45cef2a1ca30c774a511c8eeec->leave($__internal_47590cc59c5c5ed0cb77072532e6f140542b6b45cef2a1ca30c774a511c8eeec_prof);

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
