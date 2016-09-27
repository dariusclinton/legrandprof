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
        $__internal_21d98d402b67f7b4946ae5809f566aa4b7500fa0a93e6fcecfa535c38e97e763 = $this->env->getExtension("native_profiler");
        $__internal_21d98d402b67f7b4946ae5809f566aa4b7500fa0a93e6fcecfa535c38e97e763->enter($__internal_21d98d402b67f7b4946ae5809f566aa4b7500fa0a93e6fcecfa535c38e97e763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d98d402b67f7b4946ae5809f566aa4b7500fa0a93e6fcecfa535c38e97e763->leave($__internal_21d98d402b67f7b4946ae5809f566aa4b7500fa0a93e6fcecfa535c38e97e763_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c3377c6dc6d434af5751590743e653e1ebce8ce0591f17944ff853032cd59ac = $this->env->getExtension("native_profiler");
        $__internal_8c3377c6dc6d434af5751590743e653e1ebce8ce0591f17944ff853032cd59ac->enter($__internal_8c3377c6dc6d434af5751590743e653e1ebce8ce0591f17944ff853032cd59ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c3377c6dc6d434af5751590743e653e1ebce8ce0591f17944ff853032cd59ac->leave($__internal_8c3377c6dc6d434af5751590743e653e1ebce8ce0591f17944ff853032cd59ac_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4b39f44c2f349ec77888cad5f28eb60a16b99ffecba2fecf1b12e0a07e40e6d = $this->env->getExtension("native_profiler");
        $__internal_a4b39f44c2f349ec77888cad5f28eb60a16b99ffecba2fecf1b12e0a07e40e6d->enter($__internal_a4b39f44c2f349ec77888cad5f28eb60a16b99ffecba2fecf1b12e0a07e40e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_a4b39f44c2f349ec77888cad5f28eb60a16b99ffecba2fecf1b12e0a07e40e6d->leave($__internal_a4b39f44c2f349ec77888cad5f28eb60a16b99ffecba2fecf1b12e0a07e40e6d_prof);

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
