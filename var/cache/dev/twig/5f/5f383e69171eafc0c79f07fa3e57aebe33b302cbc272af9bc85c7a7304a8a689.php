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
        $__internal_cdee2b937094c5b7e282b093ec50469443f39fbb13acb48684e318b571722587 = $this->env->getExtension("native_profiler");
        $__internal_cdee2b937094c5b7e282b093ec50469443f39fbb13acb48684e318b571722587->enter($__internal_cdee2b937094c5b7e282b093ec50469443f39fbb13acb48684e318b571722587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdee2b937094c5b7e282b093ec50469443f39fbb13acb48684e318b571722587->leave($__internal_cdee2b937094c5b7e282b093ec50469443f39fbb13acb48684e318b571722587_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68193b351b7a1fcbf56ef8aae2432138bbe74b8320ab58db4fea71791c69afc0 = $this->env->getExtension("native_profiler");
        $__internal_68193b351b7a1fcbf56ef8aae2432138bbe74b8320ab58db4fea71791c69afc0->enter($__internal_68193b351b7a1fcbf56ef8aae2432138bbe74b8320ab58db4fea71791c69afc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_68193b351b7a1fcbf56ef8aae2432138bbe74b8320ab58db4fea71791c69afc0->leave($__internal_68193b351b7a1fcbf56ef8aae2432138bbe74b8320ab58db4fea71791c69afc0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_42d9e556cb172aa8ff7f9526d33335c02faa1530f678b534ebe2b96662d1dc6d = $this->env->getExtension("native_profiler");
        $__internal_42d9e556cb172aa8ff7f9526d33335c02faa1530f678b534ebe2b96662d1dc6d->enter($__internal_42d9e556cb172aa8ff7f9526d33335c02faa1530f678b534ebe2b96662d1dc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_42d9e556cb172aa8ff7f9526d33335c02faa1530f678b534ebe2b96662d1dc6d->leave($__internal_42d9e556cb172aa8ff7f9526d33335c02faa1530f678b534ebe2b96662d1dc6d_prof);

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
