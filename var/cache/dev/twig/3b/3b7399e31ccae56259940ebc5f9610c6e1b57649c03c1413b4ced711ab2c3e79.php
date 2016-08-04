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
        $__internal_c76faa5ec4f148ad32e85e320f5868e5d6861b6360cd5b9b2020557f72cd8b3b = $this->env->getExtension("native_profiler");
        $__internal_c76faa5ec4f148ad32e85e320f5868e5d6861b6360cd5b9b2020557f72cd8b3b->enter($__internal_c76faa5ec4f148ad32e85e320f5868e5d6861b6360cd5b9b2020557f72cd8b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c76faa5ec4f148ad32e85e320f5868e5d6861b6360cd5b9b2020557f72cd8b3b->leave($__internal_c76faa5ec4f148ad32e85e320f5868e5d6861b6360cd5b9b2020557f72cd8b3b_prof);

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
