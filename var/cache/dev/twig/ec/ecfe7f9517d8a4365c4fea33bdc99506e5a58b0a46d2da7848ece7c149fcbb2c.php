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
        $__internal_f1806b10bac6f84ab6fbb10e53ee2929fe79b1f17e50d292bb4eb5f376ed4874 = $this->env->getExtension("native_profiler");
        $__internal_f1806b10bac6f84ab6fbb10e53ee2929fe79b1f17e50d292bb4eb5f376ed4874->enter($__internal_f1806b10bac6f84ab6fbb10e53ee2929fe79b1f17e50d292bb4eb5f376ed4874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1806b10bac6f84ab6fbb10e53ee2929fe79b1f17e50d292bb4eb5f376ed4874->leave($__internal_f1806b10bac6f84ab6fbb10e53ee2929fe79b1f17e50d292bb4eb5f376ed4874_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47db64605fafbbc85e4e6e7ed8e3990cadb7da5e9366cdd9719078c623e8c13f = $this->env->getExtension("native_profiler");
        $__internal_47db64605fafbbc85e4e6e7ed8e3990cadb7da5e9366cdd9719078c623e8c13f->enter($__internal_47db64605fafbbc85e4e6e7ed8e3990cadb7da5e9366cdd9719078c623e8c13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_47db64605fafbbc85e4e6e7ed8e3990cadb7da5e9366cdd9719078c623e8c13f->leave($__internal_47db64605fafbbc85e4e6e7ed8e3990cadb7da5e9366cdd9719078c623e8c13f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea255113b16e0cf24db65eb3d748d2e79934e6985801109332ad2137a1acad99 = $this->env->getExtension("native_profiler");
        $__internal_ea255113b16e0cf24db65eb3d748d2e79934e6985801109332ad2137a1acad99->enter($__internal_ea255113b16e0cf24db65eb3d748d2e79934e6985801109332ad2137a1acad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_ea255113b16e0cf24db65eb3d748d2e79934e6985801109332ad2137a1acad99->leave($__internal_ea255113b16e0cf24db65eb3d748d2e79934e6985801109332ad2137a1acad99_prof);

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
