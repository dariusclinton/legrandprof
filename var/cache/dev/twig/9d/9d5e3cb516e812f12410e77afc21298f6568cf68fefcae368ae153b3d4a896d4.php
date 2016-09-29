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
        $__internal_b71d8b08633dbf3638b504804885baa8f368d6cad4f2a2fd8e1ba7fbffb248c9 = $this->env->getExtension("native_profiler");
        $__internal_b71d8b08633dbf3638b504804885baa8f368d6cad4f2a2fd8e1ba7fbffb248c9->enter($__internal_b71d8b08633dbf3638b504804885baa8f368d6cad4f2a2fd8e1ba7fbffb248c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71d8b08633dbf3638b504804885baa8f368d6cad4f2a2fd8e1ba7fbffb248c9->leave($__internal_b71d8b08633dbf3638b504804885baa8f368d6cad4f2a2fd8e1ba7fbffb248c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec733e130a76a83acaf8d56256299613970587500b2f21fef844ccffef3f1b62 = $this->env->getExtension("native_profiler");
        $__internal_ec733e130a76a83acaf8d56256299613970587500b2f21fef844ccffef3f1b62->enter($__internal_ec733e130a76a83acaf8d56256299613970587500b2f21fef844ccffef3f1b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ec733e130a76a83acaf8d56256299613970587500b2f21fef844ccffef3f1b62->leave($__internal_ec733e130a76a83acaf8d56256299613970587500b2f21fef844ccffef3f1b62_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c75042792e4114a94729233332e1935b5721bc8d5cd15292c0758e23c787393e = $this->env->getExtension("native_profiler");
        $__internal_c75042792e4114a94729233332e1935b5721bc8d5cd15292c0758e23c787393e->enter($__internal_c75042792e4114a94729233332e1935b5721bc8d5cd15292c0758e23c787393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_c75042792e4114a94729233332e1935b5721bc8d5cd15292c0758e23c787393e->leave($__internal_c75042792e4114a94729233332e1935b5721bc8d5cd15292c0758e23c787393e_prof);

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
