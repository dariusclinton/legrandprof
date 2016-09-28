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
        $__internal_fac52e8b1703795e5d4d6c0ba0dedc01da349cf7678f2be6b30c598509ed0ce7 = $this->env->getExtension("native_profiler");
        $__internal_fac52e8b1703795e5d4d6c0ba0dedc01da349cf7678f2be6b30c598509ed0ce7->enter($__internal_fac52e8b1703795e5d4d6c0ba0dedc01da349cf7678f2be6b30c598509ed0ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac52e8b1703795e5d4d6c0ba0dedc01da349cf7678f2be6b30c598509ed0ce7->leave($__internal_fac52e8b1703795e5d4d6c0ba0dedc01da349cf7678f2be6b30c598509ed0ce7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2477e87874ab39723f028cf670561d7f8c7dee3ccd47392cd931d281b871d127 = $this->env->getExtension("native_profiler");
        $__internal_2477e87874ab39723f028cf670561d7f8c7dee3ccd47392cd931d281b871d127->enter($__internal_2477e87874ab39723f028cf670561d7f8c7dee3ccd47392cd931d281b871d127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2477e87874ab39723f028cf670561d7f8c7dee3ccd47392cd931d281b871d127->leave($__internal_2477e87874ab39723f028cf670561d7f8c7dee3ccd47392cd931d281b871d127_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbc3aa7371be722612cb19978fabf3f00a243c9a389d26d4f8bb356db6a57930 = $this->env->getExtension("native_profiler");
        $__internal_dbc3aa7371be722612cb19978fabf3f00a243c9a389d26d4f8bb356db6a57930->enter($__internal_dbc3aa7371be722612cb19978fabf3f00a243c9a389d26d4f8bb356db6a57930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_dbc3aa7371be722612cb19978fabf3f00a243c9a389d26d4f8bb356db6a57930->leave($__internal_dbc3aa7371be722612cb19978fabf3f00a243c9a389d26d4f8bb356db6a57930_prof);

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
