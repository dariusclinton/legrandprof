<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5e6873d4bb4fa20f36b0cb7f8899a06c33fba6d17aa462bb214b20715864b5a0 extends Twig_Template
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
        $__internal_7841e2f9d5c8deba06961c3b426416fb2776b73bec380fd9e865498071c6725c = $this->env->getExtension("native_profiler");
        $__internal_7841e2f9d5c8deba06961c3b426416fb2776b73bec380fd9e865498071c6725c->enter($__internal_7841e2f9d5c8deba06961c3b426416fb2776b73bec380fd9e865498071c6725c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7841e2f9d5c8deba06961c3b426416fb2776b73bec380fd9e865498071c6725c->leave($__internal_7841e2f9d5c8deba06961c3b426416fb2776b73bec380fd9e865498071c6725c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
