<?php

/* @LGPUser/Indisponibilite/update.html.twig */
class __TwigTemplate_7ce6c3dc86e7088e4a1e265274824070f068606aa733c4391f554039345818aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 1);
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
        $__internal_c61690f7225fe0a9fef9e02dae741dc26c610b757f997adafaecd6611f628a4f = $this->env->getExtension("native_profiler");
        $__internal_c61690f7225fe0a9fef9e02dae741dc26c610b757f997adafaecd6611f628a4f->enter($__internal_c61690f7225fe0a9fef9e02dae741dc26c610b757f997adafaecd6611f628a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c61690f7225fe0a9fef9e02dae741dc26c610b757f997adafaecd6611f628a4f->leave($__internal_c61690f7225fe0a9fef9e02dae741dc26c610b757f997adafaecd6611f628a4f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f78dfaf151a7dff49e2a1960a2d99ef428494a1796e50fd4d3914eb93c8e748f = $this->env->getExtension("native_profiler");
        $__internal_f78dfaf151a7dff49e2a1960a2d99ef428494a1796e50fd4d3914eb93c8e748f->enter($__internal_f78dfaf151a7dff49e2a1960a2d99ef428494a1796e50fd4d3914eb93c8e748f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f78dfaf151a7dff49e2a1960a2d99ef428494a1796e50fd4d3914eb93c8e748f->leave($__internal_f78dfaf151a7dff49e2a1960a2d99ef428494a1796e50fd4d3914eb93c8e748f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_482fd582bcfd3d54bd52aaa259e7f2e8972f19bb0549e46714d45f9867ac8161 = $this->env->getExtension("native_profiler");
        $__internal_482fd582bcfd3d54bd52aaa259e7f2e8972f19bb0549e46714d45f9867ac8161->enter($__internal_482fd582bcfd3d54bd52aaa259e7f2e8972f19bb0549e46714d45f9867ac8161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_482fd582bcfd3d54bd52aaa259e7f2e8972f19bb0549e46714d45f9867ac8161->leave($__internal_482fd582bcfd3d54bd52aaa259e7f2e8972f19bb0549e46714d45f9867ac8161_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Indisponibilite/update.html.twig";
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
