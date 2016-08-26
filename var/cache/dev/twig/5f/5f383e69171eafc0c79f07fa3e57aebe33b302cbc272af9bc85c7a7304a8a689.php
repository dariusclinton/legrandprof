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
        $__internal_e4c6101cf80fc28fbb675acb28a8e6b957b0c97dc5d06f44f57393bf8aca740e = $this->env->getExtension("native_profiler");
        $__internal_e4c6101cf80fc28fbb675acb28a8e6b957b0c97dc5d06f44f57393bf8aca740e->enter($__internal_e4c6101cf80fc28fbb675acb28a8e6b957b0c97dc5d06f44f57393bf8aca740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c6101cf80fc28fbb675acb28a8e6b957b0c97dc5d06f44f57393bf8aca740e->leave($__internal_e4c6101cf80fc28fbb675acb28a8e6b957b0c97dc5d06f44f57393bf8aca740e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed79d6b8408860e2f018aab760dcc25af582a4b1d22e6ca2533c98032cf97c7d = $this->env->getExtension("native_profiler");
        $__internal_ed79d6b8408860e2f018aab760dcc25af582a4b1d22e6ca2533c98032cf97c7d->enter($__internal_ed79d6b8408860e2f018aab760dcc25af582a4b1d22e6ca2533c98032cf97c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ed79d6b8408860e2f018aab760dcc25af582a4b1d22e6ca2533c98032cf97c7d->leave($__internal_ed79d6b8408860e2f018aab760dcc25af582a4b1d22e6ca2533c98032cf97c7d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_01d4150b80629ec68e0263b4a0d75ca398d6af1e3993d4ec46d36098c25132b2 = $this->env->getExtension("native_profiler");
        $__internal_01d4150b80629ec68e0263b4a0d75ca398d6af1e3993d4ec46d36098c25132b2->enter($__internal_01d4150b80629ec68e0263b4a0d75ca398d6af1e3993d4ec46d36098c25132b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_01d4150b80629ec68e0263b4a0d75ca398d6af1e3993d4ec46d36098c25132b2->leave($__internal_01d4150b80629ec68e0263b4a0d75ca398d6af1e3993d4ec46d36098c25132b2_prof);

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
