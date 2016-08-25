<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b5f1ed0932088ff8c4b5ffcc028a1ccdbb6933b32917acd1998a711e2e051dd2 extends Twig_Template
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
        $__internal_8e3f4f6da9a7ca0ab11fcbf2c72c5e65069ba92b5aa7904b3c9fc1f14f4ab492 = $this->env->getExtension("native_profiler");
        $__internal_8e3f4f6da9a7ca0ab11fcbf2c72c5e65069ba92b5aa7904b3c9fc1f14f4ab492->enter($__internal_8e3f4f6da9a7ca0ab11fcbf2c72c5e65069ba92b5aa7904b3c9fc1f14f4ab492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8e3f4f6da9a7ca0ab11fcbf2c72c5e65069ba92b5aa7904b3c9fc1f14f4ab492->leave($__internal_8e3f4f6da9a7ca0ab11fcbf2c72c5e65069ba92b5aa7904b3c9fc1f14f4ab492_prof);

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
