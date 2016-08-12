<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
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
        $__internal_26db6f3c5dfc6ed42cd97b14e5e6d4f2f7f294bd8f699c2620eb3bd4bcb73c80 = $this->env->getExtension("native_profiler");
        $__internal_26db6f3c5dfc6ed42cd97b14e5e6d4f2f7f294bd8f699c2620eb3bd4bcb73c80->enter($__internal_26db6f3c5dfc6ed42cd97b14e5e6d4f2f7f294bd8f699c2620eb3bd4bcb73c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26db6f3c5dfc6ed42cd97b14e5e6d4f2f7f294bd8f699c2620eb3bd4bcb73c80->leave($__internal_26db6f3c5dfc6ed42cd97b14e5e6d4f2f7f294bd8f699c2620eb3bd4bcb73c80_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5583e89f2d8783efe45387541b7c63f78b6e73855de5d064aa4c3ba51c0f0ea = $this->env->getExtension("native_profiler");
        $__internal_f5583e89f2d8783efe45387541b7c63f78b6e73855de5d064aa4c3ba51c0f0ea->enter($__internal_f5583e89f2d8783efe45387541b7c63f78b6e73855de5d064aa4c3ba51c0f0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f5583e89f2d8783efe45387541b7c63f78b6e73855de5d064aa4c3ba51c0f0ea->leave($__internal_f5583e89f2d8783efe45387541b7c63f78b6e73855de5d064aa4c3ba51c0f0ea_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0dd6149c1c06b4263b47871f711bc0de5e1a85a269fc651a7136b8046331202 = $this->env->getExtension("native_profiler");
        $__internal_f0dd6149c1c06b4263b47871f711bc0de5e1a85a269fc651a7136b8046331202->enter($__internal_f0dd6149c1c06b4263b47871f711bc0de5e1a85a269fc651a7136b8046331202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_f0dd6149c1c06b4263b47871f711bc0de5e1a85a269fc651a7136b8046331202->leave($__internal_f0dd6149c1c06b4263b47871f711bc0de5e1a85a269fc651a7136b8046331202_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
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
