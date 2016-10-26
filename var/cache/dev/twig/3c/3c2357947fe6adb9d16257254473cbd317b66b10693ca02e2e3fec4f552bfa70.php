<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3439e5583263624585d6afe74f969119cc9298e734b7bc1db0bb95a24a8cce01 extends Twig_Template
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
        $__internal_7379a21ba8f968ee0d1c21ffd593ea9662097fe256d501f62e5401bc8377b7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7379a21ba8f968ee0d1c21ffd593ea9662097fe256d501f62e5401bc8377b7d4->enter($__internal_7379a21ba8f968ee0d1c21ffd593ea9662097fe256d501f62e5401bc8377b7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7379a21ba8f968ee0d1c21ffd593ea9662097fe256d501f62e5401bc8377b7d4->leave($__internal_7379a21ba8f968ee0d1c21ffd593ea9662097fe256d501f62e5401bc8377b7d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
