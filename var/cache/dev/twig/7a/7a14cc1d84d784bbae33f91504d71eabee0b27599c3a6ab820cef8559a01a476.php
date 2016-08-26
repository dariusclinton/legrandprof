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
        $__internal_a3627f9ef75e76be3aa751af10b29a377d7e7a768bab4f5edc5cabb02639346b = $this->env->getExtension("native_profiler");
        $__internal_a3627f9ef75e76be3aa751af10b29a377d7e7a768bab4f5edc5cabb02639346b->enter($__internal_a3627f9ef75e76be3aa751af10b29a377d7e7a768bab4f5edc5cabb02639346b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a3627f9ef75e76be3aa751af10b29a377d7e7a768bab4f5edc5cabb02639346b->leave($__internal_a3627f9ef75e76be3aa751af10b29a377d7e7a768bab4f5edc5cabb02639346b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f4c8b3543fa9a4c0a5d66469f0c4f2f17e194b1ccaeb585671cd06a63eb00df = $this->env->getExtension("native_profiler");
        $__internal_6f4c8b3543fa9a4c0a5d66469f0c4f2f17e194b1ccaeb585671cd06a63eb00df->enter($__internal_6f4c8b3543fa9a4c0a5d66469f0c4f2f17e194b1ccaeb585671cd06a63eb00df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6f4c8b3543fa9a4c0a5d66469f0c4f2f17e194b1ccaeb585671cd06a63eb00df->leave($__internal_6f4c8b3543fa9a4c0a5d66469f0c4f2f17e194b1ccaeb585671cd06a63eb00df_prof);

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
