<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_d83ae6d01380877805f652808b3472e73a7a72e8cced6a4a120dfdb66808c642 extends Twig_Template
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
        $__internal_9794932d2ce67d56a7384acad11e6ecdf091747f51247b539f6f22adfa39f0ba = $this->env->getExtension("native_profiler");
        $__internal_9794932d2ce67d56a7384acad11e6ecdf091747f51247b539f6f22adfa39f0ba->enter($__internal_9794932d2ce67d56a7384acad11e6ecdf091747f51247b539f6f22adfa39f0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_9794932d2ce67d56a7384acad11e6ecdf091747f51247b539f6f22adfa39f0ba->leave($__internal_9794932d2ce67d56a7384acad11e6ecdf091747f51247b539f6f22adfa39f0ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
