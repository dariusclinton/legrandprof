<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f1f9a793ed447f6eb98c4a938d2a00f05937782fad0c26be7ba655c492f13fde extends Twig_Template
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
        $__internal_685385bf9467cd1010419c81df6d391444f93faae53ab89b97ce61f565c8e4ef = $this->env->getExtension("native_profiler");
        $__internal_685385bf9467cd1010419c81df6d391444f93faae53ab89b97ce61f565c8e4ef->enter($__internal_685385bf9467cd1010419c81df6d391444f93faae53ab89b97ce61f565c8e4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_685385bf9467cd1010419c81df6d391444f93faae53ab89b97ce61f565c8e4ef->leave($__internal_685385bf9467cd1010419c81df6d391444f93faae53ab89b97ce61f565c8e4ef_prof);

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
