<?php

/* @LGPUser/Indisponibilite/update.html.twig */
class __TwigTemplate_7ce6c3dc86e7088e4a1e265274824070f068606aa733c4391f554039345818aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 1);
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
        $__internal_ff3907640a7cf1c1f3ce9d883760858b496235f1a8d284f71f4000f2bf1c6f1e = $this->env->getExtension("native_profiler");
        $__internal_ff3907640a7cf1c1f3ce9d883760858b496235f1a8d284f71f4000f2bf1c6f1e->enter($__internal_ff3907640a7cf1c1f3ce9d883760858b496235f1a8d284f71f4000f2bf1c6f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Indisponibilite/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3907640a7cf1c1f3ce9d883760858b496235f1a8d284f71f4000f2bf1c6f1e->leave($__internal_ff3907640a7cf1c1f3ce9d883760858b496235f1a8d284f71f4000f2bf1c6f1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_41951b0572cb71295380f16989cdaabe110ce5c9cc7161e6dd4a25f463846312 = $this->env->getExtension("native_profiler");
        $__internal_41951b0572cb71295380f16989cdaabe110ce5c9cc7161e6dd4a25f463846312->enter($__internal_41951b0572cb71295380f16989cdaabe110ce5c9cc7161e6dd4a25f463846312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mise à jour d'une indisponibilité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_41951b0572cb71295380f16989cdaabe110ce5c9cc7161e6dd4a25f463846312->leave($__internal_41951b0572cb71295380f16989cdaabe110ce5c9cc7161e6dd4a25f463846312_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_29f386ab8f5bdeae71c0f772994c4075e0cc97706c360fe62ced47915f1ab25e = $this->env->getExtension("native_profiler");
        $__internal_29f386ab8f5bdeae71c0f772994c4075e0cc97706c360fe62ced47915f1ab25e->enter($__internal_29f386ab8f5bdeae71c0f772994c4075e0cc97706c360fe62ced47915f1ab25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Mise à d'une indiponibilité</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Indisponibilite:formulaire.html.twig", "@LGPUser/Indisponibilite/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_29f386ab8f5bdeae71c0f772994c4075e0cc97706c360fe62ced47915f1ab25e->leave($__internal_29f386ab8f5bdeae71c0f772994c4075e0cc97706c360fe62ced47915f1ab25e_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Indisponibilite/update.html.twig";
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
