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
        $__internal_73633bef556290c21a874f283aff9aa420f434bc8d488612f935f4b9649f7ae8 = $this->env->getExtension("native_profiler");
        $__internal_73633bef556290c21a874f283aff9aa420f434bc8d488612f935f4b9649f7ae8->enter($__internal_73633bef556290c21a874f283aff9aa420f434bc8d488612f935f4b9649f7ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73633bef556290c21a874f283aff9aa420f434bc8d488612f935f4b9649f7ae8->leave($__internal_73633bef556290c21a874f283aff9aa420f434bc8d488612f935f4b9649f7ae8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfc0e97df9ec67ac01fd297557f65d69c58092df31441e179b6e689f8ae161b8 = $this->env->getExtension("native_profiler");
        $__internal_dfc0e97df9ec67ac01fd297557f65d69c58092df31441e179b6e689f8ae161b8->enter($__internal_dfc0e97df9ec67ac01fd297557f65d69c58092df31441e179b6e689f8ae161b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dfc0e97df9ec67ac01fd297557f65d69c58092df31441e179b6e689f8ae161b8->leave($__internal_dfc0e97df9ec67ac01fd297557f65d69c58092df31441e179b6e689f8ae161b8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e335faa29732eea9793b34776cd65a737714fe1600161b87bfccc7645825f48 = $this->env->getExtension("native_profiler");
        $__internal_6e335faa29732eea9793b34776cd65a737714fe1600161b87bfccc7645825f48->enter($__internal_6e335faa29732eea9793b34776cd65a737714fe1600161b87bfccc7645825f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e335faa29732eea9793b34776cd65a737714fe1600161b87bfccc7645825f48->leave($__internal_6e335faa29732eea9793b34776cd65a737714fe1600161b87bfccc7645825f48_prof);

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
