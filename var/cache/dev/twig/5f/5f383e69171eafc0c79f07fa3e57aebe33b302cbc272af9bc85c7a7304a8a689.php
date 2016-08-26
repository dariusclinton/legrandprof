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
        $__internal_c7546d9e7778fc97e06e086598a672b5092c71d43fcee555091f99eeecc01fa7 = $this->env->getExtension("native_profiler");
        $__internal_c7546d9e7778fc97e06e086598a672b5092c71d43fcee555091f99eeecc01fa7->enter($__internal_c7546d9e7778fc97e06e086598a672b5092c71d43fcee555091f99eeecc01fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7546d9e7778fc97e06e086598a672b5092c71d43fcee555091f99eeecc01fa7->leave($__internal_c7546d9e7778fc97e06e086598a672b5092c71d43fcee555091f99eeecc01fa7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e763e6c1a082f67800b9017c7f81f6bf2d777da2f2042a0bd793813f3576ad33 = $this->env->getExtension("native_profiler");
        $__internal_e763e6c1a082f67800b9017c7f81f6bf2d777da2f2042a0bd793813f3576ad33->enter($__internal_e763e6c1a082f67800b9017c7f81f6bf2d777da2f2042a0bd793813f3576ad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e763e6c1a082f67800b9017c7f81f6bf2d777da2f2042a0bd793813f3576ad33->leave($__internal_e763e6c1a082f67800b9017c7f81f6bf2d777da2f2042a0bd793813f3576ad33_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f05c2bf22af22acf2acf726b7a2cb56311b60e8c595331af28f05a8b58244b4 = $this->env->getExtension("native_profiler");
        $__internal_3f05c2bf22af22acf2acf726b7a2cb56311b60e8c595331af28f05a8b58244b4->enter($__internal_3f05c2bf22af22acf2acf726b7a2cb56311b60e8c595331af28f05a8b58244b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_3f05c2bf22af22acf2acf726b7a2cb56311b60e8c595331af28f05a8b58244b4->leave($__internal_3f05c2bf22af22acf2acf726b7a2cb56311b60e8c595331af28f05a8b58244b4_prof);

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
