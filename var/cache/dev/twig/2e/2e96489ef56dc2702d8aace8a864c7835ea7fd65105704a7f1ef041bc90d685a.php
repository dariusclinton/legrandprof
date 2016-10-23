<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_194c94d0657f02c08a6fc837ad7431878c377467054957a1d77e9c57447bccb1 extends Twig_Template
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
        $__internal_dbd6163b9100589ae60c5782c9ddd3a7c1a92cc818fa2b4df7b9ffd2ee869891 = $this->env->getExtension("native_profiler");
        $__internal_dbd6163b9100589ae60c5782c9ddd3a7c1a92cc818fa2b4df7b9ffd2ee869891->enter($__internal_dbd6163b9100589ae60c5782c9ddd3a7c1a92cc818fa2b4df7b9ffd2ee869891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dbd6163b9100589ae60c5782c9ddd3a7c1a92cc818fa2b4df7b9ffd2ee869891->leave($__internal_dbd6163b9100589ae60c5782c9ddd3a7c1a92cc818fa2b4df7b9ffd2ee869891_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
