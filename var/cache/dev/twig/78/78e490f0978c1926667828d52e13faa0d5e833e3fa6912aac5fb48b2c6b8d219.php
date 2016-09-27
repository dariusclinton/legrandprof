<?php

/* LGPUserBundle:SeanceDeCours:add.html.twig */
class __TwigTemplate_91aee680f0739ad76bfaeb626e222ddba9b6da6ffc5f5cca50e02ab871574562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:SeanceDeCours:add.html.twig", 1);
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
        $__internal_842abf14b2efc9585b5a1861d20a061b9dfd0153f9abef8a1b3c4808f87cdfcc = $this->env->getExtension("native_profiler");
        $__internal_842abf14b2efc9585b5a1861d20a061b9dfd0153f9abef8a1b3c4808f87cdfcc->enter($__internal_842abf14b2efc9585b5a1861d20a061b9dfd0153f9abef8a1b3c4808f87cdfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_842abf14b2efc9585b5a1861d20a061b9dfd0153f9abef8a1b3c4808f87cdfcc->leave($__internal_842abf14b2efc9585b5a1861d20a061b9dfd0153f9abef8a1b3c4808f87cdfcc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3e0fdccdd22178da2f6bbca3eb3363fbf9487a60f469820d5d42f78e128de33 = $this->env->getExtension("native_profiler");
        $__internal_e3e0fdccdd22178da2f6bbca3eb3363fbf9487a60f469820d5d42f78e128de33->enter($__internal_e3e0fdccdd22178da2f6bbca3eb3363fbf9487a60f469820d5d42f78e128de33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e3e0fdccdd22178da2f6bbca3eb3363fbf9487a60f469820d5d42f78e128de33->leave($__internal_e3e0fdccdd22178da2f6bbca3eb3363fbf9487a60f469820d5d42f78e128de33_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c25c89207ff087a969b6cff307e3e440ce1015bf9cfe449deb6f746574f25ab = $this->env->getExtension("native_profiler");
        $__internal_5c25c89207ff087a969b6cff307e3e440ce1015bf9cfe449deb6f746574f25ab->enter($__internal_5c25c89207ff087a969b6cff307e3e440ce1015bf9cfe449deb6f746574f25ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_5c25c89207ff087a969b6cff307e3e440ce1015bf9cfe449deb6f746574f25ab->leave($__internal_5c25c89207ff087a969b6cff307e3e440ce1015bf9cfe449deb6f746574f25ab_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:add.html.twig";
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
  Ajout d'une séance de cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Ajout d'une séances de cours</h1>
  
  {% include 'LGPUserBundle:SeanceDeCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
