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
        $__internal_5d34ec2edf8fcf3f48ddc50ca0cda7ce426ada88552ae325e60acc233c5a8c5f = $this->env->getExtension("native_profiler");
        $__internal_5d34ec2edf8fcf3f48ddc50ca0cda7ce426ada88552ae325e60acc233c5a8c5f->enter($__internal_5d34ec2edf8fcf3f48ddc50ca0cda7ce426ada88552ae325e60acc233c5a8c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5d34ec2edf8fcf3f48ddc50ca0cda7ce426ada88552ae325e60acc233c5a8c5f->leave($__internal_5d34ec2edf8fcf3f48ddc50ca0cda7ce426ada88552ae325e60acc233c5a8c5f_prof);

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
