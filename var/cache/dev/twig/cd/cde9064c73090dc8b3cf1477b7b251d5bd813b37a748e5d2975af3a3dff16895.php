<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e259f98b69cc2b8126a61c4eb62db429c640d7f861eed34fa58b7897935cc74e extends Twig_Template
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
        $__internal_74554568eb09b2e462853a84737fdd06ebdb2f1d0b5114be79089154304b2a07 = $this->env->getExtension("native_profiler");
        $__internal_74554568eb09b2e462853a84737fdd06ebdb2f1d0b5114be79089154304b2a07->enter($__internal_74554568eb09b2e462853a84737fdd06ebdb2f1d0b5114be79089154304b2a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_74554568eb09b2e462853a84737fdd06ebdb2f1d0b5114be79089154304b2a07->leave($__internal_74554568eb09b2e462853a84737fdd06ebdb2f1d0b5114be79089154304b2a07_prof);

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
