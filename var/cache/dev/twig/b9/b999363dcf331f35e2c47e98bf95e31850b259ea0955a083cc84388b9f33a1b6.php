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
        $__internal_15c088cb3788dfa1110115c1deb27f95882d89cc53aa62735a5e84e268266217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c088cb3788dfa1110115c1deb27f95882d89cc53aa62735a5e84e268266217->enter($__internal_15c088cb3788dfa1110115c1deb27f95882d89cc53aa62735a5e84e268266217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_15c088cb3788dfa1110115c1deb27f95882d89cc53aa62735a5e84e268266217->leave($__internal_15c088cb3788dfa1110115c1deb27f95882d89cc53aa62735a5e84e268266217_prof);

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
