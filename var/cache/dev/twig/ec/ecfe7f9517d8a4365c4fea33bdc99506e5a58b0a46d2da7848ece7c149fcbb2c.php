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
        $__internal_6d809a38bea85805feaf4731e24bc225cd7346867c1e3af28f5073bd38ca8a7f = $this->env->getExtension("native_profiler");
        $__internal_6d809a38bea85805feaf4731e24bc225cd7346867c1e3af28f5073bd38ca8a7f->enter($__internal_6d809a38bea85805feaf4731e24bc225cd7346867c1e3af28f5073bd38ca8a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d809a38bea85805feaf4731e24bc225cd7346867c1e3af28f5073bd38ca8a7f->leave($__internal_6d809a38bea85805feaf4731e24bc225cd7346867c1e3af28f5073bd38ca8a7f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ba7dec82f77872283a50c82dedfd4e968f8d05248eca731b2da470a5b7d3aa8 = $this->env->getExtension("native_profiler");
        $__internal_2ba7dec82f77872283a50c82dedfd4e968f8d05248eca731b2da470a5b7d3aa8->enter($__internal_2ba7dec82f77872283a50c82dedfd4e968f8d05248eca731b2da470a5b7d3aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ba7dec82f77872283a50c82dedfd4e968f8d05248eca731b2da470a5b7d3aa8->leave($__internal_2ba7dec82f77872283a50c82dedfd4e968f8d05248eca731b2da470a5b7d3aa8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_df28db7a46e122552db2ded1529f5d3ac73ce594373fb481ae35e98833c0df7a = $this->env->getExtension("native_profiler");
        $__internal_df28db7a46e122552db2ded1529f5d3ac73ce594373fb481ae35e98833c0df7a->enter($__internal_df28db7a46e122552db2ded1529f5d3ac73ce594373fb481ae35e98833c0df7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_df28db7a46e122552db2ded1529f5d3ac73ce594373fb481ae35e98833c0df7a->leave($__internal_df28db7a46e122552db2ded1529f5d3ac73ce594373fb481ae35e98833c0df7a_prof);

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
