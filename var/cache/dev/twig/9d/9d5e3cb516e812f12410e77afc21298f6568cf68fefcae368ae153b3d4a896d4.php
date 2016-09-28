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
        $__internal_6d29e02c330dcf251a07322e9ea2e2e58f1e0f7ee3689dfc309b0adb8edd6d5f = $this->env->getExtension("native_profiler");
        $__internal_6d29e02c330dcf251a07322e9ea2e2e58f1e0f7ee3689dfc309b0adb8edd6d5f->enter($__internal_6d29e02c330dcf251a07322e9ea2e2e58f1e0f7ee3689dfc309b0adb8edd6d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d29e02c330dcf251a07322e9ea2e2e58f1e0f7ee3689dfc309b0adb8edd6d5f->leave($__internal_6d29e02c330dcf251a07322e9ea2e2e58f1e0f7ee3689dfc309b0adb8edd6d5f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb602b3234c37a44ce90b55e40ba37b0e4028a47399b6d30cfb58f114b3b34df = $this->env->getExtension("native_profiler");
        $__internal_fb602b3234c37a44ce90b55e40ba37b0e4028a47399b6d30cfb58f114b3b34df->enter($__internal_fb602b3234c37a44ce90b55e40ba37b0e4028a47399b6d30cfb58f114b3b34df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fb602b3234c37a44ce90b55e40ba37b0e4028a47399b6d30cfb58f114b3b34df->leave($__internal_fb602b3234c37a44ce90b55e40ba37b0e4028a47399b6d30cfb58f114b3b34df_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_23672e11011a0e861fc888e2d191c01dbf41c6dfd6b9f88986eb4d4d6fe9af2e = $this->env->getExtension("native_profiler");
        $__internal_23672e11011a0e861fc888e2d191c01dbf41c6dfd6b9f88986eb4d4d6fe9af2e->enter($__internal_23672e11011a0e861fc888e2d191c01dbf41c6dfd6b9f88986eb4d4d6fe9af2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_23672e11011a0e861fc888e2d191c01dbf41c6dfd6b9f88986eb4d4d6fe9af2e->leave($__internal_23672e11011a0e861fc888e2d191c01dbf41c6dfd6b9f88986eb4d4d6fe9af2e_prof);

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
