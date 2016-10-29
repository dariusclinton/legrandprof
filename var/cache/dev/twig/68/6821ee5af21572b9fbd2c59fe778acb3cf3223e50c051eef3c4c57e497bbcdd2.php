<?php

/* LGPUserBundle:Cours:add.html.twig */
class __TwigTemplate_12085cb6968f596faee87a6edd0e98d33ad19a4c3eefef8c2bb9dbe7edd9874b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff987a6ef83171cb0d15108143d7bdbf74189665a0c67cce89bc0291ce7c22f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff987a6ef83171cb0d15108143d7bdbf74189665a0c67cce89bc0291ce7c22f9->enter($__internal_ff987a6ef83171cb0d15108143d7bdbf74189665a0c67cce89bc0291ce7c22f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff987a6ef83171cb0d15108143d7bdbf74189665a0c67cce89bc0291ce7c22f9->leave($__internal_ff987a6ef83171cb0d15108143d7bdbf74189665a0c67cce89bc0291ce7c22f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_419b4f3048189bd15c969f0fda0b1f5a12848c819cc04f93b4f8c8d0ef478f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419b4f3048189bd15c969f0fda0b1f5a12848c819cc04f93b4f8c8d0ef478f1d->enter($__internal_419b4f3048189bd15c969f0fda0b1f5a12848c819cc04f93b4f8c8d0ef478f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_419b4f3048189bd15c969f0fda0b1f5a12848c819cc04f93b4f8c8d0ef478f1d->leave($__internal_419b4f3048189bd15c969f0fda0b1f5a12848c819cc04f93b4f8c8d0ef478f1d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_9da3128bcdb6f7dfd4c7f81d94f5a27dc684e0bcf836d0a5555bf3bb16593478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da3128bcdb6f7dfd4c7f81d94f5a27dc684e0bcf836d0a5555bf3bb16593478->enter($__internal_9da3128bcdb6f7dfd4c7f81d94f5a27dc684e0bcf836d0a5555bf3bb16593478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_9da3128bcdb6f7dfd4c7f81d94f5a27dc684e0bcf836d0a5555bf3bb16593478->leave($__internal_9da3128bcdb6f7dfd4c7f81d94f5a27dc684e0bcf836d0a5555bf3bb16593478_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f353281097f352d3fed43c5aeddb5639654519bd20e085ee357e77c5bac69163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f353281097f352d3fed43c5aeddb5639654519bd20e085ee357e77c5bac69163->enter($__internal_f353281097f352d3fed43c5aeddb5639654519bd20e085ee357e77c5bac69163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_cours");
        echo "\">Ma liste de cours</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_prof_cours_add");
        echo "\">Ajouter un cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">

            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Ajouter un cours</div>
              <div class=\"notifications-content\">
                ";
        // line 29
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:add.html.twig", 29)->display($context);
        // line 30
        echo "              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
";
        
        $__internal_f353281097f352d3fed43c5aeddb5639654519bd20e085ee357e77c5bac69163->leave($__internal_f353281097f352d3fed43c5aeddb5639654519bd20e085ee357e77c5bac69163_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  99 => 29,  88 => 21,  84 => 20,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Ajout d'un cours - {{ parent() }}
{% endblock %}

{% block header_submenu %}
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}

  <div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <h3 class=\"title-block-dash\">Gérer mes cours</h3>
            <ul class=\"menu-dash\">
              <li><a href=\"{{ path('lgp_user_prof_cours') }}\">Ma liste de cours</a></li>
              <li><a href=\"{{ path('lgp_user_prof_cours_add') }}\">Ajouter un cours</a></li>
            </ul>
          </div>
          <div class=\"col-md-9\">

            <div class=\"notifications-block\">
              <div class=\"notifications-header\">Ajouter un cours</div>
              <div class=\"notifications-content\">
                {% include 'LGPUserBundle:Cours:formulaire.html.twig' %}
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
{% endblock %}
";
    }
}
