<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f1229a15fb5a7eaaf143395bc9d1dc13954a916dfd0aadb3870a5ac9c0f36c22 extends Twig_Template
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
        $__internal_ffa8af2cceb4b895bbb186de23ee15409bf00e5c11533a9f815749b6903b483a = $this->env->getExtension("native_profiler");
        $__internal_ffa8af2cceb4b895bbb186de23ee15409bf00e5c11533a9f815749b6903b483a->enter($__internal_ffa8af2cceb4b895bbb186de23ee15409bf00e5c11533a9f815749b6903b483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ffa8af2cceb4b895bbb186de23ee15409bf00e5c11533a9f815749b6903b483a->leave($__internal_ffa8af2cceb4b895bbb186de23ee15409bf00e5c11533a9f815749b6903b483a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
