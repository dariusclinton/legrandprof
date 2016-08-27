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
        $__internal_df326af5be9e6ec9ac044af287e6a460ffaced71d749c9d635dec858b1836986 = $this->env->getExtension("native_profiler");
        $__internal_df326af5be9e6ec9ac044af287e6a460ffaced71d749c9d635dec858b1836986->enter($__internal_df326af5be9e6ec9ac044af287e6a460ffaced71d749c9d635dec858b1836986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df326af5be9e6ec9ac044af287e6a460ffaced71d749c9d635dec858b1836986->leave($__internal_df326af5be9e6ec9ac044af287e6a460ffaced71d749c9d635dec858b1836986_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9c6731a76c107b18d7b43ae5575b759813156e99a5c95df297418e8887ab13d = $this->env->getExtension("native_profiler");
        $__internal_b9c6731a76c107b18d7b43ae5575b759813156e99a5c95df297418e8887ab13d->enter($__internal_b9c6731a76c107b18d7b43ae5575b759813156e99a5c95df297418e8887ab13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b9c6731a76c107b18d7b43ae5575b759813156e99a5c95df297418e8887ab13d->leave($__internal_b9c6731a76c107b18d7b43ae5575b759813156e99a5c95df297418e8887ab13d_prof);

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
