<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3be22297c8086bdbe190b2c2bab0856ed25cd5ed755ff300b9ec9e7bf08ca7b7 extends Twig_Template
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
        $__internal_1308c4090ec511c610be6867aedeee1c4fbef1575d503c0329e787fe97fa88a8 = $this->env->getExtension("native_profiler");
        $__internal_1308c4090ec511c610be6867aedeee1c4fbef1575d503c0329e787fe97fa88a8->enter($__internal_1308c4090ec511c610be6867aedeee1c4fbef1575d503c0329e787fe97fa88a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1308c4090ec511c610be6867aedeee1c4fbef1575d503c0329e787fe97fa88a8->leave($__internal_1308c4090ec511c610be6867aedeee1c4fbef1575d503c0329e787fe97fa88a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
