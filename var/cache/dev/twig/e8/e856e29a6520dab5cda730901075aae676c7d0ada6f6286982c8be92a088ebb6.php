<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_94fff5fc503dbf6d836e1722c6f783265b87bcf439dc7c28f8bab68922b357aa extends Twig_Template
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
        $__internal_39278a17f8f4fcb4f94ca8e503201832d1a0a2ddd2adc70472d1ae81dcdab2dc = $this->env->getExtension("native_profiler");
        $__internal_39278a17f8f4fcb4f94ca8e503201832d1a0a2ddd2adc70472d1ae81dcdab2dc->enter($__internal_39278a17f8f4fcb4f94ca8e503201832d1a0a2ddd2adc70472d1ae81dcdab2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_39278a17f8f4fcb4f94ca8e503201832d1a0a2ddd2adc70472d1ae81dcdab2dc->leave($__internal_39278a17f8f4fcb4f94ca8e503201832d1a0a2ddd2adc70472d1ae81dcdab2dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
