<?php

/* @LGPUser/Avis/add.html.twig */
class __TwigTemplate_fd84e8fe955c49d0175413fe6f3a1a5e2d65d06ce8abcfb13436de4a03b25cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Avis/add.html.twig", 1);
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
        $__internal_b1a4c4a007264334aa51020c5dfea9c077ec3d1ef46e05dd4395ae7a0e78838b = $this->env->getExtension("native_profiler");
        $__internal_b1a4c4a007264334aa51020c5dfea9c077ec3d1ef46e05dd4395ae7a0e78838b->enter($__internal_b1a4c4a007264334aa51020c5dfea9c077ec3d1ef46e05dd4395ae7a0e78838b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a4c4a007264334aa51020c5dfea9c077ec3d1ef46e05dd4395ae7a0e78838b->leave($__internal_b1a4c4a007264334aa51020c5dfea9c077ec3d1ef46e05dd4395ae7a0e78838b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0adcaf9f466661fc47a081a7ecde33079206857da277b3ae1628a37c1b43060b = $this->env->getExtension("native_profiler");
        $__internal_0adcaf9f466661fc47a081a7ecde33079206857da277b3ae1628a37c1b43060b->enter($__internal_0adcaf9f466661fc47a081a7ecde33079206857da277b3ae1628a37c1b43060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0adcaf9f466661fc47a081a7ecde33079206857da277b3ae1628a37c1b43060b->leave($__internal_0adcaf9f466661fc47a081a7ecde33079206857da277b3ae1628a37c1b43060b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b0759c4572739b97b04ec65698b2d7e8013862361866cfd69ea4c9d3860f212 = $this->env->getExtension("native_profiler");
        $__internal_0b0759c4572739b97b04ec65698b2d7e8013862361866cfd69ea4c9d3860f212->enter($__internal_0b0759c4572739b97b04ec65698b2d7e8013862361866cfd69ea4c9d3860f212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_0b0759c4572739b97b04ec65698b2d7e8013862361866cfd69ea4c9d3860f212->leave($__internal_0b0759c4572739b97b04ec65698b2d7e8013862361866cfd69ea4c9d3860f212_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/add.html.twig";
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
