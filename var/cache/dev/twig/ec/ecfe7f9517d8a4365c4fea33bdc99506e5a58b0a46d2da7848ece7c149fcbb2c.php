<?php

/* LGPUserBundle:Indisponibilite:add.html.twig */
class __TwigTemplate_a21ded62da709a6ea32e66b2d1c86df0ce3147bb95136aa897256c1945f7af4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 1);
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
        $__internal_ba94ef05e4ec556207617c14b97f669055b71bd722199df00c6c30d195775ace = $this->env->getExtension("native_profiler");
        $__internal_ba94ef05e4ec556207617c14b97f669055b71bd722199df00c6c30d195775ace->enter($__internal_ba94ef05e4ec556207617c14b97f669055b71bd722199df00c6c30d195775ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba94ef05e4ec556207617c14b97f669055b71bd722199df00c6c30d195775ace->leave($__internal_ba94ef05e4ec556207617c14b97f669055b71bd722199df00c6c30d195775ace_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9bb084665d3274ffc04e011dd07ddbf48edc1b41e084f2e8760a9d24ee8041f = $this->env->getExtension("native_profiler");
        $__internal_a9bb084665d3274ffc04e011dd07ddbf48edc1b41e084f2e8760a9d24ee8041f->enter($__internal_a9bb084665d3274ffc04e011dd07ddbf48edc1b41e084f2e8760a9d24ee8041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a9bb084665d3274ffc04e011dd07ddbf48edc1b41e084f2e8760a9d24ee8041f->leave($__internal_a9bb084665d3274ffc04e011dd07ddbf48edc1b41e084f2e8760a9d24ee8041f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f85556156874003fd7e293aab313cd3a8ac6290d0a0732a60f2d564efcfaae0b = $this->env->getExtension("native_profiler");
        $__internal_f85556156874003fd7e293aab313cd3a8ac6290d0a0732a60f2d564efcfaae0b->enter($__internal_f85556156874003fd7e293aab313cd3a8ac6290d0a0732a60f2d564efcfaae0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_f85556156874003fd7e293aab313cd3a8ac6290d0a0732a60f2d564efcfaae0b->leave($__internal_f85556156874003fd7e293aab313cd3a8ac6290d0a0732a60f2d564efcfaae0b_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:add.html.twig";
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
