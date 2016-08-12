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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4932b4fb8b906d3fcc4615fa9cc7d46911890079002331d63f502ffa70abb79 = $this->env->getExtension("native_profiler");
        $__internal_f4932b4fb8b906d3fcc4615fa9cc7d46911890079002331d63f502ffa70abb79->enter($__internal_f4932b4fb8b906d3fcc4615fa9cc7d46911890079002331d63f502ffa70abb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4932b4fb8b906d3fcc4615fa9cc7d46911890079002331d63f502ffa70abb79->leave($__internal_f4932b4fb8b906d3fcc4615fa9cc7d46911890079002331d63f502ffa70abb79_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_098111625852e105033bece53f2adaeb3bf4d8a381ffa6259197740700403274 = $this->env->getExtension("native_profiler");
        $__internal_098111625852e105033bece53f2adaeb3bf4d8a381ffa6259197740700403274->enter($__internal_098111625852e105033bece53f2adaeb3bf4d8a381ffa6259197740700403274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_098111625852e105033bece53f2adaeb3bf4d8a381ffa6259197740700403274->leave($__internal_098111625852e105033bece53f2adaeb3bf4d8a381ffa6259197740700403274_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ae0b6a19eee367449145b2ae427bc97b39a55b795108670c006c08ebf7b49ba = $this->env->getExtension("native_profiler");
        $__internal_5ae0b6a19eee367449145b2ae427bc97b39a55b795108670c006c08ebf7b49ba->enter($__internal_5ae0b6a19eee367449145b2ae427bc97b39a55b795108670c006c08ebf7b49ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_5ae0b6a19eee367449145b2ae427bc97b39a55b795108670c006c08ebf7b49ba->leave($__internal_5ae0b6a19eee367449145b2ae427bc97b39a55b795108670c006c08ebf7b49ba_prof);

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
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
