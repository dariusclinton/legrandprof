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
        $__internal_2aedf6d876d6653d5ea22de648bb7e69e98593088335437f40905ce88334c9d6 = $this->env->getExtension("native_profiler");
        $__internal_2aedf6d876d6653d5ea22de648bb7e69e98593088335437f40905ce88334c9d6->enter($__internal_2aedf6d876d6653d5ea22de648bb7e69e98593088335437f40905ce88334c9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_2aedf6d876d6653d5ea22de648bb7e69e98593088335437f40905ce88334c9d6->leave($__internal_2aedf6d876d6653d5ea22de648bb7e69e98593088335437f40905ce88334c9d6_prof);

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
