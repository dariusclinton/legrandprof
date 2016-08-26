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
        $__internal_65f96a09ddd12f52583968fa5bbd75a2854e82fe99a006554d39702bfb3953a8 = $this->env->getExtension("native_profiler");
        $__internal_65f96a09ddd12f52583968fa5bbd75a2854e82fe99a006554d39702bfb3953a8->enter($__internal_65f96a09ddd12f52583968fa5bbd75a2854e82fe99a006554d39702bfb3953a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f96a09ddd12f52583968fa5bbd75a2854e82fe99a006554d39702bfb3953a8->leave($__internal_65f96a09ddd12f52583968fa5bbd75a2854e82fe99a006554d39702bfb3953a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1d918da0ccd15cf0d58def031f0357b15cf3edf2c8a3874eefb0a08b69203dd = $this->env->getExtension("native_profiler");
        $__internal_f1d918da0ccd15cf0d58def031f0357b15cf3edf2c8a3874eefb0a08b69203dd->enter($__internal_f1d918da0ccd15cf0d58def031f0357b15cf3edf2c8a3874eefb0a08b69203dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f1d918da0ccd15cf0d58def031f0357b15cf3edf2c8a3874eefb0a08b69203dd->leave($__internal_f1d918da0ccd15cf0d58def031f0357b15cf3edf2c8a3874eefb0a08b69203dd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ab5fb20f9fbfa264bc9ee64666df38059d7a8b9c34e798259d155e17f00a475 = $this->env->getExtension("native_profiler");
        $__internal_7ab5fb20f9fbfa264bc9ee64666df38059d7a8b9c34e798259d155e17f00a475->enter($__internal_7ab5fb20f9fbfa264bc9ee64666df38059d7a8b9c34e798259d155e17f00a475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_7ab5fb20f9fbfa264bc9ee64666df38059d7a8b9c34e798259d155e17f00a475->leave($__internal_7ab5fb20f9fbfa264bc9ee64666df38059d7a8b9c34e798259d155e17f00a475_prof);

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
