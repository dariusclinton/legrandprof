<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bb75cf05516d27cdfde487d5391e1aa27e37c515763277bdc016084e3ccd9fc5 extends Twig_Template
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
        $__internal_7e54f5677a4dc10f0625e33759464e2d33118a26ee1e9c1dd049e103f5819f8c = $this->env->getExtension("native_profiler");
        $__internal_7e54f5677a4dc10f0625e33759464e2d33118a26ee1e9c1dd049e103f5819f8c->enter($__internal_7e54f5677a4dc10f0625e33759464e2d33118a26ee1e9c1dd049e103f5819f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_7e54f5677a4dc10f0625e33759464e2d33118a26ee1e9c1dd049e103f5819f8c->leave($__internal_7e54f5677a4dc10f0625e33759464e2d33118a26ee1e9c1dd049e103f5819f8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
