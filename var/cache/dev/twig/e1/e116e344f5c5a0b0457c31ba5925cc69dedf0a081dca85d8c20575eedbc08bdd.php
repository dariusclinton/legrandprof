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
        $__internal_c4c6a218f3491018409da77890701c99bb0bb2159ee7a27ac6f021d4fc72d5ec = $this->env->getExtension("native_profiler");
        $__internal_c4c6a218f3491018409da77890701c99bb0bb2159ee7a27ac6f021d4fc72d5ec->enter($__internal_c4c6a218f3491018409da77890701c99bb0bb2159ee7a27ac6f021d4fc72d5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c4c6a218f3491018409da77890701c99bb0bb2159ee7a27ac6f021d4fc72d5ec->leave($__internal_c4c6a218f3491018409da77890701c99bb0bb2159ee7a27ac6f021d4fc72d5ec_prof);

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
