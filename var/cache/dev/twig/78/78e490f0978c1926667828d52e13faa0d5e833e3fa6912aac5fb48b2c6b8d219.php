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
        $__internal_b1f107259d938ec24a2c74f2e6aa1afd40aafbdfe9bd4c489713778b9b2b753f = $this->env->getExtension("native_profiler");
        $__internal_b1f107259d938ec24a2c74f2e6aa1afd40aafbdfe9bd4c489713778b9b2b753f->enter($__internal_b1f107259d938ec24a2c74f2e6aa1afd40aafbdfe9bd4c489713778b9b2b753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f107259d938ec24a2c74f2e6aa1afd40aafbdfe9bd4c489713778b9b2b753f->leave($__internal_b1f107259d938ec24a2c74f2e6aa1afd40aafbdfe9bd4c489713778b9b2b753f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d75c739495baf7f383da7bfc2ceef8731eb31fd3bbc9504d6e16c5e6465af98 = $this->env->getExtension("native_profiler");
        $__internal_1d75c739495baf7f383da7bfc2ceef8731eb31fd3bbc9504d6e16c5e6465af98->enter($__internal_1d75c739495baf7f383da7bfc2ceef8731eb31fd3bbc9504d6e16c5e6465af98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1d75c739495baf7f383da7bfc2ceef8731eb31fd3bbc9504d6e16c5e6465af98->leave($__internal_1d75c739495baf7f383da7bfc2ceef8731eb31fd3bbc9504d6e16c5e6465af98_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e386843cd4b53f66ea1580a8d031fb68be83b9902287e6a999402c739263f960 = $this->env->getExtension("native_profiler");
        $__internal_e386843cd4b53f66ea1580a8d031fb68be83b9902287e6a999402c739263f960->enter($__internal_e386843cd4b53f66ea1580a8d031fb68be83b9902287e6a999402c739263f960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_e386843cd4b53f66ea1580a8d031fb68be83b9902287e6a999402c739263f960->leave($__internal_e386843cd4b53f66ea1580a8d031fb68be83b9902287e6a999402c739263f960_prof);

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
