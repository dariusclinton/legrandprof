<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_55bed27938f737e6803c882eda59d88ca6675df85545414a9f1dd9238714343f extends Twig_Template
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
        $__internal_5257c6f600e7683ac3955db91e541dad8fffb0fd33deffdb387905c06fa5a274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5257c6f600e7683ac3955db91e541dad8fffb0fd33deffdb387905c06fa5a274->enter($__internal_5257c6f600e7683ac3955db91e541dad8fffb0fd33deffdb387905c06fa5a274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5257c6f600e7683ac3955db91e541dad8fffb0fd33deffdb387905c06fa5a274->leave($__internal_5257c6f600e7683ac3955db91e541dad8fffb0fd33deffdb387905c06fa5a274_prof);

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
