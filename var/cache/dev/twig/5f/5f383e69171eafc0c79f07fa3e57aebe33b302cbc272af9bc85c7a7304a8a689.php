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
        $__internal_e118a2b6a30e05d0ce6170b01e557aa471c4bf5d1ef69499afcb5ba02be9a5f1 = $this->env->getExtension("native_profiler");
        $__internal_e118a2b6a30e05d0ce6170b01e557aa471c4bf5d1ef69499afcb5ba02be9a5f1->enter($__internal_e118a2b6a30e05d0ce6170b01e557aa471c4bf5d1ef69499afcb5ba02be9a5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e118a2b6a30e05d0ce6170b01e557aa471c4bf5d1ef69499afcb5ba02be9a5f1->leave($__internal_e118a2b6a30e05d0ce6170b01e557aa471c4bf5d1ef69499afcb5ba02be9a5f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e5febab1c346c0bd76819c1807ce0e2119527c6fc4d4437d51e27696f0cfebd = $this->env->getExtension("native_profiler");
        $__internal_2e5febab1c346c0bd76819c1807ce0e2119527c6fc4d4437d51e27696f0cfebd->enter($__internal_2e5febab1c346c0bd76819c1807ce0e2119527c6fc4d4437d51e27696f0cfebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2e5febab1c346c0bd76819c1807ce0e2119527c6fc4d4437d51e27696f0cfebd->leave($__internal_2e5febab1c346c0bd76819c1807ce0e2119527c6fc4d4437d51e27696f0cfebd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6120235dcc231bbc65a26b8819e70f00727a1e6fee3c7a403e6fdad70747f2e6 = $this->env->getExtension("native_profiler");
        $__internal_6120235dcc231bbc65a26b8819e70f00727a1e6fee3c7a403e6fdad70747f2e6->enter($__internal_6120235dcc231bbc65a26b8819e70f00727a1e6fee3c7a403e6fdad70747f2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_6120235dcc231bbc65a26b8819e70f00727a1e6fee3c7a403e6fdad70747f2e6->leave($__internal_6120235dcc231bbc65a26b8819e70f00727a1e6fee3c7a403e6fdad70747f2e6_prof);

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
