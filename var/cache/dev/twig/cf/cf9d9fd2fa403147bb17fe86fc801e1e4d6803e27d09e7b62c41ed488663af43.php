<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_455dd2231943410a1c74bd10aec575587ce690d23bd15102324edfcb011de80d extends Twig_Template
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
        $__internal_9b1162d3810ddfcc761dd4d7526347ed08559e5183bf4ed31b630bea47fe0484 = $this->env->getExtension("native_profiler");
        $__internal_9b1162d3810ddfcc761dd4d7526347ed08559e5183bf4ed31b630bea47fe0484->enter($__internal_9b1162d3810ddfcc761dd4d7526347ed08559e5183bf4ed31b630bea47fe0484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9b1162d3810ddfcc761dd4d7526347ed08559e5183bf4ed31b630bea47fe0484->leave($__internal_9b1162d3810ddfcc761dd4d7526347ed08559e5183bf4ed31b630bea47fe0484_prof);

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
