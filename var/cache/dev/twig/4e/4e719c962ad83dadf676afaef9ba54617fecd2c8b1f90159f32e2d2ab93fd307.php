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
        $__internal_6871ef52acfe5812fcca7d7f89e3b3e422966ab08bed1ca0b5abaf780034d2f3 = $this->env->getExtension("native_profiler");
        $__internal_6871ef52acfe5812fcca7d7f89e3b3e422966ab08bed1ca0b5abaf780034d2f3->enter($__internal_6871ef52acfe5812fcca7d7f89e3b3e422966ab08bed1ca0b5abaf780034d2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6871ef52acfe5812fcca7d7f89e3b3e422966ab08bed1ca0b5abaf780034d2f3->leave($__internal_6871ef52acfe5812fcca7d7f89e3b3e422966ab08bed1ca0b5abaf780034d2f3_prof);

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
