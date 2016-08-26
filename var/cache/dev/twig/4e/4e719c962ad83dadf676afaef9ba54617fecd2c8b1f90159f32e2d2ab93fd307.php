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
        $__internal_db2e84dc4b6800cf222d68b89648fa0df0d32b3d1fbde211802288269a2e6f36 = $this->env->getExtension("native_profiler");
        $__internal_db2e84dc4b6800cf222d68b89648fa0df0d32b3d1fbde211802288269a2e6f36->enter($__internal_db2e84dc4b6800cf222d68b89648fa0df0d32b3d1fbde211802288269a2e6f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_db2e84dc4b6800cf222d68b89648fa0df0d32b3d1fbde211802288269a2e6f36->leave($__internal_db2e84dc4b6800cf222d68b89648fa0df0d32b3d1fbde211802288269a2e6f36_prof);

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
