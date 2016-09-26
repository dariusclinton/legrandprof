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
        $__internal_1d150921556ad4dbbe8b7ddc5c5dc80702fe5d61093d071b301b823a6c923bed = $this->env->getExtension("native_profiler");
        $__internal_1d150921556ad4dbbe8b7ddc5c5dc80702fe5d61093d071b301b823a6c923bed->enter($__internal_1d150921556ad4dbbe8b7ddc5c5dc80702fe5d61093d071b301b823a6c923bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d150921556ad4dbbe8b7ddc5c5dc80702fe5d61093d071b301b823a6c923bed->leave($__internal_1d150921556ad4dbbe8b7ddc5c5dc80702fe5d61093d071b301b823a6c923bed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a2379b4a063ed73b32a4c06e3937e8b0b3ce260d1069910ffc1266e3c25754d = $this->env->getExtension("native_profiler");
        $__internal_4a2379b4a063ed73b32a4c06e3937e8b0b3ce260d1069910ffc1266e3c25754d->enter($__internal_4a2379b4a063ed73b32a4c06e3937e8b0b3ce260d1069910ffc1266e3c25754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4a2379b4a063ed73b32a4c06e3937e8b0b3ce260d1069910ffc1266e3c25754d->leave($__internal_4a2379b4a063ed73b32a4c06e3937e8b0b3ce260d1069910ffc1266e3c25754d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c750b78e9c83e72844f02d8f536044aeb92fdb5f6b4eabc921a7ea36d0bafec0 = $this->env->getExtension("native_profiler");
        $__internal_c750b78e9c83e72844f02d8f536044aeb92fdb5f6b4eabc921a7ea36d0bafec0->enter($__internal_c750b78e9c83e72844f02d8f536044aeb92fdb5f6b4eabc921a7ea36d0bafec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Proposition d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_c750b78e9c83e72844f02d8f536044aeb92fdb5f6b4eabc921a7ea36d0bafec0->leave($__internal_c750b78e9c83e72844f02d8f536044aeb92fdb5f6b4eabc921a7ea36d0bafec0_prof);

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
