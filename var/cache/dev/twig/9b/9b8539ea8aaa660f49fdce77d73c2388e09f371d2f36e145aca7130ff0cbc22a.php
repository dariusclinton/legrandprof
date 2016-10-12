<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cdfa994a75ffb87f2148d67f70261ed3276077c2b42dd7c30d56a7422554b3c6 extends Twig_Template
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
        $__internal_29979f846ee80e4227efb55c76d09fdccd31140f6badab4be0e2decb4c3e024c = $this->env->getExtension("native_profiler");
        $__internal_29979f846ee80e4227efb55c76d09fdccd31140f6badab4be0e2decb4c3e024c->enter($__internal_29979f846ee80e4227efb55c76d09fdccd31140f6badab4be0e2decb4c3e024c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_29979f846ee80e4227efb55c76d09fdccd31140f6badab4be0e2decb4c3e024c->leave($__internal_29979f846ee80e4227efb55c76d09fdccd31140f6badab4be0e2decb4c3e024c_prof);

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
