<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_456bbc12292ececdc88d0fb87620ce4c4a73fcba34975a70b3f25fa1a0a7e405 extends Twig_Template
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
        $__internal_7f04279feb978ad794d18a701ff72ae24e98c3f66c12ec8d4bf7d9d96309ca43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f04279feb978ad794d18a701ff72ae24e98c3f66c12ec8d4bf7d9d96309ca43->enter($__internal_7f04279feb978ad794d18a701ff72ae24e98c3f66c12ec8d4bf7d9d96309ca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7f04279feb978ad794d18a701ff72ae24e98c3f66c12ec8d4bf7d9d96309ca43->leave($__internal_7f04279feb978ad794d18a701ff72ae24e98c3f66c12ec8d4bf7d9d96309ca43_prof);

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

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
