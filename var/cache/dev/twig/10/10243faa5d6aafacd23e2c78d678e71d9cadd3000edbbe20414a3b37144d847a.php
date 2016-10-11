<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9a16dfb2c9efbf66e71cb79cf2729e6579ad0e455ab31a63cd750d4d5a9ea0a0 extends Twig_Template
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
        $__internal_ecdd674a3b154f35161626a17701283c1b3754e4e1abe09e0abf1898bea7804b = $this->env->getExtension("native_profiler");
        $__internal_ecdd674a3b154f35161626a17701283c1b3754e4e1abe09e0abf1898bea7804b->enter($__internal_ecdd674a3b154f35161626a17701283c1b3754e4e1abe09e0abf1898bea7804b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ecdd674a3b154f35161626a17701283c1b3754e4e1abe09e0abf1898bea7804b->leave($__internal_ecdd674a3b154f35161626a17701283c1b3754e4e1abe09e0abf1898bea7804b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
