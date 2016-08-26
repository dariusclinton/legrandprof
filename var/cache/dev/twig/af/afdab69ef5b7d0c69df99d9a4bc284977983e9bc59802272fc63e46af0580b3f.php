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
        $__internal_a7972fa6d44f6635215e1c19639020e23e47e55a900da0708ee1b76a9b217378 = $this->env->getExtension("native_profiler");
        $__internal_a7972fa6d44f6635215e1c19639020e23e47e55a900da0708ee1b76a9b217378->enter($__internal_a7972fa6d44f6635215e1c19639020e23e47e55a900da0708ee1b76a9b217378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7972fa6d44f6635215e1c19639020e23e47e55a900da0708ee1b76a9b217378->leave($__internal_a7972fa6d44f6635215e1c19639020e23e47e55a900da0708ee1b76a9b217378_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e96887f8c7f8f297db54c932ffbfc577107845c43925f1d375b1bd96eb83c8f1 = $this->env->getExtension("native_profiler");
        $__internal_e96887f8c7f8f297db54c932ffbfc577107845c43925f1d375b1bd96eb83c8f1->enter($__internal_e96887f8c7f8f297db54c932ffbfc577107845c43925f1d375b1bd96eb83c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e96887f8c7f8f297db54c932ffbfc577107845c43925f1d375b1bd96eb83c8f1->leave($__internal_e96887f8c7f8f297db54c932ffbfc577107845c43925f1d375b1bd96eb83c8f1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb8faa71938b78da4aaa1e34eef803d4dd5fe211c679d05b0ffcf68fe920c20 = $this->env->getExtension("native_profiler");
        $__internal_7fb8faa71938b78da4aaa1e34eef803d4dd5fe211c679d05b0ffcf68fe920c20->enter($__internal_7fb8faa71938b78da4aaa1e34eef803d4dd5fe211c679d05b0ffcf68fe920c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_7fb8faa71938b78da4aaa1e34eef803d4dd5fe211c679d05b0ffcf68fe920c20->leave($__internal_7fb8faa71938b78da4aaa1e34eef803d4dd5fe211c679d05b0ffcf68fe920c20_prof);

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
