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
        $__internal_3425e6632bbdf7bcb31d775e644f755efe49522786433870f8ee4a2a5557ffd9 = $this->env->getExtension("native_profiler");
        $__internal_3425e6632bbdf7bcb31d775e644f755efe49522786433870f8ee4a2a5557ffd9->enter($__internal_3425e6632bbdf7bcb31d775e644f755efe49522786433870f8ee4a2a5557ffd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3425e6632bbdf7bcb31d775e644f755efe49522786433870f8ee4a2a5557ffd9->leave($__internal_3425e6632bbdf7bcb31d775e644f755efe49522786433870f8ee4a2a5557ffd9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18f6c54860a94ccbab89b7b27bb66581a2d3eba2908b23567db40b86b721b9f8 = $this->env->getExtension("native_profiler");
        $__internal_18f6c54860a94ccbab89b7b27bb66581a2d3eba2908b23567db40b86b721b9f8->enter($__internal_18f6c54860a94ccbab89b7b27bb66581a2d3eba2908b23567db40b86b721b9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_18f6c54860a94ccbab89b7b27bb66581a2d3eba2908b23567db40b86b721b9f8->leave($__internal_18f6c54860a94ccbab89b7b27bb66581a2d3eba2908b23567db40b86b721b9f8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_15015362dbe79db315a9a082c7a3254a48179b2184e308c5fa8236583fbccb83 = $this->env->getExtension("native_profiler");
        $__internal_15015362dbe79db315a9a082c7a3254a48179b2184e308c5fa8236583fbccb83->enter($__internal_15015362dbe79db315a9a082c7a3254a48179b2184e308c5fa8236583fbccb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_15015362dbe79db315a9a082c7a3254a48179b2184e308c5fa8236583fbccb83->leave($__internal_15015362dbe79db315a9a082c7a3254a48179b2184e308c5fa8236583fbccb83_prof);

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
