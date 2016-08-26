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
        $__internal_af20564f38bef934feed262ea12d6a0d802ca1bfef738713eb6b1fa2d7a40129 = $this->env->getExtension("native_profiler");
        $__internal_af20564f38bef934feed262ea12d6a0d802ca1bfef738713eb6b1fa2d7a40129->enter($__internal_af20564f38bef934feed262ea12d6a0d802ca1bfef738713eb6b1fa2d7a40129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af20564f38bef934feed262ea12d6a0d802ca1bfef738713eb6b1fa2d7a40129->leave($__internal_af20564f38bef934feed262ea12d6a0d802ca1bfef738713eb6b1fa2d7a40129_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56354b7d62c14a9c34166abdce299dd623d22c9e56b6278d39fc39da82dc9936 = $this->env->getExtension("native_profiler");
        $__internal_56354b7d62c14a9c34166abdce299dd623d22c9e56b6278d39fc39da82dc9936->enter($__internal_56354b7d62c14a9c34166abdce299dd623d22c9e56b6278d39fc39da82dc9936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_56354b7d62c14a9c34166abdce299dd623d22c9e56b6278d39fc39da82dc9936->leave($__internal_56354b7d62c14a9c34166abdce299dd623d22c9e56b6278d39fc39da82dc9936_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_87d2bd270d9f2aaabab7890b1355177292944480f64664380a247c70ed837edb = $this->env->getExtension("native_profiler");
        $__internal_87d2bd270d9f2aaabab7890b1355177292944480f64664380a247c70ed837edb->enter($__internal_87d2bd270d9f2aaabab7890b1355177292944480f64664380a247c70ed837edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_87d2bd270d9f2aaabab7890b1355177292944480f64664380a247c70ed837edb->leave($__internal_87d2bd270d9f2aaabab7890b1355177292944480f64664380a247c70ed837edb_prof);

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
