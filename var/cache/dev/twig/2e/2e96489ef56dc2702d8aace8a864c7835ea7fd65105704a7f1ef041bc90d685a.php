<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_194c94d0657f02c08a6fc837ad7431878c377467054957a1d77e9c57447bccb1 extends Twig_Template
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
        $__internal_a6edeb9a69a41a87ac3361d1d259702d0fca533c8a316e8a766c16a572fa1025 = $this->env->getExtension("native_profiler");
        $__internal_a6edeb9a69a41a87ac3361d1d259702d0fca533c8a316e8a766c16a572fa1025->enter($__internal_a6edeb9a69a41a87ac3361d1d259702d0fca533c8a316e8a766c16a572fa1025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a6edeb9a69a41a87ac3361d1d259702d0fca533c8a316e8a766c16a572fa1025->leave($__internal_a6edeb9a69a41a87ac3361d1d259702d0fca533c8a316e8a766c16a572fa1025_prof);

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
