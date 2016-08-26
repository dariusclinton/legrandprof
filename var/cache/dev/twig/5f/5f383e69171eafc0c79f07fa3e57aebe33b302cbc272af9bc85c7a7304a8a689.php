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
        $__internal_1f0ed56254d298cc8062312e26790801ec17a35a6ca5b4229dfca670e0c58d85 = $this->env->getExtension("native_profiler");
        $__internal_1f0ed56254d298cc8062312e26790801ec17a35a6ca5b4229dfca670e0c58d85->enter($__internal_1f0ed56254d298cc8062312e26790801ec17a35a6ca5b4229dfca670e0c58d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f0ed56254d298cc8062312e26790801ec17a35a6ca5b4229dfca670e0c58d85->leave($__internal_1f0ed56254d298cc8062312e26790801ec17a35a6ca5b4229dfca670e0c58d85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e8bbbd39b7e3f1f73292e51759dcdf4c05ace2694bf67b7f90862ed465bebb = $this->env->getExtension("native_profiler");
        $__internal_d1e8bbbd39b7e3f1f73292e51759dcdf4c05ace2694bf67b7f90862ed465bebb->enter($__internal_d1e8bbbd39b7e3f1f73292e51759dcdf4c05ace2694bf67b7f90862ed465bebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d1e8bbbd39b7e3f1f73292e51759dcdf4c05ace2694bf67b7f90862ed465bebb->leave($__internal_d1e8bbbd39b7e3f1f73292e51759dcdf4c05ace2694bf67b7f90862ed465bebb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_832f9407c8240bfaaafcdfd4c77847f6c8b97db3e1df8542e0358248a2942cb4 = $this->env->getExtension("native_profiler");
        $__internal_832f9407c8240bfaaafcdfd4c77847f6c8b97db3e1df8542e0358248a2942cb4->enter($__internal_832f9407c8240bfaaafcdfd4c77847f6c8b97db3e1df8542e0358248a2942cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_832f9407c8240bfaaafcdfd4c77847f6c8b97db3e1df8542e0358248a2942cb4->leave($__internal_832f9407c8240bfaaafcdfd4c77847f6c8b97db3e1df8542e0358248a2942cb4_prof);

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
