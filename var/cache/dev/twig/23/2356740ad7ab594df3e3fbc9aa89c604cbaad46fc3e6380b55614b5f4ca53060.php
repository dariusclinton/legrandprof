<?php

/* LGPUserBundle:NouvelleCategorieCours:update.html.twig */
class __TwigTemplate_fed20faa3451eb915253552d69d5c867ab27407b6a219e01b2ae6fdf96cd2082 extends Twig_Template
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
        $__internal_aeda0bbcd055d37626326d80717e4ab45b9644f5bf43c41cf160910577c89ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeda0bbcd055d37626326d80717e4ab45b9644f5bf43c41cf160910577c89ecb->enter($__internal_aeda0bbcd055d37626326d80717e4ab45b9644f5bf43c41cf160910577c89ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeda0bbcd055d37626326d80717e4ab45b9644f5bf43c41cf160910577c89ecb->leave($__internal_aeda0bbcd055d37626326d80717e4ab45b9644f5bf43c41cf160910577c89ecb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df9bc2111f1b1a09bbe0fe385e08ea7f0650cbf9389272aa3b9c534ec9a4031b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9bc2111f1b1a09bbe0fe385e08ea7f0650cbf9389272aa3b9c534ec9a4031b->enter($__internal_df9bc2111f1b1a09bbe0fe385e08ea7f0650cbf9389272aa3b9c534ec9a4031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_df9bc2111f1b1a09bbe0fe385e08ea7f0650cbf9389272aa3b9c534ec9a4031b->leave($__internal_df9bc2111f1b1a09bbe0fe385e08ea7f0650cbf9389272aa3b9c534ec9a4031b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bc36399697e926f6bd76a2b19875d97341bb4d182c7eb33bf9342eb432c73f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc36399697e926f6bd76a2b19875d97341bb4d182c7eb33bf9342eb432c73f0->enter($__internal_3bc36399697e926f6bd76a2b19875d97341bb4d182c7eb33bf9342eb432c73f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_3bc36399697e926f6bd76a2b19875d97341bb4d182c7eb33bf9342eb432c73f0->leave($__internal_3bc36399697e926f6bd76a2b19875d97341bb4d182c7eb33bf9342eb432c73f0_prof);

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
