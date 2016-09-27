<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_4d7c8a9861e340f0ff8fba9c9a7ab62f96f8a7b9ffbba21677bf1578b21ff741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_c532ec346353923e217c1854fbd5ad8564fb00851bb4da512dc60039ae845923 = $this->env->getExtension("native_profiler");
        $__internal_c532ec346353923e217c1854fbd5ad8564fb00851bb4da512dc60039ae845923->enter($__internal_c532ec346353923e217c1854fbd5ad8564fb00851bb4da512dc60039ae845923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c532ec346353923e217c1854fbd5ad8564fb00851bb4da512dc60039ae845923->leave($__internal_c532ec346353923e217c1854fbd5ad8564fb00851bb4da512dc60039ae845923_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfdccebcd8cba2c9c4f7041088512d2f0918877ebea142105af42abde27bb654 = $this->env->getExtension("native_profiler");
        $__internal_dfdccebcd8cba2c9c4f7041088512d2f0918877ebea142105af42abde27bb654->enter($__internal_dfdccebcd8cba2c9c4f7041088512d2f0918877ebea142105af42abde27bb654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dfdccebcd8cba2c9c4f7041088512d2f0918877ebea142105af42abde27bb654->leave($__internal_dfdccebcd8cba2c9c4f7041088512d2f0918877ebea142105af42abde27bb654_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_424635748f28c911ea4b46792d6e36a75003df89da872c96c5a15302567d0240 = $this->env->getExtension("native_profiler");
        $__internal_424635748f28c911ea4b46792d6e36a75003df89da872c96c5a15302567d0240->enter($__internal_424635748f28c911ea4b46792d6e36a75003df89da872c96c5a15302567d0240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_424635748f28c911ea4b46792d6e36a75003df89da872c96c5a15302567d0240->leave($__internal_424635748f28c911ea4b46792d6e36a75003df89da872c96c5a15302567d0240_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
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
  Ajout d'avis - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Ajout d'un avis</h1>

  {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
  
{% endblock %}";
    }
}
