<?php

/* LGPUserBundle:Anomalie:update.html.twig */
class __TwigTemplate_14d3ec17c7aa6eb887a362c3cd122d2351197646d482082c262d343bf9112afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:update.html.twig", 1);
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
        $__internal_14079a9316911dab4acabf754a24cf08b594f1004e2ca7a48a2a0a564ddbbfc4 = $this->env->getExtension("native_profiler");
        $__internal_14079a9316911dab4acabf754a24cf08b594f1004e2ca7a48a2a0a564ddbbfc4->enter($__internal_14079a9316911dab4acabf754a24cf08b594f1004e2ca7a48a2a0a564ddbbfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14079a9316911dab4acabf754a24cf08b594f1004e2ca7a48a2a0a564ddbbfc4->leave($__internal_14079a9316911dab4acabf754a24cf08b594f1004e2ca7a48a2a0a564ddbbfc4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b4ddfd5f6d1ce8fc1042e4bb360a4a640f5e1439c0cd5a11fc21f42d0e89a1c = $this->env->getExtension("native_profiler");
        $__internal_1b4ddfd5f6d1ce8fc1042e4bb360a4a640f5e1439c0cd5a11fc21f42d0e89a1c->enter($__internal_1b4ddfd5f6d1ce8fc1042e4bb360a4a640f5e1439c0cd5a11fc21f42d0e89a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1b4ddfd5f6d1ce8fc1042e4bb360a4a640f5e1439c0cd5a11fc21f42d0e89a1c->leave($__internal_1b4ddfd5f6d1ce8fc1042e4bb360a4a640f5e1439c0cd5a11fc21f42d0e89a1c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_db33d50229d8bb2b78946fb5e2d073a722204c81244a11cf77b2239f0b47cc6b = $this->env->getExtension("native_profiler");
        $__internal_db33d50229d8bb2b78946fb5e2d073a722204c81244a11cf77b2239f0b47cc6b->enter($__internal_db33d50229d8bb2b78946fb5e2d073a722204c81244a11cf77b2239f0b47cc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une anomalie</h1>
    
";
        // line 12
        echo "  ";
        $this->loadTemplate("LGPUserBundle:Anomalie:formulaire.html.twig", "LGPUserBundle:Anomalie:update.html.twig", 12)->display($context);
        // line 13
        echo "  
";
        
        $__internal_db33d50229d8bb2b78946fb5e2d073a722204c81244a11cf77b2239f0b47cc6b->leave($__internal_db33d50229d8bb2b78946fb5e2d073a722204c81244a11cf77b2239f0b47cc6b_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:update.html.twig";
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
  Mise à jour d'une anomalie - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Mise à jour d'une anomalie</h1>
    
{#  Inclusion du formulaire #}
  {% include 'LGPUserBundle:Anomalie:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
