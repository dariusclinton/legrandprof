<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_550a9acf8236a04d1c7a33b244905bdafd9e4649ed9c7283d04a27e708416870 extends Twig_Template
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
        $__internal_d3c06b0d8d8f42c8def14e7bb6064d721929885e2820ce53b98216a70ff399f0 = $this->env->getExtension("native_profiler");
        $__internal_d3c06b0d8d8f42c8def14e7bb6064d721929885e2820ce53b98216a70ff399f0->enter($__internal_d3c06b0d8d8f42c8def14e7bb6064d721929885e2820ce53b98216a70ff399f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d3c06b0d8d8f42c8def14e7bb6064d721929885e2820ce53b98216a70ff399f0->leave($__internal_d3c06b0d8d8f42c8def14e7bb6064d721929885e2820ce53b98216a70ff399f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
