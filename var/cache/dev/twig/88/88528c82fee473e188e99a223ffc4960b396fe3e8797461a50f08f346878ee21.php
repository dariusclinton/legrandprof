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
        $__internal_7f71a7b94b66618b68a26cc87099b73098b5c1aa75838224fb5adc13a98e05d7 = $this->env->getExtension("native_profiler");
        $__internal_7f71a7b94b66618b68a26cc87099b73098b5c1aa75838224fb5adc13a98e05d7->enter($__internal_7f71a7b94b66618b68a26cc87099b73098b5c1aa75838224fb5adc13a98e05d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_7f71a7b94b66618b68a26cc87099b73098b5c1aa75838224fb5adc13a98e05d7->leave($__internal_7f71a7b94b66618b68a26cc87099b73098b5c1aa75838224fb5adc13a98e05d7_prof);

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
