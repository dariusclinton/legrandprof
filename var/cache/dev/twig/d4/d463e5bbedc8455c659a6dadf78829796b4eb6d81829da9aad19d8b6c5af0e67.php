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
        $__internal_58d62b8e3d79422d6c3dfad6791f9579d103c2973c8ebefa668de7392ef8e95d = $this->env->getExtension("native_profiler");
        $__internal_58d62b8e3d79422d6c3dfad6791f9579d103c2973c8ebefa668de7392ef8e95d->enter($__internal_58d62b8e3d79422d6c3dfad6791f9579d103c2973c8ebefa668de7392ef8e95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_58d62b8e3d79422d6c3dfad6791f9579d103c2973c8ebefa668de7392ef8e95d->leave($__internal_58d62b8e3d79422d6c3dfad6791f9579d103c2973c8ebefa668de7392ef8e95d_prof);

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
