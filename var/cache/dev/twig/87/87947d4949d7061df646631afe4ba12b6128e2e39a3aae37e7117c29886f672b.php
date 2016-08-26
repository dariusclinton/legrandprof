<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_6a88d2a2f0a77016e5516f783f6a3d0e21113b81a4b628bea429a33880d89069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
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
        $__internal_dea7e0b26d2f96a3108d3ef6b3c69d8a6fdca1b59a5ada99670041f57101d158 = $this->env->getExtension("native_profiler");
        $__internal_dea7e0b26d2f96a3108d3ef6b3c69d8a6fdca1b59a5ada99670041f57101d158->enter($__internal_dea7e0b26d2f96a3108d3ef6b3c69d8a6fdca1b59a5ada99670041f57101d158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea7e0b26d2f96a3108d3ef6b3c69d8a6fdca1b59a5ada99670041f57101d158->leave($__internal_dea7e0b26d2f96a3108d3ef6b3c69d8a6fdca1b59a5ada99670041f57101d158_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fbac4417c80276bdc943b948bb361d609c07044497f7513d2b8a0b1d8235948 = $this->env->getExtension("native_profiler");
        $__internal_6fbac4417c80276bdc943b948bb361d609c07044497f7513d2b8a0b1d8235948->enter($__internal_6fbac4417c80276bdc943b948bb361d609c07044497f7513d2b8a0b1d8235948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6fbac4417c80276bdc943b948bb361d609c07044497f7513d2b8a0b1d8235948->leave($__internal_6fbac4417c80276bdc943b948bb361d609c07044497f7513d2b8a0b1d8235948_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e7aee483b43d57ef9c730dc0ab455feac3dcd1ec16829ac5926d959de74103 = $this->env->getExtension("native_profiler");
        $__internal_84e7aee483b43d57ef9c730dc0ab455feac3dcd1ec16829ac5926d959de74103->enter($__internal_84e7aee483b43d57ef9c730dc0ab455feac3dcd1ec16829ac5926d959de74103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_84e7aee483b43d57ef9c730dc0ab455feac3dcd1ec16829ac5926d959de74103->leave($__internal_84e7aee483b43d57ef9c730dc0ab455feac3dcd1ec16829ac5926d959de74103_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
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
/*   Ajout d'avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
