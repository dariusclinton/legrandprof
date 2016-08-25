<?php

/* LGPUserBundle:Indisponibilite:add.html.twig */
class __TwigTemplate_ecd240250925f522b3c42b33ff6d4a5502fd8bf230a28c1130fefa3dc1c09c30 extends Twig_Template
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
        $__internal_b7ad8544ca0d52c5fc1ee5d7e693d410b12a82d5003573ea0f195fe0defc4086 = $this->env->getExtension("native_profiler");
        $__internal_b7ad8544ca0d52c5fc1ee5d7e693d410b12a82d5003573ea0f195fe0defc4086->enter($__internal_b7ad8544ca0d52c5fc1ee5d7e693d410b12a82d5003573ea0f195fe0defc4086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ad8544ca0d52c5fc1ee5d7e693d410b12a82d5003573ea0f195fe0defc4086->leave($__internal_b7ad8544ca0d52c5fc1ee5d7e693d410b12a82d5003573ea0f195fe0defc4086_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3adcca6e13d9aebae35831e8589e8ae1423cff84a695c656108d573ae899c8a0 = $this->env->getExtension("native_profiler");
        $__internal_3adcca6e13d9aebae35831e8589e8ae1423cff84a695c656108d573ae899c8a0->enter($__internal_3adcca6e13d9aebae35831e8589e8ae1423cff84a695c656108d573ae899c8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3adcca6e13d9aebae35831e8589e8ae1423cff84a695c656108d573ae899c8a0->leave($__internal_3adcca6e13d9aebae35831e8589e8ae1423cff84a695c656108d573ae899c8a0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c69f5e7f9d7b4b211bf862fd0202e8f0e06bf390f9ff39870861e48c2a234850 = $this->env->getExtension("native_profiler");
        $__internal_c69f5e7f9d7b4b211bf862fd0202e8f0e06bf390f9ff39870861e48c2a234850->enter($__internal_c69f5e7f9d7b4b211bf862fd0202e8f0e06bf390f9ff39870861e48c2a234850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_c69f5e7f9d7b4b211bf862fd0202e8f0e06bf390f9ff39870861e48c2a234850->leave($__internal_c69f5e7f9d7b4b211bf862fd0202e8f0e06bf390f9ff39870861e48c2a234850_prof);

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
