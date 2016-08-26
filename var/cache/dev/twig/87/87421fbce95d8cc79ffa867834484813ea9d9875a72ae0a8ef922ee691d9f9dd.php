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
        $__internal_54d8d92b7ba32db35a85d55ede6c3e250a470f25e048e1062d7c3542c3da59ad = $this->env->getExtension("native_profiler");
        $__internal_54d8d92b7ba32db35a85d55ede6c3e250a470f25e048e1062d7c3542c3da59ad->enter($__internal_54d8d92b7ba32db35a85d55ede6c3e250a470f25e048e1062d7c3542c3da59ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_54d8d92b7ba32db35a85d55ede6c3e250a470f25e048e1062d7c3542c3da59ad->leave($__internal_54d8d92b7ba32db35a85d55ede6c3e250a470f25e048e1062d7c3542c3da59ad_prof);

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
