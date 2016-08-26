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
        $__internal_a16dce6900038714c7d3495613795807ef1c07dd76f4fd790ce74365216ea55e = $this->env->getExtension("native_profiler");
        $__internal_a16dce6900038714c7d3495613795807ef1c07dd76f4fd790ce74365216ea55e->enter($__internal_a16dce6900038714c7d3495613795807ef1c07dd76f4fd790ce74365216ea55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16dce6900038714c7d3495613795807ef1c07dd76f4fd790ce74365216ea55e->leave($__internal_a16dce6900038714c7d3495613795807ef1c07dd76f4fd790ce74365216ea55e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee55226a8a73f8d4b0f2e554f30f686e3d3d96dc8a6695f185478f459b9220a3 = $this->env->getExtension("native_profiler");
        $__internal_ee55226a8a73f8d4b0f2e554f30f686e3d3d96dc8a6695f185478f459b9220a3->enter($__internal_ee55226a8a73f8d4b0f2e554f30f686e3d3d96dc8a6695f185478f459b9220a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ee55226a8a73f8d4b0f2e554f30f686e3d3d96dc8a6695f185478f459b9220a3->leave($__internal_ee55226a8a73f8d4b0f2e554f30f686e3d3d96dc8a6695f185478f459b9220a3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d66895be2db623ce9584d8078c168211cef435c83b97739ac2e65ba0a687eec5 = $this->env->getExtension("native_profiler");
        $__internal_d66895be2db623ce9584d8078c168211cef435c83b97739ac2e65ba0a687eec5->enter($__internal_d66895be2db623ce9584d8078c168211cef435c83b97739ac2e65ba0a687eec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_d66895be2db623ce9584d8078c168211cef435c83b97739ac2e65ba0a687eec5->leave($__internal_d66895be2db623ce9584d8078c168211cef435c83b97739ac2e65ba0a687eec5_prof);

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
