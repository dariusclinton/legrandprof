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
        $__internal_d9a95ecf33f399591a642a7dee21ccb9ccabe7e8f6080315dce5391bafacc658 = $this->env->getExtension("native_profiler");
        $__internal_d9a95ecf33f399591a642a7dee21ccb9ccabe7e8f6080315dce5391bafacc658->enter($__internal_d9a95ecf33f399591a642a7dee21ccb9ccabe7e8f6080315dce5391bafacc658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a95ecf33f399591a642a7dee21ccb9ccabe7e8f6080315dce5391bafacc658->leave($__internal_d9a95ecf33f399591a642a7dee21ccb9ccabe7e8f6080315dce5391bafacc658_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a0031c47a69877d5f30125efe6812bd9261494f33896c21b44f6923f002bb3f = $this->env->getExtension("native_profiler");
        $__internal_0a0031c47a69877d5f30125efe6812bd9261494f33896c21b44f6923f002bb3f->enter($__internal_0a0031c47a69877d5f30125efe6812bd9261494f33896c21b44f6923f002bb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0a0031c47a69877d5f30125efe6812bd9261494f33896c21b44f6923f002bb3f->leave($__internal_0a0031c47a69877d5f30125efe6812bd9261494f33896c21b44f6923f002bb3f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6bf311eccbdc8d0aaa1273df835a33a1302974fefb60ea1cd4358743ddbd117 = $this->env->getExtension("native_profiler");
        $__internal_f6bf311eccbdc8d0aaa1273df835a33a1302974fefb60ea1cd4358743ddbd117->enter($__internal_f6bf311eccbdc8d0aaa1273df835a33a1302974fefb60ea1cd4358743ddbd117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Proposition d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_f6bf311eccbdc8d0aaa1273df835a33a1302974fefb60ea1cd4358743ddbd117->leave($__internal_f6bf311eccbdc8d0aaa1273df835a33a1302974fefb60ea1cd4358743ddbd117_prof);

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
