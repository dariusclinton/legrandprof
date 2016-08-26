<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d97fc99d71c7e54883671a31659d3fa5c9c9b4d7c367306994fefd94c418f40f extends Twig_Template
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
        $__internal_35f2ca867e7fd5eb6b8d51037cf6ffe1612b4f429054ef7ef4165d95c1a9dde7 = $this->env->getExtension("native_profiler");
        $__internal_35f2ca867e7fd5eb6b8d51037cf6ffe1612b4f429054ef7ef4165d95c1a9dde7->enter($__internal_35f2ca867e7fd5eb6b8d51037cf6ffe1612b4f429054ef7ef4165d95c1a9dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_35f2ca867e7fd5eb6b8d51037cf6ffe1612b4f429054ef7ef4165d95c1a9dde7->leave($__internal_35f2ca867e7fd5eb6b8d51037cf6ffe1612b4f429054ef7ef4165d95c1a9dde7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
