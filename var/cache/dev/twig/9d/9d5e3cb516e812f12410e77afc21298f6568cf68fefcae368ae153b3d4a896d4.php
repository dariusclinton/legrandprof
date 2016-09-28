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
        $__internal_34534550aa7633693a92ddf3f8b8b3f96e00420d5cd02273c0212ccb09a2a1bf = $this->env->getExtension("native_profiler");
        $__internal_34534550aa7633693a92ddf3f8b8b3f96e00420d5cd02273c0212ccb09a2a1bf->enter($__internal_34534550aa7633693a92ddf3f8b8b3f96e00420d5cd02273c0212ccb09a2a1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34534550aa7633693a92ddf3f8b8b3f96e00420d5cd02273c0212ccb09a2a1bf->leave($__internal_34534550aa7633693a92ddf3f8b8b3f96e00420d5cd02273c0212ccb09a2a1bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79cba392b7eea83fc3a28b89783a12bec1b4fbe4a1d417b30ce809a86bd2f164 = $this->env->getExtension("native_profiler");
        $__internal_79cba392b7eea83fc3a28b89783a12bec1b4fbe4a1d417b30ce809a86bd2f164->enter($__internal_79cba392b7eea83fc3a28b89783a12bec1b4fbe4a1d417b30ce809a86bd2f164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_79cba392b7eea83fc3a28b89783a12bec1b4fbe4a1d417b30ce809a86bd2f164->leave($__internal_79cba392b7eea83fc3a28b89783a12bec1b4fbe4a1d417b30ce809a86bd2f164_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_636bd2b1886d8ef62e8a10ab0b8a97dabb642a0fc2d9c9d71c2d56928fd1aacf = $this->env->getExtension("native_profiler");
        $__internal_636bd2b1886d8ef62e8a10ab0b8a97dabb642a0fc2d9c9d71c2d56928fd1aacf->enter($__internal_636bd2b1886d8ef62e8a10ab0b8a97dabb642a0fc2d9c9d71c2d56928fd1aacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_636bd2b1886d8ef62e8a10ab0b8a97dabb642a0fc2d9c9d71c2d56928fd1aacf->leave($__internal_636bd2b1886d8ef62e8a10ab0b8a97dabb642a0fc2d9c9d71c2d56928fd1aacf_prof);

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
