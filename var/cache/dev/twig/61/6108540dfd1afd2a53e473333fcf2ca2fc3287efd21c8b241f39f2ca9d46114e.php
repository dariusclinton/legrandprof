<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a196d3bdc86bed05029f066c59a3680846812a05b05230727550a5df0d7b7760 extends Twig_Template
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
        $__internal_849ce4538a9af6c7d03afb6d186347c04ef0b84cccb028e79f0c5bf5f65d7cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849ce4538a9af6c7d03afb6d186347c04ef0b84cccb028e79f0c5bf5f65d7cbe->enter($__internal_849ce4538a9af6c7d03afb6d186347c04ef0b84cccb028e79f0c5bf5f65d7cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_849ce4538a9af6c7d03afb6d186347c04ef0b84cccb028e79f0c5bf5f65d7cbe->leave($__internal_849ce4538a9af6c7d03afb6d186347c04ef0b84cccb028e79f0c5bf5f65d7cbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
