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
        $__internal_05f93540dab0fd9bb3f9eeacd3b049f9312dd0c58069785fc1550d72f4ce0929 = $this->env->getExtension("native_profiler");
        $__internal_05f93540dab0fd9bb3f9eeacd3b049f9312dd0c58069785fc1550d72f4ce0929->enter($__internal_05f93540dab0fd9bb3f9eeacd3b049f9312dd0c58069785fc1550d72f4ce0929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:NouvelleCategorieCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f93540dab0fd9bb3f9eeacd3b049f9312dd0c58069785fc1550d72f4ce0929->leave($__internal_05f93540dab0fd9bb3f9eeacd3b049f9312dd0c58069785fc1550d72f4ce0929_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa550bbb9949e86e25fd330f172033139da5307157a54134187effdec5380ecf = $this->env->getExtension("native_profiler");
        $__internal_aa550bbb9949e86e25fd330f172033139da5307157a54134187effdec5380ecf->enter($__internal_aa550bbb9949e86e25fd330f172033139da5307157a54134187effdec5380ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une nouvelle catégorie de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aa550bbb9949e86e25fd330f172033139da5307157a54134187effdec5380ecf->leave($__internal_aa550bbb9949e86e25fd330f172033139da5307157a54134187effdec5380ecf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_729bfbff3932dab4d0dff5975598bc9e596f84dbb0ddcd86eb931a707242e970 = $this->env->getExtension("native_profiler");
        $__internal_729bfbff3932dab4d0dff5975598bc9e596f84dbb0ddcd86eb931a707242e970->enter($__internal_729bfbff3932dab4d0dff5975598bc9e596f84dbb0ddcd86eb931a707242e970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Mise à jour d'une nouvelle catégorie de cours </h1>
    
  ";
        // line 11
        $this->loadTemplate("LGPUserBundle:NouvelleCategorieCours:formulaire.html.twig", "LGPUserBundle:NouvelleCategorieCours:update.html.twig", 11)->display($context);
        // line 12
        echo "  
";
        
        $__internal_729bfbff3932dab4d0dff5975598bc9e596f84dbb0ddcd86eb931a707242e970->leave($__internal_729bfbff3932dab4d0dff5975598bc9e596f84dbb0ddcd86eb931a707242e970_prof);

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
