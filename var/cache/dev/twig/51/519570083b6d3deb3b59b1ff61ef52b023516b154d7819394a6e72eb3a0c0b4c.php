<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5fe4df5280e2bb59f4ff6f8ab1960681214e2a171130271af325db13c7bf7cf6 extends Twig_Template
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
        $__internal_4bec74b3f72d4dc9b46a008471de725f98a63ed92cc99fbeb752535f15c3dd65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bec74b3f72d4dc9b46a008471de725f98a63ed92cc99fbeb752535f15c3dd65->enter($__internal_4bec74b3f72d4dc9b46a008471de725f98a63ed92cc99fbeb752535f15c3dd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4bec74b3f72d4dc9b46a008471de725f98a63ed92cc99fbeb752535f15c3dd65->leave($__internal_4bec74b3f72d4dc9b46a008471de725f98a63ed92cc99fbeb752535f15c3dd65_prof);

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

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
