<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9c1233a7af2d293661e5dc8b9cd937e5fb5ec5d280e3c7f6a5c0185bcebe6fb9 extends Twig_Template
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
        $__internal_31c63431e844d1739388101ab4ba7bf5e6c035d0cc24089075965b3c8140cdd8 = $this->env->getExtension("native_profiler");
        $__internal_31c63431e844d1739388101ab4ba7bf5e6c035d0cc24089075965b3c8140cdd8->enter($__internal_31c63431e844d1739388101ab4ba7bf5e6c035d0cc24089075965b3c8140cdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_31c63431e844d1739388101ab4ba7bf5e6c035d0cc24089075965b3c8140cdd8->leave($__internal_31c63431e844d1739388101ab4ba7bf5e6c035d0cc24089075965b3c8140cdd8_prof);

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

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
