<?php

/* @LGPUser/Indisponibilite/add.html.twig */
class __TwigTemplate_2ee49e30452d35eebd11255cafd08c488f29838bb6b1fde8462571fefe1928ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 1);
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
        $__internal_51613fcb865483fb722b8e4d3344d545b2936f8e7e54998745d8120ffc640730 = $this->env->getExtension("native_profiler");
        $__internal_51613fcb865483fb722b8e4d3344d545b2936f8e7e54998745d8120ffc640730->enter($__internal_51613fcb865483fb722b8e4d3344d545b2936f8e7e54998745d8120ffc640730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51613fcb865483fb722b8e4d3344d545b2936f8e7e54998745d8120ffc640730->leave($__internal_51613fcb865483fb722b8e4d3344d545b2936f8e7e54998745d8120ffc640730_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dea27705834542a3d81f72b68c650f34c5782a3927e9df5fd9f44c1a7dc172b = $this->env->getExtension("native_profiler");
        $__internal_3dea27705834542a3d81f72b68c650f34c5782a3927e9df5fd9f44c1a7dc172b->enter($__internal_3dea27705834542a3d81f72b68c650f34c5782a3927e9df5fd9f44c1a7dc172b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3dea27705834542a3d81f72b68c650f34c5782a3927e9df5fd9f44c1a7dc172b->leave($__internal_3dea27705834542a3d81f72b68c650f34c5782a3927e9df5fd9f44c1a7dc172b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c63c90586d87f5e88aa4081ede969c2aad3ed207f8c37d8cd56c10e88381f728 = $this->env->getExtension("native_profiler");
        $__internal_c63c90586d87f5e88aa4081ede969c2aad3ed207f8c37d8cd56c10e88381f728->enter($__internal_c63c90586d87f5e88aa4081ede969c2aad3ed207f8c37d8cd56c10e88381f728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_c63c90586d87f5e88aa4081ede969c2aad3ed207f8c37d8cd56c10e88381f728->leave($__internal_c63c90586d87f5e88aa4081ede969c2aad3ed207f8c37d8cd56c10e88381f728_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Indisponibilite/add.html.twig";
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
/*   Ajout d'une indisponibilité - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'une indiponibilité</h1>*/
/*   */
/*   {% include 'LGPUserBundle:Indisponibilite:formulaire.html.twig' %}*/
/*   */
/* {% endblock %}*/
