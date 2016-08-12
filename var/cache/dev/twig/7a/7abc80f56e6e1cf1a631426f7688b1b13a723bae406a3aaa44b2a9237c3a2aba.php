<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_05299064947a8896b2f4d6f7b2d1777b9f6db5f8b8d5f6797ba90f087b4d9305 extends Twig_Template
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
        $__internal_53b7b58660547e8b2cc53e3c2d26b9974fa52fc208b38771a377ae1d83cc3475 = $this->env->getExtension("native_profiler");
        $__internal_53b7b58660547e8b2cc53e3c2d26b9974fa52fc208b38771a377ae1d83cc3475->enter($__internal_53b7b58660547e8b2cc53e3c2d26b9974fa52fc208b38771a377ae1d83cc3475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_53b7b58660547e8b2cc53e3c2d26b9974fa52fc208b38771a377ae1d83cc3475->leave($__internal_53b7b58660547e8b2cc53e3c2d26b9974fa52fc208b38771a377ae1d83cc3475_prof);

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
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
