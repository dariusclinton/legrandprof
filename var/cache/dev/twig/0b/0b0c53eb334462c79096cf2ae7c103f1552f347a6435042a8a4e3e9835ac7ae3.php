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
        $__internal_1e8baf2116c874d52f0dbeb3adca8ea90b5c7958c0f4053d16a7dd15ac92ce19 = $this->env->getExtension("native_profiler");
        $__internal_1e8baf2116c874d52f0dbeb3adca8ea90b5c7958c0f4053d16a7dd15ac92ce19->enter($__internal_1e8baf2116c874d52f0dbeb3adca8ea90b5c7958c0f4053d16a7dd15ac92ce19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e8baf2116c874d52f0dbeb3adca8ea90b5c7958c0f4053d16a7dd15ac92ce19->leave($__internal_1e8baf2116c874d52f0dbeb3adca8ea90b5c7958c0f4053d16a7dd15ac92ce19_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f228340506e12e843a3b60062f4a1edcf4c6429aa0aaf58cf553c31d7c3ef083 = $this->env->getExtension("native_profiler");
        $__internal_f228340506e12e843a3b60062f4a1edcf4c6429aa0aaf58cf553c31d7c3ef083->enter($__internal_f228340506e12e843a3b60062f4a1edcf4c6429aa0aaf58cf553c31d7c3ef083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f228340506e12e843a3b60062f4a1edcf4c6429aa0aaf58cf553c31d7c3ef083->leave($__internal_f228340506e12e843a3b60062f4a1edcf4c6429aa0aaf58cf553c31d7c3ef083_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d74bd5b52ec567a7efe0f4c6b93cecc375fb0378d31c27f74650fb398298fa7 = $this->env->getExtension("native_profiler");
        $__internal_2d74bd5b52ec567a7efe0f4c6b93cecc375fb0378d31c27f74650fb398298fa7->enter($__internal_2d74bd5b52ec567a7efe0f4c6b93cecc375fb0378d31c27f74650fb398298fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_2d74bd5b52ec567a7efe0f4c6b93cecc375fb0378d31c27f74650fb398298fa7->leave($__internal_2d74bd5b52ec567a7efe0f4c6b93cecc375fb0378d31c27f74650fb398298fa7_prof);

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
