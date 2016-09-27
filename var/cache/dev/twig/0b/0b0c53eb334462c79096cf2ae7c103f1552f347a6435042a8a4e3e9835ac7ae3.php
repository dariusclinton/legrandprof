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
        $__internal_94a741cab7c580ddd6bf7a392adab210a505bbf3e4f4db78bb9735276aa243ae = $this->env->getExtension("native_profiler");
        $__internal_94a741cab7c580ddd6bf7a392adab210a505bbf3e4f4db78bb9735276aa243ae->enter($__internal_94a741cab7c580ddd6bf7a392adab210a505bbf3e4f4db78bb9735276aa243ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a741cab7c580ddd6bf7a392adab210a505bbf3e4f4db78bb9735276aa243ae->leave($__internal_94a741cab7c580ddd6bf7a392adab210a505bbf3e4f4db78bb9735276aa243ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e4d7b98dcb0cd9d8587ce9655927eb586c0de53868925b171376ce612a6990 = $this->env->getExtension("native_profiler");
        $__internal_d1e4d7b98dcb0cd9d8587ce9655927eb586c0de53868925b171376ce612a6990->enter($__internal_d1e4d7b98dcb0cd9d8587ce9655927eb586c0de53868925b171376ce612a6990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d1e4d7b98dcb0cd9d8587ce9655927eb586c0de53868925b171376ce612a6990->leave($__internal_d1e4d7b98dcb0cd9d8587ce9655927eb586c0de53868925b171376ce612a6990_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6f3a55efb3c64f863b893b30035e6e718fdff45957ef3626db7d65971ade4b = $this->env->getExtension("native_profiler");
        $__internal_cc6f3a55efb3c64f863b893b30035e6e718fdff45957ef3626db7d65971ade4b->enter($__internal_cc6f3a55efb3c64f863b893b30035e6e718fdff45957ef3626db7d65971ade4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_cc6f3a55efb3c64f863b893b30035e6e718fdff45957ef3626db7d65971ade4b->leave($__internal_cc6f3a55efb3c64f863b893b30035e6e718fdff45957ef3626db7d65971ade4b_prof);

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
