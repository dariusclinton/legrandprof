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
        $__internal_2e415458ace133fd918c906ac4632b169d0832f9cd5698ae3f06bbbe6ee764c4 = $this->env->getExtension("native_profiler");
        $__internal_2e415458ace133fd918c906ac4632b169d0832f9cd5698ae3f06bbbe6ee764c4->enter($__internal_2e415458ace133fd918c906ac4632b169d0832f9cd5698ae3f06bbbe6ee764c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2e415458ace133fd918c906ac4632b169d0832f9cd5698ae3f06bbbe6ee764c4->leave($__internal_2e415458ace133fd918c906ac4632b169d0832f9cd5698ae3f06bbbe6ee764c4_prof);

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
