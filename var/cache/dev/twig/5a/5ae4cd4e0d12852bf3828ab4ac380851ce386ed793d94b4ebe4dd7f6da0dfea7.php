<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d3a10abb41ba3822d391b694d224c0609d0eabdb42e36d9c60e2cc8cb3f3db9a extends Twig_Template
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
        $__internal_34c544d4ca6748b5568a2b0e6266fc5d7fd7226c43fe84eac735cdb7839448b9 = $this->env->getExtension("native_profiler");
        $__internal_34c544d4ca6748b5568a2b0e6266fc5d7fd7226c43fe84eac735cdb7839448b9->enter($__internal_34c544d4ca6748b5568a2b0e6266fc5d7fd7226c43fe84eac735cdb7839448b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_34c544d4ca6748b5568a2b0e6266fc5d7fd7226c43fe84eac735cdb7839448b9->leave($__internal_34c544d4ca6748b5568a2b0e6266fc5d7fd7226c43fe84eac735cdb7839448b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
