<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b349bf41becf7a7064052141bc7804b80f68f733b44565ff1669784f1e7a8e5d extends Twig_Template
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
        $__internal_ddfa9e58aad521678d71d76a97f88f7de33dd67e7a1bef9f7408184eb2351ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfa9e58aad521678d71d76a97f88f7de33dd67e7a1bef9f7408184eb2351ded->enter($__internal_ddfa9e58aad521678d71d76a97f88f7de33dd67e7a1bef9f7408184eb2351ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ddfa9e58aad521678d71d76a97f88f7de33dd67e7a1bef9f7408184eb2351ded->leave($__internal_ddfa9e58aad521678d71d76a97f88f7de33dd67e7a1bef9f7408184eb2351ded_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
