<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d9179b78c97a5ff52afc8861ccae44918e832eaf0c1d4832bc57c8c124ed0b78 extends Twig_Template
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
        $__internal_74521298d98e4719bb9e08f5bfd10955f0729e3546727c2b7e960d5681f9ab90 = $this->env->getExtension("native_profiler");
        $__internal_74521298d98e4719bb9e08f5bfd10955f0729e3546727c2b7e960d5681f9ab90->enter($__internal_74521298d98e4719bb9e08f5bfd10955f0729e3546727c2b7e960d5681f9ab90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_74521298d98e4719bb9e08f5bfd10955f0729e3546727c2b7e960d5681f9ab90->leave($__internal_74521298d98e4719bb9e08f5bfd10955f0729e3546727c2b7e960d5681f9ab90_prof);

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
