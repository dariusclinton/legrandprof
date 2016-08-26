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
        $__internal_d9fafa934340aac25e46a729866e0cd7ff15c217567a88f1fe360a63aa2e9363 = $this->env->getExtension("native_profiler");
        $__internal_d9fafa934340aac25e46a729866e0cd7ff15c217567a88f1fe360a63aa2e9363->enter($__internal_d9fafa934340aac25e46a729866e0cd7ff15c217567a88f1fe360a63aa2e9363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9fafa934340aac25e46a729866e0cd7ff15c217567a88f1fe360a63aa2e9363->leave($__internal_d9fafa934340aac25e46a729866e0cd7ff15c217567a88f1fe360a63aa2e9363_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f79039060308435c84fd95cd1b1706200e6d3098564a94aa362deaa0b8842517 = $this->env->getExtension("native_profiler");
        $__internal_f79039060308435c84fd95cd1b1706200e6d3098564a94aa362deaa0b8842517->enter($__internal_f79039060308435c84fd95cd1b1706200e6d3098564a94aa362deaa0b8842517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f79039060308435c84fd95cd1b1706200e6d3098564a94aa362deaa0b8842517->leave($__internal_f79039060308435c84fd95cd1b1706200e6d3098564a94aa362deaa0b8842517_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6ae2f10003e310fbbb4af4992823a948ada065ab1c85375dddbfbd861c14b6a = $this->env->getExtension("native_profiler");
        $__internal_f6ae2f10003e310fbbb4af4992823a948ada065ab1c85375dddbfbd861c14b6a->enter($__internal_f6ae2f10003e310fbbb4af4992823a948ada065ab1c85375dddbfbd861c14b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_f6ae2f10003e310fbbb4af4992823a948ada065ab1c85375dddbfbd861c14b6a->leave($__internal_f6ae2f10003e310fbbb4af4992823a948ada065ab1c85375dddbfbd861c14b6a_prof);

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
