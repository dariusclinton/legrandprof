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
        $__internal_17e171dc18133dc9e2257fdf11531fb3ccd64bdabf73149f177b87b51c17a2f6 = $this->env->getExtension("native_profiler");
        $__internal_17e171dc18133dc9e2257fdf11531fb3ccd64bdabf73149f177b87b51c17a2f6->enter($__internal_17e171dc18133dc9e2257fdf11531fb3ccd64bdabf73149f177b87b51c17a2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e171dc18133dc9e2257fdf11531fb3ccd64bdabf73149f177b87b51c17a2f6->leave($__internal_17e171dc18133dc9e2257fdf11531fb3ccd64bdabf73149f177b87b51c17a2f6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ec1c9b97ddcec589cfa5a84f07ebcbfe598d84c1f2d30ac8457511df15d8e89 = $this->env->getExtension("native_profiler");
        $__internal_2ec1c9b97ddcec589cfa5a84f07ebcbfe598d84c1f2d30ac8457511df15d8e89->enter($__internal_2ec1c9b97ddcec589cfa5a84f07ebcbfe598d84c1f2d30ac8457511df15d8e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_2ec1c9b97ddcec589cfa5a84f07ebcbfe598d84c1f2d30ac8457511df15d8e89->leave($__internal_2ec1c9b97ddcec589cfa5a84f07ebcbfe598d84c1f2d30ac8457511df15d8e89_prof);

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
