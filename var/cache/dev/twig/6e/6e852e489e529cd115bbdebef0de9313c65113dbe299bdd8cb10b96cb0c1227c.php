<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3994c799edd986a6e28ef4dbcaa7d939e2555dd756dca36d811529bfcc8c52d0 extends Twig_Template
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
        $__internal_15c37102c4287d3f1eb0d4f78caa0d4a5da9c220ade218c29b91c30cf3972d4c = $this->env->getExtension("native_profiler");
        $__internal_15c37102c4287d3f1eb0d4f78caa0d4a5da9c220ade218c29b91c30cf3972d4c->enter($__internal_15c37102c4287d3f1eb0d4f78caa0d4a5da9c220ade218c29b91c30cf3972d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_15c37102c4287d3f1eb0d4f78caa0d4a5da9c220ade218c29b91c30cf3972d4c->leave($__internal_15c37102c4287d3f1eb0d4f78caa0d4a5da9c220ade218c29b91c30cf3972d4c_prof);

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
