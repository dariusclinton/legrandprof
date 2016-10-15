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
        $__internal_601406d217d6908c6ba343be4448b8dc042cb9e9595ac57beab36c900e1d8720 = $this->env->getExtension("native_profiler");
        $__internal_601406d217d6908c6ba343be4448b8dc042cb9e9595ac57beab36c900e1d8720->enter($__internal_601406d217d6908c6ba343be4448b8dc042cb9e9595ac57beab36c900e1d8720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_601406d217d6908c6ba343be4448b8dc042cb9e9595ac57beab36c900e1d8720->leave($__internal_601406d217d6908c6ba343be4448b8dc042cb9e9595ac57beab36c900e1d8720_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad0f9c784086a15b486b3e99e0200c08cad7a518be7b72212bc314316981aeb0 = $this->env->getExtension("native_profiler");
        $__internal_ad0f9c784086a15b486b3e99e0200c08cad7a518be7b72212bc314316981aeb0->enter($__internal_ad0f9c784086a15b486b3e99e0200c08cad7a518be7b72212bc314316981aeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ad0f9c784086a15b486b3e99e0200c08cad7a518be7b72212bc314316981aeb0->leave($__internal_ad0f9c784086a15b486b3e99e0200c08cad7a518be7b72212bc314316981aeb0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab85b55d01bc6df211dd838b3827c6125574585019a9a5c7d6d74a4958ff0d40 = $this->env->getExtension("native_profiler");
        $__internal_ab85b55d01bc6df211dd838b3827c6125574585019a9a5c7d6d74a4958ff0d40->enter($__internal_ab85b55d01bc6df211dd838b3827c6125574585019a9a5c7d6d74a4958ff0d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_ab85b55d01bc6df211dd838b3827c6125574585019a9a5c7d6d74a4958ff0d40->leave($__internal_ab85b55d01bc6df211dd838b3827c6125574585019a9a5c7d6d74a4958ff0d40_prof);

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
