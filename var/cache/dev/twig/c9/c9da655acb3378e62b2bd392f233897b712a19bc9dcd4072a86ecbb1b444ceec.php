<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_a93338cbd748ce6f4688999482470fc650fc1880887c7e4e364f085839f12335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 1);
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
        $__internal_93242a7f93c6e1a16b3b2f17c8a124b4d78eaa80170f949eb6303aecd183ece0 = $this->env->getExtension("native_profiler");
        $__internal_93242a7f93c6e1a16b3b2f17c8a124b4d78eaa80170f949eb6303aecd183ece0->enter($__internal_93242a7f93c6e1a16b3b2f17c8a124b4d78eaa80170f949eb6303aecd183ece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93242a7f93c6e1a16b3b2f17c8a124b4d78eaa80170f949eb6303aecd183ece0->leave($__internal_93242a7f93c6e1a16b3b2f17c8a124b4d78eaa80170f949eb6303aecd183ece0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_130f4c5c8cc931730f8d5066b016977bffba84b183abb3470644c1dedaf99750 = $this->env->getExtension("native_profiler");
        $__internal_130f4c5c8cc931730f8d5066b016977bffba84b183abb3470644c1dedaf99750->enter($__internal_130f4c5c8cc931730f8d5066b016977bffba84b183abb3470644c1dedaf99750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_130f4c5c8cc931730f8d5066b016977bffba84b183abb3470644c1dedaf99750->leave($__internal_130f4c5c8cc931730f8d5066b016977bffba84b183abb3470644c1dedaf99750_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eabebcee7a932e076d94471e3d34f721964231fb8af06589a4e359527f4edf5 = $this->env->getExtension("native_profiler");
        $__internal_9eabebcee7a932e076d94471e3d34f721964231fb8af06589a4e359527f4edf5->enter($__internal_9eabebcee7a932e076d94471e3d34f721964231fb8af06589a4e359527f4edf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_9eabebcee7a932e076d94471e3d34f721964231fb8af06589a4e359527f4edf5->leave($__internal_9eabebcee7a932e076d94471e3d34f721964231fb8af06589a4e359527f4edf5_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mise à jour d'une indisponibilité - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Mise à d'une indiponibilité</h1>
  
  {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
