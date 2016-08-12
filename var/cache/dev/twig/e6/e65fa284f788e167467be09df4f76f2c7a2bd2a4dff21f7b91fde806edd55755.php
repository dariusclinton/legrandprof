<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_be13ad00e0b76454cfb29fabde13cf0f6531decd759e1597412813a67d7c7bd8 extends Twig_Template
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
        $__internal_add79becb8a68721a9b24c86d944a29e03e2c9baf98bffb0332410ba3d63d1ef = $this->env->getExtension("native_profiler");
        $__internal_add79becb8a68721a9b24c86d944a29e03e2c9baf98bffb0332410ba3d63d1ef->enter($__internal_add79becb8a68721a9b24c86d944a29e03e2c9baf98bffb0332410ba3d63d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_add79becb8a68721a9b24c86d944a29e03e2c9baf98bffb0332410ba3d63d1ef->leave($__internal_add79becb8a68721a9b24c86d944a29e03e2c9baf98bffb0332410ba3d63d1ef_prof);

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
