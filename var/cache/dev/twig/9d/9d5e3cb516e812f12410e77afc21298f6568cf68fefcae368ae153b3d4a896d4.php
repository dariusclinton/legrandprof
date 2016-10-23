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
        $__internal_e2ba9676a634516d4f6f97ca55d2bae4bf685f9f03d13a6a9b4ab4abe4e8551a = $this->env->getExtension("native_profiler");
        $__internal_e2ba9676a634516d4f6f97ca55d2bae4bf685f9f03d13a6a9b4ab4abe4e8551a->enter($__internal_e2ba9676a634516d4f6f97ca55d2bae4bf685f9f03d13a6a9b4ab4abe4e8551a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ba9676a634516d4f6f97ca55d2bae4bf685f9f03d13a6a9b4ab4abe4e8551a->leave($__internal_e2ba9676a634516d4f6f97ca55d2bae4bf685f9f03d13a6a9b4ab4abe4e8551a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1092c5c708d3e9e861091b0ae66c907e9562597d55697cd5faf34ade8b6db16 = $this->env->getExtension("native_profiler");
        $__internal_e1092c5c708d3e9e861091b0ae66c907e9562597d55697cd5faf34ade8b6db16->enter($__internal_e1092c5c708d3e9e861091b0ae66c907e9562597d55697cd5faf34ade8b6db16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e1092c5c708d3e9e861091b0ae66c907e9562597d55697cd5faf34ade8b6db16->leave($__internal_e1092c5c708d3e9e861091b0ae66c907e9562597d55697cd5faf34ade8b6db16_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_934fe1feb3cbc15870926722d0216ecf991cdfb1e319e68b44c2f7be416b7a7c = $this->env->getExtension("native_profiler");
        $__internal_934fe1feb3cbc15870926722d0216ecf991cdfb1e319e68b44c2f7be416b7a7c->enter($__internal_934fe1feb3cbc15870926722d0216ecf991cdfb1e319e68b44c2f7be416b7a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_934fe1feb3cbc15870926722d0216ecf991cdfb1e319e68b44c2f7be416b7a7c->leave($__internal_934fe1feb3cbc15870926722d0216ecf991cdfb1e319e68b44c2f7be416b7a7c_prof);

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
