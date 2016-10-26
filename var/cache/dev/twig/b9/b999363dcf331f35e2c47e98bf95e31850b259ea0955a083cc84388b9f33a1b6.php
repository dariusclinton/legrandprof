<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_788934a28d40699dbfc7c81758db941c82c062b1179c5df277d53942b49c4002 extends Twig_Template
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
        $__internal_60f4f6f0e56fdf4257df9e9908def55ace9a7218f6b1d2d575db85632ec6de66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f4f6f0e56fdf4257df9e9908def55ace9a7218f6b1d2d575db85632ec6de66->enter($__internal_60f4f6f0e56fdf4257df9e9908def55ace9a7218f6b1d2d575db85632ec6de66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_60f4f6f0e56fdf4257df9e9908def55ace9a7218f6b1d2d575db85632ec6de66->leave($__internal_60f4f6f0e56fdf4257df9e9908def55ace9a7218f6b1d2d575db85632ec6de66_prof);

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

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
