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
        $__internal_e869b513de89ebc8fcc0b723afb111f5e3a58fec86336cd9c03a3756dbf5f57f = $this->env->getExtension("native_profiler");
        $__internal_e869b513de89ebc8fcc0b723afb111f5e3a58fec86336cd9c03a3756dbf5f57f->enter($__internal_e869b513de89ebc8fcc0b723afb111f5e3a58fec86336cd9c03a3756dbf5f57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e869b513de89ebc8fcc0b723afb111f5e3a58fec86336cd9c03a3756dbf5f57f->leave($__internal_e869b513de89ebc8fcc0b723afb111f5e3a58fec86336cd9c03a3756dbf5f57f_prof);

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
