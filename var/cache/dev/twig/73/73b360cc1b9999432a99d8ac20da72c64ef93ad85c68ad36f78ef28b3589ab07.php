<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_55bed27938f737e6803c882eda59d88ca6675df85545414a9f1dd9238714343f extends Twig_Template
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
        $__internal_e203e704df54aa1bd2867e08b435d7e75ebdc2fe63259b1ff7008a56942a34f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e203e704df54aa1bd2867e08b435d7e75ebdc2fe63259b1ff7008a56942a34f9->enter($__internal_e203e704df54aa1bd2867e08b435d7e75ebdc2fe63259b1ff7008a56942a34f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e203e704df54aa1bd2867e08b435d7e75ebdc2fe63259b1ff7008a56942a34f9->leave($__internal_e203e704df54aa1bd2867e08b435d7e75ebdc2fe63259b1ff7008a56942a34f9_prof);

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
