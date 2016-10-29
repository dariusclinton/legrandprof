<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ced551c8f3be4a82b5eddb3547c7b8e5d873b2c93aa169d8840782fe5cd03729 extends Twig_Template
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
        $__internal_edb078546857555228def87e66edb416dd39b6a0874d06f39feb75a4c5d0712a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb078546857555228def87e66edb416dd39b6a0874d06f39feb75a4c5d0712a->enter($__internal_edb078546857555228def87e66edb416dd39b6a0874d06f39feb75a4c5d0712a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_edb078546857555228def87e66edb416dd39b6a0874d06f39feb75a4c5d0712a->leave($__internal_edb078546857555228def87e66edb416dd39b6a0874d06f39feb75a4c5d0712a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
