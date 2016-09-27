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
        $__internal_7c30a1dae97135eb2b26823b3b266a8b641aec47abb5fefd71c850ac32357c53 = $this->env->getExtension("native_profiler");
        $__internal_7c30a1dae97135eb2b26823b3b266a8b641aec47abb5fefd71c850ac32357c53->enter($__internal_7c30a1dae97135eb2b26823b3b266a8b641aec47abb5fefd71c850ac32357c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c30a1dae97135eb2b26823b3b266a8b641aec47abb5fefd71c850ac32357c53->leave($__internal_7c30a1dae97135eb2b26823b3b266a8b641aec47abb5fefd71c850ac32357c53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56be2b4b9f476add325b942850a17660b0084be2324589cced15d7bed954d9ef = $this->env->getExtension("native_profiler");
        $__internal_56be2b4b9f476add325b942850a17660b0084be2324589cced15d7bed954d9ef->enter($__internal_56be2b4b9f476add325b942850a17660b0084be2324589cced15d7bed954d9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_56be2b4b9f476add325b942850a17660b0084be2324589cced15d7bed954d9ef->leave($__internal_56be2b4b9f476add325b942850a17660b0084be2324589cced15d7bed954d9ef_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bc13fb6f02650267aad869a6087059d39f772f595be3ccf462f52b1162af63f = $this->env->getExtension("native_profiler");
        $__internal_2bc13fb6f02650267aad869a6087059d39f772f595be3ccf462f52b1162af63f->enter($__internal_2bc13fb6f02650267aad869a6087059d39f772f595be3ccf462f52b1162af63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Proposition d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_2bc13fb6f02650267aad869a6087059d39f772f595be3ccf462f52b1162af63f->leave($__internal_2bc13fb6f02650267aad869a6087059d39f772f595be3ccf462f52b1162af63f_prof);

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
