<?php

/* LGPUserBundle:NouvelleCategorieCours:update.html.twig */
class __TwigTemplate_a41e6b3e9c2b4858375f3b8431fafbe203aed337ed3a00fa9cfa8424069d2fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6136b4596cbb340ae029e5683b50d8f034e22a5c24724fa1f0b51b052fe0316b = $this->env->getExtension("native_profiler");
        $__internal_6136b4596cbb340ae029e5683b50d8f034e22a5c24724fa1f0b51b052fe0316b->enter($__internal_6136b4596cbb340ae029e5683b50d8f034e22a5c24724fa1f0b51b052fe0316b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6136b4596cbb340ae029e5683b50d8f034e22a5c24724fa1f0b51b052fe0316b->leave($__internal_6136b4596cbb340ae029e5683b50d8f034e22a5c24724fa1f0b51b052fe0316b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d038a933d0c086466eddd0e93832e91ccdb33fab94d8a4b5944d91cfd7bd26c6 = $this->env->getExtension("native_profiler");
        $__internal_d038a933d0c086466eddd0e93832e91ccdb33fab94d8a4b5944d91cfd7bd26c6->enter($__internal_d038a933d0c086466eddd0e93832e91ccdb33fab94d8a4b5944d91cfd7bd26c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d038a933d0c086466eddd0e93832e91ccdb33fab94d8a4b5944d91cfd7bd26c6->leave($__internal_d038a933d0c086466eddd0e93832e91ccdb33fab94d8a4b5944d91cfd7bd26c6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dccd495b2f44ec07340bdb5da31d079d1b584f8adcdf5cd78c90d1d2697dc90 = $this->env->getExtension("native_profiler");
        $__internal_4dccd495b2f44ec07340bdb5da31d079d1b584f8adcdf5cd78c90d1d2697dc90->enter($__internal_4dccd495b2f44ec07340bdb5da31d079d1b584f8adcdf5cd78c90d1d2697dc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_4dccd495b2f44ec07340bdb5da31d079d1b584f8adcdf5cd78c90d1d2697dc90->leave($__internal_4dccd495b2f44ec07340bdb5da31d079d1b584f8adcdf5cd78c90d1d2697dc90_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:NouvelleCategorieCours:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mise à jour d'une nouvelle catégorie de cours - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  {% include 'LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
