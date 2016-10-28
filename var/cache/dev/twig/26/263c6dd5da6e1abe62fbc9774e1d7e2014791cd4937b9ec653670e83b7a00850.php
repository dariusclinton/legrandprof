<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b383d4e7a6c9f57bb76b3c2d8ced34b674891d3b8c9f4f501a94ae26fc4672ab extends Twig_Template
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
        $__internal_dafd631aa319ba022dfe47693cbc46da5b025657e8021555603109329e43d16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafd631aa319ba022dfe47693cbc46da5b025657e8021555603109329e43d16b->enter($__internal_dafd631aa319ba022dfe47693cbc46da5b025657e8021555603109329e43d16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dafd631aa319ba022dfe47693cbc46da5b025657e8021555603109329e43d16b->leave($__internal_dafd631aa319ba022dfe47693cbc46da5b025657e8021555603109329e43d16b_prof);

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

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
