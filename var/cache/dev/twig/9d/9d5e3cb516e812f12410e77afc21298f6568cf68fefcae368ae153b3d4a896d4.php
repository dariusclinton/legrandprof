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
        $__internal_eb93fbd895a160c638c5dbfc08c690f224a3640d3de2b22f071dff8b0a6609ab = $this->env->getExtension("native_profiler");
        $__internal_eb93fbd895a160c638c5dbfc08c690f224a3640d3de2b22f071dff8b0a6609ab->enter($__internal_eb93fbd895a160c638c5dbfc08c690f224a3640d3de2b22f071dff8b0a6609ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb93fbd895a160c638c5dbfc08c690f224a3640d3de2b22f071dff8b0a6609ab->leave($__internal_eb93fbd895a160c638c5dbfc08c690f224a3640d3de2b22f071dff8b0a6609ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_271e5ae0b4f66637d120a727d40b42d82119fd48833112e6c87ae61987125c8a = $this->env->getExtension("native_profiler");
        $__internal_271e5ae0b4f66637d120a727d40b42d82119fd48833112e6c87ae61987125c8a->enter($__internal_271e5ae0b4f66637d120a727d40b42d82119fd48833112e6c87ae61987125c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_271e5ae0b4f66637d120a727d40b42d82119fd48833112e6c87ae61987125c8a->leave($__internal_271e5ae0b4f66637d120a727d40b42d82119fd48833112e6c87ae61987125c8a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_41683e440461d70c53eb703d67e475af7d3f95f7ad545e89edfc1daa21fb83e1 = $this->env->getExtension("native_profiler");
        $__internal_41683e440461d70c53eb703d67e475af7d3f95f7ad545e89edfc1daa21fb83e1->enter($__internal_41683e440461d70c53eb703d67e475af7d3f95f7ad545e89edfc1daa21fb83e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_41683e440461d70c53eb703d67e475af7d3f95f7ad545e89edfc1daa21fb83e1->leave($__internal_41683e440461d70c53eb703d67e475af7d3f95f7ad545e89edfc1daa21fb83e1_prof);

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
