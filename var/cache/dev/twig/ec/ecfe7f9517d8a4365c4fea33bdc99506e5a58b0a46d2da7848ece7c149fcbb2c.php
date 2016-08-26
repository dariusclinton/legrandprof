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
        $__internal_21371fe9fc9c78fc574839e0c20f75fdaf262f7c26253468fcca69c0926aa03f = $this->env->getExtension("native_profiler");
        $__internal_21371fe9fc9c78fc574839e0c20f75fdaf262f7c26253468fcca69c0926aa03f->enter($__internal_21371fe9fc9c78fc574839e0c20f75fdaf262f7c26253468fcca69c0926aa03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21371fe9fc9c78fc574839e0c20f75fdaf262f7c26253468fcca69c0926aa03f->leave($__internal_21371fe9fc9c78fc574839e0c20f75fdaf262f7c26253468fcca69c0926aa03f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3740a2a4be603b2b6463373b78cf578d053964cb87c5ce8429932e47cd2c2c3d = $this->env->getExtension("native_profiler");
        $__internal_3740a2a4be603b2b6463373b78cf578d053964cb87c5ce8429932e47cd2c2c3d->enter($__internal_3740a2a4be603b2b6463373b78cf578d053964cb87c5ce8429932e47cd2c2c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3740a2a4be603b2b6463373b78cf578d053964cb87c5ce8429932e47cd2c2c3d->leave($__internal_3740a2a4be603b2b6463373b78cf578d053964cb87c5ce8429932e47cd2c2c3d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bf1667f7ef12dc070d70f932ee5404279c12a71a5577335f7cc12a0f62c752c = $this->env->getExtension("native_profiler");
        $__internal_3bf1667f7ef12dc070d70f932ee5404279c12a71a5577335f7cc12a0f62c752c->enter($__internal_3bf1667f7ef12dc070d70f932ee5404279c12a71a5577335f7cc12a0f62c752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "LGPUserBundle:Indisponibilite:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_3bf1667f7ef12dc070d70f932ee5404279c12a71a5577335f7cc12a0f62c752c->leave($__internal_3bf1667f7ef12dc070d70f932ee5404279c12a71a5577335f7cc12a0f62c752c_prof);

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
