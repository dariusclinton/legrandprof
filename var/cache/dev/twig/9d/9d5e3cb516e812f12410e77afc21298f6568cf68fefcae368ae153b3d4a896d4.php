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
        $__internal_040437a7e6bd09824854d698c984fb531c6a3d83b084fafeea56df3d214ed689 = $this->env->getExtension("native_profiler");
        $__internal_040437a7e6bd09824854d698c984fb531c6a3d83b084fafeea56df3d214ed689->enter($__internal_040437a7e6bd09824854d698c984fb531c6a3d83b084fafeea56df3d214ed689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040437a7e6bd09824854d698c984fb531c6a3d83b084fafeea56df3d214ed689->leave($__internal_040437a7e6bd09824854d698c984fb531c6a3d83b084fafeea56df3d214ed689_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_528e60c1c8bc094320f42b7fff86bee1be0b239edb4bac9f263fb1fe22443ee1 = $this->env->getExtension("native_profiler");
        $__internal_528e60c1c8bc094320f42b7fff86bee1be0b239edb4bac9f263fb1fe22443ee1->enter($__internal_528e60c1c8bc094320f42b7fff86bee1be0b239edb4bac9f263fb1fe22443ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_528e60c1c8bc094320f42b7fff86bee1be0b239edb4bac9f263fb1fe22443ee1->leave($__internal_528e60c1c8bc094320f42b7fff86bee1be0b239edb4bac9f263fb1fe22443ee1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dc563b6df9a469cc0c693545f561f2f039b08b49053a14190d440ba89e95cc3 = $this->env->getExtension("native_profiler");
        $__internal_8dc563b6df9a469cc0c693545f561f2f039b08b49053a14190d440ba89e95cc3->enter($__internal_8dc563b6df9a469cc0c693545f561f2f039b08b49053a14190d440ba89e95cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_8dc563b6df9a469cc0c693545f561f2f039b08b49053a14190d440ba89e95cc3->leave($__internal_8dc563b6df9a469cc0c693545f561f2f039b08b49053a14190d440ba89e95cc3_prof);

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
