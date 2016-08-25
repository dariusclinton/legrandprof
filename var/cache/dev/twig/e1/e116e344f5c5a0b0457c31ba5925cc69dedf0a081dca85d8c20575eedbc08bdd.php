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
        $__internal_e0d4b66ae6379f05dd2ef2a80368b98ac80411f783e727409b33e1603f85a893 = $this->env->getExtension("native_profiler");
        $__internal_e0d4b66ae6379f05dd2ef2a80368b98ac80411f783e727409b33e1603f85a893->enter($__internal_e0d4b66ae6379f05dd2ef2a80368b98ac80411f783e727409b33e1603f85a893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e0d4b66ae6379f05dd2ef2a80368b98ac80411f783e727409b33e1603f85a893->leave($__internal_e0d4b66ae6379f05dd2ef2a80368b98ac80411f783e727409b33e1603f85a893_prof);

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
