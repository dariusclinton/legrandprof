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
        $__internal_d37e845e5c8eeb799e9e3d8eb5c31d9eaa22dada07a8bdbdee41dd13b268150e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37e845e5c8eeb799e9e3d8eb5c31d9eaa22dada07a8bdbdee41dd13b268150e->enter($__internal_d37e845e5c8eeb799e9e3d8eb5c31d9eaa22dada07a8bdbdee41dd13b268150e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d37e845e5c8eeb799e9e3d8eb5c31d9eaa22dada07a8bdbdee41dd13b268150e->leave($__internal_d37e845e5c8eeb799e9e3d8eb5c31d9eaa22dada07a8bdbdee41dd13b268150e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54ae8381639b91810d8cf956a98eeed031c3b367b88731d0ad94e187a5372ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ae8381639b91810d8cf956a98eeed031c3b367b88731d0ad94e187a5372ac6->enter($__internal_54ae8381639b91810d8cf956a98eeed031c3b367b88731d0ad94e187a5372ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_54ae8381639b91810d8cf956a98eeed031c3b367b88731d0ad94e187a5372ac6->leave($__internal_54ae8381639b91810d8cf956a98eeed031c3b367b88731d0ad94e187a5372ac6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f01fe6e81ce755e01b23e5331bd5f12048f261ab0438a6c6039357d92f718cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f01fe6e81ce755e01b23e5331bd5f12048f261ab0438a6c6039357d92f718cf->enter($__internal_5f01fe6e81ce755e01b23e5331bd5f12048f261ab0438a6c6039357d92f718cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_5f01fe6e81ce755e01b23e5331bd5f12048f261ab0438a6c6039357d92f718cf->leave($__internal_5f01fe6e81ce755e01b23e5331bd5f12048f261ab0438a6c6039357d92f718cf_prof);

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
