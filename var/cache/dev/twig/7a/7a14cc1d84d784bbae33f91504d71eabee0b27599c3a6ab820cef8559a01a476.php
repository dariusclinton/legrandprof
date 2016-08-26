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
        $__internal_9988c9b5aa52a624604ccee5a4787dbeee7d72ade61b113c77b30bf0e772bf78 = $this->env->getExtension("native_profiler");
        $__internal_9988c9b5aa52a624604ccee5a4787dbeee7d72ade61b113c77b30bf0e772bf78->enter($__internal_9988c9b5aa52a624604ccee5a4787dbeee7d72ade61b113c77b30bf0e772bf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9988c9b5aa52a624604ccee5a4787dbeee7d72ade61b113c77b30bf0e772bf78->leave($__internal_9988c9b5aa52a624604ccee5a4787dbeee7d72ade61b113c77b30bf0e772bf78_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7a6835f2fc79e81caef164c35d077c4f2bb7b0670c06963c4fe35ccbc2406a7 = $this->env->getExtension("native_profiler");
        $__internal_d7a6835f2fc79e81caef164c35d077c4f2bb7b0670c06963c4fe35ccbc2406a7->enter($__internal_d7a6835f2fc79e81caef164c35d077c4f2bb7b0670c06963c4fe35ccbc2406a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d7a6835f2fc79e81caef164c35d077c4f2bb7b0670c06963c4fe35ccbc2406a7->leave($__internal_d7a6835f2fc79e81caef164c35d077c4f2bb7b0670c06963c4fe35ccbc2406a7_prof);

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
