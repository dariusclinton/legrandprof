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
        $__internal_f7b6aab4d4a3b3fd4dc9cd2bfd3fb9b404f9a28280172549cd49a50d3ebc0538 = $this->env->getExtension("native_profiler");
        $__internal_f7b6aab4d4a3b3fd4dc9cd2bfd3fb9b404f9a28280172549cd49a50d3ebc0538->enter($__internal_f7b6aab4d4a3b3fd4dc9cd2bfd3fb9b404f9a28280172549cd49a50d3ebc0538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f7b6aab4d4a3b3fd4dc9cd2bfd3fb9b404f9a28280172549cd49a50d3ebc0538->leave($__internal_f7b6aab4d4a3b3fd4dc9cd2bfd3fb9b404f9a28280172549cd49a50d3ebc0538_prof);

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
