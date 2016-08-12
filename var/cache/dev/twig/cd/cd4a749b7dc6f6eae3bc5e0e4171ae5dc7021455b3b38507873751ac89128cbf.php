<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e316f9688ea43ae9e210ff5c22f6e3485840d432441adc934a0d4d22ecee65cc = $this->env->getExtension("native_profiler");
        $__internal_e316f9688ea43ae9e210ff5c22f6e3485840d432441adc934a0d4d22ecee65cc->enter($__internal_e316f9688ea43ae9e210ff5c22f6e3485840d432441adc934a0d4d22ecee65cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e316f9688ea43ae9e210ff5c22f6e3485840d432441adc934a0d4d22ecee65cc->leave($__internal_e316f9688ea43ae9e210ff5c22f6e3485840d432441adc934a0d4d22ecee65cc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d3903a5cd789a2f5eb9f781bda145ffcea724fa4fa2c81c98d80384db545cd6 = $this->env->getExtension("native_profiler");
        $__internal_8d3903a5cd789a2f5eb9f781bda145ffcea724fa4fa2c81c98d80384db545cd6->enter($__internal_8d3903a5cd789a2f5eb9f781bda145ffcea724fa4fa2c81c98d80384db545cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8d3903a5cd789a2f5eb9f781bda145ffcea724fa4fa2c81c98d80384db545cd6->leave($__internal_8d3903a5cd789a2f5eb9f781bda145ffcea724fa4fa2c81c98d80384db545cd6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_46336a4bfdc42498938b54ecd25ddfbb9dc9d2d3cbe4995bda19749e6f5ba771 = $this->env->getExtension("native_profiler");
        $__internal_46336a4bfdc42498938b54ecd25ddfbb9dc9d2d3cbe4995bda19749e6f5ba771->enter($__internal_46336a4bfdc42498938b54ecd25ddfbb9dc9d2d3cbe4995bda19749e6f5ba771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_46336a4bfdc42498938b54ecd25ddfbb9dc9d2d3cbe4995bda19749e6f5ba771->leave($__internal_46336a4bfdc42498938b54ecd25ddfbb9dc9d2d3cbe4995bda19749e6f5ba771_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
