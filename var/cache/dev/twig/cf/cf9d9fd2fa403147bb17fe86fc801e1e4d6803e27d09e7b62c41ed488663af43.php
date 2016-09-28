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
        $__internal_086764e107d60a6e19341961b9df14a824ff72e555f4ce6ac226f150e1fb3dab = $this->env->getExtension("native_profiler");
        $__internal_086764e107d60a6e19341961b9df14a824ff72e555f4ce6ac226f150e1fb3dab->enter($__internal_086764e107d60a6e19341961b9df14a824ff72e555f4ce6ac226f150e1fb3dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_086764e107d60a6e19341961b9df14a824ff72e555f4ce6ac226f150e1fb3dab->leave($__internal_086764e107d60a6e19341961b9df14a824ff72e555f4ce6ac226f150e1fb3dab_prof);

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
