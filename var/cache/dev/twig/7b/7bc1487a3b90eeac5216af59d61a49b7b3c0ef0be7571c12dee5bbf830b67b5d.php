<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_7a36745fdbbc9912786a4620011fb5bb63ba0520266783a8d93da1717c1320dc extends Twig_Template
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
        $__internal_17317770a952f82d760b669f13e90b1f0271c2f44d228a1c5e0a4fcf0634f4d8 = $this->env->getExtension("native_profiler");
        $__internal_17317770a952f82d760b669f13e90b1f0271c2f44d228a1c5e0a4fcf0634f4d8->enter($__internal_17317770a952f82d760b669f13e90b1f0271c2f44d228a1c5e0a4fcf0634f4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_17317770a952f82d760b669f13e90b1f0271c2f44d228a1c5e0a4fcf0634f4d8->leave($__internal_17317770a952f82d760b669f13e90b1f0271c2f44d228a1c5e0a4fcf0634f4d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
