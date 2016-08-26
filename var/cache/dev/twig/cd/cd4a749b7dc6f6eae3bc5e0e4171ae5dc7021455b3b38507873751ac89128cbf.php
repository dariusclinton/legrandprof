<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_921066d2b4cd1dceea6ab9815afb0a3930dbe0c5159a1b380980d097367a1b93 = $this->env->getExtension("native_profiler");
        $__internal_921066d2b4cd1dceea6ab9815afb0a3930dbe0c5159a1b380980d097367a1b93->enter($__internal_921066d2b4cd1dceea6ab9815afb0a3930dbe0c5159a1b380980d097367a1b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921066d2b4cd1dceea6ab9815afb0a3930dbe0c5159a1b380980d097367a1b93->leave($__internal_921066d2b4cd1dceea6ab9815afb0a3930dbe0c5159a1b380980d097367a1b93_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab6f5ba697be69de2115ed2ef4bec36c884edb326104341e0fbdbc0b06675b56 = $this->env->getExtension("native_profiler");
        $__internal_ab6f5ba697be69de2115ed2ef4bec36c884edb326104341e0fbdbc0b06675b56->enter($__internal_ab6f5ba697be69de2115ed2ef4bec36c884edb326104341e0fbdbc0b06675b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_ab6f5ba697be69de2115ed2ef4bec36c884edb326104341e0fbdbc0b06675b56->leave($__internal_ab6f5ba697be69de2115ed2ef4bec36c884edb326104341e0fbdbc0b06675b56_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
