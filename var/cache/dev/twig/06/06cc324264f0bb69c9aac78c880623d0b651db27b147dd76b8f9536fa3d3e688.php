<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d62ec97ee65b032f1ceee6fba6d279c863142224ed8c55ae3e839ab3761b12b8 extends Twig_Template
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
        $__internal_263ffe52a32e7a0e82eb5bd77aac82cbf9e20b015534677e07155b495c7f2170 = $this->env->getExtension("native_profiler");
        $__internal_263ffe52a32e7a0e82eb5bd77aac82cbf9e20b015534677e07155b495c7f2170->enter($__internal_263ffe52a32e7a0e82eb5bd77aac82cbf9e20b015534677e07155b495c7f2170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_263ffe52a32e7a0e82eb5bd77aac82cbf9e20b015534677e07155b495c7f2170->leave($__internal_263ffe52a32e7a0e82eb5bd77aac82cbf9e20b015534677e07155b495c7f2170_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
