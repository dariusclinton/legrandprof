<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ebc0b1c4e8d3d1e5eac0c1e343e31307fd039227767fced82f3681ccbd7be981 extends Twig_Template
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
        $__internal_8a20a1190a5395e842be40d0a53753896df8f936154df4c3b72e39f684d773cf = $this->env->getExtension("native_profiler");
        $__internal_8a20a1190a5395e842be40d0a53753896df8f936154df4c3b72e39f684d773cf->enter($__internal_8a20a1190a5395e842be40d0a53753896df8f936154df4c3b72e39f684d773cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8a20a1190a5395e842be40d0a53753896df8f936154df4c3b72e39f684d773cf->leave($__internal_8a20a1190a5395e842be40d0a53753896df8f936154df4c3b72e39f684d773cf_prof);

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
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
