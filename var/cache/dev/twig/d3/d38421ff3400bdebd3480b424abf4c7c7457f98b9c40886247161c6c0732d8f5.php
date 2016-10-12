<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_00e3784b1d0351a3c64d5ea4c57ebfd277a7a03e6bd1b9a37d34ec84d923836a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88d62a3c281ab615e7124a20687ce67fed65da0ba473f320edca0214446f7063 = $this->env->getExtension("native_profiler");
        $__internal_88d62a3c281ab615e7124a20687ce67fed65da0ba473f320edca0214446f7063->enter($__internal_88d62a3c281ab615e7124a20687ce67fed65da0ba473f320edca0214446f7063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d62a3c281ab615e7124a20687ce67fed65da0ba473f320edca0214446f7063->leave($__internal_88d62a3c281ab615e7124a20687ce67fed65da0ba473f320edca0214446f7063_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcc409f7787af9fff0d689e4f23622c0170f408df2321cfd3d020526af40f4b9 = $this->env->getExtension("native_profiler");
        $__internal_dcc409f7787af9fff0d689e4f23622c0170f408df2321cfd3d020526af40f4b9->enter($__internal_dcc409f7787af9fff0d689e4f23622c0170f408df2321cfd3d020526af40f4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_dcc409f7787af9fff0d689e4f23622c0170f408df2321cfd3d020526af40f4b9->leave($__internal_dcc409f7787af9fff0d689e4f23622c0170f408df2321cfd3d020526af40f4b9_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"::layout.html.twig\" %}

{% block body %}



{% endblock %}
";
    }
}
