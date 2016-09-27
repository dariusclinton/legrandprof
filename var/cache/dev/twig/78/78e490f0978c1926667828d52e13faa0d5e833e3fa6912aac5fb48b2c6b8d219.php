<?php

/* LGPUserBundle:SeanceDeCours:add.html.twig */
class __TwigTemplate_91aee680f0739ad76bfaeb626e222ddba9b6da6ffc5f5cca50e02ab871574562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:SeanceDeCours:add.html.twig", 1);
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
        $__internal_8c2972d7349d157ea78a67897b2cf0da1e395592a954223b037316c658b88690 = $this->env->getExtension("native_profiler");
        $__internal_8c2972d7349d157ea78a67897b2cf0da1e395592a954223b037316c658b88690->enter($__internal_8c2972d7349d157ea78a67897b2cf0da1e395592a954223b037316c658b88690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c2972d7349d157ea78a67897b2cf0da1e395592a954223b037316c658b88690->leave($__internal_8c2972d7349d157ea78a67897b2cf0da1e395592a954223b037316c658b88690_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b34ccd8aff777cb83eb08310c9bc38d66b052d84ec3e429b2098346ae72960ea = $this->env->getExtension("native_profiler");
        $__internal_b34ccd8aff777cb83eb08310c9bc38d66b052d84ec3e429b2098346ae72960ea->enter($__internal_b34ccd8aff777cb83eb08310c9bc38d66b052d84ec3e429b2098346ae72960ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b34ccd8aff777cb83eb08310c9bc38d66b052d84ec3e429b2098346ae72960ea->leave($__internal_b34ccd8aff777cb83eb08310c9bc38d66b052d84ec3e429b2098346ae72960ea_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e72b08d6a7c3ae136775b8cb704a1a2d61f0d4b359a09a722d6c41a8091cd0b = $this->env->getExtension("native_profiler");
        $__internal_4e72b08d6a7c3ae136775b8cb704a1a2d61f0d4b359a09a722d6c41a8091cd0b->enter($__internal_4e72b08d6a7c3ae136775b8cb704a1a2d61f0d4b359a09a722d6c41a8091cd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_4e72b08d6a7c3ae136775b8cb704a1a2d61f0d4b359a09a722d6c41a8091cd0b->leave($__internal_4e72b08d6a7c3ae136775b8cb704a1a2d61f0d4b359a09a722d6c41a8091cd0b_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'une séance de cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Ajout d'une séances de cours</h1>
  
  {% include 'LGPUserBundle:SeanceDeCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
