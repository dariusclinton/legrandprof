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
        $__internal_94e1feb07bd2ffa5faf823007cd8104cd9296be7e9e0f5384e08e4ccedbd21d3 = $this->env->getExtension("native_profiler");
        $__internal_94e1feb07bd2ffa5faf823007cd8104cd9296be7e9e0f5384e08e4ccedbd21d3->enter($__internal_94e1feb07bd2ffa5faf823007cd8104cd9296be7e9e0f5384e08e4ccedbd21d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e1feb07bd2ffa5faf823007cd8104cd9296be7e9e0f5384e08e4ccedbd21d3->leave($__internal_94e1feb07bd2ffa5faf823007cd8104cd9296be7e9e0f5384e08e4ccedbd21d3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_327137e057fb845a5c6d37b08aa7cbe19df0fd78d7be4021160255e607bba88e = $this->env->getExtension("native_profiler");
        $__internal_327137e057fb845a5c6d37b08aa7cbe19df0fd78d7be4021160255e607bba88e->enter($__internal_327137e057fb845a5c6d37b08aa7cbe19df0fd78d7be4021160255e607bba88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_327137e057fb845a5c6d37b08aa7cbe19df0fd78d7be4021160255e607bba88e->leave($__internal_327137e057fb845a5c6d37b08aa7cbe19df0fd78d7be4021160255e607bba88e_prof);

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
