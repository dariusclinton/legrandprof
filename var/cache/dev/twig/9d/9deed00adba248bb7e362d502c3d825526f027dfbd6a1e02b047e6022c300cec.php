<?php

/* LGPUserBundle:Cours:update.html.twig */
class __TwigTemplate_29c8667ecb8ddde55e0251a04ff2f7399af7da435ad0bb53fcb16b58c87308c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:update.html.twig", 1);
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
        $__internal_7180a3e18165e0f20a9d4b32d5e8767767cbcec8f74b9ef3b4e932aa2f52f3fc = $this->env->getExtension("native_profiler");
        $__internal_7180a3e18165e0f20a9d4b32d5e8767767cbcec8f74b9ef3b4e932aa2f52f3fc->enter($__internal_7180a3e18165e0f20a9d4b32d5e8767767cbcec8f74b9ef3b4e932aa2f52f3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7180a3e18165e0f20a9d4b32d5e8767767cbcec8f74b9ef3b4e932aa2f52f3fc->leave($__internal_7180a3e18165e0f20a9d4b32d5e8767767cbcec8f74b9ef3b4e932aa2f52f3fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76baa18e0904edf1c53de850980bd317995fbd4d123359ee1e52c739ffdcf245 = $this->env->getExtension("native_profiler");
        $__internal_76baa18e0904edf1c53de850980bd317995fbd4d123359ee1e52c739ffdcf245->enter($__internal_76baa18e0904edf1c53de850980bd317995fbd4d123359ee1e52c739ffdcf245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_76baa18e0904edf1c53de850980bd317995fbd4d123359ee1e52c739ffdcf245->leave($__internal_76baa18e0904edf1c53de850980bd317995fbd4d123359ee1e52c739ffdcf245_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a21382275b383b25aefc92027e0b325811352cd9658fc92013291c5a40376b8e = $this->env->getExtension("native_profiler");
        $__internal_a21382275b383b25aefc92027e0b325811352cd9658fc92013291c5a40376b8e->enter($__internal_a21382275b383b25aefc92027e0b325811352cd9658fc92013291c5a40376b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_a21382275b383b25aefc92027e0b325811352cd9658fc92013291c5a40376b8e->leave($__internal_a21382275b383b25aefc92027e0b325811352cd9658fc92013291c5a40376b8e_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:update.html.twig";
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
  Modification d'un cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'un cours</h1>
  
  {% include 'LGPUserBundle:Cours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
