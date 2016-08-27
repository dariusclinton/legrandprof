<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_dec20d118871bd98408f381ea9c7af3807da6d00ce8bbfda6746ff9bf8a2618b extends Twig_Template
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
        $__internal_79a208f27033e32349752188c23c42c8387c7159bc4f80110e1815fad78e8114 = $this->env->getExtension("native_profiler");
        $__internal_79a208f27033e32349752188c23c42c8387c7159bc4f80110e1815fad78e8114->enter($__internal_79a208f27033e32349752188c23c42c8387c7159bc4f80110e1815fad78e8114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_79a208f27033e32349752188c23c42c8387c7159bc4f80110e1815fad78e8114->leave($__internal_79a208f27033e32349752188c23c42c8387c7159bc4f80110e1815fad78e8114_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
