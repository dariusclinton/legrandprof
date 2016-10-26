<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_95660375d8f0750396871c6f8b7fe62515d7795b97cad64b18e552820ee583cf extends Twig_Template
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
        $__internal_e894b163f3569a13ecdea2e25d506b8fa4f9f0022c2c38f801f8a3ac91edd875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e894b163f3569a13ecdea2e25d506b8fa4f9f0022c2c38f801f8a3ac91edd875->enter($__internal_e894b163f3569a13ecdea2e25d506b8fa4f9f0022c2c38f801f8a3ac91edd875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_e894b163f3569a13ecdea2e25d506b8fa4f9f0022c2c38f801f8a3ac91edd875->leave($__internal_e894b163f3569a13ecdea2e25d506b8fa4f9f0022c2c38f801f8a3ac91edd875_prof);

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

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
