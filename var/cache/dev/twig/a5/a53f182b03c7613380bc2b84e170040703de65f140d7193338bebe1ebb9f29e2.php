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
        $__internal_35c3220cac699140a027ed90bd6fea8ec444954c14855f3123d422d2cc6f2be6 = $this->env->getExtension("native_profiler");
        $__internal_35c3220cac699140a027ed90bd6fea8ec444954c14855f3123d422d2cc6f2be6->enter($__internal_35c3220cac699140a027ed90bd6fea8ec444954c14855f3123d422d2cc6f2be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35c3220cac699140a027ed90bd6fea8ec444954c14855f3123d422d2cc6f2be6->leave($__internal_35c3220cac699140a027ed90bd6fea8ec444954c14855f3123d422d2cc6f2be6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcd4ef48b83d0b655f5bd411894a6352fb2686965027cad2cfece3e090f8221a = $this->env->getExtension("native_profiler");
        $__internal_dcd4ef48b83d0b655f5bd411894a6352fb2686965027cad2cfece3e090f8221a->enter($__internal_dcd4ef48b83d0b655f5bd411894a6352fb2686965027cad2cfece3e090f8221a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dcd4ef48b83d0b655f5bd411894a6352fb2686965027cad2cfece3e090f8221a->leave($__internal_dcd4ef48b83d0b655f5bd411894a6352fb2686965027cad2cfece3e090f8221a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d024369c9edba4a3b15a9fcbac1ec1d47ee9dfa57c2129f77747008d2beca241 = $this->env->getExtension("native_profiler");
        $__internal_d024369c9edba4a3b15a9fcbac1ec1d47ee9dfa57c2129f77747008d2beca241->enter($__internal_d024369c9edba4a3b15a9fcbac1ec1d47ee9dfa57c2129f77747008d2beca241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_d024369c9edba4a3b15a9fcbac1ec1d47ee9dfa57c2129f77747008d2beca241->leave($__internal_d024369c9edba4a3b15a9fcbac1ec1d47ee9dfa57c2129f77747008d2beca241_prof);

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
