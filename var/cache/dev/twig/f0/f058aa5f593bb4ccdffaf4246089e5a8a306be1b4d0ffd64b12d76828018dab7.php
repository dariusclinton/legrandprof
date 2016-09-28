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
        $__internal_19553b41db1c243a7ae07cb8309ab83a92b6ece8a604a8b8dc9924a434e564b2 = $this->env->getExtension("native_profiler");
        $__internal_19553b41db1c243a7ae07cb8309ab83a92b6ece8a604a8b8dc9924a434e564b2->enter($__internal_19553b41db1c243a7ae07cb8309ab83a92b6ece8a604a8b8dc9924a434e564b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19553b41db1c243a7ae07cb8309ab83a92b6ece8a604a8b8dc9924a434e564b2->leave($__internal_19553b41db1c243a7ae07cb8309ab83a92b6ece8a604a8b8dc9924a434e564b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db10471729f95fecf2d2341693c4be3a1a7fbf6d909e9320706deb2ecfe71d01 = $this->env->getExtension("native_profiler");
        $__internal_db10471729f95fecf2d2341693c4be3a1a7fbf6d909e9320706deb2ecfe71d01->enter($__internal_db10471729f95fecf2d2341693c4be3a1a7fbf6d909e9320706deb2ecfe71d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_db10471729f95fecf2d2341693c4be3a1a7fbf6d909e9320706deb2ecfe71d01->leave($__internal_db10471729f95fecf2d2341693c4be3a1a7fbf6d909e9320706deb2ecfe71d01_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e10b70f484a8b908ea839373b7502a3c31f438e2284556a32c3dc1b99acec781 = $this->env->getExtension("native_profiler");
        $__internal_e10b70f484a8b908ea839373b7502a3c31f438e2284556a32c3dc1b99acec781->enter($__internal_e10b70f484a8b908ea839373b7502a3c31f438e2284556a32c3dc1b99acec781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e10b70f484a8b908ea839373b7502a3c31f438e2284556a32c3dc1b99acec781->leave($__internal_e10b70f484a8b908ea839373b7502a3c31f438e2284556a32c3dc1b99acec781_prof);

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
