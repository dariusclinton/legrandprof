<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f0d7d9974dc9c1dd2bb1a437be5b6d337d48df513270b96d36249c18b2bc9b4e extends Twig_Template
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
        $__internal_46fd352e0e076e4ad20d09464492fc790ff783777ecd42df5c2b7862528a0350 = $this->env->getExtension("native_profiler");
        $__internal_46fd352e0e076e4ad20d09464492fc790ff783777ecd42df5c2b7862528a0350->enter($__internal_46fd352e0e076e4ad20d09464492fc790ff783777ecd42df5c2b7862528a0350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_46fd352e0e076e4ad20d09464492fc790ff783777ecd42df5c2b7862528a0350->leave($__internal_46fd352e0e076e4ad20d09464492fc790ff783777ecd42df5c2b7862528a0350_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
