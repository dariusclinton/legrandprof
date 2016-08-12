<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_39c72e76f43e969bcc77af3aadf294f641c20e3ada0c64cb98758430726e51ad extends Twig_Template
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
        $__internal_599ef09c1850f66f0baf8ea2de4476b2c0897fb96865d47cf643575c8f10e057 = $this->env->getExtension("native_profiler");
        $__internal_599ef09c1850f66f0baf8ea2de4476b2c0897fb96865d47cf643575c8f10e057->enter($__internal_599ef09c1850f66f0baf8ea2de4476b2c0897fb96865d47cf643575c8f10e057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_599ef09c1850f66f0baf8ea2de4476b2c0897fb96865d47cf643575c8f10e057->leave($__internal_599ef09c1850f66f0baf8ea2de4476b2c0897fb96865d47cf643575c8f10e057_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
