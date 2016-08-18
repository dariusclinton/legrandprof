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
        $__internal_2ec040a574e14c6c36fb05c0c0a62ce7937c3b7a1b65ea5dc6620ef78b78d89c = $this->env->getExtension("native_profiler");
        $__internal_2ec040a574e14c6c36fb05c0c0a62ce7937c3b7a1b65ea5dc6620ef78b78d89c->enter($__internal_2ec040a574e14c6c36fb05c0c0a62ce7937c3b7a1b65ea5dc6620ef78b78d89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec040a574e14c6c36fb05c0c0a62ce7937c3b7a1b65ea5dc6620ef78b78d89c->leave($__internal_2ec040a574e14c6c36fb05c0c0a62ce7937c3b7a1b65ea5dc6620ef78b78d89c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e69c22600970069634d7a00f56b10904d1af16d3ec855125354aa8783da5e8b = $this->env->getExtension("native_profiler");
        $__internal_5e69c22600970069634d7a00f56b10904d1af16d3ec855125354aa8783da5e8b->enter($__internal_5e69c22600970069634d7a00f56b10904d1af16d3ec855125354aa8783da5e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_5e69c22600970069634d7a00f56b10904d1af16d3ec855125354aa8783da5e8b->leave($__internal_5e69c22600970069634d7a00f56b10904d1af16d3ec855125354aa8783da5e8b_prof);

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
