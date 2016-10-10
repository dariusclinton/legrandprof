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
        $__internal_91e21d5b654d62e23eb392a32b157c89c05b0b9cce39e51b2a29fd642bfd857f = $this->env->getExtension("native_profiler");
        $__internal_91e21d5b654d62e23eb392a32b157c89c05b0b9cce39e51b2a29fd642bfd857f->enter($__internal_91e21d5b654d62e23eb392a32b157c89c05b0b9cce39e51b2a29fd642bfd857f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e21d5b654d62e23eb392a32b157c89c05b0b9cce39e51b2a29fd642bfd857f->leave($__internal_91e21d5b654d62e23eb392a32b157c89c05b0b9cce39e51b2a29fd642bfd857f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc353833ebbc13aa162bc2887fcf41dea4bfd46fd5618c143c989bf9a44d3de6 = $this->env->getExtension("native_profiler");
        $__internal_dc353833ebbc13aa162bc2887fcf41dea4bfd46fd5618c143c989bf9a44d3de6->enter($__internal_dc353833ebbc13aa162bc2887fcf41dea4bfd46fd5618c143c989bf9a44d3de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dc353833ebbc13aa162bc2887fcf41dea4bfd46fd5618c143c989bf9a44d3de6->leave($__internal_dc353833ebbc13aa162bc2887fcf41dea4bfd46fd5618c143c989bf9a44d3de6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b22a3e9849623349df43244455d9d8c8574f945ab4e1441707c40c927947201b = $this->env->getExtension("native_profiler");
        $__internal_b22a3e9849623349df43244455d9d8c8574f945ab4e1441707c40c927947201b->enter($__internal_b22a3e9849623349df43244455d9d8c8574f945ab4e1441707c40c927947201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_b22a3e9849623349df43244455d9d8c8574f945ab4e1441707c40c927947201b->leave($__internal_b22a3e9849623349df43244455d9d8c8574f945ab4e1441707c40c927947201b_prof);

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
