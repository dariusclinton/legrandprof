<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_abcc1c4be4f7e3d5249e669a82ae7fc8094fdab8a2ef4365e55e180192226579 extends Twig_Template
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
        $__internal_d2afb33dc7b679f1f72a64bfab32d6e8a2400d1974456b018e43e81d1609360a = $this->env->getExtension("native_profiler");
        $__internal_d2afb33dc7b679f1f72a64bfab32d6e8a2400d1974456b018e43e81d1609360a->enter($__internal_d2afb33dc7b679f1f72a64bfab32d6e8a2400d1974456b018e43e81d1609360a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d2afb33dc7b679f1f72a64bfab32d6e8a2400d1974456b018e43e81d1609360a->leave($__internal_d2afb33dc7b679f1f72a64bfab32d6e8a2400d1974456b018e43e81d1609360a_prof);

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
