<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_a93338cbd748ce6f4688999482470fc650fc1880887c7e4e364f085839f12335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 1);
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
        $__internal_506f91ca135b6041e38bbfb5cd9e7352a2bee03024967e70cc873af7b8bc04d3 = $this->env->getExtension("native_profiler");
        $__internal_506f91ca135b6041e38bbfb5cd9e7352a2bee03024967e70cc873af7b8bc04d3->enter($__internal_506f91ca135b6041e38bbfb5cd9e7352a2bee03024967e70cc873af7b8bc04d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_506f91ca135b6041e38bbfb5cd9e7352a2bee03024967e70cc873af7b8bc04d3->leave($__internal_506f91ca135b6041e38bbfb5cd9e7352a2bee03024967e70cc873af7b8bc04d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a6eb364492e41a7162b310f18a19e2c6d2a2cc2b8e410cb6ff3457f6e3397ce = $this->env->getExtension("native_profiler");
        $__internal_9a6eb364492e41a7162b310f18a19e2c6d2a2cc2b8e410cb6ff3457f6e3397ce->enter($__internal_9a6eb364492e41a7162b310f18a19e2c6d2a2cc2b8e410cb6ff3457f6e3397ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9a6eb364492e41a7162b310f18a19e2c6d2a2cc2b8e410cb6ff3457f6e3397ce->leave($__internal_9a6eb364492e41a7162b310f18a19e2c6d2a2cc2b8e410cb6ff3457f6e3397ce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ec2aeba24e0f1c0061679c515f7fc39cbf248d611c2c48e39c5bc993e209ceb = $this->env->getExtension("native_profiler");
        $__internal_8ec2aeba24e0f1c0061679c515f7fc39cbf248d611c2c48e39c5bc993e209ceb->enter($__internal_8ec2aeba24e0f1c0061679c515f7fc39cbf248d611c2c48e39c5bc993e209ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_8ec2aeba24e0f1c0061679c515f7fc39cbf248d611c2c48e39c5bc993e209ceb->leave($__internal_8ec2aeba24e0f1c0061679c515f7fc39cbf248d611c2c48e39c5bc993e209ceb_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:update.html.twig";
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
  Mise à jour d'une indisponibilité - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Mise à d'une indiponibilité</h1>
  
  {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
