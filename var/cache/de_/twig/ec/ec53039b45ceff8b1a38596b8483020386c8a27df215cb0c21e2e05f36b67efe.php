<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_96b7005d2f8793100c724d228798c562a2f884c5805154a9e0f2405d01c5751c extends Twig_Template
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
        $__internal_2c06c5c132ed3e02a05fda1dceee4f47881ed837927220e4f5c3842e027f1b85 = $this->env->getExtension("native_profiler");
        $__internal_2c06c5c132ed3e02a05fda1dceee4f47881ed837927220e4f5c3842e027f1b85->enter($__internal_2c06c5c132ed3e02a05fda1dceee4f47881ed837927220e4f5c3842e027f1b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2c06c5c132ed3e02a05fda1dceee4f47881ed837927220e4f5c3842e027f1b85->leave($__internal_2c06c5c132ed3e02a05fda1dceee4f47881ed837927220e4f5c3842e027f1b85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
