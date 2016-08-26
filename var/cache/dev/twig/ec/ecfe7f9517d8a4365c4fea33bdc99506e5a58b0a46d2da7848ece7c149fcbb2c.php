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
        $__internal_6613dc30035f170e719ad359cde2368dea7ba9fbad0c4faeb0b54669945f9d28 = $this->env->getExtension("native_profiler");
        $__internal_6613dc30035f170e719ad359cde2368dea7ba9fbad0c4faeb0b54669945f9d28->enter($__internal_6613dc30035f170e719ad359cde2368dea7ba9fbad0c4faeb0b54669945f9d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6613dc30035f170e719ad359cde2368dea7ba9fbad0c4faeb0b54669945f9d28->leave($__internal_6613dc30035f170e719ad359cde2368dea7ba9fbad0c4faeb0b54669945f9d28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2aed89937a407b14114f0d51c774f9c4c31ef1be733e2beed409395322269052 = $this->env->getExtension("native_profiler");
        $__internal_2aed89937a407b14114f0d51c774f9c4c31ef1be733e2beed409395322269052->enter($__internal_2aed89937a407b14114f0d51c774f9c4c31ef1be733e2beed409395322269052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2aed89937a407b14114f0d51c774f9c4c31ef1be733e2beed409395322269052->leave($__internal_2aed89937a407b14114f0d51c774f9c4c31ef1be733e2beed409395322269052_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d3707e94e897eea0c7468883a360c83b3e8eddb5397446c974160a6abf03eec = $this->env->getExtension("native_profiler");
        $__internal_9d3707e94e897eea0c7468883a360c83b3e8eddb5397446c974160a6abf03eec->enter($__internal_9d3707e94e897eea0c7468883a360c83b3e8eddb5397446c974160a6abf03eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_9d3707e94e897eea0c7468883a360c83b3e8eddb5397446c974160a6abf03eec->leave($__internal_9d3707e94e897eea0c7468883a360c83b3e8eddb5397446c974160a6abf03eec_prof);

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
