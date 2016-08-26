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
        $__internal_177efedff4f4c7f4c990d3641dfa8d6d5a2d15c6cab384adc2f61f0e3278b362 = $this->env->getExtension("native_profiler");
        $__internal_177efedff4f4c7f4c990d3641dfa8d6d5a2d15c6cab384adc2f61f0e3278b362->enter($__internal_177efedff4f4c7f4c990d3641dfa8d6d5a2d15c6cab384adc2f61f0e3278b362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_177efedff4f4c7f4c990d3641dfa8d6d5a2d15c6cab384adc2f61f0e3278b362->leave($__internal_177efedff4f4c7f4c990d3641dfa8d6d5a2d15c6cab384adc2f61f0e3278b362_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edff2df27e938aa32eaf8b5b39ac0b9005bceacdb7ce1ca5a78ccfbd54e97969 = $this->env->getExtension("native_profiler");
        $__internal_edff2df27e938aa32eaf8b5b39ac0b9005bceacdb7ce1ca5a78ccfbd54e97969->enter($__internal_edff2df27e938aa32eaf8b5b39ac0b9005bceacdb7ce1ca5a78ccfbd54e97969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_edff2df27e938aa32eaf8b5b39ac0b9005bceacdb7ce1ca5a78ccfbd54e97969->leave($__internal_edff2df27e938aa32eaf8b5b39ac0b9005bceacdb7ce1ca5a78ccfbd54e97969_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_673864461e027127d5ea98c98328ddab7d7c094ffa5a5ba614ce266132a97fe9 = $this->env->getExtension("native_profiler");
        $__internal_673864461e027127d5ea98c98328ddab7d7c094ffa5a5ba614ce266132a97fe9->enter($__internal_673864461e027127d5ea98c98328ddab7d7c094ffa5a5ba614ce266132a97fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_673864461e027127d5ea98c98328ddab7d7c094ffa5a5ba614ce266132a97fe9->leave($__internal_673864461e027127d5ea98c98328ddab7d7c094ffa5a5ba614ce266132a97fe9_prof);

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
