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
        $__internal_973f29b8c2c2f31549db268e6d287e9f86054d50bc975472a59f9dc610fede4f = $this->env->getExtension("native_profiler");
        $__internal_973f29b8c2c2f31549db268e6d287e9f86054d50bc975472a59f9dc610fede4f->enter($__internal_973f29b8c2c2f31549db268e6d287e9f86054d50bc975472a59f9dc610fede4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_973f29b8c2c2f31549db268e6d287e9f86054d50bc975472a59f9dc610fede4f->leave($__internal_973f29b8c2c2f31549db268e6d287e9f86054d50bc975472a59f9dc610fede4f_prof);

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
