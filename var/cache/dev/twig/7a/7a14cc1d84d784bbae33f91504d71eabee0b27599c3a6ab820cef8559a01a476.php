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
        $__internal_1f6147d62584e36fc4acf0b233281ae5e4d9d076eb43902cc9613c8c99914a94 = $this->env->getExtension("native_profiler");
        $__internal_1f6147d62584e36fc4acf0b233281ae5e4d9d076eb43902cc9613c8c99914a94->enter($__internal_1f6147d62584e36fc4acf0b233281ae5e4d9d076eb43902cc9613c8c99914a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f6147d62584e36fc4acf0b233281ae5e4d9d076eb43902cc9613c8c99914a94->leave($__internal_1f6147d62584e36fc4acf0b233281ae5e4d9d076eb43902cc9613c8c99914a94_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f1122d4741a1e145ad063fcb27dbe3d009aca4c2b0b945ce689972b3705c1f9 = $this->env->getExtension("native_profiler");
        $__internal_9f1122d4741a1e145ad063fcb27dbe3d009aca4c2b0b945ce689972b3705c1f9->enter($__internal_9f1122d4741a1e145ad063fcb27dbe3d009aca4c2b0b945ce689972b3705c1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9f1122d4741a1e145ad063fcb27dbe3d009aca4c2b0b945ce689972b3705c1f9->leave($__internal_9f1122d4741a1e145ad063fcb27dbe3d009aca4c2b0b945ce689972b3705c1f9_prof);

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
