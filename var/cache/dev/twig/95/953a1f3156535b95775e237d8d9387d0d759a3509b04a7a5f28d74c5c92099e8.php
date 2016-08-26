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
        $__internal_ff39b17c58a7144ea11f233207dc3f89511023346ceb51f6bcb35367e1164951 = $this->env->getExtension("native_profiler");
        $__internal_ff39b17c58a7144ea11f233207dc3f89511023346ceb51f6bcb35367e1164951->enter($__internal_ff39b17c58a7144ea11f233207dc3f89511023346ceb51f6bcb35367e1164951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ff39b17c58a7144ea11f233207dc3f89511023346ceb51f6bcb35367e1164951->leave($__internal_ff39b17c58a7144ea11f233207dc3f89511023346ceb51f6bcb35367e1164951_prof);

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
