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
        $__internal_a5811ae81c6746bab2d7dcf5a2eca4f4ef70548a391a4125f34d8cfff2f8cf9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5811ae81c6746bab2d7dcf5a2eca4f4ef70548a391a4125f34d8cfff2f8cf9d->enter($__internal_a5811ae81c6746bab2d7dcf5a2eca4f4ef70548a391a4125f34d8cfff2f8cf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a5811ae81c6746bab2d7dcf5a2eca4f4ef70548a391a4125f34d8cfff2f8cf9d->leave($__internal_a5811ae81c6746bab2d7dcf5a2eca4f4ef70548a391a4125f34d8cfff2f8cf9d_prof);

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
