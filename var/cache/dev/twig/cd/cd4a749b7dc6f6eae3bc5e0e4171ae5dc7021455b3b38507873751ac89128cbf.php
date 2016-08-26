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
        $__internal_b30e3815987e5fbe4ea915976540855e5e18a575faa479e3731f28d7a7216f59 = $this->env->getExtension("native_profiler");
        $__internal_b30e3815987e5fbe4ea915976540855e5e18a575faa479e3731f28d7a7216f59->enter($__internal_b30e3815987e5fbe4ea915976540855e5e18a575faa479e3731f28d7a7216f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b30e3815987e5fbe4ea915976540855e5e18a575faa479e3731f28d7a7216f59->leave($__internal_b30e3815987e5fbe4ea915976540855e5e18a575faa479e3731f28d7a7216f59_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5251e23d3549493790c987deebac571d6827ab37a70aa2403252988f472fb853 = $this->env->getExtension("native_profiler");
        $__internal_5251e23d3549493790c987deebac571d6827ab37a70aa2403252988f472fb853->enter($__internal_5251e23d3549493790c987deebac571d6827ab37a70aa2403252988f472fb853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_5251e23d3549493790c987deebac571d6827ab37a70aa2403252988f472fb853->leave($__internal_5251e23d3549493790c987deebac571d6827ab37a70aa2403252988f472fb853_prof);

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
