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
        $__internal_c1af37f0fda6f1348125cf0748a5c583cab19c3b601f57b47af465fec5784932 = $this->env->getExtension("native_profiler");
        $__internal_c1af37f0fda6f1348125cf0748a5c583cab19c3b601f57b47af465fec5784932->enter($__internal_c1af37f0fda6f1348125cf0748a5c583cab19c3b601f57b47af465fec5784932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1af37f0fda6f1348125cf0748a5c583cab19c3b601f57b47af465fec5784932->leave($__internal_c1af37f0fda6f1348125cf0748a5c583cab19c3b601f57b47af465fec5784932_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1c7becbff4c5c692a987116b39bc19af9a5da0b1b9fac462a076d707872dcc9 = $this->env->getExtension("native_profiler");
        $__internal_c1c7becbff4c5c692a987116b39bc19af9a5da0b1b9fac462a076d707872dcc9->enter($__internal_c1c7becbff4c5c692a987116b39bc19af9a5da0b1b9fac462a076d707872dcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c1c7becbff4c5c692a987116b39bc19af9a5da0b1b9fac462a076d707872dcc9->leave($__internal_c1c7becbff4c5c692a987116b39bc19af9a5da0b1b9fac462a076d707872dcc9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_178f15497b44f7f4e1a529460134bb35271c0d38a29c34cddb6f1a94ef0389e0 = $this->env->getExtension("native_profiler");
        $__internal_178f15497b44f7f4e1a529460134bb35271c0d38a29c34cddb6f1a94ef0389e0->enter($__internal_178f15497b44f7f4e1a529460134bb35271c0d38a29c34cddb6f1a94ef0389e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_178f15497b44f7f4e1a529460134bb35271c0d38a29c34cddb6f1a94ef0389e0->leave($__internal_178f15497b44f7f4e1a529460134bb35271c0d38a29c34cddb6f1a94ef0389e0_prof);

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
