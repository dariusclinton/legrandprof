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
        $__internal_7c77dc59a028db963d34761a67e8c0c24cb8749ac1dfab7fef7bb67002536475 = $this->env->getExtension("native_profiler");
        $__internal_7c77dc59a028db963d34761a67e8c0c24cb8749ac1dfab7fef7bb67002536475->enter($__internal_7c77dc59a028db963d34761a67e8c0c24cb8749ac1dfab7fef7bb67002536475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7c77dc59a028db963d34761a67e8c0c24cb8749ac1dfab7fef7bb67002536475->leave($__internal_7c77dc59a028db963d34761a67e8c0c24cb8749ac1dfab7fef7bb67002536475_prof);

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
