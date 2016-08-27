<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c866db52b8659a28fbe3e44da9ec9d39608e66fce62f5445c1ee2f910297fb66 extends Twig_Template
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
        $__internal_2d1498ad6f37cf203da90b51acfe2eb5dfde4b2c9bde376c1d516fed8d7e6515 = $this->env->getExtension("native_profiler");
        $__internal_2d1498ad6f37cf203da90b51acfe2eb5dfde4b2c9bde376c1d516fed8d7e6515->enter($__internal_2d1498ad6f37cf203da90b51acfe2eb5dfde4b2c9bde376c1d516fed8d7e6515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2d1498ad6f37cf203da90b51acfe2eb5dfde4b2c9bde376c1d516fed8d7e6515->leave($__internal_2d1498ad6f37cf203da90b51acfe2eb5dfde4b2c9bde376c1d516fed8d7e6515_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
