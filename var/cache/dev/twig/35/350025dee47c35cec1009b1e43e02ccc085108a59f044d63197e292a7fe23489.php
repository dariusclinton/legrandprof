<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_aaa9f04421da0e5aec1924ba6df2772c6664146189195b5a8277ec18ff29b741 extends Twig_Template
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
        $__internal_8b96c5a78ac6936d5a8c44594285baf14baaa965d06faeef7d92f6d8d8ba5c05 = $this->env->getExtension("native_profiler");
        $__internal_8b96c5a78ac6936d5a8c44594285baf14baaa965d06faeef7d92f6d8d8ba5c05->enter($__internal_8b96c5a78ac6936d5a8c44594285baf14baaa965d06faeef7d92f6d8d8ba5c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8b96c5a78ac6936d5a8c44594285baf14baaa965d06faeef7d92f6d8d8ba5c05->leave($__internal_8b96c5a78ac6936d5a8c44594285baf14baaa965d06faeef7d92f6d8d8ba5c05_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
