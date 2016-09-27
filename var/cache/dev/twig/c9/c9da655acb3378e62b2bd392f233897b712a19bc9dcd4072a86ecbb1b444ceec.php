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
        $__internal_5aa4cd3ed2f0b477b165ff219599db90d03d549ef5074a9db86f166394096a3a = $this->env->getExtension("native_profiler");
        $__internal_5aa4cd3ed2f0b477b165ff219599db90d03d549ef5074a9db86f166394096a3a->enter($__internal_5aa4cd3ed2f0b477b165ff219599db90d03d549ef5074a9db86f166394096a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa4cd3ed2f0b477b165ff219599db90d03d549ef5074a9db86f166394096a3a->leave($__internal_5aa4cd3ed2f0b477b165ff219599db90d03d549ef5074a9db86f166394096a3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23328c268bdce203b244b49fd3feb1876f6679f22e27a7c35435213957b8ba0b = $this->env->getExtension("native_profiler");
        $__internal_23328c268bdce203b244b49fd3feb1876f6679f22e27a7c35435213957b8ba0b->enter($__internal_23328c268bdce203b244b49fd3feb1876f6679f22e27a7c35435213957b8ba0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_23328c268bdce203b244b49fd3feb1876f6679f22e27a7c35435213957b8ba0b->leave($__internal_23328c268bdce203b244b49fd3feb1876f6679f22e27a7c35435213957b8ba0b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c97085d8ea071a386525f20c8695cecda1c5b934a85ae342120ebea6d7f5d5b = $this->env->getExtension("native_profiler");
        $__internal_4c97085d8ea071a386525f20c8695cecda1c5b934a85ae342120ebea6d7f5d5b->enter($__internal_4c97085d8ea071a386525f20c8695cecda1c5b934a85ae342120ebea6d7f5d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_4c97085d8ea071a386525f20c8695cecda1c5b934a85ae342120ebea6d7f5d5b->leave($__internal_4c97085d8ea071a386525f20c8695cecda1c5b934a85ae342120ebea6d7f5d5b_prof);

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
