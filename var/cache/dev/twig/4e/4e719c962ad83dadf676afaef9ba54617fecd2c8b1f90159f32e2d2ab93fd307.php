<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d9179b78c97a5ff52afc8861ccae44918e832eaf0c1d4832bc57c8c124ed0b78 extends Twig_Template
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
        $__internal_79e891da2797569fdf646d10950756830fcbcd3b67a14cfda27f260e6f19e47a = $this->env->getExtension("native_profiler");
        $__internal_79e891da2797569fdf646d10950756830fcbcd3b67a14cfda27f260e6f19e47a->enter($__internal_79e891da2797569fdf646d10950756830fcbcd3b67a14cfda27f260e6f19e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_79e891da2797569fdf646d10950756830fcbcd3b67a14cfda27f260e6f19e47a->leave($__internal_79e891da2797569fdf646d10950756830fcbcd3b67a14cfda27f260e6f19e47a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
