<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b406d1b27612f68e4d1b4e90c47ee67512933349d0c5a69deb3071b738ae8c4a extends Twig_Template
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
        $__internal_57f95fb23d6fc53dc15c7b1c01ae816eaf85b8356b6f6d44731c493a23e5c3a4 = $this->env->getExtension("native_profiler");
        $__internal_57f95fb23d6fc53dc15c7b1c01ae816eaf85b8356b6f6d44731c493a23e5c3a4->enter($__internal_57f95fb23d6fc53dc15c7b1c01ae816eaf85b8356b6f6d44731c493a23e5c3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_57f95fb23d6fc53dc15c7b1c01ae816eaf85b8356b6f6d44731c493a23e5c3a4->leave($__internal_57f95fb23d6fc53dc15c7b1c01ae816eaf85b8356b6f6d44731c493a23e5c3a4_prof);

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
