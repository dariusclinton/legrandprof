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
        $__internal_64e30ed7c7fd38b58f9d75822347e357b0d33a3268287f5172c67ec7b1246ce3 = $this->env->getExtension("native_profiler");
        $__internal_64e30ed7c7fd38b58f9d75822347e357b0d33a3268287f5172c67ec7b1246ce3->enter($__internal_64e30ed7c7fd38b58f9d75822347e357b0d33a3268287f5172c67ec7b1246ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64e30ed7c7fd38b58f9d75822347e357b0d33a3268287f5172c67ec7b1246ce3->leave($__internal_64e30ed7c7fd38b58f9d75822347e357b0d33a3268287f5172c67ec7b1246ce3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_21dc3d616f7c8801bcc19e79dfae9d6d21b7e87c09c3ad3a6eaadd177cf0989e = $this->env->getExtension("native_profiler");
        $__internal_21dc3d616f7c8801bcc19e79dfae9d6d21b7e87c09c3ad3a6eaadd177cf0989e->enter($__internal_21dc3d616f7c8801bcc19e79dfae9d6d21b7e87c09c3ad3a6eaadd177cf0989e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_21dc3d616f7c8801bcc19e79dfae9d6d21b7e87c09c3ad3a6eaadd177cf0989e->leave($__internal_21dc3d616f7c8801bcc19e79dfae9d6d21b7e87c09c3ad3a6eaadd177cf0989e_prof);

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
