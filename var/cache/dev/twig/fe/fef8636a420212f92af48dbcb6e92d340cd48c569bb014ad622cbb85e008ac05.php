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
        $__internal_a3c2a60c8007cd20805b14a6b1e3a091d77d58957ec58d87884948d0df3822cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c2a60c8007cd20805b14a6b1e3a091d77d58957ec58d87884948d0df3822cd->enter($__internal_a3c2a60c8007cd20805b14a6b1e3a091d77d58957ec58d87884948d0df3822cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_a3c2a60c8007cd20805b14a6b1e3a091d77d58957ec58d87884948d0df3822cd->leave($__internal_a3c2a60c8007cd20805b14a6b1e3a091d77d58957ec58d87884948d0df3822cd_prof);

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
