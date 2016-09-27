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
        $__internal_4ba8926676441c2766ebac760887d4d292ff47911fd060426dcbbbd9d4f54985 = $this->env->getExtension("native_profiler");
        $__internal_4ba8926676441c2766ebac760887d4d292ff47911fd060426dcbbbd9d4f54985->enter($__internal_4ba8926676441c2766ebac760887d4d292ff47911fd060426dcbbbd9d4f54985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba8926676441c2766ebac760887d4d292ff47911fd060426dcbbbd9d4f54985->leave($__internal_4ba8926676441c2766ebac760887d4d292ff47911fd060426dcbbbd9d4f54985_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_127e9e7e98d6bca15da12564a323249cda2d563b759a87f2f42e0de985d01c70 = $this->env->getExtension("native_profiler");
        $__internal_127e9e7e98d6bca15da12564a323249cda2d563b759a87f2f42e0de985d01c70->enter($__internal_127e9e7e98d6bca15da12564a323249cda2d563b759a87f2f42e0de985d01c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_127e9e7e98d6bca15da12564a323249cda2d563b759a87f2f42e0de985d01c70->leave($__internal_127e9e7e98d6bca15da12564a323249cda2d563b759a87f2f42e0de985d01c70_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6913bfc71d1bf9b21e5916d0e20400b21de54f3e526e021ed16635ba26512057 = $this->env->getExtension("native_profiler");
        $__internal_6913bfc71d1bf9b21e5916d0e20400b21de54f3e526e021ed16635ba26512057->enter($__internal_6913bfc71d1bf9b21e5916d0e20400b21de54f3e526e021ed16635ba26512057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_6913bfc71d1bf9b21e5916d0e20400b21de54f3e526e021ed16635ba26512057->leave($__internal_6913bfc71d1bf9b21e5916d0e20400b21de54f3e526e021ed16635ba26512057_prof);

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
