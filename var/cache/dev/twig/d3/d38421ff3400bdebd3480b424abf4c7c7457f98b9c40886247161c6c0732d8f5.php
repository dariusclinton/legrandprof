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
        $__internal_ffc3f7c5b173836def00bdc01a92527c5fb5d9964d76a15e0e6751ed6b7dc044 = $this->env->getExtension("native_profiler");
        $__internal_ffc3f7c5b173836def00bdc01a92527c5fb5d9964d76a15e0e6751ed6b7dc044->enter($__internal_ffc3f7c5b173836def00bdc01a92527c5fb5d9964d76a15e0e6751ed6b7dc044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffc3f7c5b173836def00bdc01a92527c5fb5d9964d76a15e0e6751ed6b7dc044->leave($__internal_ffc3f7c5b173836def00bdc01a92527c5fb5d9964d76a15e0e6751ed6b7dc044_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cc217691b1ca7b4793dc42cf76d87ce5efaca4ea8ed000236fcbc7bd1cb2cdc = $this->env->getExtension("native_profiler");
        $__internal_1cc217691b1ca7b4793dc42cf76d87ce5efaca4ea8ed000236fcbc7bd1cb2cdc->enter($__internal_1cc217691b1ca7b4793dc42cf76d87ce5efaca4ea8ed000236fcbc7bd1cb2cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_1cc217691b1ca7b4793dc42cf76d87ce5efaca4ea8ed000236fcbc7bd1cb2cdc->leave($__internal_1cc217691b1ca7b4793dc42cf76d87ce5efaca4ea8ed000236fcbc7bd1cb2cdc_prof);

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
