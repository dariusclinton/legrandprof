<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_06ed8d929f845649ec2178506a3a6cd4c577f708cdb01fa159aa5436c2e4afe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_730afc1f6a3b259646d65fb8bca0aac69dc499b768f5a5388072df436246f7bb = $this->env->getExtension("native_profiler");
        $__internal_730afc1f6a3b259646d65fb8bca0aac69dc499b768f5a5388072df436246f7bb->enter($__internal_730afc1f6a3b259646d65fb8bca0aac69dc499b768f5a5388072df436246f7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_730afc1f6a3b259646d65fb8bca0aac69dc499b768f5a5388072df436246f7bb->leave($__internal_730afc1f6a3b259646d65fb8bca0aac69dc499b768f5a5388072df436246f7bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
