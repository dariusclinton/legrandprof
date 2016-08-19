<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a365c43e2283cc114ef69c3c9bced7663943658741742b5854409f8c840b4449 extends Twig_Template
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
        $__internal_bccf33e46e85d3f369083466ca2398ae6eda7825514f0c6a27b7596d905da68f = $this->env->getExtension("native_profiler");
        $__internal_bccf33e46e85d3f369083466ca2398ae6eda7825514f0c6a27b7596d905da68f->enter($__internal_bccf33e46e85d3f369083466ca2398ae6eda7825514f0c6a27b7596d905da68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_bccf33e46e85d3f369083466ca2398ae6eda7825514f0c6a27b7596d905da68f->leave($__internal_bccf33e46e85d3f369083466ca2398ae6eda7825514f0c6a27b7596d905da68f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
