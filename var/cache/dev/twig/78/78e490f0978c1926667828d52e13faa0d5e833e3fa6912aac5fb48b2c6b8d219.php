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
        $__internal_0c82c256e5b09e9bcaf62a893807c411b2f23090408b3002cc6de4c5eb537f86 = $this->env->getExtension("native_profiler");
        $__internal_0c82c256e5b09e9bcaf62a893807c411b2f23090408b3002cc6de4c5eb537f86->enter($__internal_0c82c256e5b09e9bcaf62a893807c411b2f23090408b3002cc6de4c5eb537f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c82c256e5b09e9bcaf62a893807c411b2f23090408b3002cc6de4c5eb537f86->leave($__internal_0c82c256e5b09e9bcaf62a893807c411b2f23090408b3002cc6de4c5eb537f86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b697a391b8db6bba2c257ecf72e9ee935caf7b31776a15623b80a77648798a5d = $this->env->getExtension("native_profiler");
        $__internal_b697a391b8db6bba2c257ecf72e9ee935caf7b31776a15623b80a77648798a5d->enter($__internal_b697a391b8db6bba2c257ecf72e9ee935caf7b31776a15623b80a77648798a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b697a391b8db6bba2c257ecf72e9ee935caf7b31776a15623b80a77648798a5d->leave($__internal_b697a391b8db6bba2c257ecf72e9ee935caf7b31776a15623b80a77648798a5d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4827d291821a98e01aac81c43841e15513bd72d4eef72e8c0aef8dadc92e552 = $this->env->getExtension("native_profiler");
        $__internal_c4827d291821a98e01aac81c43841e15513bd72d4eef72e8c0aef8dadc92e552->enter($__internal_c4827d291821a98e01aac81c43841e15513bd72d4eef72e8c0aef8dadc92e552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_c4827d291821a98e01aac81c43841e15513bd72d4eef72e8c0aef8dadc92e552->leave($__internal_c4827d291821a98e01aac81c43841e15513bd72d4eef72e8c0aef8dadc92e552_prof);

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
