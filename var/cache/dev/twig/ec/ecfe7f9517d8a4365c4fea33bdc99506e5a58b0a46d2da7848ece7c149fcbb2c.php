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
        $__internal_80597eadf6eaa9fbe6e5026fbf739f25fa68b559b6496083110204c5288674e2 = $this->env->getExtension("native_profiler");
        $__internal_80597eadf6eaa9fbe6e5026fbf739f25fa68b559b6496083110204c5288674e2->enter($__internal_80597eadf6eaa9fbe6e5026fbf739f25fa68b559b6496083110204c5288674e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80597eadf6eaa9fbe6e5026fbf739f25fa68b559b6496083110204c5288674e2->leave($__internal_80597eadf6eaa9fbe6e5026fbf739f25fa68b559b6496083110204c5288674e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3baed910d80d0f062cd524a30f0d1a1b14219cf9f9082d0fe5b4805ef4ce699 = $this->env->getExtension("native_profiler");
        $__internal_b3baed910d80d0f062cd524a30f0d1a1b14219cf9f9082d0fe5b4805ef4ce699->enter($__internal_b3baed910d80d0f062cd524a30f0d1a1b14219cf9f9082d0fe5b4805ef4ce699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3baed910d80d0f062cd524a30f0d1a1b14219cf9f9082d0fe5b4805ef4ce699->leave($__internal_b3baed910d80d0f062cd524a30f0d1a1b14219cf9f9082d0fe5b4805ef4ce699_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e43d6a39af7054d1719ed07c818d9d42dc458f59acd2c180b18b4d130d71873 = $this->env->getExtension("native_profiler");
        $__internal_1e43d6a39af7054d1719ed07c818d9d42dc458f59acd2c180b18b4d130d71873->enter($__internal_1e43d6a39af7054d1719ed07c818d9d42dc458f59acd2c180b18b4d130d71873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_1e43d6a39af7054d1719ed07c818d9d42dc458f59acd2c180b18b4d130d71873->leave($__internal_1e43d6a39af7054d1719ed07c818d9d42dc458f59acd2c180b18b4d130d71873_prof);

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
