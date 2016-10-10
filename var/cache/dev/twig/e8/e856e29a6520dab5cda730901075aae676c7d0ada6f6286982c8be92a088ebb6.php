<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_94fff5fc503dbf6d836e1722c6f783265b87bcf439dc7c28f8bab68922b357aa extends Twig_Template
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
        $__internal_b677f4838c9f82925d6ba6aa2f7f04d7dd9e1225f29d3f906008d57c0b2bf5fd = $this->env->getExtension("native_profiler");
        $__internal_b677f4838c9f82925d6ba6aa2f7f04d7dd9e1225f29d3f906008d57c0b2bf5fd->enter($__internal_b677f4838c9f82925d6ba6aa2f7f04d7dd9e1225f29d3f906008d57c0b2bf5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b677f4838c9f82925d6ba6aa2f7f04d7dd9e1225f29d3f906008d57c0b2bf5fd->leave($__internal_b677f4838c9f82925d6ba6aa2f7f04d7dd9e1225f29d3f906008d57c0b2bf5fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
