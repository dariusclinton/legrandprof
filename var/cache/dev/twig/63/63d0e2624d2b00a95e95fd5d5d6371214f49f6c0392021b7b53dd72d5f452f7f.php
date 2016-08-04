<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_988e275efa68fa980e0885c86e8a6d1926684319ed984edeb3e929e54df46ee0 extends Twig_Template
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
        $__internal_72972dc7ec364035846b6d4be6c9800d0006de92a2c2790cf1dc2fb8f2a1aa5f = $this->env->getExtension("native_profiler");
        $__internal_72972dc7ec364035846b6d4be6c9800d0006de92a2c2790cf1dc2fb8f2a1aa5f->enter($__internal_72972dc7ec364035846b6d4be6c9800d0006de92a2c2790cf1dc2fb8f2a1aa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_72972dc7ec364035846b6d4be6c9800d0006de92a2c2790cf1dc2fb8f2a1aa5f->leave($__internal_72972dc7ec364035846b6d4be6c9800d0006de92a2c2790cf1dc2fb8f2a1aa5f_prof);

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
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
