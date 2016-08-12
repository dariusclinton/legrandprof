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
        $__internal_ff18391a3b439017a11210c9d2a8b8cfa4e230011ff4a9cd9b62839b390ca34d = $this->env->getExtension("native_profiler");
        $__internal_ff18391a3b439017a11210c9d2a8b8cfa4e230011ff4a9cd9b62839b390ca34d->enter($__internal_ff18391a3b439017a11210c9d2a8b8cfa4e230011ff4a9cd9b62839b390ca34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ff18391a3b439017a11210c9d2a8b8cfa4e230011ff4a9cd9b62839b390ca34d->leave($__internal_ff18391a3b439017a11210c9d2a8b8cfa4e230011ff4a9cd9b62839b390ca34d_prof);

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
