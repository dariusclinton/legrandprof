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
        $__internal_02f375ce5e23c180f841ea36f68ad23a0d1bf1fb926b23c3e2040c1729938926 = $this->env->getExtension("native_profiler");
        $__internal_02f375ce5e23c180f841ea36f68ad23a0d1bf1fb926b23c3e2040c1729938926->enter($__internal_02f375ce5e23c180f841ea36f68ad23a0d1bf1fb926b23c3e2040c1729938926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02f375ce5e23c180f841ea36f68ad23a0d1bf1fb926b23c3e2040c1729938926->leave($__internal_02f375ce5e23c180f841ea36f68ad23a0d1bf1fb926b23c3e2040c1729938926_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f789ff5496c449e5d9d913b4c28266af70f1f69f25c4707b99e935ddf6a7841 = $this->env->getExtension("native_profiler");
        $__internal_2f789ff5496c449e5d9d913b4c28266af70f1f69f25c4707b99e935ddf6a7841->enter($__internal_2f789ff5496c449e5d9d913b4c28266af70f1f69f25c4707b99e935ddf6a7841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_2f789ff5496c449e5d9d913b4c28266af70f1f69f25c4707b99e935ddf6a7841->leave($__internal_2f789ff5496c449e5d9d913b4c28266af70f1f69f25c4707b99e935ddf6a7841_prof);

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
