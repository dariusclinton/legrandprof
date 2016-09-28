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
        $__internal_dd5921b7bd5bfca9357b75da0d3731269770e977240536ba041de14ff3862bb9 = $this->env->getExtension("native_profiler");
        $__internal_dd5921b7bd5bfca9357b75da0d3731269770e977240536ba041de14ff3862bb9->enter($__internal_dd5921b7bd5bfca9357b75da0d3731269770e977240536ba041de14ff3862bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5921b7bd5bfca9357b75da0d3731269770e977240536ba041de14ff3862bb9->leave($__internal_dd5921b7bd5bfca9357b75da0d3731269770e977240536ba041de14ff3862bb9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8adc3c56f8d98bbf27d0fad14a9db25bbef4bf4a38d8f1ab79a3135d0ad9bbd8 = $this->env->getExtension("native_profiler");
        $__internal_8adc3c56f8d98bbf27d0fad14a9db25bbef4bf4a38d8f1ab79a3135d0ad9bbd8->enter($__internal_8adc3c56f8d98bbf27d0fad14a9db25bbef4bf4a38d8f1ab79a3135d0ad9bbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8adc3c56f8d98bbf27d0fad14a9db25bbef4bf4a38d8f1ab79a3135d0ad9bbd8->leave($__internal_8adc3c56f8d98bbf27d0fad14a9db25bbef4bf4a38d8f1ab79a3135d0ad9bbd8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bf5016d35d8ce2099619b503945311895959f7f58402132788b9e06c10e0dd1 = $this->env->getExtension("native_profiler");
        $__internal_3bf5016d35d8ce2099619b503945311895959f7f58402132788b9e06c10e0dd1->enter($__internal_3bf5016d35d8ce2099619b503945311895959f7f58402132788b9e06c10e0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3bf5016d35d8ce2099619b503945311895959f7f58402132788b9e06c10e0dd1->leave($__internal_3bf5016d35d8ce2099619b503945311895959f7f58402132788b9e06c10e0dd1_prof);

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
