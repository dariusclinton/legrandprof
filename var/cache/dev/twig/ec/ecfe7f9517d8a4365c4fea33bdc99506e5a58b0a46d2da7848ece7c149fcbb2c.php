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
        $__internal_c5cf70e6f753e93997120b9960b81eaec4254bfd16422437c288774904bce975 = $this->env->getExtension("native_profiler");
        $__internal_c5cf70e6f753e93997120b9960b81eaec4254bfd16422437c288774904bce975->enter($__internal_c5cf70e6f753e93997120b9960b81eaec4254bfd16422437c288774904bce975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5cf70e6f753e93997120b9960b81eaec4254bfd16422437c288774904bce975->leave($__internal_c5cf70e6f753e93997120b9960b81eaec4254bfd16422437c288774904bce975_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_faab21880256e897b148834b45369febc1c228f7957003d94bf5a29367a90ff8 = $this->env->getExtension("native_profiler");
        $__internal_faab21880256e897b148834b45369febc1c228f7957003d94bf5a29367a90ff8->enter($__internal_faab21880256e897b148834b45369febc1c228f7957003d94bf5a29367a90ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_faab21880256e897b148834b45369febc1c228f7957003d94bf5a29367a90ff8->leave($__internal_faab21880256e897b148834b45369febc1c228f7957003d94bf5a29367a90ff8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3d649bbc4a4d3c218300fe5cc2f15a2715b876d219bdcacd08c9228387c9916 = $this->env->getExtension("native_profiler");
        $__internal_a3d649bbc4a4d3c218300fe5cc2f15a2715b876d219bdcacd08c9228387c9916->enter($__internal_a3d649bbc4a4d3c218300fe5cc2f15a2715b876d219bdcacd08c9228387c9916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_a3d649bbc4a4d3c218300fe5cc2f15a2715b876d219bdcacd08c9228387c9916->leave($__internal_a3d649bbc4a4d3c218300fe5cc2f15a2715b876d219bdcacd08c9228387c9916_prof);

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
