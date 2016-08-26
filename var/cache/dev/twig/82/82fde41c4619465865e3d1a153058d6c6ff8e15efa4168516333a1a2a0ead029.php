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
        $__internal_c72ec15849339022fe3f952a320f0e11197c78c635c518727582ac08577339b6 = $this->env->getExtension("native_profiler");
        $__internal_c72ec15849339022fe3f952a320f0e11197c78c635c518727582ac08577339b6->enter($__internal_c72ec15849339022fe3f952a320f0e11197c78c635c518727582ac08577339b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c72ec15849339022fe3f952a320f0e11197c78c635c518727582ac08577339b6->leave($__internal_c72ec15849339022fe3f952a320f0e11197c78c635c518727582ac08577339b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cae535eafdb064df37f4b22bd0409c4526bfeff67e7df3ae7b9f91398b3a11b1 = $this->env->getExtension("native_profiler");
        $__internal_cae535eafdb064df37f4b22bd0409c4526bfeff67e7df3ae7b9f91398b3a11b1->enter($__internal_cae535eafdb064df37f4b22bd0409c4526bfeff67e7df3ae7b9f91398b3a11b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cae535eafdb064df37f4b22bd0409c4526bfeff67e7df3ae7b9f91398b3a11b1->leave($__internal_cae535eafdb064df37f4b22bd0409c4526bfeff67e7df3ae7b9f91398b3a11b1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_75e428d015fad920a6529cb858174cc0e802ab22145bd873adfdf56403cb30a0 = $this->env->getExtension("native_profiler");
        $__internal_75e428d015fad920a6529cb858174cc0e802ab22145bd873adfdf56403cb30a0->enter($__internal_75e428d015fad920a6529cb858174cc0e802ab22145bd873adfdf56403cb30a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_75e428d015fad920a6529cb858174cc0e802ab22145bd873adfdf56403cb30a0->leave($__internal_75e428d015fad920a6529cb858174cc0e802ab22145bd873adfdf56403cb30a0_prof);

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
