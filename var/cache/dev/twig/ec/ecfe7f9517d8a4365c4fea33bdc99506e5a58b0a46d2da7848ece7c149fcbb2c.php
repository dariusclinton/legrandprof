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
        $__internal_1933e6b480c4c0ea5085d84b6a86bc3dea28f645e65da5fe81b4f061f44cb27f = $this->env->getExtension("native_profiler");
        $__internal_1933e6b480c4c0ea5085d84b6a86bc3dea28f645e65da5fe81b4f061f44cb27f->enter($__internal_1933e6b480c4c0ea5085d84b6a86bc3dea28f645e65da5fe81b4f061f44cb27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1933e6b480c4c0ea5085d84b6a86bc3dea28f645e65da5fe81b4f061f44cb27f->leave($__internal_1933e6b480c4c0ea5085d84b6a86bc3dea28f645e65da5fe81b4f061f44cb27f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_954169d7485aee95ea73dacfadcb7f48081bc247d48b3787a558a0d02deb8df4 = $this->env->getExtension("native_profiler");
        $__internal_954169d7485aee95ea73dacfadcb7f48081bc247d48b3787a558a0d02deb8df4->enter($__internal_954169d7485aee95ea73dacfadcb7f48081bc247d48b3787a558a0d02deb8df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_954169d7485aee95ea73dacfadcb7f48081bc247d48b3787a558a0d02deb8df4->leave($__internal_954169d7485aee95ea73dacfadcb7f48081bc247d48b3787a558a0d02deb8df4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_141261eee0498c3de2fac561dee1213733c408c87e7fc57d3d6c59d437e92791 = $this->env->getExtension("native_profiler");
        $__internal_141261eee0498c3de2fac561dee1213733c408c87e7fc57d3d6c59d437e92791->enter($__internal_141261eee0498c3de2fac561dee1213733c408c87e7fc57d3d6c59d437e92791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_141261eee0498c3de2fac561dee1213733c408c87e7fc57d3d6c59d437e92791->leave($__internal_141261eee0498c3de2fac561dee1213733c408c87e7fc57d3d6c59d437e92791_prof);

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
