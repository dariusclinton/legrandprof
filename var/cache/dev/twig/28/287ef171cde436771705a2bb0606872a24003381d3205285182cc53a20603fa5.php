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
        $__internal_2bb058b7107a76740735c703581b61fcdded7ce10da22ed7b29cfd68683a457c = $this->env->getExtension("native_profiler");
        $__internal_2bb058b7107a76740735c703581b61fcdded7ce10da22ed7b29cfd68683a457c->enter($__internal_2bb058b7107a76740735c703581b61fcdded7ce10da22ed7b29cfd68683a457c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bb058b7107a76740735c703581b61fcdded7ce10da22ed7b29cfd68683a457c->leave($__internal_2bb058b7107a76740735c703581b61fcdded7ce10da22ed7b29cfd68683a457c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b31578b4e892d862e0e7d45279199e5c9e49955a662d9fc88d9ae41627e1083 = $this->env->getExtension("native_profiler");
        $__internal_0b31578b4e892d862e0e7d45279199e5c9e49955a662d9fc88d9ae41627e1083->enter($__internal_0b31578b4e892d862e0e7d45279199e5c9e49955a662d9fc88d9ae41627e1083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une anomalie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0b31578b4e892d862e0e7d45279199e5c9e49955a662d9fc88d9ae41627e1083->leave($__internal_0b31578b4e892d862e0e7d45279199e5c9e49955a662d9fc88d9ae41627e1083_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_65d7efc77ad0a4a731d5a703020a97a04809be26b027138a5bfe7cd1114ac3c0 = $this->env->getExtension("native_profiler");
        $__internal_65d7efc77ad0a4a731d5a703020a97a04809be26b027138a5bfe7cd1114ac3c0->enter($__internal_65d7efc77ad0a4a731d5a703020a97a04809be26b027138a5bfe7cd1114ac3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65d7efc77ad0a4a731d5a703020a97a04809be26b027138a5bfe7cd1114ac3c0->leave($__internal_65d7efc77ad0a4a731d5a703020a97a04809be26b027138a5bfe7cd1114ac3c0_prof);

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
