<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_76424bd045e9bf1a54203252e1f6641525ea7cb92f51655ae854943cac288d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
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
        $__internal_cffb8f86ad37a902aaf65c8faa857d68f4835aeee419857dd2b0bd2fec1a91a3 = $this->env->getExtension("native_profiler");
        $__internal_cffb8f86ad37a902aaf65c8faa857d68f4835aeee419857dd2b0bd2fec1a91a3->enter($__internal_cffb8f86ad37a902aaf65c8faa857d68f4835aeee419857dd2b0bd2fec1a91a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cffb8f86ad37a902aaf65c8faa857d68f4835aeee419857dd2b0bd2fec1a91a3->leave($__internal_cffb8f86ad37a902aaf65c8faa857d68f4835aeee419857dd2b0bd2fec1a91a3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8900b5fbf7afd55ec768ec5573c286fbd1ef8e2592c0d8a5276da281c4e50af = $this->env->getExtension("native_profiler");
        $__internal_d8900b5fbf7afd55ec768ec5573c286fbd1ef8e2592c0d8a5276da281c4e50af->enter($__internal_d8900b5fbf7afd55ec768ec5573c286fbd1ef8e2592c0d8a5276da281c4e50af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_d8900b5fbf7afd55ec768ec5573c286fbd1ef8e2592c0d8a5276da281c4e50af->leave($__internal_d8900b5fbf7afd55ec768ec5573c286fbd1ef8e2592c0d8a5276da281c4e50af_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
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
