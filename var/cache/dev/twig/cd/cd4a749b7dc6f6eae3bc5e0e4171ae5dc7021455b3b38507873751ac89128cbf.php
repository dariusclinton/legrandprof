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
        $__internal_d3424bb9e60ef722789a113feeed708bcd043b30c46a29cecf56a7520a128835 = $this->env->getExtension("native_profiler");
        $__internal_d3424bb9e60ef722789a113feeed708bcd043b30c46a29cecf56a7520a128835->enter($__internal_d3424bb9e60ef722789a113feeed708bcd043b30c46a29cecf56a7520a128835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3424bb9e60ef722789a113feeed708bcd043b30c46a29cecf56a7520a128835->leave($__internal_d3424bb9e60ef722789a113feeed708bcd043b30c46a29cecf56a7520a128835_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d9af897d0cfc5fa0c48e5a22c4298a58657a1dfc7f4c581881d7b397d2adbc8 = $this->env->getExtension("native_profiler");
        $__internal_6d9af897d0cfc5fa0c48e5a22c4298a58657a1dfc7f4c581881d7b397d2adbc8->enter($__internal_6d9af897d0cfc5fa0c48e5a22c4298a58657a1dfc7f4c581881d7b397d2adbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_6d9af897d0cfc5fa0c48e5a22c4298a58657a1dfc7f4c581881d7b397d2adbc8->leave($__internal_6d9af897d0cfc5fa0c48e5a22c4298a58657a1dfc7f4c581881d7b397d2adbc8_prof);

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
