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
        $__internal_422cae1dee2c18b566e1ee83796591fabc25f6399bc94a24bed93f9eecfc4ed0 = $this->env->getExtension("native_profiler");
        $__internal_422cae1dee2c18b566e1ee83796591fabc25f6399bc94a24bed93f9eecfc4ed0->enter($__internal_422cae1dee2c18b566e1ee83796591fabc25f6399bc94a24bed93f9eecfc4ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_422cae1dee2c18b566e1ee83796591fabc25f6399bc94a24bed93f9eecfc4ed0->leave($__internal_422cae1dee2c18b566e1ee83796591fabc25f6399bc94a24bed93f9eecfc4ed0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_33a1637affb9f4cacccf1c2c9239dffc3bcebcb2c53c4fba5c35bafd6b46bf10 = $this->env->getExtension("native_profiler");
        $__internal_33a1637affb9f4cacccf1c2c9239dffc3bcebcb2c53c4fba5c35bafd6b46bf10->enter($__internal_33a1637affb9f4cacccf1c2c9239dffc3bcebcb2c53c4fba5c35bafd6b46bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_33a1637affb9f4cacccf1c2c9239dffc3bcebcb2c53c4fba5c35bafd6b46bf10->leave($__internal_33a1637affb9f4cacccf1c2c9239dffc3bcebcb2c53c4fba5c35bafd6b46bf10_prof);

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
