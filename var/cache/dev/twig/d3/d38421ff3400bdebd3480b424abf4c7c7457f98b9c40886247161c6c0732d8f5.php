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
        $__internal_413bbdd8e4d3881e7c184327ea73636710ab6799ad46620bcffa5459b1333a50 = $this->env->getExtension("native_profiler");
        $__internal_413bbdd8e4d3881e7c184327ea73636710ab6799ad46620bcffa5459b1333a50->enter($__internal_413bbdd8e4d3881e7c184327ea73636710ab6799ad46620bcffa5459b1333a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413bbdd8e4d3881e7c184327ea73636710ab6799ad46620bcffa5459b1333a50->leave($__internal_413bbdd8e4d3881e7c184327ea73636710ab6799ad46620bcffa5459b1333a50_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e639741c3b544f5c4fbe21b94ba671ab74dc93df642f3d3d1ef3c7b4b47f0588 = $this->env->getExtension("native_profiler");
        $__internal_e639741c3b544f5c4fbe21b94ba671ab74dc93df642f3d3d1ef3c7b4b47f0588->enter($__internal_e639741c3b544f5c4fbe21b94ba671ab74dc93df642f3d3d1ef3c7b4b47f0588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_e639741c3b544f5c4fbe21b94ba671ab74dc93df642f3d3d1ef3c7b4b47f0588->leave($__internal_e639741c3b544f5c4fbe21b94ba671ab74dc93df642f3d3d1ef3c7b4b47f0588_prof);

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
