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
        $__internal_894e47def1bfe5fe11ef071fa3f6de85a6bdfc413246a29188edc69433dc1f54 = $this->env->getExtension("native_profiler");
        $__internal_894e47def1bfe5fe11ef071fa3f6de85a6bdfc413246a29188edc69433dc1f54->enter($__internal_894e47def1bfe5fe11ef071fa3f6de85a6bdfc413246a29188edc69433dc1f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_894e47def1bfe5fe11ef071fa3f6de85a6bdfc413246a29188edc69433dc1f54->leave($__internal_894e47def1bfe5fe11ef071fa3f6de85a6bdfc413246a29188edc69433dc1f54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a31073c9619c9128bb4b03050d21c62cec57291b70ca31f57ca52f4c02d09be = $this->env->getExtension("native_profiler");
        $__internal_3a31073c9619c9128bb4b03050d21c62cec57291b70ca31f57ca52f4c02d09be->enter($__internal_3a31073c9619c9128bb4b03050d21c62cec57291b70ca31f57ca52f4c02d09be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3a31073c9619c9128bb4b03050d21c62cec57291b70ca31f57ca52f4c02d09be->leave($__internal_3a31073c9619c9128bb4b03050d21c62cec57291b70ca31f57ca52f4c02d09be_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0a9d062966aa314f28c1ab687c3bcbe951f04c1e83c80fa9e5b7f82e091637 = $this->env->getExtension("native_profiler");
        $__internal_bf0a9d062966aa314f28c1ab687c3bcbe951f04c1e83c80fa9e5b7f82e091637->enter($__internal_bf0a9d062966aa314f28c1ab687c3bcbe951f04c1e83c80fa9e5b7f82e091637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_bf0a9d062966aa314f28c1ab687c3bcbe951f04c1e83c80fa9e5b7f82e091637->leave($__internal_bf0a9d062966aa314f28c1ab687c3bcbe951f04c1e83c80fa9e5b7f82e091637_prof);

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
