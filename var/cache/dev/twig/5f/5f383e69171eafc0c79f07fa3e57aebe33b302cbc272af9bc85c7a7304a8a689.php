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
        $__internal_150de9c1d554ca97b13f82b650aafa0d988e2ae5ee649dcd496fffcfba5a597b = $this->env->getExtension("native_profiler");
        $__internal_150de9c1d554ca97b13f82b650aafa0d988e2ae5ee649dcd496fffcfba5a597b->enter($__internal_150de9c1d554ca97b13f82b650aafa0d988e2ae5ee649dcd496fffcfba5a597b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_150de9c1d554ca97b13f82b650aafa0d988e2ae5ee649dcd496fffcfba5a597b->leave($__internal_150de9c1d554ca97b13f82b650aafa0d988e2ae5ee649dcd496fffcfba5a597b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_511441260f45977ee18d6f452bf201d080c637f34dd8ac82116aa05e4f02743a = $this->env->getExtension("native_profiler");
        $__internal_511441260f45977ee18d6f452bf201d080c637f34dd8ac82116aa05e4f02743a->enter($__internal_511441260f45977ee18d6f452bf201d080c637f34dd8ac82116aa05e4f02743a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_511441260f45977ee18d6f452bf201d080c637f34dd8ac82116aa05e4f02743a->leave($__internal_511441260f45977ee18d6f452bf201d080c637f34dd8ac82116aa05e4f02743a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb3d5d1d4fc9545d023a1e8852c44a986f22ff4b4ba6b5ea764f34c506ae4f4 = $this->env->getExtension("native_profiler");
        $__internal_3eb3d5d1d4fc9545d023a1e8852c44a986f22ff4b4ba6b5ea764f34c506ae4f4->enter($__internal_3eb3d5d1d4fc9545d023a1e8852c44a986f22ff4b4ba6b5ea764f34c506ae4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_3eb3d5d1d4fc9545d023a1e8852c44a986f22ff4b4ba6b5ea764f34c506ae4f4->leave($__internal_3eb3d5d1d4fc9545d023a1e8852c44a986f22ff4b4ba6b5ea764f34c506ae4f4_prof);

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
