<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_19687bb40dee3f27fd871912b7dea842d30af1d9d95b320d181051af1e203882 extends Twig_Template
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
        $__internal_aff98954d33cb534519d9450c0571c24fc4e1a2f09229676ec10379944044d83 = $this->env->getExtension("native_profiler");
        $__internal_aff98954d33cb534519d9450c0571c24fc4e1a2f09229676ec10379944044d83->enter($__internal_aff98954d33cb534519d9450c0571c24fc4e1a2f09229676ec10379944044d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aff98954d33cb534519d9450c0571c24fc4e1a2f09229676ec10379944044d83->leave($__internal_aff98954d33cb534519d9450c0571c24fc4e1a2f09229676ec10379944044d83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
