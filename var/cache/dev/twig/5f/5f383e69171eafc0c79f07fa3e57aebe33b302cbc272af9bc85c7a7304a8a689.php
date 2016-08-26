<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_eb0bd91c86d433e8989acc466f2f203ad3133396af497cac3b43a3163c3825c5 extends Twig_Template
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
        $__internal_32be2026f06d7eddfce33a3f974babb97886838d64525521cf820b553bd62f39 = $this->env->getExtension("native_profiler");
        $__internal_32be2026f06d7eddfce33a3f974babb97886838d64525521cf820b553bd62f39->enter($__internal_32be2026f06d7eddfce33a3f974babb97886838d64525521cf820b553bd62f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32be2026f06d7eddfce33a3f974babb97886838d64525521cf820b553bd62f39->leave($__internal_32be2026f06d7eddfce33a3f974babb97886838d64525521cf820b553bd62f39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23a65bb91b6a9592f6306d7d16dbf4616894613a4efb0b9be16c2e7a3cbf36a8 = $this->env->getExtension("native_profiler");
        $__internal_23a65bb91b6a9592f6306d7d16dbf4616894613a4efb0b9be16c2e7a3cbf36a8->enter($__internal_23a65bb91b6a9592f6306d7d16dbf4616894613a4efb0b9be16c2e7a3cbf36a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_23a65bb91b6a9592f6306d7d16dbf4616894613a4efb0b9be16c2e7a3cbf36a8->leave($__internal_23a65bb91b6a9592f6306d7d16dbf4616894613a4efb0b9be16c2e7a3cbf36a8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b9cc133eb66060aaaa6557a83497cd2f7d79ca46e86d3a82eb2ff7307a9a411 = $this->env->getExtension("native_profiler");
        $__internal_0b9cc133eb66060aaaa6557a83497cd2f7d79ca46e86d3a82eb2ff7307a9a411->enter($__internal_0b9cc133eb66060aaaa6557a83497cd2f7d79ca46e86d3a82eb2ff7307a9a411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_0b9cc133eb66060aaaa6557a83497cd2f7d79ca46e86d3a82eb2ff7307a9a411->leave($__internal_0b9cc133eb66060aaaa6557a83497cd2f7d79ca46e86d3a82eb2ff7307a9a411_prof);

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
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Mise à jour d'une indisponibilité - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Mise à d'une indiponibilité</h1>*/
/*   */
/*   {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}*/
/*   */
/* {% endblock %}*/
