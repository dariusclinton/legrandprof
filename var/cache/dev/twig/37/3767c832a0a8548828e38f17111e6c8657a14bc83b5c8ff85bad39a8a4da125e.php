<?php

/* LGPUserBundle:SeanceDeCours:update.html.twig */
class __TwigTemplate_f5017a6e72a3b9ebaee211c13d5fb36d550c459ab3df4500ed2a6c72f2cdebc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 1);
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
        $__internal_a9e6d3eefab3117cca28241ef5764c804f52d5710c1abbaea2323982d9d27a8b = $this->env->getExtension("native_profiler");
        $__internal_a9e6d3eefab3117cca28241ef5764c804f52d5710c1abbaea2323982d9d27a8b->enter($__internal_a9e6d3eefab3117cca28241ef5764c804f52d5710c1abbaea2323982d9d27a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9e6d3eefab3117cca28241ef5764c804f52d5710c1abbaea2323982d9d27a8b->leave($__internal_a9e6d3eefab3117cca28241ef5764c804f52d5710c1abbaea2323982d9d27a8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd604d57a99a9325f030fa5ee48214b08214b834dc9fb5aaf86de569b44e3295 = $this->env->getExtension("native_profiler");
        $__internal_dd604d57a99a9325f030fa5ee48214b08214b834dc9fb5aaf86de569b44e3295->enter($__internal_dd604d57a99a9325f030fa5ee48214b08214b834dc9fb5aaf86de569b44e3295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dd604d57a99a9325f030fa5ee48214b08214b834dc9fb5aaf86de569b44e3295->leave($__internal_dd604d57a99a9325f030fa5ee48214b08214b834dc9fb5aaf86de569b44e3295_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_622c1d63bed06451f552cf75983d49f751add8eb197cc4256bc670d0d2676ff8 = $this->env->getExtension("native_profiler");
        $__internal_622c1d63bed06451f552cf75983d49f751add8eb197cc4256bc670d0d2676ff8->enter($__internal_622c1d63bed06451f552cf75983d49f751add8eb197cc4256bc670d0d2676ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_622c1d63bed06451f552cf75983d49f751add8eb197cc4256bc670d0d2676ff8->leave($__internal_622c1d63bed06451f552cf75983d49f751add8eb197cc4256bc670d0d2676ff8_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:update.html.twig";
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
  Modification d'une séance de cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'une séances de cours</h1>
  
  {% include 'LGPUserBundle:SeanceDeCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
