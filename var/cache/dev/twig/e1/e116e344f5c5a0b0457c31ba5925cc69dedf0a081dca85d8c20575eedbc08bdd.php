<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_abcc1c4be4f7e3d5249e669a82ae7fc8094fdab8a2ef4365e55e180192226579 extends Twig_Template
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
        $__internal_1b1f6c1db9e492f9140a670c5623c54b970bf95600909529747fa9d78d864288 = $this->env->getExtension("native_profiler");
        $__internal_1b1f6c1db9e492f9140a670c5623c54b970bf95600909529747fa9d78d864288->enter($__internal_1b1f6c1db9e492f9140a670c5623c54b970bf95600909529747fa9d78d864288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1b1f6c1db9e492f9140a670c5623c54b970bf95600909529747fa9d78d864288->leave($__internal_1b1f6c1db9e492f9140a670c5623c54b970bf95600909529747fa9d78d864288_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
