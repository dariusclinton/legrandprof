<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_05f97206c866e841e82ab59108611b22ba2733585480458282fb6f7f5800801e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_9a503478519349918114f3097d8a6fea1480b0d20ccb56962be89383a6ecc23b = $this->env->getExtension("native_profiler");
        $__internal_9a503478519349918114f3097d8a6fea1480b0d20ccb56962be89383a6ecc23b->enter($__internal_9a503478519349918114f3097d8a6fea1480b0d20ccb56962be89383a6ecc23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a503478519349918114f3097d8a6fea1480b0d20ccb56962be89383a6ecc23b->leave($__internal_9a503478519349918114f3097d8a6fea1480b0d20ccb56962be89383a6ecc23b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcb8b449813be973b0e01840f79488664bc8a66e81e246e7dcfe1dc5d0e3fcaa = $this->env->getExtension("native_profiler");
        $__internal_bcb8b449813be973b0e01840f79488664bc8a66e81e246e7dcfe1dc5d0e3fcaa->enter($__internal_bcb8b449813be973b0e01840f79488664bc8a66e81e246e7dcfe1dc5d0e3fcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bcb8b449813be973b0e01840f79488664bc8a66e81e246e7dcfe1dc5d0e3fcaa->leave($__internal_bcb8b449813be973b0e01840f79488664bc8a66e81e246e7dcfe1dc5d0e3fcaa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_59cda5384c2085fba8e8d01b6af8bd7c41c8bb8be77400c80c8cae3405c0d3c2 = $this->env->getExtension("native_profiler");
        $__internal_59cda5384c2085fba8e8d01b6af8bd7c41c8bb8be77400c80c8cae3405c0d3c2->enter($__internal_59cda5384c2085fba8e8d01b6af8bd7c41c8bb8be77400c80c8cae3405c0d3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_59cda5384c2085fba8e8d01b6af8bd7c41c8bb8be77400c80c8cae3405c0d3c2->leave($__internal_59cda5384c2085fba8e8d01b6af8bd7c41c8bb8be77400c80c8cae3405c0d3c2_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
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
/*   Modification d'un avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Modification d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
