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
        $__internal_aa265ab17f78cd17591e2a3896ec689347c52b87424a5b06b49a97ea4dd5d6be = $this->env->getExtension("native_profiler");
        $__internal_aa265ab17f78cd17591e2a3896ec689347c52b87424a5b06b49a97ea4dd5d6be->enter($__internal_aa265ab17f78cd17591e2a3896ec689347c52b87424a5b06b49a97ea4dd5d6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa265ab17f78cd17591e2a3896ec689347c52b87424a5b06b49a97ea4dd5d6be->leave($__internal_aa265ab17f78cd17591e2a3896ec689347c52b87424a5b06b49a97ea4dd5d6be_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe108528715b02488ae2a2df1e6623ac57dbc6aab46961a7fcee693609134805 = $this->env->getExtension("native_profiler");
        $__internal_fe108528715b02488ae2a2df1e6623ac57dbc6aab46961a7fcee693609134805->enter($__internal_fe108528715b02488ae2a2df1e6623ac57dbc6aab46961a7fcee693609134805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_fe108528715b02488ae2a2df1e6623ac57dbc6aab46961a7fcee693609134805->leave($__internal_fe108528715b02488ae2a2df1e6623ac57dbc6aab46961a7fcee693609134805_prof);

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
