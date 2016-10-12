<?php

/* LGPUserBundle:NouvelleCategorieCours:update.html.twig */
class __TwigTemplate_a41e6b3e9c2b4858375f3b8431fafbe203aed337ed3a00fa9cfa8424069d2fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 1);
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
        $__internal_ffa2876f096c7346eaec7e2a166fe5f22db38ec58f1ee2b410e6bf64396c9354 = $this->env->getExtension("native_profiler");
        $__internal_ffa2876f096c7346eaec7e2a166fe5f22db38ec58f1ee2b410e6bf64396c9354->enter($__internal_ffa2876f096c7346eaec7e2a166fe5f22db38ec58f1ee2b410e6bf64396c9354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa2876f096c7346eaec7e2a166fe5f22db38ec58f1ee2b410e6bf64396c9354->leave($__internal_ffa2876f096c7346eaec7e2a166fe5f22db38ec58f1ee2b410e6bf64396c9354_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b352ee4793fb5a69cb20ca6e65c276028ecb91f1247e4362e5a6a32ffb722d3 = $this->env->getExtension("native_profiler");
        $__internal_3b352ee4793fb5a69cb20ca6e65c276028ecb91f1247e4362e5a6a32ffb722d3->enter($__internal_3b352ee4793fb5a69cb20ca6e65c276028ecb91f1247e4362e5a6a32ffb722d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3b352ee4793fb5a69cb20ca6e65c276028ecb91f1247e4362e5a6a32ffb722d3->leave($__internal_3b352ee4793fb5a69cb20ca6e65c276028ecb91f1247e4362e5a6a32ffb722d3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_848957888fb16dac4392b262cc803ccad2809b90521fdf544a4852b96f81ec8e = $this->env->getExtension("native_profiler");
        $__internal_848957888fb16dac4392b262cc803ccad2809b90521fdf544a4852b96f81ec8e->enter($__internal_848957888fb16dac4392b262cc803ccad2809b90521fdf544a4852b96f81ec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_848957888fb16dac4392b262cc803ccad2809b90521fdf544a4852b96f81ec8e->leave($__internal_848957888fb16dac4392b262cc803ccad2809b90521fdf544a4852b96f81ec8e_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:NouvelleCategorieCours:update.html.twig";
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
  Mise à jour d'une nouvelle catégorie de cours - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  {% include 'LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
