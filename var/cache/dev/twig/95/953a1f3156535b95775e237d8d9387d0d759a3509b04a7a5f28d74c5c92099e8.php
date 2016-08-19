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
        $__internal_6f92ece9c5563da9fa5325936fbbb1fc21968e1022a8f9287f9e311367d220cf = $this->env->getExtension("native_profiler");
        $__internal_6f92ece9c5563da9fa5325936fbbb1fc21968e1022a8f9287f9e311367d220cf->enter($__internal_6f92ece9c5563da9fa5325936fbbb1fc21968e1022a8f9287f9e311367d220cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6f92ece9c5563da9fa5325936fbbb1fc21968e1022a8f9287f9e311367d220cf->leave($__internal_6f92ece9c5563da9fa5325936fbbb1fc21968e1022a8f9287f9e311367d220cf_prof);

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
