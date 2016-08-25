<?php

/* LGPUserBundle:Indisponibilite:update.html.twig */
class __TwigTemplate_2999194e03589f548918efe8f428ae1d060e076b56888a4fada948319115b743 extends Twig_Template
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
        $__internal_2b87dac3989d122f05ba6cd5d45ac137783a4e4a5fd10cec1cb6eecb8d5738dc = $this->env->getExtension("native_profiler");
        $__internal_2b87dac3989d122f05ba6cd5d45ac137783a4e4a5fd10cec1cb6eecb8d5738dc->enter($__internal_2b87dac3989d122f05ba6cd5d45ac137783a4e4a5fd10cec1cb6eecb8d5738dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b87dac3989d122f05ba6cd5d45ac137783a4e4a5fd10cec1cb6eecb8d5738dc->leave($__internal_2b87dac3989d122f05ba6cd5d45ac137783a4e4a5fd10cec1cb6eecb8d5738dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_400b2de9eeb2a5857a15eabb0329b77327f162c93b95ddee6997244db7e705fb = $this->env->getExtension("native_profiler");
        $__internal_400b2de9eeb2a5857a15eabb0329b77327f162c93b95ddee6997244db7e705fb->enter($__internal_400b2de9eeb2a5857a15eabb0329b77327f162c93b95ddee6997244db7e705fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_400b2de9eeb2a5857a15eabb0329b77327f162c93b95ddee6997244db7e705fb->leave($__internal_400b2de9eeb2a5857a15eabb0329b77327f162c93b95ddee6997244db7e705fb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c62edccc398a26b71c7faf2a10085b429731c580f7b6c438ffa02b225f59ee1b = $this->env->getExtension("native_profiler");
        $__internal_c62edccc398a26b71c7faf2a10085b429731c580f7b6c438ffa02b225f59ee1b->enter($__internal_c62edccc398a26b71c7faf2a10085b429731c580f7b6c438ffa02b225f59ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_c62edccc398a26b71c7faf2a10085b429731c580f7b6c438ffa02b225f59ee1b->leave($__internal_c62edccc398a26b71c7faf2a10085b429731c580f7b6c438ffa02b225f59ee1b_prof);

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
