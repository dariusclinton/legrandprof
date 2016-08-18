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
        $__internal_6a636c1ee0f07a244b05c406156200d45d5a8267766aa6afb08232ca5517752f = $this->env->getExtension("native_profiler");
        $__internal_6a636c1ee0f07a244b05c406156200d45d5a8267766aa6afb08232ca5517752f->enter($__internal_6a636c1ee0f07a244b05c406156200d45d5a8267766aa6afb08232ca5517752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6a636c1ee0f07a244b05c406156200d45d5a8267766aa6afb08232ca5517752f->leave($__internal_6a636c1ee0f07a244b05c406156200d45d5a8267766aa6afb08232ca5517752f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c4dda5194c4bd95ac00b1e0681dcfae11649cf959d8257885a6e845cb055bbb = $this->env->getExtension("native_profiler");
        $__internal_2c4dda5194c4bd95ac00b1e0681dcfae11649cf959d8257885a6e845cb055bbb->enter($__internal_2c4dda5194c4bd95ac00b1e0681dcfae11649cf959d8257885a6e845cb055bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2c4dda5194c4bd95ac00b1e0681dcfae11649cf959d8257885a6e845cb055bbb->leave($__internal_2c4dda5194c4bd95ac00b1e0681dcfae11649cf959d8257885a6e845cb055bbb_prof);

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
