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
        $__internal_6598c08e3d901dfc7f3692d5c12123bb3fc965ea38f88be9983c7643e8763e79 = $this->env->getExtension("native_profiler");
        $__internal_6598c08e3d901dfc7f3692d5c12123bb3fc965ea38f88be9983c7643e8763e79->enter($__internal_6598c08e3d901dfc7f3692d5c12123bb3fc965ea38f88be9983c7643e8763e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6598c08e3d901dfc7f3692d5c12123bb3fc965ea38f88be9983c7643e8763e79->leave($__internal_6598c08e3d901dfc7f3692d5c12123bb3fc965ea38f88be9983c7643e8763e79_prof);

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
