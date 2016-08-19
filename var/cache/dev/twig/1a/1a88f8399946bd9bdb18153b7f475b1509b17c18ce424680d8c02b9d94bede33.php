<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0e2aa07b73dbca4bf5ac4356628892008dbb2e2a1ec14ff0d4a8e01a9adc56ef extends Twig_Template
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
        $__internal_18fc479400cffc7b7c5bff4b4110aee59b60d12f1e7bcd2e39c00e94ab4cbc4e = $this->env->getExtension("native_profiler");
        $__internal_18fc479400cffc7b7c5bff4b4110aee59b60d12f1e7bcd2e39c00e94ab4cbc4e->enter($__internal_18fc479400cffc7b7c5bff4b4110aee59b60d12f1e7bcd2e39c00e94ab4cbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_18fc479400cffc7b7c5bff4b4110aee59b60d12f1e7bcd2e39c00e94ab4cbc4e->leave($__internal_18fc479400cffc7b7c5bff4b4110aee59b60d12f1e7bcd2e39c00e94ab4cbc4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
