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
        $__internal_6198327e3bf914126de35bf18d88ca0d9c6d51c816d1e1b8b9946803cb42ac1d = $this->env->getExtension("native_profiler");
        $__internal_6198327e3bf914126de35bf18d88ca0d9c6d51c816d1e1b8b9946803cb42ac1d->enter($__internal_6198327e3bf914126de35bf18d88ca0d9c6d51c816d1e1b8b9946803cb42ac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6198327e3bf914126de35bf18d88ca0d9c6d51c816d1e1b8b9946803cb42ac1d->leave($__internal_6198327e3bf914126de35bf18d88ca0d9c6d51c816d1e1b8b9946803cb42ac1d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_28357f3de84519b7a1413d8b1bcab5208541d43dff1f57a96861c68b11177820 = $this->env->getExtension("native_profiler");
        $__internal_28357f3de84519b7a1413d8b1bcab5208541d43dff1f57a96861c68b11177820->enter($__internal_28357f3de84519b7a1413d8b1bcab5208541d43dff1f57a96861c68b11177820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_28357f3de84519b7a1413d8b1bcab5208541d43dff1f57a96861c68b11177820->leave($__internal_28357f3de84519b7a1413d8b1bcab5208541d43dff1f57a96861c68b11177820_prof);

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
