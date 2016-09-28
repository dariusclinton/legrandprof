<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cb8eafc91d214fe674004cf4170bb205cc2835d926d778b53d633b3e801eaecf extends Twig_Template
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
        $__internal_a246928014da185c97293c435c270b9098e3555cf345bf5110873aacbc42450e = $this->env->getExtension("native_profiler");
        $__internal_a246928014da185c97293c435c270b9098e3555cf345bf5110873aacbc42450e->enter($__internal_a246928014da185c97293c435c270b9098e3555cf345bf5110873aacbc42450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a246928014da185c97293c435c270b9098e3555cf345bf5110873aacbc42450e->leave($__internal_a246928014da185c97293c435c270b9098e3555cf345bf5110873aacbc42450e_prof);

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

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
