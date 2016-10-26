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
        $__internal_71f605c652086d7011db20765341de6e18ce3539eb0a11b37caed363c223d9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f605c652086d7011db20765341de6e18ce3539eb0a11b37caed363c223d9ef->enter($__internal_71f605c652086d7011db20765341de6e18ce3539eb0a11b37caed363c223d9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_71f605c652086d7011db20765341de6e18ce3539eb0a11b37caed363c223d9ef->leave($__internal_71f605c652086d7011db20765341de6e18ce3539eb0a11b37caed363c223d9ef_prof);

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
