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
        $__internal_58f39f757b9fe2fa3de2dc40058b7d97643fad95a97417ed21cb600c97ddc703 = $this->env->getExtension("native_profiler");
        $__internal_58f39f757b9fe2fa3de2dc40058b7d97643fad95a97417ed21cb600c97ddc703->enter($__internal_58f39f757b9fe2fa3de2dc40058b7d97643fad95a97417ed21cb600c97ddc703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_58f39f757b9fe2fa3de2dc40058b7d97643fad95a97417ed21cb600c97ddc703->leave($__internal_58f39f757b9fe2fa3de2dc40058b7d97643fad95a97417ed21cb600c97ddc703_prof);

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
