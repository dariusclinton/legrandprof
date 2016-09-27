<?php

/* LGPUserBundle:NouvelleCategorieCours:add.html.twig */
class __TwigTemplate_71999b132578628f8d4e1c2c094331800c290a9ceb98d63f9850f0d609e5242a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 1);
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
        $__internal_8a9c006742716722870dcd24143d867f3bd53386580d2540b2d2821c23d5e378 = $this->env->getExtension("native_profiler");
        $__internal_8a9c006742716722870dcd24143d867f3bd53386580d2540b2d2821c23d5e378->enter($__internal_8a9c006742716722870dcd24143d867f3bd53386580d2540b2d2821c23d5e378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9c006742716722870dcd24143d867f3bd53386580d2540b2d2821c23d5e378->leave($__internal_8a9c006742716722870dcd24143d867f3bd53386580d2540b2d2821c23d5e378_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3316f93ec99a8611105905efb47432970ff0fc6ebde856d82971e3969d67985a = $this->env->getExtension("native_profiler");
        $__internal_3316f93ec99a8611105905efb47432970ff0fc6ebde856d82971e3969d67985a->enter($__internal_3316f93ec99a8611105905efb47432970ff0fc6ebde856d82971e3969d67985a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3316f93ec99a8611105905efb47432970ff0fc6ebde856d82971e3969d67985a->leave($__internal_3316f93ec99a8611105905efb47432970ff0fc6ebde856d82971e3969d67985a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f7c302d9f8aa9812837a60a4249f969f99e2c41019535ec9f0b3f30c0321c2f = $this->env->getExtension("native_profiler");
        $__internal_8f7c302d9f8aa9812837a60a4249f969f99e2c41019535ec9f0b3f30c0321c2f->enter($__internal_8f7c302d9f8aa9812837a60a4249f969f99e2c41019535ec9f0b3f30c0321c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Proposition d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_8f7c302d9f8aa9812837a60a4249f969f99e2c41019535ec9f0b3f30c0321c2f->leave($__internal_8f7c302d9f8aa9812837a60a4249f969f99e2c41019535ec9f0b3f30c0321c2f_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:NouvelleCategorieCours:add.html.twig";
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
  Proposition d'une nouvelle catégorie de cours - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Proposition d'une nouvelle catégorie de cours </h1>
    
  {% include 'LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
