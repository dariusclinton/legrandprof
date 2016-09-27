<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cdfa994a75ffb87f2148d67f70261ed3276077c2b42dd7c30d56a7422554b3c6 extends Twig_Template
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
        $__internal_1ae7f1789a62f609fa09bcf2c28226d775918677e038cb677ac71fb8224cc189 = $this->env->getExtension("native_profiler");
        $__internal_1ae7f1789a62f609fa09bcf2c28226d775918677e038cb677ac71fb8224cc189->enter($__internal_1ae7f1789a62f609fa09bcf2c28226d775918677e038cb677ac71fb8224cc189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1ae7f1789a62f609fa09bcf2c28226d775918677e038cb677ac71fb8224cc189->leave($__internal_1ae7f1789a62f609fa09bcf2c28226d775918677e038cb677ac71fb8224cc189_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
