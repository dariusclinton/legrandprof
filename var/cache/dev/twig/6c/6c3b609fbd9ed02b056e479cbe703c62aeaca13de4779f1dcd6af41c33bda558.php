<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_39c72e76f43e969bcc77af3aadf294f641c20e3ada0c64cb98758430726e51ad extends Twig_Template
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
        $__internal_0d559713e849c164d5b897ed497eec20f30f2b4ef6934705a5acf8e9f830b214 = $this->env->getExtension("native_profiler");
        $__internal_0d559713e849c164d5b897ed497eec20f30f2b4ef6934705a5acf8e9f830b214->enter($__internal_0d559713e849c164d5b897ed497eec20f30f2b4ef6934705a5acf8e9f830b214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0d559713e849c164d5b897ed497eec20f30f2b4ef6934705a5acf8e9f830b214->leave($__internal_0d559713e849c164d5b897ed497eec20f30f2b4ef6934705a5acf8e9f830b214_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
