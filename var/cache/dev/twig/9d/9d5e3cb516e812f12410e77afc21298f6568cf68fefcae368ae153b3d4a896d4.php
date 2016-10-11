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
        $__internal_07833df71d581325f2c07e9adedfefde8ba12c2f3d8166eefa2dbf859875bc87 = $this->env->getExtension("native_profiler");
        $__internal_07833df71d581325f2c07e9adedfefde8ba12c2f3d8166eefa2dbf859875bc87->enter($__internal_07833df71d581325f2c07e9adedfefde8ba12c2f3d8166eefa2dbf859875bc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07833df71d581325f2c07e9adedfefde8ba12c2f3d8166eefa2dbf859875bc87->leave($__internal_07833df71d581325f2c07e9adedfefde8ba12c2f3d8166eefa2dbf859875bc87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af02b877ab9e61c3dca81f00e01120ac8d46285e438c2af5524012a54379b2ed = $this->env->getExtension("native_profiler");
        $__internal_af02b877ab9e61c3dca81f00e01120ac8d46285e438c2af5524012a54379b2ed->enter($__internal_af02b877ab9e61c3dca81f00e01120ac8d46285e438c2af5524012a54379b2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_af02b877ab9e61c3dca81f00e01120ac8d46285e438c2af5524012a54379b2ed->leave($__internal_af02b877ab9e61c3dca81f00e01120ac8d46285e438c2af5524012a54379b2ed_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbf474fb13835a29d1454d681dc0adbf8c0611d12c127bad6833fa5fc4b9ebf0 = $this->env->getExtension("native_profiler");
        $__internal_cbf474fb13835a29d1454d681dc0adbf8c0611d12c127bad6833fa5fc4b9ebf0->enter($__internal_cbf474fb13835a29d1454d681dc0adbf8c0611d12c127bad6833fa5fc4b9ebf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_cbf474fb13835a29d1454d681dc0adbf8c0611d12c127bad6833fa5fc4b9ebf0->leave($__internal_cbf474fb13835a29d1454d681dc0adbf8c0611d12c127bad6833fa5fc4b9ebf0_prof);

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
