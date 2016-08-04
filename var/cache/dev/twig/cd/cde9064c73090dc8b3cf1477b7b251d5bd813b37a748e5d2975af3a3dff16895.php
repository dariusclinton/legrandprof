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
        $__internal_4147e2752d25a67a20aef4385d25f513146c93976c9c91214739888640b7075a = $this->env->getExtension("native_profiler");
        $__internal_4147e2752d25a67a20aef4385d25f513146c93976c9c91214739888640b7075a->enter($__internal_4147e2752d25a67a20aef4385d25f513146c93976c9c91214739888640b7075a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4147e2752d25a67a20aef4385d25f513146c93976c9c91214739888640b7075a->leave($__internal_4147e2752d25a67a20aef4385d25f513146c93976c9c91214739888640b7075a_prof);

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
