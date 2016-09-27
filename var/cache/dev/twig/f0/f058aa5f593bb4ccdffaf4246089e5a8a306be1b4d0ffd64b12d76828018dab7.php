<?php

/* LGPUserBundle:Anomalie:add.html.twig */
class __TwigTemplate_8226bb4a341e33704bba92cd1ebd60e2eb441189895a91ad1898c56030977bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:add.html.twig", 1);
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
        $__internal_78bdd366601408d4cd31c76a9be4208e7bdd391c5be77380a5645fe4ed9f8314 = $this->env->getExtension("native_profiler");
        $__internal_78bdd366601408d4cd31c76a9be4208e7bdd391c5be77380a5645fe4ed9f8314->enter($__internal_78bdd366601408d4cd31c76a9be4208e7bdd391c5be77380a5645fe4ed9f8314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bdd366601408d4cd31c76a9be4208e7bdd391c5be77380a5645fe4ed9f8314->leave($__internal_78bdd366601408d4cd31c76a9be4208e7bdd391c5be77380a5645fe4ed9f8314_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e51e74e1637589f2d90814f286d05a3b2b900007d604baba937059d27f5ad2c = $this->env->getExtension("native_profiler");
        $__internal_0e51e74e1637589f2d90814f286d05a3b2b900007d604baba937059d27f5ad2c->enter($__internal_0e51e74e1637589f2d90814f286d05a3b2b900007d604baba937059d27f5ad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0e51e74e1637589f2d90814f286d05a3b2b900007d604baba937059d27f5ad2c->leave($__internal_0e51e74e1637589f2d90814f286d05a3b2b900007d604baba937059d27f5ad2c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c7d9028b781156844b6461e261080f38d9943d7fe94c0b8787dc9d103b4b291 = $this->env->getExtension("native_profiler");
        $__internal_9c7d9028b781156844b6461e261080f38d9943d7fe94c0b8787dc9d103b4b291->enter($__internal_9c7d9028b781156844b6461e261080f38d9943d7fe94c0b8787dc9d103b4b291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Ajout d'une anomalie</h1>
    
";
        // line 12
        echo "  ";
        $this->loadTemplate("LGPUserBundle:Anomalie:formulaire.html.twig", "LGPUserBundle:Anomalie:add.html.twig", 12)->display($context);
        // line 13
        echo "  
";
        
        $__internal_9c7d9028b781156844b6461e261080f38d9943d7fe94c0b8787dc9d103b4b291->leave($__internal_9c7d9028b781156844b6461e261080f38d9943d7fe94c0b8787dc9d103b4b291_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  62 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'une anomalie - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Ajout d'une anomalie</h1>
    
{#  Inclusion du formulaire #}
  {% include 'LGPUserBundle:Anomalie:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
