<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5216facf3594ebc5cb0f4e8ef4719df3003e243fe0a0d0f1aa01f9b0a5c75584 extends Twig_Template
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
        $__internal_ef4f1d7865397c4261417ff28feca8dc11014e46766e7da4c61f28fdaea83ab1 = $this->env->getExtension("native_profiler");
        $__internal_ef4f1d7865397c4261417ff28feca8dc11014e46766e7da4c61f28fdaea83ab1->enter($__internal_ef4f1d7865397c4261417ff28feca8dc11014e46766e7da4c61f28fdaea83ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_ef4f1d7865397c4261417ff28feca8dc11014e46766e7da4c61f28fdaea83ab1->leave($__internal_ef4f1d7865397c4261417ff28feca8dc11014e46766e7da4c61f28fdaea83ab1_prof);

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
