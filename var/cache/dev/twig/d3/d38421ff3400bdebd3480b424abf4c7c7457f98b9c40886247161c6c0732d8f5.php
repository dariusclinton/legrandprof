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
        $__internal_eedd28a3732cdab6e9ba71f2c0116e0726f68178cf231fc23e1af1c91df8162d = $this->env->getExtension("native_profiler");
        $__internal_eedd28a3732cdab6e9ba71f2c0116e0726f68178cf231fc23e1af1c91df8162d->enter($__internal_eedd28a3732cdab6e9ba71f2c0116e0726f68178cf231fc23e1af1c91df8162d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eedd28a3732cdab6e9ba71f2c0116e0726f68178cf231fc23e1af1c91df8162d->leave($__internal_eedd28a3732cdab6e9ba71f2c0116e0726f68178cf231fc23e1af1c91df8162d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_973e02e93657dac6e06f6d510c3b00eea8fafbb977110bb4a055d8b809c451e4 = $this->env->getExtension("native_profiler");
        $__internal_973e02e93657dac6e06f6d510c3b00eea8fafbb977110bb4a055d8b809c451e4->enter($__internal_973e02e93657dac6e06f6d510c3b00eea8fafbb977110bb4a055d8b809c451e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_973e02e93657dac6e06f6d510c3b00eea8fafbb977110bb4a055d8b809c451e4->leave($__internal_973e02e93657dac6e06f6d510c3b00eea8fafbb977110bb4a055d8b809c451e4_prof);

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
