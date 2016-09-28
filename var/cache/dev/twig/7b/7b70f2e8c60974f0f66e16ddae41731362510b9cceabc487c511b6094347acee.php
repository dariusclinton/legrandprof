<?php

/* LGPUserBundle:NouvelleCategorieCours:add.html.twig */
class __TwigTemplate_71999b132578628f8d4e1c2c094331800c290a9ceb98d63f9850f0d609e5242a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 1);
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
        $__internal_f2417ae78d1f7d2dccb775bc2e0410ca39701da7b37ec345c02eb4a79e5f4be0 = $this->env->getExtension("native_profiler");
        $__internal_f2417ae78d1f7d2dccb775bc2e0410ca39701da7b37ec345c02eb4a79e5f4be0->enter($__internal_f2417ae78d1f7d2dccb775bc2e0410ca39701da7b37ec345c02eb4a79e5f4be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2417ae78d1f7d2dccb775bc2e0410ca39701da7b37ec345c02eb4a79e5f4be0->leave($__internal_f2417ae78d1f7d2dccb775bc2e0410ca39701da7b37ec345c02eb4a79e5f4be0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_352f68d43126761ad1db5511af6125ff028b3ffadc93d67d9dfa198bd7949d70 = $this->env->getExtension("native_profiler");
        $__internal_352f68d43126761ad1db5511af6125ff028b3ffadc93d67d9dfa198bd7949d70->enter($__internal_352f68d43126761ad1db5511af6125ff028b3ffadc93d67d9dfa198bd7949d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Proposition d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_352f68d43126761ad1db5511af6125ff028b3ffadc93d67d9dfa198bd7949d70->leave($__internal_352f68d43126761ad1db5511af6125ff028b3ffadc93d67d9dfa198bd7949d70_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0788d219ba69e58c2f1f4dd31f41a8883bc8aa7180826571b39a783150dd7446 = $this->env->getExtension("native_profiler");
        $__internal_0788d219ba69e58c2f1f4dd31f41a8883bc8aa7180826571b39a783150dd7446->enter($__internal_0788d219ba69e58c2f1f4dd31f41a8883bc8aa7180826571b39a783150dd7446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Proposition d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:add.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_0788d219ba69e58c2f1f4dd31f41a8883bc8aa7180826571b39a783150dd7446->leave($__internal_0788d219ba69e58c2f1f4dd31f41a8883bc8aa7180826571b39a783150dd7446_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:NouvelleCategorieCours:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Proposition d'une nouvelle catégorie de cours - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Proposition d'une nouvelle catégorie de cours </h1>
    
  {% include 'LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
