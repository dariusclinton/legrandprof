<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_aa7bfd58322b9f6fe036f2515063581628f8bd1277c7e9216db458af11c0d590 extends Twig_Template
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
        $__internal_dd2241f7149ed88babaece3e5488aa83e7cf36537acbf0a93c4d1b7d9acbcedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2241f7149ed88babaece3e5488aa83e7cf36537acbf0a93c4d1b7d9acbcedc->enter($__internal_dd2241f7149ed88babaece3e5488aa83e7cf36537acbf0a93c4d1b7d9acbcedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dd2241f7149ed88babaece3e5488aa83e7cf36537acbf0a93c4d1b7d9acbcedc->leave($__internal_dd2241f7149ed88babaece3e5488aa83e7cf36537acbf0a93c4d1b7d9acbcedc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
