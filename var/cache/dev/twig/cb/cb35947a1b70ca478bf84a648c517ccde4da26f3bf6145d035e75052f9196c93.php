<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_17eb534f6c255540da2e9a315b12e5c2cbb8ce4d6421bdae09fb284b465279e8 extends Twig_Template
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
        $__internal_48ea1aaf82943c737dae80cf1afdbbd2660134350d0b31288442fbf13143ae2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ea1aaf82943c737dae80cf1afdbbd2660134350d0b31288442fbf13143ae2d->enter($__internal_48ea1aaf82943c737dae80cf1afdbbd2660134350d0b31288442fbf13143ae2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48ea1aaf82943c737dae80cf1afdbbd2660134350d0b31288442fbf13143ae2d->leave($__internal_48ea1aaf82943c737dae80cf1afdbbd2660134350d0b31288442fbf13143ae2d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6464e8801c8033534f3e44a125db450c7552439eac5c5426036e76a8dcd2285b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6464e8801c8033534f3e44a125db450c7552439eac5c5426036e76a8dcd2285b->enter($__internal_6464e8801c8033534f3e44a125db450c7552439eac5c5426036e76a8dcd2285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_6464e8801c8033534f3e44a125db450c7552439eac5c5426036e76a8dcd2285b->leave($__internal_6464e8801c8033534f3e44a125db450c7552439eac5c5426036e76a8dcd2285b_prof);

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
