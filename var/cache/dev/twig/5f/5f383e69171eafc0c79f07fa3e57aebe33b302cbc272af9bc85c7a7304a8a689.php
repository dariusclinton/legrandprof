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
        $__internal_e5aaaaeb3233499b6123940a2ef6907e8bc9f207cdaab83b299c67a327173ad6 = $this->env->getExtension("native_profiler");
        $__internal_e5aaaaeb3233499b6123940a2ef6907e8bc9f207cdaab83b299c67a327173ad6->enter($__internal_e5aaaaeb3233499b6123940a2ef6907e8bc9f207cdaab83b299c67a327173ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5aaaaeb3233499b6123940a2ef6907e8bc9f207cdaab83b299c67a327173ad6->leave($__internal_e5aaaaeb3233499b6123940a2ef6907e8bc9f207cdaab83b299c67a327173ad6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3bb7006607068a29c7e07afaf3d7c1535deaad1465aaeac9d98645e820705dc = $this->env->getExtension("native_profiler");
        $__internal_f3bb7006607068a29c7e07afaf3d7c1535deaad1465aaeac9d98645e820705dc->enter($__internal_f3bb7006607068a29c7e07afaf3d7c1535deaad1465aaeac9d98645e820705dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f3bb7006607068a29c7e07afaf3d7c1535deaad1465aaeac9d98645e820705dc->leave($__internal_f3bb7006607068a29c7e07afaf3d7c1535deaad1465aaeac9d98645e820705dc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cdea70a4a051370cfbfac1865f7e8c50628123d009e8785a394b9a1713fdd93 = $this->env->getExtension("native_profiler");
        $__internal_7cdea70a4a051370cfbfac1865f7e8c50628123d009e8785a394b9a1713fdd93->enter($__internal_7cdea70a4a051370cfbfac1865f7e8c50628123d009e8785a394b9a1713fdd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_7cdea70a4a051370cfbfac1865f7e8c50628123d009e8785a394b9a1713fdd93->leave($__internal_7cdea70a4a051370cfbfac1865f7e8c50628123d009e8785a394b9a1713fdd93_prof);

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
