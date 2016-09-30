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
        $__internal_4622818a077c873cec1a01c24aa57feb81fa7feb4b68da766110beb9c9d84a3b = $this->env->getExtension("native_profiler");
        $__internal_4622818a077c873cec1a01c24aa57feb81fa7feb4b68da766110beb9c9d84a3b->enter($__internal_4622818a077c873cec1a01c24aa57feb81fa7feb4b68da766110beb9c9d84a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4622818a077c873cec1a01c24aa57feb81fa7feb4b68da766110beb9c9d84a3b->leave($__internal_4622818a077c873cec1a01c24aa57feb81fa7feb4b68da766110beb9c9d84a3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4653b219a4fa128f8be5195e070cd5543517e6576b31c6737f42d66af0a8875f = $this->env->getExtension("native_profiler");
        $__internal_4653b219a4fa128f8be5195e070cd5543517e6576b31c6737f42d66af0a8875f->enter($__internal_4653b219a4fa128f8be5195e070cd5543517e6576b31c6737f42d66af0a8875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4653b219a4fa128f8be5195e070cd5543517e6576b31c6737f42d66af0a8875f->leave($__internal_4653b219a4fa128f8be5195e070cd5543517e6576b31c6737f42d66af0a8875f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e571ce4fd217a33e32a72c2a5e91937bf4fa2cd8981aec25b65e9a408969cf67 = $this->env->getExtension("native_profiler");
        $__internal_e571ce4fd217a33e32a72c2a5e91937bf4fa2cd8981aec25b65e9a408969cf67->enter($__internal_e571ce4fd217a33e32a72c2a5e91937bf4fa2cd8981aec25b65e9a408969cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e571ce4fd217a33e32a72c2a5e91937bf4fa2cd8981aec25b65e9a408969cf67->leave($__internal_e571ce4fd217a33e32a72c2a5e91937bf4fa2cd8981aec25b65e9a408969cf67_prof);

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
