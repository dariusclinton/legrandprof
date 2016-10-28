<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a99b7b474dfce3f299e33971bb604c70cee0d73420631cd414e24fe891b567fa extends Twig_Template
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
        $__internal_f139d0d641b166aeba3ba784ead3ff045806e84fc0f7825d8c455d0c0c30dcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f139d0d641b166aeba3ba784ead3ff045806e84fc0f7825d8c455d0c0c30dcb4->enter($__internal_f139d0d641b166aeba3ba784ead3ff045806e84fc0f7825d8c455d0c0c30dcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f139d0d641b166aeba3ba784ead3ff045806e84fc0f7825d8c455d0c0c30dcb4->leave($__internal_f139d0d641b166aeba3ba784ead3ff045806e84fc0f7825d8c455d0c0c30dcb4_prof);

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
