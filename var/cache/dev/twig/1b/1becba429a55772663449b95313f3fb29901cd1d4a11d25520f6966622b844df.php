<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_0d948599232d6e5550c7e21f3c421e4a1eec14f256cfa465b8dca92f49108283 extends Twig_Template
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
        $__internal_0be4768a8836410b52bdfc1101cb8329b6a4ae0d6769fbf36ea5455d3329308c = $this->env->getExtension("native_profiler");
        $__internal_0be4768a8836410b52bdfc1101cb8329b6a4ae0d6769fbf36ea5455d3329308c->enter($__internal_0be4768a8836410b52bdfc1101cb8329b6a4ae0d6769fbf36ea5455d3329308c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0be4768a8836410b52bdfc1101cb8329b6a4ae0d6769fbf36ea5455d3329308c->leave($__internal_0be4768a8836410b52bdfc1101cb8329b6a4ae0d6769fbf36ea5455d3329308c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
