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
        $__internal_4d90816f9969212d0005d30976135b75004b3ca607217960dc6f86cc5600ce2d = $this->env->getExtension("native_profiler");
        $__internal_4d90816f9969212d0005d30976135b75004b3ca607217960dc6f86cc5600ce2d->enter($__internal_4d90816f9969212d0005d30976135b75004b3ca607217960dc6f86cc5600ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d90816f9969212d0005d30976135b75004b3ca607217960dc6f86cc5600ce2d->leave($__internal_4d90816f9969212d0005d30976135b75004b3ca607217960dc6f86cc5600ce2d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_415f03b317f549539ee320ae2948717f8aaac93efbaf975c297ecbe0036839b6 = $this->env->getExtension("native_profiler");
        $__internal_415f03b317f549539ee320ae2948717f8aaac93efbaf975c297ecbe0036839b6->enter($__internal_415f03b317f549539ee320ae2948717f8aaac93efbaf975c297ecbe0036839b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_415f03b317f549539ee320ae2948717f8aaac93efbaf975c297ecbe0036839b6->leave($__internal_415f03b317f549539ee320ae2948717f8aaac93efbaf975c297ecbe0036839b6_prof);

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
