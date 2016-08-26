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
        $__internal_18c3ebdd906a45ccd7d1adca1406d9194464db2e31f020426baf34cc9e63da98 = $this->env->getExtension("native_profiler");
        $__internal_18c3ebdd906a45ccd7d1adca1406d9194464db2e31f020426baf34cc9e63da98->enter($__internal_18c3ebdd906a45ccd7d1adca1406d9194464db2e31f020426baf34cc9e63da98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18c3ebdd906a45ccd7d1adca1406d9194464db2e31f020426baf34cc9e63da98->leave($__internal_18c3ebdd906a45ccd7d1adca1406d9194464db2e31f020426baf34cc9e63da98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb4d87f21b479d4992dd02f6fadbade311cbcf248db15282ebefa2068be24030 = $this->env->getExtension("native_profiler");
        $__internal_cb4d87f21b479d4992dd02f6fadbade311cbcf248db15282ebefa2068be24030->enter($__internal_cb4d87f21b479d4992dd02f6fadbade311cbcf248db15282ebefa2068be24030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cb4d87f21b479d4992dd02f6fadbade311cbcf248db15282ebefa2068be24030->leave($__internal_cb4d87f21b479d4992dd02f6fadbade311cbcf248db15282ebefa2068be24030_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_85267cfb4a1afdb39716acb250ea35b8a3c642d371a1e8def4db6620d35416e4 = $this->env->getExtension("native_profiler");
        $__internal_85267cfb4a1afdb39716acb250ea35b8a3c642d371a1e8def4db6620d35416e4->enter($__internal_85267cfb4a1afdb39716acb250ea35b8a3c642d371a1e8def4db6620d35416e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_85267cfb4a1afdb39716acb250ea35b8a3c642d371a1e8def4db6620d35416e4->leave($__internal_85267cfb4a1afdb39716acb250ea35b8a3c642d371a1e8def4db6620d35416e4_prof);

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
