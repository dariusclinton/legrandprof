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
        $__internal_3421a349e3a24ca213900b8b3a2d7c90c58c039a09a21ad39dd4c3deea3f15e9 = $this->env->getExtension("native_profiler");
        $__internal_3421a349e3a24ca213900b8b3a2d7c90c58c039a09a21ad39dd4c3deea3f15e9->enter($__internal_3421a349e3a24ca213900b8b3a2d7c90c58c039a09a21ad39dd4c3deea3f15e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3421a349e3a24ca213900b8b3a2d7c90c58c039a09a21ad39dd4c3deea3f15e9->leave($__internal_3421a349e3a24ca213900b8b3a2d7c90c58c039a09a21ad39dd4c3deea3f15e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c82f2fc10789afb81d6f75681a7bb230f7c85fbfec739cd14ad18137ad7ba93 = $this->env->getExtension("native_profiler");
        $__internal_2c82f2fc10789afb81d6f75681a7bb230f7c85fbfec739cd14ad18137ad7ba93->enter($__internal_2c82f2fc10789afb81d6f75681a7bb230f7c85fbfec739cd14ad18137ad7ba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2c82f2fc10789afb81d6f75681a7bb230f7c85fbfec739cd14ad18137ad7ba93->leave($__internal_2c82f2fc10789afb81d6f75681a7bb230f7c85fbfec739cd14ad18137ad7ba93_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e1c8602d09c48c772b3e340c24432199df09327f90ac55521b3278feaa53b7a = $this->env->getExtension("native_profiler");
        $__internal_2e1c8602d09c48c772b3e340c24432199df09327f90ac55521b3278feaa53b7a->enter($__internal_2e1c8602d09c48c772b3e340c24432199df09327f90ac55521b3278feaa53b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_2e1c8602d09c48c772b3e340c24432199df09327f90ac55521b3278feaa53b7a->leave($__internal_2e1c8602d09c48c772b3e340c24432199df09327f90ac55521b3278feaa53b7a_prof);

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
