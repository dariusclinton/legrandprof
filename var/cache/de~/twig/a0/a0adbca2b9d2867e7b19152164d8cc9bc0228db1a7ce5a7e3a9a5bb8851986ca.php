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
        $__internal_d0d81ec8f982b204d0a62ab746b574331da52abf18e33c0e2ebd514df2267b3c = $this->env->getExtension("native_profiler");
        $__internal_d0d81ec8f982b204d0a62ab746b574331da52abf18e33c0e2ebd514df2267b3c->enter($__internal_d0d81ec8f982b204d0a62ab746b574331da52abf18e33c0e2ebd514df2267b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d0d81ec8f982b204d0a62ab746b574331da52abf18e33c0e2ebd514df2267b3c->leave($__internal_d0d81ec8f982b204d0a62ab746b574331da52abf18e33c0e2ebd514df2267b3c_prof);

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
