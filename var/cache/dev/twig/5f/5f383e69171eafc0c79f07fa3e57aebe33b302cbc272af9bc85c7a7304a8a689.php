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
        $__internal_086cb2631f93321467215850f2430a6920d52d35b4cb24c462fa2fc72cba084c = $this->env->getExtension("native_profiler");
        $__internal_086cb2631f93321467215850f2430a6920d52d35b4cb24c462fa2fc72cba084c->enter($__internal_086cb2631f93321467215850f2430a6920d52d35b4cb24c462fa2fc72cba084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086cb2631f93321467215850f2430a6920d52d35b4cb24c462fa2fc72cba084c->leave($__internal_086cb2631f93321467215850f2430a6920d52d35b4cb24c462fa2fc72cba084c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99cbcf6c8de2a92ddc54c3f1bd990213f5502255d5be626d5e132e1e022baac5 = $this->env->getExtension("native_profiler");
        $__internal_99cbcf6c8de2a92ddc54c3f1bd990213f5502255d5be626d5e132e1e022baac5->enter($__internal_99cbcf6c8de2a92ddc54c3f1bd990213f5502255d5be626d5e132e1e022baac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_99cbcf6c8de2a92ddc54c3f1bd990213f5502255d5be626d5e132e1e022baac5->leave($__internal_99cbcf6c8de2a92ddc54c3f1bd990213f5502255d5be626d5e132e1e022baac5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_744ed0948852d4dd3b6313d87a6967e3f626d9a9d097568fa829bf438d469ea5 = $this->env->getExtension("native_profiler");
        $__internal_744ed0948852d4dd3b6313d87a6967e3f626d9a9d097568fa829bf438d469ea5->enter($__internal_744ed0948852d4dd3b6313d87a6967e3f626d9a9d097568fa829bf438d469ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_744ed0948852d4dd3b6313d87a6967e3f626d9a9d097568fa829bf438d469ea5->leave($__internal_744ed0948852d4dd3b6313d87a6967e3f626d9a9d097568fa829bf438d469ea5_prof);

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
