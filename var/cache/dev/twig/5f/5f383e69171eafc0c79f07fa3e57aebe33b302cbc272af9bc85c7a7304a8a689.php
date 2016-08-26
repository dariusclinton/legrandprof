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
        $__internal_5c5c7a5e244e131243e7da50658d22717afd0898f1ff1bd4c8ee27763a8f1cb4 = $this->env->getExtension("native_profiler");
        $__internal_5c5c7a5e244e131243e7da50658d22717afd0898f1ff1bd4c8ee27763a8f1cb4->enter($__internal_5c5c7a5e244e131243e7da50658d22717afd0898f1ff1bd4c8ee27763a8f1cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5c7a5e244e131243e7da50658d22717afd0898f1ff1bd4c8ee27763a8f1cb4->leave($__internal_5c5c7a5e244e131243e7da50658d22717afd0898f1ff1bd4c8ee27763a8f1cb4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43e09e34272b84409889ef1824620bda1d3bc7a89a88195f2d04b553b97c44a5 = $this->env->getExtension("native_profiler");
        $__internal_43e09e34272b84409889ef1824620bda1d3bc7a89a88195f2d04b553b97c44a5->enter($__internal_43e09e34272b84409889ef1824620bda1d3bc7a89a88195f2d04b553b97c44a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_43e09e34272b84409889ef1824620bda1d3bc7a89a88195f2d04b553b97c44a5->leave($__internal_43e09e34272b84409889ef1824620bda1d3bc7a89a88195f2d04b553b97c44a5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_90dcc99d6083ce4bba28693508cf5ed28417f01d56a28e2e76985a483a380496 = $this->env->getExtension("native_profiler");
        $__internal_90dcc99d6083ce4bba28693508cf5ed28417f01d56a28e2e76985a483a380496->enter($__internal_90dcc99d6083ce4bba28693508cf5ed28417f01d56a28e2e76985a483a380496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_90dcc99d6083ce4bba28693508cf5ed28417f01d56a28e2e76985a483a380496->leave($__internal_90dcc99d6083ce4bba28693508cf5ed28417f01d56a28e2e76985a483a380496_prof);

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
