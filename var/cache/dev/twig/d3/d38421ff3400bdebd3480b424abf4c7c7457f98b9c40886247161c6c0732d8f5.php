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
        $__internal_c05b863a65f77e7d0e02e9bf13687e556631c9073857336c5bd5a091d0d114ce = $this->env->getExtension("native_profiler");
        $__internal_c05b863a65f77e7d0e02e9bf13687e556631c9073857336c5bd5a091d0d114ce->enter($__internal_c05b863a65f77e7d0e02e9bf13687e556631c9073857336c5bd5a091d0d114ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05b863a65f77e7d0e02e9bf13687e556631c9073857336c5bd5a091d0d114ce->leave($__internal_c05b863a65f77e7d0e02e9bf13687e556631c9073857336c5bd5a091d0d114ce_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_12fbfa916a3ba55b445c6606cf3ccacfef4037832aacbafad5e02bf56632fd01 = $this->env->getExtension("native_profiler");
        $__internal_12fbfa916a3ba55b445c6606cf3ccacfef4037832aacbafad5e02bf56632fd01->enter($__internal_12fbfa916a3ba55b445c6606cf3ccacfef4037832aacbafad5e02bf56632fd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_12fbfa916a3ba55b445c6606cf3ccacfef4037832aacbafad5e02bf56632fd01->leave($__internal_12fbfa916a3ba55b445c6606cf3ccacfef4037832aacbafad5e02bf56632fd01_prof);

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
