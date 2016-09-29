<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8d5dd5080c2354dda7b382350bbf5abaddcd0859a46c5c72c967df712b587e6e extends Twig_Template
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
        $__internal_85a496cd1fee42afa3f6b6dac4247d141585957e91b10704adb5727a9e07b330 = $this->env->getExtension("native_profiler");
        $__internal_85a496cd1fee42afa3f6b6dac4247d141585957e91b10704adb5727a9e07b330->enter($__internal_85a496cd1fee42afa3f6b6dac4247d141585957e91b10704adb5727a9e07b330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_85a496cd1fee42afa3f6b6dac4247d141585957e91b10704adb5727a9e07b330->leave($__internal_85a496cd1fee42afa3f6b6dac4247d141585957e91b10704adb5727a9e07b330_prof);

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
