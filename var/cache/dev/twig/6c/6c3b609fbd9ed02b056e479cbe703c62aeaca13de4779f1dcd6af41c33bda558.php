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
        $__internal_21cd03c1d5d32c620defdbfd117b2a64a9413174c16b0fe1f33356fe75d585f2 = $this->env->getExtension("native_profiler");
        $__internal_21cd03c1d5d32c620defdbfd117b2a64a9413174c16b0fe1f33356fe75d585f2->enter($__internal_21cd03c1d5d32c620defdbfd117b2a64a9413174c16b0fe1f33356fe75d585f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_21cd03c1d5d32c620defdbfd117b2a64a9413174c16b0fe1f33356fe75d585f2->leave($__internal_21cd03c1d5d32c620defdbfd117b2a64a9413174c16b0fe1f33356fe75d585f2_prof);

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
