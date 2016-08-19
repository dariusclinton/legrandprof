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
        $__internal_b1879a7d7778a5241e55e7c15828811a1b8611ceec4aa1442c33c1c088b41056 = $this->env->getExtension("native_profiler");
        $__internal_b1879a7d7778a5241e55e7c15828811a1b8611ceec4aa1442c33c1c088b41056->enter($__internal_b1879a7d7778a5241e55e7c15828811a1b8611ceec4aa1442c33c1c088b41056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b1879a7d7778a5241e55e7c15828811a1b8611ceec4aa1442c33c1c088b41056->leave($__internal_b1879a7d7778a5241e55e7c15828811a1b8611ceec4aa1442c33c1c088b41056_prof);

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
