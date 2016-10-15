<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cb8eafc91d214fe674004cf4170bb205cc2835d926d778b53d633b3e801eaecf extends Twig_Template
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
        $__internal_03e142f399b874fee7fd9ddb65f6f2417c0e74914f0730e0d19d2b78a0173b73 = $this->env->getExtension("native_profiler");
        $__internal_03e142f399b874fee7fd9ddb65f6f2417c0e74914f0730e0d19d2b78a0173b73->enter($__internal_03e142f399b874fee7fd9ddb65f6f2417c0e74914f0730e0d19d2b78a0173b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_03e142f399b874fee7fd9ddb65f6f2417c0e74914f0730e0d19d2b78a0173b73->leave($__internal_03e142f399b874fee7fd9ddb65f6f2417c0e74914f0730e0d19d2b78a0173b73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
