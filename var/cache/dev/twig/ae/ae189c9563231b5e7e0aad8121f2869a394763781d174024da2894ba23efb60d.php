<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e10d5840931e0f73b71689d20b981e7f8903d3cae7048d97e365b1485cd20bb0 = $this->env->getExtension("native_profiler");
        $__internal_e10d5840931e0f73b71689d20b981e7f8903d3cae7048d97e365b1485cd20bb0->enter($__internal_e10d5840931e0f73b71689d20b981e7f8903d3cae7048d97e365b1485cd20bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e10d5840931e0f73b71689d20b981e7f8903d3cae7048d97e365b1485cd20bb0->leave($__internal_e10d5840931e0f73b71689d20b981e7f8903d3cae7048d97e365b1485cd20bb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c38384a866a9af830d355d3a2a6e84581e8f96898271fbc8c16609b30799667 = $this->env->getExtension("native_profiler");
        $__internal_9c38384a866a9af830d355d3a2a6e84581e8f96898271fbc8c16609b30799667->enter($__internal_9c38384a866a9af830d355d3a2a6e84581e8f96898271fbc8c16609b30799667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_9c38384a866a9af830d355d3a2a6e84581e8f96898271fbc8c16609b30799667->leave($__internal_9c38384a866a9af830d355d3a2a6e84581e8f96898271fbc8c16609b30799667_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4a169cb045fb1f04682e57b48fbb9effa85eaca810b2964ef6ba40d98b14781 = $this->env->getExtension("native_profiler");
        $__internal_d4a169cb045fb1f04682e57b48fbb9effa85eaca810b2964ef6ba40d98b14781->enter($__internal_d4a169cb045fb1f04682e57b48fbb9effa85eaca810b2964ef6ba40d98b14781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_d4a169cb045fb1f04682e57b48fbb9effa85eaca810b2964ef6ba40d98b14781->leave($__internal_d4a169cb045fb1f04682e57b48fbb9effa85eaca810b2964ef6ba40d98b14781_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
